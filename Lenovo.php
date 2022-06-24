<?php 
require_once 'Lenovo.php';
?>

<link rel="stylesheet" type="text/css" href="estilos.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">

<!DOCTYPE HTML>
<HTML lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name= "viewport" content="width=device-width, initial-scale=1"/>
    <!-- Agregar titulo -->
    <title> ES | Lenovo </title>
    </head>
  <body>
    <header>
    <nav id="menu">
      <div class = "box">
          <ul>
            <li>
              <a href="carrito.php"> Carrito de compras </a>
            </li>
            <li>
              <a href="sesion.php"> Iniciar Sesión </a>
            </li>
            <li>
              <a href="portada.php"> Inicio </a>
            </li>
          </ul>
      </div>
        </nav>
    </header>
        <header style= "text-align: center;" class = "loguito">
        <img src="imagenes/lenovo.png" >
        </header>
    <div class = "menu">
    <header>
      
        <h3 class = "subtitulo"> PRODUCTOS </h3>
    </header>
      <div class ="productos">
        <div class = "text-centrado">
          <div class = "row">
            <div class = "col-xs-10 col-sm-6 col-md-4 product">
                <div class = "card">
                  <div class = "text-centrado">
                    <?php
                    include 'conex.php';
                    include 'conexion.php';
                    $consult = "SELECT * FROM producto
                                WHERE id_Producto = 1";
                    $result = mysqli_query($conexion, $consult);
                    $product = mysqli_fetch_array($result);
                    ?>

                    <img src="imagenes/lenovo 1.jpg" alt ="Imagen Producto 1">
                    <h5 > <?php echo $product['Prod_Nombre']; ?> </h5>

                    <div class="container mt-5">
                     <div class="row">
                        <div class="col-sm-6">
                          <?php
                          $precio = "SELECT * FROM precio
                                  WHERE id_Precio = 1";

                                  $result1 = mysqli_query($conexion, $precio);
                                  $precio = mysqli_fetch_array($result1);

                          ?>
                          <div class="row">
                            <div class="col-sm-8">Precio</div>
                          <div class="moneda">
                             S/. <?php echo number_format($precio['Prec_Precio'], 2, '.', ','); ?>
                         </div>
                          <a href = "carrito.php"
                             class = "boton-ad-car"> Añadir al carrito </a>
                       </div>
                    </div>
                    </div>
                  </div>
                </div>
            </div>
            </div>

            <div class = "col-xs-10 col-sm-6 col-md-4 product">
                <div class = "card">
                  <div class = "text-centrado">
                  <?php
                    include 'conexion.php';
                    $consult = "SELECT * FROM producto
                                WHERE id_Producto = 2";
                    $result = mysqli_query($conexion, $consult);
                    $product = mysqli_fetch_array($result);
                    ?>

                    <img src="imagenes/lenovo 2.jpg" alt ="Imagen Producto 2">
                    <h5 >  <?php echo $product['Prod_Nombre']; ?> </h5>

                    <div class="container mt-5">
                     <div class="row">
                        <div class="col-sm-6">
                          <?php
                          $precio = "SELECT * FROM precio
                                  WHERE id_Precio = 2";

                                  $result1 = mysqli_query($conexion, $precio);
                                  $precio = mysqli_fetch_array($result1);

                          ?>
                          <div class="row">
                            <div class="col-sm-8">Precio</div>
                          <div class="moneda">
                             S/. <?php echo number_format($precio['Prec_Precio'], 2, '.', ','); ?>
                         </div>
                          <a href = "carrito.php"
                             class = "boton-ad-car"> Añadir al carrito </a>
                       </div>
                    </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>

            <div class = "col-xs-10 col-sm-6 col-md-4 product">
                <div class = "card">
                  <div class = "text-centrado">
                  <?php
                    include 'conexion.php';
                    $consult = "SELECT * FROM producto
                                WHERE id_Producto = 3";
                    $result = mysqli_query($conexion, $consult);
                    $product = mysqli_fetch_array($result);
                    ?>

                    <img src="imagenes/lenovo 3.png" alt ="Imagen Producto 3">
                    <h5 >  <?php echo $product['Prod_Nombre']; ?> </h5>
                  </div>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
