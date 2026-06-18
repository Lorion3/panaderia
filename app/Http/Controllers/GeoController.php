<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class GeoController extends Controller
{
    /**
     * Obtener ubicación del usuario por IP
     */
    private function getUserLocation($ip = null)
    {
        $ip = $ip ?? request()->ip();
        
        // Si es IP local, usar ubicación por defecto
        if ($this->isLocalIp($ip)) {
            return $this->getDefaultLocation();
        }
        
        // Intentar obtener de caché (1 hora)
        $cacheKey = 'user_location_' . md5($ip);
        return Cache::remember($cacheKey, 3600, function () use ($ip) {
            return $this->getLocationFromIP($ip);
        });
    }
    
    /**
     * Obtener ubicación desde IP
     */
    private function getLocationFromIP($ip)
    {
        // Intentar con ip-api.com (gratuito)
        $location = $this->getFromIpApi($ip);
        
        if ($location) {
            return $location;
        }
        
        // Fallback con ubicación por defecto
        return $this->getDefaultLocation();
    }
    
    /**
     * Proveedor: ip-api.com
     */
    private function getFromIpApi($ip)
    {
        try {
            $response = Http::timeout(5)->get("http://ip-api.com/json/{$ip}?fields=status,message,country,regionName,city,lat,lon,timezone");
            
            if ($response->successful()) {
                $data = $response->json();
                
                if (isset($data['status']) && $data['status'] === 'success') {
                    return [
                        'latitude' => $data['lat'],
                        'longitude' => $data['lon'],
                        'city' => $data['city'] ?? 'Zapopan',
                        'country' => $data['country'] ?? 'México',
                        'region' => $data['regionName'] ?? 'Jalisco',
                        'timezone' => $data['timezone'] ?? 'America/Mexico_City',
                    ];
                }
            }
        } catch (\Exception $e) {
            Log::warning('Error obteniendo ubicación por IP: ' . $e->getMessage());
        }
        
        return null;
    }
    
    /**
     * Ubicación por defecto (Zapopan, Jalisco)
     */
    private function getDefaultLocation()
    {
        return [
            'latitude' => 20.6597,
            'longitude' => -103.3496,
            'city' => 'Zapopan',
            'country' => 'México',
            'region' => 'Jalisco',
            'timezone' => 'America/Mexico_City',
        ];
    }
    
    /**
     * Verificar si es IP local
     */
    private function isLocalIp($ip)
    {
        return in_array($ip, ['127.0.0.1', '::1', 'localhost']) || 
               strpos($ip, '192.168.') === 0 || 
               strpos($ip, '10.') === 0 ||
               strpos($ip, '172.16.') === 0 ||
               strpos($ip, '172.17.') === 0;
    }
    
    /**
     * API 1: Buscar dirección con MapQuest
     * Ahora usa la ubicación del usuario si no se proporciona dirección
     */
    public function buscar(Request $request)
    {
        // Si no se proporciona dirección, usar la ciudad del usuario
        $direccion = $request->input('direccion');
        
        if (!$direccion) {
            $location = $this->getUserLocation();
            $direccion = $location['city'] . ', ' . $location['region'];
        }
        
        $response = Http::get('https://www.mapquestapi.com/geocoding/v1/address', [
            'key' => config('services.mapquest.key'),
            'location' => $direccion
        ]);
        
        // Agregar información de ubicación del usuario a la respuesta
        $data = $response->json();
        $data['user_location'] = $this->getUserLocation();
        
        return $data;
    }
    
    /**
     * API 2: Clima con OpenWeather
     * Ahora usa la ubicación del usuario si no se proporciona ciudad
     */
    public function clima(Request $request)
    {
        $ciudad = $request->input('ciudad');
        
        if ($ciudad) {
            // Si se proporciona ciudad, buscar por ciudad
            $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
                'q' => $ciudad,
                'appid' => config('services.openweathermap.key'),
                'units' => 'metric'
            ]);
        } else {
            // Si no, usar ubicación del usuario por coordenadas
            $location = $this->getUserLocation();
            
            $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
                'lat' => $location['latitude'],
                'lon' => $location['longitude'],
                'appid' => config('services.openweathermap.key'),
                'units' => 'metric'
            ]);
        }
        
        // Agregar información de ubicación del usuario a la respuesta
        $data = $response->json();
        $data['user_location'] = $this->getUserLocation();
        
        return $data;
    }
    
    /**
     * API 3: Tipo de cambio con ExchangeRate
     * Ahora detecta la moneda local del usuario
     */
    public function tipodecambio(Request $request)
    {
        // Obtener ubicación del usuario
        $location = $this->getUserLocation();
        
        // Determinar moneda base según país
        $baseCurrency = $this->getCurrencyFromCountry($location['country']);
        
        // Si se especifica otra moneda en la request
        $baseCurrency = $request->input('base', $baseCurrency);
        $targetCurrency = $request->input('target', 'USD');
        
        // Si la moneda base es USD, usar USD como base
        if ($baseCurrency === 'USD') {
            $response = Http::get('https://api.exchangerate-api.com/v4/latest/USD');
        } else {
            // Intentar con la moneda local
            $response = Http::get("https://api.exchangerate-api.com/v4/latest/{$baseCurrency}");
        }
        
        $data = $response->json();
        
        // Agregar información de ubicación y moneda detectada
        $data['user_location'] = $location;
        $data['detected_currency'] = $baseCurrency;
        $data['user_country'] = $location['country'];
        
        // Si hay tasa de cambio a la moneda objetivo, agregarla
        if (isset($data['rates'][$targetCurrency])) {
            $data['target_rate'] = $data['rates'][$targetCurrency];
            $data['target_currency'] = $targetCurrency;
        }
        
        return $data;
    }
    
    /**
     * Obtener moneda según el país
     */
    private function getCurrencyFromCountry($country)
    {
        $currencyMap = [
            'México' => 'MXN',
            'Estados Unidos' => 'USD',
            'Canadá' => 'CAD',
            'Reino Unido' => 'GBP',
            'España' => 'EUR',
            'Argentina' => 'ARS',
            'Colombia' => 'COP',
            'Chile' => 'CLP',
            'Perú' => 'PEN',
            'Brasil' => 'BRL',
            'Alemania' => 'EUR',
            'Francia' => 'EUR',
            'Italia' => 'EUR',
            'Japón' => 'JPY',
            'China' => 'CNY',
            'Australia' => 'AUD',
        ];
        
        return $currencyMap[$country] ?? 'USD';
    }
    
    /**
     * Método adicional: Obtener ubicación del usuario
     */
    public function ubicacion(Request $request)
    {
        $location = $this->getUserLocation();
        
        return response()->json([
            'success' => true,
            'data' => $location,
            'ip' => $request->ip(),
            'is_local' => $this->isLocalIp($request->ip()),
        ]);
    }
    
    /**
     * Método adicional: Resetear caché de ubicación
     */
    public function resetUbicacion(Request $request)
    {
        $ip = $request->ip();
        $cacheKey = 'user_location_' . md5($ip);
        Cache::forget($cacheKey);
        
        return response()->json([
            'success' => true,
            'message' => 'Caché de ubicación eliminado'
        ]);
    }
    
    /**
     * Obtener todas las APIs en una sola llamada
     */
    public function todo(Request $request)
    {
        // Obtener ubicación del usuario
        $location = $this->getUserLocation();
        
        // 1. Obtener clima
        $weatherResponse = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            'lat' => $location['latitude'],
            'lon' => $location['longitude'],
            'appid' => config('services.openweathermap.key'),
            'units' => 'metric'
        ]);
        
        // 2. Obtener tipo de cambio
        $currency = $this->getCurrencyFromCountry($location['country']);
        $exchangeResponse = Http::get("https://api.exchangerate-api.com/v4/latest/{$currency}");
        
        // 3. Obtener geocodificación
        $direccion = $location['city'] . ', ' . $location['region'];
        $geoResponse = Http::get('https://www.mapquestapi.com/geocoding/v1/address', [
            'key' => config('services.mapquest.key'),
            'location' => $direccion
        ]);
        
        return response()->json([
            'user_location' => $location,
            'weather' => $weatherResponse->json(),
            'exchange_rate' => $exchangeResponse->json(),
            'geocoding' => $geoResponse->json(),
            'timestamp' => now()->toDateTimeString(),
        ]);
    }
     public function footerData(Request $request)
    {
        $location = $this->getUserLocation();
        
        // Obtener clima
        $weather = null;
        try {
            $weatherResponse = Http::timeout(3)->get('https://api.openweathermap.org/data/2.5/weather', [
                'lat' => $location['latitude'],
                'lon' => $location['longitude'],
                'appid' => config('services.openweathermap.key'),
                'units' => 'metric'
            ]);
            
            if ($weatherResponse->successful()) {
                $weatherData = $weatherResponse->json();
                $weather = [
                    'temp' => round($weatherData['main']['temp']),
                    'description' => $weatherData['weather'][0]['description'],
                    'icon' => $weatherData['weather'][0]['icon'],
                    'city' => $weatherData['name'] ?? $location['city'],
                ];
            }
        } catch (\Exception $e) {
            Log::warning('Error obteniendo clima para footer: ' . $e->getMessage());
        }
        
        // Obtener tipo de cambio
        $exchange = null;
        try {
            $currency = $this->getCurrencyFromCountry($location['country']);
            $exchangeResponse = Http::timeout(3)->get("https://api.exchangerate-api.com/v4/latest/{$currency}");
            
            if ($exchangeResponse->successful()) {
                $exchangeData = $exchangeResponse->json();
                $exchange = [
                    'base' => $currency,
                    'rates' => [
                        'USD' => $exchangeData['rates']['USD'] ?? null,
                        'EUR' => $exchangeData['rates']['EUR'] ?? null,
                    ]
                ];
            }
        } catch (\Exception $e) {
            Log::warning('Error obteniendo tipo de cambio para footer: ' . $e->getMessage());
        }
        
        return response()->json([
            'location' => $location,
            'weather' => $weather,
            'exchange' => $exchange,
        ]);
    }

}