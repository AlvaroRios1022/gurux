

<?php 
			function conexion(){
				$conexion=new mysqli("localhost", "u157971792_admin", "1Especialista2", "u157971792_gurus");
				$conexion->query("SET NAMES 'utf8'");
				
				return $conexion;
			}
		

 ?> 