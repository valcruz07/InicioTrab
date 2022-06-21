<?php require_once 'conexion.php';?>

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
          <h3> </h3>
          <form action= "buscador.php" method="POST">
            <input type= "text" name= "busqueda" />
            <input type= "submit" value= "Buscar" />
          </form>

        <!--/Productos -->
        <nav id="productos">
          <h1>  </h1>
          <div class= "row">
          <div class= "col s8 offset-s2" >
            <table>
              <thead>
                <tr align= 'center'>
                  <th> <a href="apple.php"> Apple </a> </th>
                  <th> <a href="lenovo.php">Lenovo </a> </th>
                </tr>
              </thead>
              <tbody>
                <tr align= 'center'>
                  <td> <img scr="imagenes\apple.png" width="500px" height="300px"> </td>
                  <td> <img scr="imagenes\lenovo.png" alt="lenovo" width='500px' height='300px'> </td>
                </tr>
              </tbody>
            </table>

            <table>
              <thead>
                <tr align= 'center'>
                  <th> <a href="xiaomi.php"> Xiaomi </a> </th>
                  <th> <a href="hp.php"> HP </a> </th>
                </tr>
              </thead>
              <tbody>
                <tr align= 'center'>
                  <td><img scr="imagenes\xiaomi.png" width="500px" height="300px"/></td>
                  <td><img scr="imagenes\hp.png" width="535px" height="300px"/></td>
                </tr>
              </tbody>
            </table>

        <div class="clearfix"></div>

      </header>
  </body>