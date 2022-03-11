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


require_once(dirname(__FILE__) . "/../model/UsuariosModel.php");

switch ($post['tipo']) {
    case "LISTAR_USUARIOS":
        Listar($post);
    break;

    default: echo('Error, no existe el dato "TIPO" en el objeto POST');
    break;
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
    $data = UsuariosModel::Listar($start, $length, $search, $orderField, $orderDir);
    if (empty($data)) {
        echo json_encode($respuesta);
    } else {
        $respuesta["recordsTotal"] = $respuesta["recordsFiltered"] = $data["total"];
        $respuesta["data"] = $data["datos"];
        echo json_encode($respuesta);
    }
}