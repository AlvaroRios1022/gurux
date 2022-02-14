<?php
require_once("../config/conexion.php");
class Generar_ExcelModel {

    public static function usuario($id){
        $data = array();
        try{
           
            $db=Conectar::conexion();
            $data["datos"] = array();
            $sql = "SELECT * FROM usuario_guru ";
            
            $resultadoTotal = $db->query($sql);
            $i = 0;
            while ($row = mysqli_fetch_array($resultadoTotal,MYSQLI_ASSOC)) {
                $data["datos"][$i] = $row;
                $i++;
            }
            $data['query']=$sql;
            $data['status']='success';
            return $data;
        }catch(Excetion $ex){

            $data["datos"] = array();
            $data['mensaje']='An error has occurred, please try again';
            $data['status']='error';
            return $data;
        }
     
    }

   
    }

