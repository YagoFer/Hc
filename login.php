<html>
<head>
  <title>Hospital de Campaña Corrientes</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <meta charset="utf-8">
 
</head>
<body>
<center><h1> Generar Usuario</h1></center>

    <form method="POST" action="" >

    <div class="form-group">
      
      <input type="text" name="usuario" class="form-control" id="usuario"placeholder=Usuario>
  </div>

  <div class="form-group">
      
      <input type="password" name="clave" class="form-control" id="clave" placeholder=Contraseña>
  </div>
 

   
    
    <center>
      <input type="submit" value="Guardar" class="btn btn-success" name="btn1">
      <br><br>
      <a href="index.php"> volver al Inicio</a>
      </center>
  </form>
  <?php
    

    if(isset($_POST['btn1']))
    {
      include("abrir_conexion.php");

      $usuario = $_POST['usuario'];
      $clave = $_POST['clave'];
      
      

      mysqli_query($conexion, "INSERT INTO users (usuario, clave) values ('$usuario','$clave')");
      
      include("cerrar_conexion.php");
      echo "<h2>Se Registro Correctamente</h2>";
    }
     
?>

  </body>
</html>