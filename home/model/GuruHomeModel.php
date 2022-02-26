<?php
require_once("../config/conexion.php");
class GuruHomeModel {

    public static function ConsultarGurus($post){
        $filtro = $post['filtro'];
        $filtroQuery = " WHERE 1 = 1 ";
       
        switch ($filtro) {
            case "medicina" :
                $filtroQuery = $filtroQuery.' AND medicina <> ""';
                break;
            case "alternativa":
                $filtroQuery = $filtroQuery.' AND alternativa <> ""';
                break;
            case "psiquico":
                $filtroQuery = $filtroQuery.' AND psiquico <> ""';
                break;
            case "religioso":
                $filtroQuery = $filtroQuery.' AND religioso <> ""';
                break;    
            case "coaching":
                $filtroQuery = $filtroQuery.' AND coaching <> ""';
                break;     
            case "idiomas":
                $filtroQuery = $filtroQuery.' AND idiomas <> ""';
                break;               
        default: 
                
            break;
        }
      
        $data = array();
        $db=Conectar::conexion();
        $sql = "SELECT * FROM `guru` ".$filtroQuery." order by id asc";
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