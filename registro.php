<html>
<head>
	<title> REGISTROS </title>
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
		<hr>
		<div class="col-md-6">
		<div class="well">

		<form action="guardar.php" method="post">

        <div class="form-group">
          <label for="exampleInputEmail1"> Cedula </label>
          <input type="text" name="ced" class="form-control" id="exampleInputEmail1" placeholder="Identificacion">
        </div>


			  <div class="form-group">
			    <label for="exampleInputEmail1"> Acudiente </label>
			    <input type="text" name="acu" class="form-control" id="exampleInputEmail1" placeholder="Identificacion">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1"> Direccion </label>
			    <input type="text" name="dir" class="form-control" id="exampleInputEmail1" placeholder="Direccion">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1"> Telefono </label>
			    <input type="text" name="tel" class="form-control" id="exampleInputEmail1" placeholder="Telefono">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1"> Correo </label>
			    <input type="text" name="corr" class="form-control" id="exampleInputEmail1" placeholder="Correo">
			  </div>

<!--  			  <div class="checkbox">
			    <label>
			      <input type="checkbox"> Check me out
			    </label>
			  </div>
 -->
			  <button type="submit" class="btn btn-primary"> Guardar </button>
			</form>

		</div>
		</div>
		<hr>
		<div class="col-md-6">
		<div class="well">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		</div>

    <script>
      $('.dropdown-toggle').dropdown();
    </script>
</body>
</html>