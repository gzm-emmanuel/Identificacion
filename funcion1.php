<?php
function obtenerIniciales($nombre) {
    $nombreLimpio = trim($nombre);
    return strtoupper(substr($nombreLimpio, 0, 3));
}
function obtenerAnio($fecha) {
    $anio = substr($fecha, 0, 4);
    return substr($anio, -2);
}
function obtenerMesDia($fecha) {
    $partes = explode('-', $fecha);
    return $partes[1] . $partes[2];
}
function generarClave($nombre, $fecha) {
    $iniciales = obtenerIniciales($nombre);
    $anioDosDigitos = obtenerAnio($fecha);
    $mesDia = obtenerMesDia($fecha);
    
    return $iniciales . $anioDosDigitos . $mesDia;
}

?>