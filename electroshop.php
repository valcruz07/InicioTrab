<?php

include('db.php');

$EMAIL=$_POST['usuario'];
$PASSWORD=$_POST['password'];

$consulta = "SELECT* FROM cliente where CI_Correo = '$EMAIL' and CI_Contraseña = '$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);


if($filas && isset($_POST['usuario']) && !empty($_POST['usuario']) && filter_var($EMAIL, FILTER_VALIDATE_EMAIL) ){
    header("location:home.html");
}else{ 
    
    include("alertas.html");
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>