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
switch ($post['tipo']) {
    case "info_pesonal" :
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
default: echo('Error, no existe el dato "TIPO" en el objeto POST');
    break;
}

function Upload($post){
    move_uploaded_file($_FILES  ['file']['tmp_name'], '../temp/' . $_FILES['file']['name']);
     $path = $GLOBALS['path'];
    $protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
    $data['Path'] = $protocol."://".$_SERVER['HTTP_HOST'].$path.'/temp/' . $_FILES['file']['name'];
    $data['Name'] = $_FILES['file']['name'];
    $data['status'] = 200;
    $data['state'] = true;
    $data['data'] = $data;
    echo json_encode($data); 
}

function Idioma($post){
    $respuesta = GuruModel::Idioma($post);
    echo json_encode($respuesta);
}

function Experiencia($post){
    $respuesta = GuruModel::Experiencia($post);
    echo json_encode($respuesta);
}

function Experiencia_laboral($post){
    $respuesta = GuruModel::Experiencia_laboral($post);
    echo json_encode($respuesta);
}

function Formacion_academica($post){
    $respuesta = GuruModel::Formacion_academica($post);
    echo json_encode($respuesta);
}

function Informacion_Personal($post){
    $respuesta = GuruModel::Informacion_Personal($post);
    echo json_encode($respuesta);
}

function Estudio_complementario($post){
    $respuesta = GuruModel::Estudio_complementario($post);
    echo json_encode($respuesta);
}

function terminos($post){
    $respuesta = GuruModel::terminos($post);
    echo json_encode($respuesta);
}

