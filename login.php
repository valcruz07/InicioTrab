<?php 
//Iniciar la sesion  y conexion BD
require_once 'conexion.php';

// Recoger datos del formulario
if (isset($_POST)){
  $email=$_POST['usuario'];
  $password=md5($_POST['password']);
  $sql = "SELECT * from cliente where CI_Correo = '".$email."'";
  echo $sql;
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result);
  if ($password == $row['CI_Contraseña']) {
    header ('location:portada2.php');
  } else {
    header ('location:sesion.php');
  }

}
?>