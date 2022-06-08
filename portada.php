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
              <a href="inicio.php"> Inicio </a>
            </li>
          </ul>
        </nav>
        <div id= "buscador" class="bloque">
          <h3> Buscar</h3>
          <form action= "productos.php" method="POST">
            <input type= "text" name= "busqueda" />
            <input type= "submit" value= "Buscar" />
          </form>

        <!--/Productos -->
        <nav id="productos">
          <h1> Productos </h1>
          <ul>
            <li>
              <a href="televisores.php"> Televisores </a>
            </li>
            <li>
              <a href="celulares.php"> Celulares </a>
            </li>
            <li>
              <a href="laptops.php"> Laptops </a>
            </li>
            <li>
              <a href="accesorios.php"> Accesorios </a>
            </li>
          </ul>
        </nav>

        <div class="clearfix"></div>

      </header>
  </body>