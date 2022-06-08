<?php
// Definir variables
$server='localhost';
$username='root';
$password='';
$data='electroshop';
//Conexion a la base de datos
$db= mysqli_connect($server,$username,$password,$data);

//Iniciar sesión
session_start();
?>
