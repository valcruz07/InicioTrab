<!DOCTYPE html>
<html>

    <body style="background-color:#08E7EE;>
      <header id="cabecera">
        <div id="logo">
          <a href="portada.php">
            <h1> ElectroShop </h1>
          </a>
        </div>
        <!--/Menu -->
        <nav id="menu">
        <br/>
        <br/>
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
        </nav>

      </header>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      
        <center>
            <form id="card-form">
                
                            <div class="card">
                    <div class="card-header">
                        <div class="row display-tr">
                            <h3>Pago en línea</h3>
                                <link rel="stylesheet" type="text/css" href="estilos.css"

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    Nombre del dueño de la tarjeta
                                </label>
                                <input value="Marco Martínez" class="form-control" name="name" id="name"  type="text" >
                            </div>
                            <div class="col-md-6">
                                    <label>
                                        Número de tarjeta
                                    </label>
                                    <input value="1234567891234567" name="card" id="card" class="form-control"   type="text" maxlength="16" >
                            </div>
                        </div>

                        <div class="row">
                                <div class="col-md-6">
                                    <label>
                                        CVV
                                    </label>
                                    <input value="425" class="form-control"  type="text" maxlength="3" >
                                </div>
                                <div class="col-md-6">
                                        <label>
                                            Fecha de expiración (MM/AAAA)
                                        </label>
                                        <div>
                                            <input style="width:50px; display:inline-block" value="05" class="form-control"  type="text" maxlength="2" >
                                            <input style="width:50px; display:inline-block" value="2026" class="form-control"  type="text" maxlength="4" >

                                        </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label><span>Email</span></label>
                                <input class="form-control" type="text" name="email" id="email" maxlength="200" value="marco.martinez@marco.martinez.com">
                            </div>
                            <div class="col-md-4">
                                <label>Concepto</label>
                                <input class="form-control" type="text" name="description" id="description" maxlength="100" value="Apple MacBook M1 256GB 8GB Plata">
                            </div>
                            <div class="col-md-4">
                                <label>Monto</label>
                                <input class="form-control" type="number" name="total" id="total" value="2780">
                            </div>
                        
                        </div>
                        <br>
                        <div class="row">
                                <div class="col-md-12" style="text-align:center;">
                                <button class="btn btn-success btn-lg">
                                    <i class="fa fa-check-square"></i> PAGAR
                                </button>
                                </div>
                            
                        </div>

                    </div>
                </div>
            
                
            </form>
        <center/>
   
    </body>
</html>