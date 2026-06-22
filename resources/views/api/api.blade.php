
<P>API Data:</P>
<ul>
    <li><a href="/api/empleados">Empleados</a></li>
    <li><a href="/api/productos">Productos</a></li>
    <li><a href="/api/proveedores">Proveedores</a></li>
    <li><a href="/api/ventas">Ventas</a></li>
    <li><a href="/api/pedidos">Pedidos</a></li>
    <li><a href="/api/clientes">Clientes</a></li>   
    <li><a href="/api/geolocalizacion">Geolocalización</a></li>
     @isset($response)
    @foreach ($response['results'] as $inicio )
        <p>Ubicación: {{ $resultado['locations'][0]['street'] }}</p>
        <p>Latitud: {{ $resultado['locations'][0]['latLng']['lat'] }}</p>
        <p>Longitud: {{ $resultado['locations'][0]['latLng']['lng'] }}</p>
    @endforeach
@endisset
</ul>
