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
          <form action= "buscador.php" method="POST">
            <input type= "text" name= "busqueda" />
            <input type= "submit" value= "Buscar" />
          </form>

        <!--/Productos -->
        <nav id="productos">
          <h1> Productos </h1>
          <div class= "row">
          <div class= "col s8 offset-s2" >
            <table>
              <thead>
                <tr>
                  <th> <a href="televisores.php"> Televisores </a> </th>
                  <th> <a href="celulares.php"> Celulares </a> </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> Foto televisor</td>
                  <td> Foto celular</td>
                </tr>
              </tbody>
            </table>

            <table>
              <thead>
                <tr>
                  <th> <a href="laptops.php"> Laptops </a> </th>
                  <th> <a href="accesorios.php"> Accesorios </a> </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> Foto laptop</td>
                  <td> foto accesorios</td>
                </tr>
              </tbody>
            </table>

        <div class="clearfix"></div>

      </header>
  </body>