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

require_once(dirname(__FILE__) . "/../model/UsuarioModel.php");
switch ($post['tipo']) {
    case "registro" :
        Registro($post);
        break;
    case "inicio_sesion":
        Inicio_sesion($post);
    break;
    case "recuperar_pass":
        Recuperar_pass($post);
    break;
default: echo('Error, no existe el dato "TIPO" en el objeto POST');
    break;
}

function Recuperar_pass($post){
    $respuesta = UsuarioModel::Recuperar_pass($post);
    echo json_encode($respuesta);
}

function Inicio_sesion($post){
    $respuesta = UsuarioModel::Inicio_sesion($post);
    echo json_encode($respuesta);
}

function Registro($post){

    $url = "https://prod.cobru.co/token/";

    $post2 = array(
        'username' => '3123886527',
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
        'last_name' => $_POST['apellido'],
        'email' => $_POST['email'],
        'password' => $_POST['pass'],
        'phone' => $_POST['telefono'],
        'document_type' => $_POST['tipo_doc'],
        'document_number' => $_POST['documento'],
        'country_code' => '',
        'profile_picture' => '',
        'referal_code' => '',
        'gender' => '',
        'date_birth' => $_POST['fecha'],
        'date_expiration' => '',
        'type_person' => '',
        'documents' => array(
            array(
                'id' => '1',
                'url' => ''
            ),
            array(
                'id' => '2',
                'url' => ''
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

    if($responseRequest->error != NULL){

        $respuesta['mensaje']= $responseRequest->error;
        $respuesta['status'] ='warning';
        $respuesta['id'] = 0;

        json_encode($respuesta);

    }else{
        $post['pk'] = $responseRequest->id;
        $respuesta = UsuarioModel::Registro($post);
    }


    echo json_encode($respuesta);
}