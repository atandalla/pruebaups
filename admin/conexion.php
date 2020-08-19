<?php
	
	$mysqli = new mysqli('remotemysql.com','yEOttoeeI4', 'Xnlm0BCzme', 'yEOttoeeI4');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>