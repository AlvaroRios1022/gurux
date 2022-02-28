

<?php 
			function conexion(){
				$conexion=new mysqli("localhost", "guruxy_ratsel", "1Ratsel2@", "guruxy_ratsel");
				$conexion->query("SET NAMES 'utf8'");
				
				return $conexion;
			}
		

 ?> 