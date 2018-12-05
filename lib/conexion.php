<?php
$conexion = mysqli_connect("localhost", "testbuild", "JRK441e22", "test");
mysqli_query ($conexion,"SET NAMES 'utf8'");
$pathRecursos='http://www.webentorn.com/tareas';
$path='http://www.webentorn.com/tareas';
if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//creo variables para la conexion por objetos en funciones.php
$C_host = 'localhost';
$C_nombre = 'testbuild';
$C_pass = 'JRK441e22';
$C_database = 'test';






?>