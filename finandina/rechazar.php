<?php 
	session_start();
	require_once "php/conexion.php";
	$conexion=conexion();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    

    $sql = ("UPDATE guru SET activo = 2 WHERE id = $id ");

if ($conexion->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conexion->error;
}
$_SESSION['message'] = 'El Guru ha sido Rechazado';
$_SESSION['message_type'] = 'danger';
header("location: admin.php");
$conexion->close();
}
 ?>