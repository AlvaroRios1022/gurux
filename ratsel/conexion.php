<?php
	
	$mysqli=new mysqli("localhost", "u157971792_admin", "1Especialista2", "u157971792_gurus"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>