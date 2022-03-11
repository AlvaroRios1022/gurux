<?php
require_once("../config/conexion.php");
class Admin_GuruModel {

    public function Listar($start, $length, $search, $orderField, $orderDir) {
        $sqlFromJoin = "  from guru  ";
    
        $sqlWhere = "  where estado = 1 ";
        
    
        ///SQL orden
        $sqlOrder = "";
        if ($orderField != null) {
            //$sqlOrder = " ORDER BY soli.idSolicitud " . $orderDir . " "; 
            $sqlOrder = " ORDER BY " .$orderField. " " . $orderDir . " "; 
        }
        
        $db=Conectar::conexion();
        ///SQL total de registros
        $sqlCount = "select count(*) as total " . $sqlFromJoin. $sqlWhere;
        $resultadoTotal = $db->query($sqlCount);
        $row = $resultadoTotal->fetch_row();
        $data['total'] = $row;
        if (!$resultadoTotal) {
            $db->close();
            //die('Consulta no válida: ' . mysql_error());
            return false;
        }
        
        
        $data["datos"] = array();
    
        if (intval($row[0]) > 0) { 
            $sql = "SELECT * "
                    . $sqlFromJoin
                    . $sqlWhere
                    . $sqlOrder
                    . "limit " . $length . " "
                    . "OFFSET " . $start;
            $Total = $db->query($sql);
            while ($row = $Total->fetch_array()) {
                $data["datos"][] = $row;
            }
        }
        $db->close();
        return $data;
    }
    
}