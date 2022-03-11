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


require_once(dirname(__FILE__) . "/../model/Admin_GuruModel.php");
switch ($post['tipo']) {
    case "LISTAR_GURUS" :
        Listar($post);
        break;
    case "ADJUNTOS":
        Adjuntos($post);
    break;
default: echo('Error, no existe el dato "TIPO" en el objeto POST');
    break;
}

function Adjuntos($post){
    $id = $post['id'];
    try{
    require_once(dirname(__FILE__) . "/../model/Generar_ExcelModel.php");
    $formacion_academica=Generar_ExcelModel::Formacion_Academica($id);
    $documentos =array();
    foreach( $formacion_academica["datos"] as $value){
        array_push($documentos, $value["url"]);
    }

    $complementarios=Generar_ExcelModel::Complementarios($id);
    foreach($complementarios["datos"] as $value){
        array_push($documentos,$value["url_cert"],$value["url_portafolio"]);
    }

    $experiencia=Generar_ExcelModel::Experiencia($id);
    foreach($experiencia["datos"] as $value){

        array_push($documentos,$value["url"]);
    }

    $data['status'] = 'success';
    $data['state'] = true;
    $data['data'] = $documentos;
    echo json_encode($data); 
}catch(Exception $ex ){
    $data['status'] = 'error';
    $data['state'] = true;
    $data['data'] = null;
    $data['mensaje'] = "Se ha presentado un error, por favor intente de nuevo";
    echo json_encode($data); 
}
}

function  Listar($dataPost){
    $columns = $dataPost['columns'];
    $start = $dataPost['start'];
    $length = $dataPost['length'];
    $searchArray = $dataPost['search'];
    $search = $searchArray['value'];
    $orderArray = $dataPost['order'];
    $orderNumberField = $orderArray[0]['column'];
    $orderField = $columns[$orderNumberField]['data'];
    $orderDir = $orderArray[0]['dir'];
    $respuesta["recordsTotal"] = $respuesta["recordsFiltered"] = 0;
    $respuesta["data"] = array();
    $data = Admin_GuruModel::Listar($start, $length, $search, $orderField, $orderDir);
    if (empty($data)) {
        echo json_encode($respuesta);
    } else {
        $respuesta["recordsTotal"] = $respuesta["recordsFiltered"] = $data["total"];
        $respuesta["data"] = $data["datos"];
        echo json_encode($respuesta);
    }
}