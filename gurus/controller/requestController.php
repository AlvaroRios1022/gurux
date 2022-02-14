<?php

header("Content-Type: text/html;charset=utf-8");
ob_start();

if (!isset($_POST)) {
    die('Error, no exite el objeto POST.');
}

$post = $_POST;

print_r($post);

echo $post; 


