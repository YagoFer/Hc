<?php
session_start();
    if(isset($_POST['usuario']) && isset($_POST['clave']))
    {
      include("abrir_conexion.php");
      $rs = mysqli_query($conexion, "SELECT usuario FROM users WHERE usuario = '".$_POST['usuario']."' AND clave =  '".$_POST['clave']."';");
      if(!$rs){
        
        echo "<h1>Usario no existe</h1>";
      }else{
        while($consulta = mysqli_fetch_array($rs))
        {
          $_SESSION["esta_logueado"] = true;
          $_SESSION["usuario"] = $consulta["usuario"];
          header('Location: inicio.php');
          exit;
        }
      }
    }
?>

<html>
<head>
  <title>Hospital de Campaña Corrientes</title>
  <link rel="icon" type= "images/jpg" href="images/corrientes.jpg">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  
  <meta charset="utf-8">
 
</head>
<body>
<center><h1>Ingresar Usuario y contraseña</h1></center>

    <form method="POST" action="index.php" >

    <div class="form-group">
      
      <input type="text" name="usuario" class="form-control" id="usuario"placeholder=Usuario>
  </div>

  <div class="form-group">
      
      <input type="password" name="clave" class="form-control" id="password" placeholder=Contraseña>
  </div>

 

   
    
    <center>
      <input type="submit" value="Entrar" class="btn btn-success" name="btn1">
    
     <br><br>
      <a href="login.php">REGISTRARSE</a>
      </center>
  </form>

  </body>
</html>