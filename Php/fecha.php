<?php
// Ejercicio 3: Programa que muestra la fecha actual

// Función para obtener la fecha actual
function obtenerFechaActual() {
    return date("Y-m-d"); //retorna la fecha en formato yy/mm/dd
}

// Obtener la fecha actual
$fecha_actual = obtenerFechaActual();

// Mostrar la fecha actual
echo "La fecha actual es: $fecha_actual";
?>
