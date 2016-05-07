<?php 
  $fecha=$_POST["fecha"];
	$ced=$_POST["ced"];
	$valor=$_POST["valor"];
	$mes=$_POST["mes"];

  // $db=mysql_connect("localhost","root","");
	$db=mysql_connect("127.0.0.1","root","usrio01");

	mysql_select_db("cliente",$db);
	mysql_query("insert into pagos values($fecha, '$ced','$valor','$mes')");
?>

<html>
<head>
	<title> Colegio Jorge Isaacs </title>
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
		<img src="colegio.png" class="img-responsive" alt="responsive image">
		</div>
		</div>
		<hr>
		<div class="col-md-6">
		<div class="well">
		<h1> <strong>Registro Guardado</strong> </h1>
		<hr>
		<p> <strong>Su registro a sido grabado satifactoriamente.</strong></p>
		</div>
		</div>

    <script>
      $('.dropdown-toggle').dropdown();
    </script>
</body>
</html>