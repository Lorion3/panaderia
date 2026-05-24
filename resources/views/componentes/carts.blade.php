<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas Panadería</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h2 {
            color: #1e3a8a;
            margin-top: 30px;
            margin-bottom: 15px;
            border-left: 5px solid #1e3a8a;
            padding-left: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
            background-color: white;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th {
            background-color: #1e3a8a;
            color: white;
            padding: 12px;
            text-align: left;
            font-weight: bold;
        }
        td {
            padding: 10px 12px;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #f1f5f9;
        }
        .table-container {
            overflow-x: auto;
        }
    </style>
</head>
<body>
<div class="container">
    <h1> Panel de Administración - Panadería</h1>

    <!-- Tabla de Clientes -->
    <h2> Clientes</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>apellido_paterno</th>
                    <th>apellido_materno</th>
                    <th>teléfono</th>
                    <th>correo</th>
                    <th>estatus</th>
                    <th>dirección</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juan</td>
                    <td>Pérez</td>
                    <td>López</td>
                    <td>3311111111</td>
                    <td>juan@gmail.com</td>
                    <td>activo</td>
                    <td>Calle Hidalgo 10</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>María</td>
                    <td>García</td>
                    <td>Rodríguez</td>
                    <td>3322222222</td>
                    <td>maria@gmail.com</td>
                    <td>activo</td>
                    <td>Av. Reforma 234</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Carlos</td>
                    <td>López</td>
                    <td>Martínez</td>
                    <td>3333333333</td>
                    <td>carlos@gmail.com</td>
                    <td>inactivo</td>
                    <td>Calle Juárez 456</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Tabla de Productos -->
    <h2> Productos</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>categoría</th>
                    <th>precio</th>
                    <th>existencia</th>
                    <th>estatus</th>
                    <th>descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Pan Blanco</td>
                    <td>Pan</td>
                    <td>$25.50</td>
                    <td>30</td>
                    <td>activo</td>
                    <td>Pan blanco tradicional</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Concha</td>
                    <td>Pan dulce</td>
                    <td>$18.00</td>
                    <td>40</td>
                    <td>activo</td>
                    <td>Concha de vainilla</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Pastel Chocolate</td>
                    <td>Pastel</td>
                    <td>$350.00</td>
                    <td>5</td>
                    <td>activo</td>
                    <td>Pastel de chocolate</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Tabla de Proveedores -->
    <h2> Proveedores</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>contacto</th>
                    <th>empresa</th>
                    <th>correo</th>
                    <th>estado</th>
                    <th>ciudad</th>
                    <th>teléfono</th>
                 </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Carlos Ramírez</td>
                    <td>Harinas SA</td>
                    <td>carlos@harinas.com</td>
                    <td>Jalisco</td>
                    <td>Guadalajara</td>
                    <td>3312345678</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Torres</td>
                    <td>Lácteos del Valle</td>
                    <td>ana@lacteos.com</td>
                    <td>Jalisco</td>
                    <td>Zapopan</td>
                    <td>3323456789</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Luis Mendoza</td>
                    <td>Distribuidora de Harinas</td>
                    <td>luis@harinas.com</td>
                    <td>Jalisco</td>
                    <td>Tlaquepaque</td>
                    <td>3334567890</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>