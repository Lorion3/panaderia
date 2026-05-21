<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<header>
    <h1>Encabezado</h1>
</header>

<nav>
    <ul>
    <li><a href="/">Inicio</a></li>
    <li><a href="/administrador">Administradores</a></li>
    <li><a href="/cliente">Clientes</a></li>
    <li><a href="/pedido">Pedido</a></li>
    <li><a href="/producto">Producto</a></li>
    <li><a href="/proveedor">Proveedor</a></li>
   
</ul>
</nav>

<main>
    @yield('dinamico')
</main>

<footer>
    <h3>pie de pagina</h3>
</footer>

</body>
</html>