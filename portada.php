<?php require_once 'conexion.php';?>

<!-- Inicio de la pg -->

<!DOCTYPE HTML>
<HTML lang="es">
  <head>
    <meta charset="utf-8" />
    <!-- Agregar titulo -->
    <title> ElectroShop </title>
    <link rel="stylesheet" type="text/css" href="estilos.css"
  </head>
  <body>

<?php require_once 'portada.php';?>
      <!--Cabecera -->
      <header id="cabecera">
        <div id="logo">
          <a href="portada.php">
            <h1> ElectroShop </h1>
          </a>
        </div>
        <!--/Menu -->
        <nav id="menu">
          <ul>
            <li>
              <a href="carrito.php"> Carrito de compras </a>
            </li>
            <li>
              <a href="sesion.php"> Iniciar Sesión </a>
            </li>
            <li>
              <a href="buscar.php"> Buscar </a>
            </li>
          </ul>
        </nav>

        <div class="clearfix"></div>

      </header>
  </body>