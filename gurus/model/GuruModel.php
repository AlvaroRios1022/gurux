
<?php
require_once("../config/conexion.php");
class GuruModel {

  /*
  public static function eliminar_idioma($post){
    $return = array();
    $db=Conectar::conexion();

    $id = $db->real_escape_string($_POST['id']);
    $query = "DELETE FROM idioma_guru  WHERE id=".$id;
    
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

  public static function eliminar_experiencia($post){
    $return = array();
    $db=Conectar::conexion();

    $id = $db->real_escape_string($_POST['id']);
    $query = "DELETE FROM experiencia_guru  WHERE id=".$id;
    
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
  public static function eliminar_complementario($post){
    $return = array();
    $db=Conectar::conexion();

    $id = $db->real_escape_string($_POST['id']);
    $query = "DELETE FROM estudio_complementario_guru  WHERE id=".$id;
    
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

  public static function eliminar_formacion($post){
    $return = array();
    $db=Conectar::conexion();

    $id = $db->real_escape_string($_POST['id']);
    $query = "DELETE FROM formacion_academica_guru  WHERE id=".$id;
    
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
      $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo aaa";
        $return['status'] ='warning';
     
    }
    $db->close();
    ob_end_flush();
    return $return;
  }
*/
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
            $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo bbb";
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

    $id_usuario = $db->real_escape_string($post['id_usuario']);
    $empresa = $db->real_escape_string($post['empresa']);
    if($empresa ==""){
      $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
      $return['status'] ='warning';
      $return['id'] =0;
      $db->close();
      ob_end_flush();
      return $return;
    }
 
    $telefono = $db->real_escape_string($post['telefono']);
    $fechaini = $db->real_escape_string($post['fechaini']);
    $fechafin = $db->real_escape_string($post['fechafin']);
    $cargo = $db->real_escape_string($post['cargo_desc']);
    $pais = $db->real_escape_string($post['pais']);
    $ciudad = $db->real_escape_string($post['ciudad']);
    $url_cert_exp = $db->real_escape_string($post['url_cert_exp']);

    $id_experiencia =$db->real_escape_string($post['id_experiencia']);
    $descripcion =$db->real_escape_string($post['descripcion']);
    $habilidades =$db->real_escape_string($post['habilidades']);

    
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
      return $return;
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

    $id_usuario = $db->real_escape_string($post['id_usuario']);
    $estudio = $db->real_escape_string($post['estudio_desc']);

    $estado = null;
    if( isset($post['estado'])){
      $estado = $db->real_escape_string($post['estado']);
    }

    $fechaini = $db->real_escape_string($post['fechaini']);
    $fechafin=null;
    if( isset($post['fechafin'])){
      $fechafin = $db->real_escape_string($post['fechafin']);
    }
  
    $titulo = $db->real_escape_string($post['titulo']);
    $institucion = $db->real_escape_string($post['institucion']);
    $pais = $db->real_escape_string($post['pais']);
    $ciudad = $db->real_escape_string($post['ciudad']);
    $intensidad = $db->real_escape_string($post['intensidad']);
    $descripcion = $db->real_escape_string($post['descripcion']);
    $url_cert_adicional= $db->real_escape_string($post['url_cert_adicional']);
    $url_portafolio_adicional= $db->real_escape_string($post['url_portafolio_adicional']);
    $id_complementario= $db->real_escape_string($post['id_complementario']);
    $url =$db->real_escape_string($post['url']);

    if($estudio ==""){
      $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
      $return['status'] ='warning';
      $return['id'] =0;
      $db->close();
      ob_end_flush();
      return $return;
    }
    

    if( $id_complementario=="0"){
      $query = "INSERT INTO `estudio_complementario_guru`(url,url_cert,url_portafolio,`id_guru`, `estudio`, `estado`, `fechaini`, `fechafin`, `titulo`, `institucion`, `pais`, `ciudad`,intensidad,descripcion) VALUES 
      ('".$url."','".$url_cert_adicional."','".$url_portafolio_adicional."', ".$id_usuario.", '".$estudio."', '".$estado."', '".$fechaini."', '".$fechafin."', '".$titulo."', '".$institucion."', '".$pais."', '".$ciudad."','".$intensidad."','".$descripcion."')";

    }else{
      $query = "UPDATE `estudio_complementario_guru` SET url='".$url."', url_cert='".$url_cert_adicional."',url_portafolio='".$url_portafolio_adicional."',`estudio`='".$estudio."', `estado`='".$estado."', `fechaini`='".$fechaini."', `fechafin`='".$fechafin."', `titulo`='".$titulo."', `institucion`='".$institucion."', `pais`='".$pais."', `ciudad`='".$ciudad."',intensidad='".$intensidad."',descripcion='".$descripcion."' WHERE id=".$id_complementario;
      
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
    $id_usuario = $db->real_escape_string($post['id_usuario']);
    $estudio = $db->real_escape_string($post['estudio']);
    $estado = null;
    if( isset($post['estado'])){
      $estado = $db->real_escape_string($post['estado']);
    }

    $fechaini = $db->real_escape_string($post['fechaini']);
    $fechafin=null;
    if( isset($post['fechafin'])){
      $fechafin = $db->real_escape_string($post['fechafin']);
    }
    
    $titulo = $db->real_escape_string($post['titulo']);
    $institucion = $db->real_escape_string($post['institucion']);
    $pais = $db->real_escape_string($post['pais']);
    $ciudad = $db->real_escape_string($post['ciudad']);
    $url_cert_formacion = $db->real_escape_string($post['url_cert_formacion3']);
    $id_formacion =$db->real_escape_string($post['id_formacion']);
    
    
   
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

        $medicina = $db->real_escape_string($post['medicina']);
        $alternativa = $db->real_escape_string($post['alternativa']);
        //$yoga = $db->real_escape_string($post['yoga']);
        $fisico = $db->real_escape_string($post['fisico']);
        $psiquico = $db->real_escape_string($post['psiquico']);
        $religioso = $db->real_escape_string($post['religioso']);
        $coaching = $db->real_escape_string($post['coaching']);
        $idiomas = $db->real_escape_string($post['idiomas']);
        $otras_profesiones = $db->real_escape_string($post['otras_profesiones']);
        $tutor = $db->real_escape_string($post['tutor']);
        $construccion = $db->real_escape_string($post['otros']);
        $nombre = $db->real_escape_string($post['nombre']);
        $documento = $db->real_escape_string($post['documento']);
        $genero = $db->real_escape_string($post['genero']);
        $fecha = $db->real_escape_string($post['fecha_n']);
        $pais = $db->real_escape_string($post['pais']);
        $ciudad = $db->real_escape_string($post['ciudad']);
        $direccion = $db->real_escape_string($post['direccion']);
        $telefono = $db->real_escape_string($post['telefono']);
        $correo = $db->real_escape_string($post['correo']);
        $url_image =$db->real_escape_string($post['url_image']);
        $tipo_doc = $db->real_escape_string($post['tipo_doc']);
        $estado_c = $db->real_escape_string($post['estado_c']);
        $password = md5($post['password']);

        $url_image =$db->real_escape_string($post['url_image']);
        $id_personal =$db->real_escape_string($post['id_personal']);
        $url_cert_formacion =$db->real_escape_string($post['url_cert_formacion3']);
        $codigo =$db->real_escape_string($post['codigo']);
        $idioma =$db->real_escape_string($post['idioma']);
        $idioma_adicional =$db->real_escape_string($post['idioma_adicional']);
        $pk =$db->real_escape_string($post['pk']);
    
        if($id_personal=="0"){
          $query = "INSERT INTO `guru`(`otro_idioma`,`idioma`,`codigo_pais`,`url_cert_formacion`,`estado_c`,`tipo_doc`,`medicina`, `alternativa`, `body_fisico` , `tutor` ,`psiquico`, `religioso`, `coaching`, `idiomas`, `otras_profesiones`, `construccion`, `nombre`, `documento`, `genero`, `fecha`, `pais`, `ciudad`, `direccion`, `telefono`, `correo`,`url_image`,`password`)VALUES 
          ('".$idioma_adicional."','".$idioma."','".$codigo."', '".$url_cert_formacion."','".$estado_c."',".$tipo_doc.",'".$medicina."', '".$alternativa."', '".$fisico."' , '".$tutor."',   '".$psiquico."', '".$religioso."', '".$coaching."', '".$idiomas."', '".$otras_profesiones."', '".$construccion."', '".$nombre."', '".$documento."', '".$genero."', '".$fecha."', '".$pais."', '".$ciudad."', '".$direccion."', '".$telefono."', '".$correo."','".$url_image."','".$password."')";
        echo $query;  
      }else{
          $query = "UPDATE guru SET `nombre` ='".$nombre."', `documento`='".$documento."', `genero`='".$genero."', `fecha`='".$fecha."', `pais`='".$pais."', `ciudad`='".$ciudad."', `direccion`='".$direccion."', `telefono`='".$telefono."', `correo`='".$correo."',url_image='".$url_image."' WHERE id=".$id_personal;
        }
            
            if($registro = $db->query($query)) {
                if($id_personal=="0"){
                  $id = $db->insert_id;
                  require_once(dirname(__FILE__) . "/../class/Mailer/envio.php");
                  ob_start();
                  $email_subject = "Notificaciones Gurú";
                  EnvioModel::EnvioCorreo($correo, $email_subject, $pk);
                  ob_end_clean();
                }else{
                  $id = $id_personal;
                }
            
    
                $return['mensaje']= "Los datos se han Guardado correctamente";
                $return['status'] ='success';
                $return['id'] =$id;
            }else {
                $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
                $return['status'] ='warning';
                $return['id'] =0;
              }
            
        $db->close();
	    ob_end_flush();
        return $return;
        

    }   


}