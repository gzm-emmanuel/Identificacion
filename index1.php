<?php
require_once("funcion1.php");

$nombre = "";
$fecha = "";
$claveGenerada = "";
$enviado = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"] ?? "";
    $fecha = $_POST["fecha"] ?? "";
    $claveGenerada = generarClave($nombre, $fecha);
    $enviado = true;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generar Claves</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; margin: 40px; color: #333; }
        .contenedor { max-width: 450px; margin: auto; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 8px; margin: 8px 0 15px 0; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { width: 100%; padding: 10px; background-color: #0056b3; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #004494; }
        .resultado { margin-top: 20px; padding: 12px; background: #eef2f7; border-left: 4px solid #0056b3; }
    </style>
</head>
<body>
<div class="contenedor">
    <h2>Generador de Claves</h2>
    <form method="POST">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($nombre) ?>" required>

        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" id="fecha" name="fecha" value="<?= htmlspecialchars($fecha) ?>" required>

        <button type="submit">Generar Clave</button>
    </form>

    <?php if ($enviado): ?>
        <div class="resultado">
            <p><strong>Clave generada:</strong> <code><?= htmlspecialchars($claveGenerada) ?></code></p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>