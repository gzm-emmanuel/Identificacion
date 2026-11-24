<?php

function limpiarNombre($nombre) {
    $nombreLimpio = trim($nombre);
    return str_replace(' ', '', $nombreLimpio);
}
function convertirMinusculas($texto) {
    return strtolower($texto);
}
function obtenerInstitucion($institucion) {
    $instLimpia = trim($institucion);
    return strtolower(substr($instLimpia, 0, 2));
}
function obtenerAnioIngreso($anio) {
    return substr(trim($anio), -2);
}
function generarUsuario($nombre, $institucion, $anio) {
    $nombreSinEspacios = limpiarNombre($nombre);
    $nombreMinuscula = convertirMinusculas($nombreSinEspacios);
    $instDosLetras = obtenerInstitucion($institucion);
    $anioDosDigitos = obtenerAnioIngreso($anio);

    return $nombreMinuscula . $instDosLetras . $anioDosDigitos;
}

?>