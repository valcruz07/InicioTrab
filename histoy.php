<?php require_once 'conexion.php';
      require_once 'iniciosesion.php';
//Llamamos a los pedidos
?>

<!-- Inicio de la pg -->

<!DOCTYPE HTML>
<HTML lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name= "viewport" content="width=device-width, initial-scale=1"/>
    <!-- Agregar titulo -->
    <title> ElectroShop </title>
    <link rel="stylesheet" type="text/css" href="estilos.css"
  </head>
  <body style="background-color:#08E7EE;">

      <!--Cabecera -->
      <header id="cabecera">
        <div id="logo">
          <a href="historial.php">
            <h1> ElectroShop </h1>
          </a>
        </div>
        <!--/Menu -->
        <br/>
        <br/>
        <nav id="menu">
          <ul>
            <li>
              <a href="cerrar.php"> Cerrar Sesión </a>
            </li>
            <li>
              <a href="historial.php"> Historial </a>
            </li>
            <li>
              <a href="cart.php?idusu=<?php echo $idusu; ?>"> Carrito de compras </a>
            </li>
            <li>
              <a href="portada2.php?idusu=<?php echo $idusu; ?>"> <?php $name = $row['CI_Nombre']; echo $name; ?> </a>

            </li>
          </ul>
        </nav>
        <div id= "buscador" class="bloque" >
          <h3> </h3>
          <center>
          <form action= "buscador.php" method="POST">
            <input type= "text" name= "busqueda" />
            <input type= "submit" value= "Buscar" />
          </form>
          </center>
