<?php 
	session_start();
	require_once "config/conexion2.php";
  $db=Conectar::conexion();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    

    $sql = ("UPDATE guru SET estado = 1 WHERE id = $id ");

if ( $db->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $db->error;
}
$_SESSION['message'] = 'El Guru ha sido aprobado';
$_SESSION['message_type'] = 'success';
header("location: admin.php");
$db->close();
}
 ?>
 