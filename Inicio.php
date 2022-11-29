<?php
session_start();
  if($_SESSION["esta_logueado"]){
?>
<html>
<head>
  <title>BIENVENIDO</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <meta charset="utf-8">
  <script src="https://kit.fontawesome.com/50ce7fdaf4.js" crossorigin="anonymous"></script>
 
</head>
<body>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">

    <center><h1>Bienvenido </h1></center>
    <a href="index.php">Cerrar Sesion</a><br>
 
  
      include("cerrar_conexion.php");
    }
  ?>

  </div>
  <div class="col-md-4"></div>
</div>




  
  
  
</body>
</html>

<?php
  }else{
      header('Location: index.php');
      exit;
  }
?>