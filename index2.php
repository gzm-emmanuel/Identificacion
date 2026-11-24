<?php
require_once("funcion2.php");

$nombre = "";
$institucion = "";
$anio = "";
$usuarioGenerado = "";
$enviado = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"] ?? "";
    $institucion = $_POST["institucion"] ?? "";
    $anio = $_POST["anio"] ?? "";
    $usuarioGenerado = generarUsuario($nombre, $institucion, $anio);
    $enviado = true;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de Usuarios Escolares</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; margin: 40px; color: #333; }
        .contenedor { max-width: 450px; margin: auto; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 8px; margin: 8px 0 15px 0; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #218838; }
        .resultado { margin-top: 20px; padding: 12px; background: #e8f5e9; border-left: 4px solid #28a745; }
    </style>
</head>
<body>
<div class="contenedor">
    <h2>Plataforma Educativa - Usuario</h2>
    <form method="POST">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($nombre) ?>" required placeholder="">

        <label for="institucion">Nombre de la Escuela:</label>
        <input type="text" id="institucion" name="institucion" value="<?= htmlspecialchars($institucion) ?>" required placeholder="">

        <label for="anio">Año de ingreso:</label>
        <input type="number" id="anio" name="anio" value="<?= htmlspecialchars($anio) ?>" required placeholder="">

        <button type="submit">Generar Nombre de Usuario</button>
    </form>

    <?php if ($enviado): ?>
        <div class="resultado">
            <p><strong>Usuario generado:</strong> <code><?= htmlspecialchars($usuarioGenerado) ?></code></p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>