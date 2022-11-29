<?php 
	
	$host = "localhost";    
	$basededatos = "empleados";    
	$usuariodb = "root";    
	$clavedb = "";   


	$tabla_dbs1 = "users"; 	   
	

	
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "No es posible la conexion con la Base de Datos....";
	    exit();
	}

?>