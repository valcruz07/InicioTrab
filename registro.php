<?php
session_start();
if(isset($POST['submit'])) {

    $nombre=(isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $Apellido=(isset($_POST['Apellido']) ? $_POST['Apellido'] : false;
    $email=(isset($_POST['email']) ? $_POST['email'] : false;
    $password=(isset($_POST['password']) ? $_POST['password'] : false;

  //Validamos
  //Array de errores
  $errores= array();

  if (!empty ($nombre) && !is_numeric($nombre) && !preg_match("/(0-9)/",$nombre)){
    $nombre_validar= true;
  }else{
    $nombre_validar= false;
    $errores['nombre']= "Campo ingresado incorrectamente";
  }

  if (!empty ($Apellido) && !is_numeric($Apellido) && !preg_match("/(0-9)/",$Apellido)){
    $Apellido_validar= true;
  }else{
    $Apellido_validar= false;
    $errores['Apellido']= "Campo ingresado incorrectamente";
  }

  if (!empty ($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_validar= true;
  }else{
    $email_validar= false;
    $errores['email']= "Campo ingresado incorrectamente";
  }

  IF(!empty ($password)){
    $password_validar= true;
  }else{
    $password_validar= false;
    $errores['password']= "La contraseña esta vacia";
  }

  $guardar_usuario= false;

  if (count($errores)==0){
    $guardar_usuario= true;
  }else{
    $_SESSION['errores']=$errores;
    header('Location: portada.php');

  }

}
?>