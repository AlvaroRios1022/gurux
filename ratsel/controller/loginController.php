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


require_once(dirname(__FILE__) . "/../model/LoginModel.php");
switch ($post['tipo']) {
    case "login" :
        login($post);
        break;
default: echo('Error, no existe el dato "TIPO" en el objeto POST');
    break;
}


function  login($post){
$datos = LoginModel::Inicio_sesion($post);
echo json_encode($datos); 
}