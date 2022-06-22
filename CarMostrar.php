<?php
       include '../header.php';
       echo $header_html;
        ?>
        <div class="container-fluid p-5 bg-primary text-white text-center">
          <h1>Carrito de compras</h1>
          <p>Esta es la lista de Productos agregados al carrito</p>
        </div>
        <table class="table">
          <thead>
            <tr>
              <td>Productos</td>
              <td>Cantidad</td>
              <td>&nbsp;</td>
            </tr>
          </thead>
        <tbody>
        </tbody>
        </table>
        <?php echo $footer_html; ?>
