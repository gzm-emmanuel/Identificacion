<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 50px;
            color: #333;
        }
        .menu-caja {
            max-width: 450px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h2 {
            margin-top: 0;
        }
        .btn-enlace {
            display: block;
            text-decoration: none;
            background-color: #0056b3;
            color: white;
            padding: 12px;
            margin: 12px 0;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn-enlace:hover {
            background-color: #004494;
        }
        .btn-verde {
            background-color: #28a745;
        }
        .btn-verde:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="menu-caja">
        <h2>Menu</h2>
        <p>Selecciona un ejercicio</p>

        <a class="btn-enlace" href="index1.php">Generador de Claves</a>
        <a class="btn-enlace btn-verde" href="index2.php">Generador de Usuarios</a>
    </div>
</body>
</html>