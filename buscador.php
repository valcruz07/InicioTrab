<?php 
require_once 'conexion.php';
require_once 'header.php';
$query= "SELECT * FROM producto WHERE Prod_Nombre LIKE '%".$_POST['busqueda']."%'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
?>
<table class="table">
  <thead>
    <tr>
      <td>Nombre</td>
      <td>Añadir</td>
    </tr>
  </thead>
  <tbody>
    <?php
    if($result = mysqli_query($db,$query)){
        
    while($row = mysqli_fetch_array($result)){
        echo '<tr>';
        echo '<td>';
            echo '<a class="text-black text-decoration-none" href="detalle_producto.php?idproducto='.$row['Prod_Nombre'].'">';
            echo $row['Prod_Nombre'];
        echo '</a>';'</td>';
        echo '<td>';
        echo '<a href="">Añadir al carrito';
        echo '</a>';'</td>';
        echo '</tr>';
    }
}

    mysqli_close($db);
        ?>
      
  </tbody>
</table>
<a href="javascript:history.back(1)">Volver</a><br>