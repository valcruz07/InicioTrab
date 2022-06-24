<?php require_once 'db.php';
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

<?php require_once 'eleccionlocal.php';?>
      <!--Cabecera -->
      <header id="cabecera">
        <div id="logo">
          <a href="eleccionlocal.php">
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
              <a href="carrito.php"> Carrito de compras </a>
            </li>
            <li>
              <a href="sesion.php"> VALERIAAAAAAAAAA </a>

            </li>
            <li>
              <a href="portada.php"> Inicio </a>
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

<!----------CREACION DE LA TABLA----------->

<table class="table">
  <thead>
    <tr>
      <th scope="col">Local</th>
      <th scope="col">Dirección</th>
      <th scope="col">Codigo Postal</th>

      <!-- EN LA COLUMNA DE ELEGIR SE DEBE DE CREAR EL BOTON PARA SELECCIONAR EL LOCAL-->
      
      <th scope="col">Elegir</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Cosmopolito</th>
      <td>Av. Pacherres 145</td>
      <td>20009</td>

      <!-- EN ESTE ULTIMO SE DEBE DE COLOCAR EL BOTÓN PARA SELECCIONAR -->
      
      <td>BTON</td>
    </tr>
    <tr>
      <th scope="row">Wandito</th>
      <td>C. los tallanes 169 Urb. El Chipe</td>
      <td>3000</td>

      <!-- EN ESTE ULTIMO SE DEBE DE COLOCAR EL BOTÓN PARA SELECCIONAR -->

      <td>BTON</td>
    </tr>
    <tr>
      <th scope="row">Coolwax</th>
      <td>C. los geronimos 350</td>
      <td>20004</td>
      
       <!-- EN ESTE ULTIMO SE DEBE DE COLOCAR EL BOTÓN PARA SELECCIONAR -->
      
       <td>BTON</td>
    </tr>
    <tr>
      <th scope="row">Perritec</th>
      <td>C. los perritos bandidos</td>
      <td>20001</td>

      <!-- EN ESTE ULTIMO SE DEBE DE COLOCAR EL BOTÓN PARA SELECCIONAR -->
      
      <td>BTON</td>
    </tr>
    <tr>
      <th scope="row">Tecfuture</th>
      <td>C. los futuristas 540</td>
      <td>20007</td>

      <!-- EN ESTE ULTIMO SE DEBE DE COLOCAR EL BOTÓN PARA SELECCIONAR -->
      
      <td>BTON</td>
    </tr>
    <tr>
      <th scope="row">Pololitosmart</th>
      <td>Av. Los proceseres de la independencia 700</td>
      <td>30009</td>

      <!-- EN ESTE ULTIMO SE DEBE DE COLOCAR EL BOTÓN PARA SELECCIONAR -->
      
      <td>BTON</td>
    </tr>
    <tr>
      <th scope="row">Lolitosinovation</th>
      <td>Av. Los youtubers 153</td>
      <td>20001</td>

      <!-- EN ESTE ULTIMO SE DEBE DE COLOCAR EL BOTÓN PARA SELECCIONAR -->
      
      <td>BTON</td>
    </tr>
    <tr>
      <th scope="row">Valuable</th>
      <td>C. los terneritos 214</td>
      <td>5005</td>

      <!-- EN ESTE ULTIMO SE DEBE DE COLOCAR EL BOTÓN PARA SELECCIONAR -->
      
      <td>BTON</td>
    </tr>
    <tr>
      <th scope="row">Sagastrike</th>
      <td>C. watuter aliancista 754</td>
      <td>20000</td>

      <!-- EN ESTE ULTIMO SE DEBE DE COLOCAR EL BOTÓN PARA SELECCIONAR -->
      
      <td>BTON</td>
    </tr>
    <tr>
      <th scope="row">Jeronimato</th>
      <td>Av. Sanchez de acero 682</td>
      <td>1794</td>

      <!-- EN ESTE ULTIMO SE DEBE DE COLOCAR EL BOTÓN PARA SELECCIONAR -->
      
      <td>BTON</td>
    </tr>

  </tbody>
</table>