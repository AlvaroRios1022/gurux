<?php
require_once("../config/conexion.php");
class GuruHomeModel {

    public static function ConsultarGurus(){
        $data = array();
        $db=Conectar::conexion();
        $sql = "SELECT * FROM `guru` order by id asc";
        $resultadoTotal = $db->query($sql);
        $i = 0;
        while ($row = mysqli_fetch_array($resultadoTotal,MYSQLI_ASSOC)) {
            $data[$i] = $row;
            $i++;
        }
        $db->close();
        return $data;
    }
}