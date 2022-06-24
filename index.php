<?php require_once 'conexion.php';
      require_once 'iniciosesion.php';
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

<?php require_once 'index.php';?>
      <!--Cabecera -->
      <header id="cabecera">
        <div id="logo">
          <a href="index.php">
            <h1> ElectroShop </h1>
          </a>
        </div>
        <!--/Menu -->
        <nav id="menu">
        <br/>
        <br/>
          <ul>
            <li>
              <a href="sesion.php"> Iniciar Sesión </a>
            </li>
            <li>
              <a href="index.php"> Inicio </a>
            </li>
          </ul>
        </nav>

        <!--/Productos -->
        <nav id="productos">
          <h1>  </h1>
          <div class= "row">
          <div class= "col s8 offset-s2" >
            <table style="margin: 0 auto;">
              <thead>
                <tr align= 'center'>
                  <th> <a href="Apple.php?idusu=<?php echo $idusu; ?>"> Apple </a> </th>
                  <th> <a href="Lenovo.php?idusu=<?php echo $idusu; ?>">Lenovo </a> </th>
                </tr>
              </thead>
              <tbody>
                <tr align= 'center'>
                  <td><a href="Apple.php?idusu=<?php echo $idusu; ?>"> <img src="./imagenes/apple.png" width="250px" height="250px"/></a></td>
                  <td><a href="Lenovo.php?idusu=<?php echo $idusu; ?>"><img src="./imagenes/lenovo.png" width="400px" height="90px"/></a></td>
                </tr>
              </tbody>
            </table>

            <table style="margin: 0 auto;">
              <thead>
                <tr align= 'center'>
                  <th> <a href="Xiaomi.php?idusu=<?php echo $idusu; ?>"> Xiaomi </a> </th>
                  <th> <a href="HP.php?idusu=<?php echo $idusu; ?>"> HP </a> </th>
                </tr>
              </thead>
              <tbody>
                <tr align= 'center'>
                  <td><a href="Xiaomi.php?idusu=<?php echo $idusu; ?>"> <img src="./imagenes/xiaomi.png" width="300px" height="200px"/></a></td>
                  <td><a href="HP.php?idusu=<?php echo $idusu; ?>"><img src="./imagenes/hp.png" width="300px" height="200px"/></a></td>
                </tr>
              </tbody>
            </table>

        <div class="clearfix"></div>

      </header>
  </body>
