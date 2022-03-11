<?php
require_once("../config/conexion.php");
class Generar_ExcelModel {

    public static function Idiomas($id){
        $data = array();
        try{
           
            $db=Conectar::conexion();
            $data["datos"] = array();
            $sql = "SELECT * FROM idioma_guru where id_guru=".$id;
            
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

    public static function Experiencia($id){
        $data = array();
        try{
           
            $db=Conectar::conexion();
            $data["datos"] = array();
            $sql = "SELECT * FROM experiencia_guru where id_guru=".$id;
            
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
    
    
    public static function Complementarios($id){
        $data = array();
        try{
           
            $db=Conectar::conexion();
            $data["datos"] = array();
            $sql = "SELECT * FROM estudio_complementario_guru where id_guru=".$id;
            
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
    
    public static function Formacion_Academica($id){
        $data = array();
        try{
           
            $db=Conectar::conexion();
            $data["datos"] = array();
            $sql = "SELECT * FROM formacion_academica_guru where id_guru=".$id;
            
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
    public static function Datos_guru($id){
        $data = array();
        try{
           
            $db=Conectar::conexion();
            $data["datos"] = array();
            $sql = "SELECT * FROM guru where estado=1 AND  id=".$id;
          
            $resultadoTotal = $db->query($sql);
            $i = 0;
            while ($row = mysqli_fetch_array($resultadoTotal,MYSQLI_ASSOC)) {
                $data[$i] = $row;
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


    public static function Datos_guru_all(){
        $data = array();
        try{
           
            $db=Conectar::conexion();
            $data["datos"] = array();
            $sql = "SELECT * FROM guru where estado=1";
          
            $resultadoTotal = $db->query($sql);
            $i = 0;
            while ($row = mysqli_fetch_array($resultadoTotal,MYSQLI_ASSOC)) {
                $data[$i] = $row;
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
