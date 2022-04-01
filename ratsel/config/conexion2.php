<?php
/*
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "guruxy_admin", "Z6HyYdRwHQa*", "guruxy_guru");
        $conexion->query("SET NAMES 'utf8'");
        if($conexion->connect_errno) {
            echo "Fall贸 la conexion a la base de datos";
        }
        else{
            

        }
        return $conexion;
    }
}
*/
?>



<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "guruxy");
        $conexion->query("SET NAMES 'utf8'");
        
        return $conexion;
    }
}

?> 