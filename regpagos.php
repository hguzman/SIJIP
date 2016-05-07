<html>
  <head>
    <title>Registro de pagos</title>
    <link rel="stylesheet" type="text/css" href="ESTILOS/bootstrap.css">
    <script type="text/javascript" src="js/jquery-2.2.3.js"></script>    
    <script type="text/javascript" src="js/bootstrap.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <?php
              include 'menu.php'
            ?>
        </div>
        
        <div class="col-md-6">
          <div class="well">            
          <form action="guardarpago.php" method="post">

              <div class="form-group">
                <label for="exampleInputEmail1"> Fecha </label>
                <input type="text" name="fecha" class="form-control" id="exampleInputEmail1" placeholder="Identificacion">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1"> Cedula </label>
                <input type="text" name="ced" class="form-control" id="exampleInputEmail1" placeholder="Identificacion">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1"> Valor </label>
                <input type="text" name="valor" class="form-control" id="exampleInputEmail1" placeholder="Direccion">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1"> mes </label>
                <input type="text" name="mes" class="form-control" id="exampleInputEmail1" placeholder="Telefono">
              </div>


              <button type="submit" class="btn btn-primary"> Guardar </button>
            </form>
          </div>

        </div>

        <div class="col-md-6">
          <div class="well">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero obcaecati quisquam nulla alias eius eligendi, delectus labore similique reiciendis sint ad dolorem nobis perspiciatis laborum placeat sit eum provident nam.
            </p>
          </div>
        </div>
      

      </div>
    </div>
  </body>
</html>