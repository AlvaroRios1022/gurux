
<?php
require_once("../config/conexion.php");
class GuruModel {

  public static function terminos($post){
    $return = array();
    $db=Conectar::conexion();

    $id_usuario = $db->real_escape_string($_POST['id_usuario']);
    $query = "UPDATE guru set acepta_terminos = 1 WHERE id=".$id_usuario;
    
    if($registro = $db->query($query)) {
      $return['mensaje']= "Se han enviado los datos correctamente";
      $return['status'] ='success';
    
    }
    else {
      $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
        $return['status'] ='warning';
     
    }
    $db->close();
    ob_end_flush();
    return $return;
  }

  public static function Idioma($post){
    $return = array();
    $db=Conectar::conexion();

    $id_usuario = $db->real_escape_string($_POST['id_usuario']);
    $nivel = $db->real_escape_string($_POST['nivel']);
    $idioma = $db->real_escape_string($_POST['idioma_desc']);


        $query = "INSERT INTO `idioma_guru`(`id_guru`, `idioma`, `nivel`) VALUES 
        (".$id_usuario.", '".$idioma."', '".$nivel."')";

        if($registro = $db->query($query)) {
          $id = $db->insert_id;
        

        $return['mensaje']= "Los datos se han Guardado correctamente";
        $return['status'] ='success';
        $return['id'] =$id;
          }
          else {
            $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
              $return['status'] ='warning';
              $return['id'] =0;
          }
        
  $db->close();
  ob_end_flush();
  return $return;

  }

  public static function Experiencia($post){
    $return = array();
    $db=Conectar::conexion();

    $id_usuario = $db->real_escape_string($_POST['id_usuario']);
    $empresa = $db->real_escape_string($_POST['empresa']);
    if($empresa ==""){
      $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
      $return['status'] ='warning';
      $return['id'] =0;
      $db->close();
      ob_end_flush();
      return $regurn;
    }
 
    $telefono = $db->real_escape_string($_POST['telefono']);
    $fechaini = $db->real_escape_string($_POST['fechaini']);
    $fechafin = $db->real_escape_string($_POST['fechafin']);
    $cargo = $db->real_escape_string($_POST['cargo_desc']);
    $pais = $db->real_escape_string($_POST['pais']);
    $ciudad = $db->real_escape_string($_POST['ciudad']);
    $url_cert_exp = $db->real_escape_string($_POST['url_cert_exp']);

    $id_experiencia =$db->real_escape_string($_POST['id_experiencia']);
    $descripcion =$db->real_escape_string($_POST['descripcion']);
    $habilidades =$db->real_escape_string($_POST['habilidades']);

    
   if($id_experiencia=="0"){

    $query = "INSERT INTO `experiencia_guru`(habilidades,descripcion,url,`id_guru`, `empresa`, `telefono`, `fechaini`, `fechafin`, `cargo`, `pais`, `ciudad`) VALUES 
    ('".$habilidades."','".$descripcion."','".$url_cert_exp."',".$id_usuario.", '".$empresa."', '".$telefono."', '".$fechaini."', '".$fechafin."', '".$cargo."', '".$pais."', '".$ciudad."')";
   }else{

    $query = "UPDATE experiencia_guru SET descripcion= '".$descripcion."',habilidades='".$habilidades."', url='".$url_cert_exp."',empresa='".$empresa."', `telefono`='".$telefono."', `fechaini`='".$fechaini."', `fechafin`='".$fechafin."', `cargo`='".$cargo."', `pais`='".$pais."', `ciudad` ='".$ciudad."' WHERE id=". $id_experiencia;
    
   }

        if($registro = $db->query($query)) {

          if($id_experiencia=="0"){
            $id = $db->insert_id;
          }else{
            $id = $id_experiencia;
           
          }
          
        

        $return['mensaje']= "Los datos se han Guardado correctamente";
        $return['status'] ='success';
        $return['id'] =$id;
          }
          else {
            $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
              $return['status'] ='warning';
              $return['id'] =0;
          }
        
  $db->close();
  ob_end_flush();
  return $return;
  }

  public static function Experiencia_laboral($post){

    $return = array();
    $db=Conectar::conexion();
    $id_usuario = $db->real_escape_string($_POST['id_usuario']);
    $descripcion = $db->real_escape_string($_POST['descripcion']);
    $habilidades = $db->real_escape_string($_POST['habilidades']);
    $id_experiencia= $db->real_escape_string($_POST['id_experiencia']);
    if($habilidades ==""){
      $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
      $return['status'] ='warning';
      $return['id'] =0;
      $db->close();
      ob_end_flush();
      return $regurn;
    }
 
      if( $id_experiencia=="0"){
        $query = "INSERT INTO `experiencia_laboral_guru`(`id_guru`,descripcion,habilidades ) VALUES 
        (".$id_usuario.",'".$descripcion."','".$habilidades."')";
      }else{
        $query = "UPDATE `experiencia_laboral_guru`SET descripcion='".$descripcion."',habilidades='".$habilidades."' where id=".$id_experiencia;
      }

        

        if($registro = $db->query($query)) {
          if( $id_experiencia=="0"){
          $id = $db->insert_id;
          }else{
            $id = $id_experiencia;
          }
        

        $return['mensaje']= "Los datos se han Guardado correctamente";
        $return['status'] ='success';
        $return['id'] =$id;
          }
          else {
            $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
              $return['status'] ='warning';
              $return['id'] =0;
          }
        
  $db->close();
  ob_end_flush();
  return $return;
  }
  
  public static function Estudio_complementario($post){
        
    $return = array();
    $db=Conectar::conexion();

    $id_usuario = $db->real_escape_string($_POST['id_usuario']);
    $estudio = $db->real_escape_string($_POST['estudio_desc']);

    $estado = null;
    if( isset($_POST['estado'])){
      $estado = $db->real_escape_string($_POST['estado']);
    }

    $fechaini = $db->real_escape_string($_POST['fechaini']);
    $fechafin=null;
    if( isset($_POST['fechafin'])){
      $fechafin = $db->real_escape_string($_POST['fechafin']);
    }
  
    $titulo = $db->real_escape_string($_POST['titulo']);
    $institucion = $db->real_escape_string($_POST['institucion']);
    $pais = $db->real_escape_string($_POST['pais']);
    $ciudad = $db->real_escape_string($_POST['ciudad']);
    $intensidad = $db->real_escape_string($_POST['intensidad']);
    $descripcion = $db->real_escape_string($_POST['descripcion']);
    $url_cert_adicional= $db->real_escape_string($_POST['url_cert_adicional']);
    $url_portafolio_adicional= $db->real_escape_string($_POST['url_portafolio_adicional']);
    $id_complementario= $db->real_escape_string($_POST['id_complementario']);


    if($estudio ==""){
      $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
      $return['status'] ='warning';
      $return['id'] =0;
      $db->close();
      ob_end_flush();
      return $regurn;
    }
    

    if( $id_complementario=="0"){
      $query = "INSERT INTO `estudio_complementario_guru`(url_cert,url_portafolio,`id_guru`, `estudio`, `estado`, `fechaini`, `fechafin`, `titulo`, `institucion`, `pais`, `ciudad`,intensidad,descripcion) VALUES 
      ('".$url_cert_adicional."','".$url_portafolio_adicional."', ".$id_usuario.", '".$estudio."', '".$estado."', '".$fechaini."', '".$fechafin."', '".$titulo."', '".$institucion."', '".$pais."', '".$ciudad."','".$intensidad."','".$descripcion."')";

    }else{
      $query = "UPDATE `estudio_complementario_guru` SET url_cert='".$url_cert_adicional."',url_portafolio='".$url_portafolio_adicional."',`estudio`='".$estudio."', `estado`='".$estado."', `fechaini`='".$fechaini."', `fechafin`='".$fechafin."', `titulo`='".$titulo."', `institucion`='".$institucion."', `pais`='".$pais."', `ciudad`='".$ciudad."',intensidad='".$intensidad."',descripcion='".$descripcion."' WHERE id=".$id_complementario;
      
    }

      
        if($registro = $db->query($query)) {

          if( $id_complementario=="0"){
          $id = $db->insert_id;
          }else{
            $id = $id_complementario;
          }
        

        $return['mensaje']= "Los datos se han Guardado correctamente";
        $return['status'] ='success';
        $return['id'] =$id;
          }
          else {
            $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
              $return['status'] ='warning';
              $return['id'] =0;
          }
    $db->close();
    ob_end_flush();
    return $return;
    

}   

  public static function Formacion_academica($post){
        
   
    $return = array();
    $db=Conectar::conexion();
    $id_usuario = $db->real_escape_string($_POST['id_usuario']);
    $estudio = $db->real_escape_string($_POST['estudio']);
    $estado = null;
    if( isset($_POST['estado'])){
      $estado = $db->real_escape_string($_POST['estado']);
    }

    $fechaini = $db->real_escape_string($_POST['fechaini']);
    $fechafin=null;
    if( isset($_POST['fechafin'])){
      $fechafin = $db->real_escape_string($_POST['fechafin']);
    }
    
    $titulo = $db->real_escape_string($_POST['titulo']);
    $institucion = $db->real_escape_string($_POST['institucion']);
    $pais = $db->real_escape_string($_POST['pais']);
    $ciudad = $db->real_escape_string($_POST['ciudad']);
    $url_cert_formacion = $db->real_escape_string($_POST['url_cert_formacion']);
    $id_formacion =$db->real_escape_string($_POST['id_formacion']);
   
    if($titulo ==""){
      $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
      $return['status'] ='warning';
      $return['id'] =0;
      $db->close();
      ob_end_flush();
      return $return;
    }

    if($id_formacion =="0"){
      $query = "INSERT INTO `formacion_academica_guru`(url,`id_guru`, `estudio`, `estado`, `fechaini`, `fechafin`, `titulo`, `institucion`, `pais`, `ciudad`) VALUES 
      ('".$url_cert_formacion."',".$id_usuario.", '".$estudio."', '".$estado."', '".$fechaini."', '".$fechafin."', '".$titulo."', '".$institucion."', '".$pais."', '".$ciudad."')";
     
    }else{
      $query = "UPDATE formacion_academica_guru set url= '".$url_cert_formacion."',
      estudio='".$estudio."',
      `estado` = '".$estado."',
      `fechaini`= '".$fechaini."',
      `fechafin`= '".$fechafin."',
      `titulo`= '".$titulo."', 
      `institucion`= '".$institucion."', 
      `pais`= '".$pais."', 
      `ciudad`= '".$ciudad."' 
      where id=".$id_formacion;
    }

       
        if($registro = $db->query($query)) {
          
    if($id_formacion =="0"){
      $id = $db->insert_id;
    }else{
      $id=$id_formacion ;
    }
     
        

        $return['mensaje']= "Los datos se han Guardado correctamente";
        $return['status'] ='success';
        $return['id'] =$id;
          }
          else {
            $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
              $return['status'] ='warning';
              $return['id'] =0;
          }
        
    $db->close();
  ob_end_flush();
    return $return;
    

}   
 
    public static function Informacion_Personal($post){
        
        $return = array();
        $db=Conectar::conexion();

        $medicina = $db->real_escape_string($_POST['medicina']);
        $alternativa = $db->real_escape_string($_POST['alternativa']);
        $yoga = $db->real_escape_string($_POST['yoga']);
        $psiquico = $db->real_escape_string($_POST['psiquico']);
        $religioso = $db->real_escape_string($_POST['religioso']);
        $coaching = $db->real_escape_string($_POST['coaching']);
        $idiomas = $db->real_escape_string($_POST['idiomas']);
        $registro_x = $db->real_escape_string($_POST['registro_x']);
        $registro_y = $db->real_escape_string($_POST['registro_y']);
        $nombre = $db->real_escape_string($_POST['nombre']);
        $documento = $db->real_escape_string($_POST['documento']);
        $genero = $db->real_escape_string($_POST['genero']);
        $fecha = $db->real_escape_string($_POST['fecha']);
        $pais = $db->real_escape_string($_POST['pais']);
        $ciudad = $db->real_escape_string($_POST['ciudad']);
        $direccion = $db->real_escape_string($_POST['direccion']);
        $telefono = $db->real_escape_string($_POST['telefono']);
        $correo = $db->real_escape_string($_POST['correo']);
        $url_image =$db->real_escape_string($_POST['url_image']);

        $url_image =$db->real_escape_string($_POST['url_image']);
        $id_personal =$db->real_escape_string($_POST['id_personal']);
    
        if($id_personal=="0"){
          $query = "INSERT INTO `guru`(`medicina`, `alternativa`, `yoga`, `psiquico`, `religioso`, `coaching`, `idiomas`, `registro_x`, `registro_y`, `nombre`, `documento`, `genero`, `fecha`, `pais`, `ciudad`, `direccion`, `telefono`, `correo`,url_image)VALUES 
          ('".$medicina."', '".$alternativa."', '".$yoga."', '".$psiquico."', '".$religioso."', '".$coaching."', '".$idiomas."', '".$registro_x."', '".$registro_y."', '".$nombre."', '".$documento."', '".$genero."', '".$fecha."', '".$pais."', '".$ciudad."', '".$direccion."', '".$telefono."', '".$correo."','".$url_image."')";
  
        }else{
          $query = "UPDATE guru SET `nombre` ='".$nombre."', `documento`='".$documento."', `genero`='".$genero."', `fecha`='".$fecha."', `pais`='".$pais."', `ciudad`='".$ciudad."', `direccion`='".$direccion."', `telefono`='".$telefono."', `correo`='".$correo."',url_image='".$url_image."' WHERE id=".$id_personal;
        }
          
            if($registro = $db->query($query)) {
              if($id_personal=="0"){
              $id = $db->insert_id;
              }else{
                $id = $id_personal;
              }
            
    
            $return['mensaje']= "Los datos se han Guardado correctamente";
            $return['status'] ='success';
            $return['id'] =$id;
              }
              else {
                $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
                  $return['status'] ='warning';
                  $return['id'] =0;
              }
            
        $db->close();
	    ob_end_flush();
        return $return;
        

    }   


}