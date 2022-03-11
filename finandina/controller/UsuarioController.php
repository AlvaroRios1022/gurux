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
        registro($post);
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

function registro($post){
    
    $respuesta = UsuarioModel::Registro($post);
    echo json_encode($respuesta);
}