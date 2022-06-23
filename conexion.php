<?php
// Definir variables
$server='localhost';
$username='trabajo_sin';
$password='trabajo_sin';
$data='TrabajoSin';
//Conexion a la base de datos
$db= mysqli_connect($server,$username,$password,$data);

//Iniciar sesión
session_start();
?>
