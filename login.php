<?php 
//Iniciar la sesion  y conexion BD
require_once 'conexion.php';

// Recoger datos del formulario
if (isset($_POST)){
  $email=$_POST['email'];
  $password=$_POST['password'];
  //Comprobar la contraseña
  if (password_verify($password,));
}
?>