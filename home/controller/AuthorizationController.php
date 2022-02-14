<?php
session_start();
header("Content-Type: text/html;charset=utf-8");
ob_start();

if (!isset($_REQUEST)) {
    die('Error, no exite el objeto POST.');
}
$post = $_POST;

if (!isset($post["tipo"])) {
    die('Error, no existe el dato "TIPO" el objeto POST.');
}

switch ($post['tipo']) {
        case "authorization" :
            authorization();
            break;
        default: echo('Error, no existe el dato "TIPO" en el objeto POST');
            break;
}

function authorization(){

    $token = get_token();

    $url = "https://prod.cobru.co/authorize_subusers/";

    $myArray = array( $_POST['code'] );

    $post2 = array(
        'sub_users' => $myArray
    );

    $headers = array(
        'Accept: application/json',
        'Content-Type: application/json',
        'x-api-key: qFmLtGxf.Y5AydmsU2eblcV80UjBgjMRQW1mgBxsE',
        'Access-Control-Allow-Origin: *',
        'Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept',
        'Access-Control-Allow-Methods: GET, POST, PUT, DELETE',
        'Authorization: Bearer '.$token
    );

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($post2));

    $resp = curl_exec($curl);

    curl_close($curl);

    $responseRequest = json_decode($resp);

    if(isset($responseRequest->detail)){
        $respuesta['mensaje']= $responseRequest->detail;
        $respuesta['status'] ='warning';
        $respuesta['id'] = 0;
    }else if($responseRequest->result == "done"){
        $respuesta['mensaje']= 'Usuario confirmado correctamente.';
        $respuesta['status'] ='success';
        $respuesta['id'] = 1;
    }else{
        $respuesta['mensaje']= 'Se presento un error durante la confirmación, por favor trate nuevamente mas tarde.';
        $respuesta['status'] ='warning';
        $respuesta['id'] = 1;
    }

    echo json_encode($respuesta);
}

function get_token() {

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
       
    curl_close($curl);

    $data = json_decode($resp);

    return $data->access;
}

