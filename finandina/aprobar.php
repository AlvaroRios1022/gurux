<?php 
	session_start();
	require_once "config/conexion.php";
  $db=Conectar::conexion();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    

    $sql = ("UPDATE usuarios SET estado = 1 WHERE id = $id ");

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
 