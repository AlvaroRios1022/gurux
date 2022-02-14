<?php
session_start();
header("Content-Type: text/html;charset=utf-8");
ob_start();

if (!isset($_POST)) {
    die('Error, no exite el objeto POST.');
}
$post = $_POST;

if (!isset($post["tipo"])) {
    die('Error, no existe el dato "TIPO" el objeto POST.');
}

require_once(dirname(__FILE__) . "/../model/GuruModel.php");
$GLOBALS['path'] ='';
//$GLOBALS['path'] ='/guru17';
switch ($post['tipo']) {
        case "registro_usuarios" :
            Informacion_Personal($post);
            break;
        case "formacion_academica" :
            Formacion_academica($post);
            break;
        case "estudio_complementario" :
            Estudio_complementario($post);
            break;
        case "experiencia_laboral":
            Experiencia_laboral($post);
        break;
            case "experiencia":
            Experiencia($post);
        break;
            case "idiomas":
            Idioma($post);
        break;
            case "UPLOAD":
            Upload($post);
        break;   
            case "terminos":
            terminos($post);
        break;
            case "eliminar_formacion":
            eliminar_formacion($post);
        break;
            case "eliminar_complementario":
            eliminar_complementario($post);
        break;
            case "eliminar_experiencia":
            eliminar_experiencia($post);
        break;
            case "eliminar_idioma":
            eliminar_idioma($post);
        break;
            default: echo('Error, no existe el dato "TIPO" en el objeto POST');
        break;
}

function Upload($post){
    move_uploaded_file($_FILES  ['file']['tmp_name'], '../../temp/' . $_FILES['file']['name']);
     $path = $GLOBALS['path'];
    $protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
    $data['Path'] = $protocol."://".$_SERVER['HTTP_HOST'].$path.'/temp/' . $_FILES['file']['name'];
    $data['Name'] =  pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);;
    $data['status'] = 200;
    $data['state'] = true;
    $data['data'] = $data;
    echo json_encode($data); 
}

function eliminar_idioma($post){
    $respuesta = GuruModel::eliminar_idioma($post);
    echo json_encode($respuesta);
}

function eliminar_experiencia($post){
    $respuesta = GuruModel::eliminar_experiencia($post);
    echo json_encode($respuesta);
}

function eliminar_complementario($post){
    $respuesta = GuruModel::eliminar_complementario($post);
    echo json_encode($respuesta);
}
function eliminar_formacion($post){
    $respuesta = GuruModel::eliminar_formacion($post);
    echo json_encode($respuesta);
}

function Idioma($post){
    $respuesta = GuruModel::Idioma($post);
    echo json_encode($respuesta);
}

function Experiencia($post){

    
    $path = $GLOBALS['path'];
    $formato = explode(".",$post['url_cert_exp']);
    $ruta = dirname(__FILE__) .'/../../experiencia/'.date('YmdHis').'1.'.$formato[1];
    copy($post['url_cert_exp'],$ruta);
    $protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
    $ruta_imagen = $protocol."://".$_SERVER['HTTP_HOST'].$path.'/experiencia/' .date('YmdHis').'1.'.$formato[1];
    $post['url_cert_exp']=$ruta_imagen;
    $respuesta = GuruModel::Experiencia($post);
    echo json_encode($respuesta);
}

function Experiencia_laboral($post){
    $respuesta = GuruModel::Experiencia_laboral($post);
    echo json_encode($respuesta);
}

function Formacion_academica($post){
    $path = $GLOBALS['path'];
    $formato = explode(".",$post['url_cert_formacion']);
    $ruta = dirname(__FILE__) .'/../../formacion_academica/'.date('YmdHis').'.'.$formato[1];
    copy($post['url_cert_formacion'],$ruta);
    $protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
    $ruta_imagen = $protocol."://".$_SERVER['HTTP_HOST'].$path.'/formacion_academica/' .date('YmdHis').'.'.$formato[1];
    $post['url_cert_formacion']=$ruta_imagen;
    $respuesta = GuruModel::Formacion_academica($post);
    echo json_encode($respuesta);
}

function Informacion_Personal($post){

    $url = "https://prod.cobru.co/token/";

    $post2 = array(
        'username' => '3134965514',
        'password' => 'Crea1504'
    );

    

    $headers = array(
        'Accept: application/json',
        'Content-Type: application/json',
        'x-api-key: qFmLtGxf.Y5AydmsU2eblcV80UjBgjMRQW1mgBxsE'
    );

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($post2));

    $resp = curl_exec($curl);
       
    //curl_close($curl);

    $data = json_decode($resp);
    
    //echo '<br>';
    //print($resp);
    //echo '<br>';
    
    $url2 = "https://prod.cobru.co/user/";

    $headers2 = array(
        'Accept: application/json',
        'Content-Type: application/json',
        'x-api-key: qFmLtGxf.Y5AydmsU2eblcV80UjBgjMRQW1mgBxsE',
        'Access-Control-Allow-Origin: *',
        'Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept',
        'Access-Control-Allow-Methods: GET, POST, PUT, DELETE',
        'Authorization: Bearer '.$data->access
    );

    $post3 = array(
        'username' => $_POST['telefono'],
        'first_name' => $_POST['nombre'],
        'last_name' => $_POST['apellidos'],
        'email' => $_POST['correo'],
        'password' => $_POST['password'],
        'phone' => $_POST['telefono'],
        'document_type' => $_POST['tipo_doc'],
        'document_number' => $_POST['documento'],
        'country_code' => $_POST['codigo'],
        'profile_picture' => $_POST['url_image'],
        'referal_code' => $_POST['refe'],
        'gender' => $_POST['genero'],
        'date_birth' => $_POST['fecha_n'],
        'date_expiration' => $_POST['fecha_e'],
        'type_person' => $_POST['t_persona'],
        'documents' => array(
            array(
                'id' => '1',
                'url' => $_POST['url_cert_formacion1']
            ),
            array(
                'id' => '2',
                'url' => $_POST['url_cert_formacion2']
            )
        ),
        'platform' => ''
    );

    $curl2 = curl_init($url2);
    curl_setopt($curl2, CURLOPT_URL, $url2);
    curl_setopt($curl2,CURLOPT_HTTPHEADER, $headers2);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2, CURLOPT_POSTFIELDS,json_encode($post3));

    $resp2 = curl_exec($curl2);

    curl_close($curl2);

    $responseRequest = json_decode($resp2);
    
    //echo '<br>';
    //print_r($responseRequest);
    //echo '<br>';


    if($responseRequest->error != NULL){

        $respuesta['mensaje']= $responseRequest->error;
        $respuesta['status'] ='warning';
        $respuesta['id'] = 0;

        json_encode($respuesta);

    }else{

        $extencion = $post['url_image_name'];
        $url_image_name = $post['url_image_name'];
        $path = $GLOBALS['path'];
        $formato = explode(".",$post['url_image']);
        $formato2 = explode(".",$url_image_name);
        $ruta = dirname(__FILE__) .'/../../info_personal/'.$post['documento'].'.'.$extencion;
        copy($post['url_image'],$ruta);
        $protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
        $ruta_imagen = $protocol."://".$_SERVER['HTTP_HOST'].$path.'/info_personal/' .$post['documento'].'.'.$extencion;
        $post['url_image']=$ruta_imagen;
        
        
        $ruta = dirname(__FILE__) .'/../../certificaciones/'.$post['documento'].'.pdf';
        copy($post['url_cert_formacion3'],$ruta);
        $protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
        $ruta_pdf = $protocol."://".$_SERVER['HTTP_HOST'].$path.'/certificaciones/' .$post['documento'].'.pdf';
        $post['url_cert_formacion3']=$ruta_pdf;
        
        $respuesta = GuruModel::Informacion_Personal($post);
    }


    echo json_encode($respuesta);
}

function Estudio_complementario($post){

    $path = $GLOBALS['path'];
    $formato = explode(".",$post['url_cert_adicional']);
    $ruta = dirname(__FILE__) .'/../../complementarios/'.date('YmdHis').'1.'.$formato[1];
    copy($post['url_cert_adicional'],$ruta);
    $protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
    $ruta_imagen = $protocol."://".$_SERVER['HTTP_HOST'].$path.'/complementarios/' .date('YmdHis').'1.'.$formato[1];
    $post['url_cert_adicional']=$ruta_imagen;

    $path = $GLOBALS['path'];
    $formato = explode(".",$post['url_portafolio_adicional']);
    $ruta = dirname(__FILE__) .'/../../complementarios/'.date('YmdHis').'2.'.$formato[1];
    copy($post['url_portafolio_adicional'],$ruta);
    $protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
    $ruta_imagen = $protocol."://".$_SERVER['HTTP_HOST'].$path.'/complementarios/' .date('YmdHis').'2.'.$formato[1];
    $post['url_portafolio_adicional']=$ruta_imagen;


    $respuesta = GuruModel::Estudio_complementario($post);
    echo json_encode($respuesta);
}

function terminos($post){
    $respuesta = GuruModel::terminos($post);
    echo json_encode($respuesta);
}

