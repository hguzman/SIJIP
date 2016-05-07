<?php

  $db=mysql_connect("127.0.0.1","root","usrio01");
  mysql_select_db("cliente",$db);

  $sql ="select * from cliente";
  $result = mysql_query($sql);
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Listar Acudiente</title>
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

        <div class="col-md-8">
          <table class="table table-striped">
            <thead>
              <tr>
                <th width="200">Cedula</th>
                <th width="150">Nombre</th>
                <th >Dirección</th>
                <th >Telefono</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while ($row = mysql_fetch_row($result)){ 
            ?>
                <tr>
                  <td><?= $row[0] ?></td>
                  <td><?= $row[1] ?></td>               
                  <td><?= $row[2] ?></td>               
                  <td><?= $row[3] ?></td>               
                </tr>         
            <?php
              } 
            ?>
            </tbody>
          </table>
        </div>
        <div class="col-md-4">
          <div class="well">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est suscipit quasi obcaecati dolorum temporibus ratione nemo odio accusamus veniam ipsam alias libero adipisci illum, hic, voluptate porro at enim iusto.</p>
          </div>
        </div>
      </div>
    </div>    
  </body>
</html>