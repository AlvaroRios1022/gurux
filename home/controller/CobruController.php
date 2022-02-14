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

switch ($post['tipo']) {
        case "balance" :
            get_balance();
            break;
        case "enviar_cobru" :
            enviar_cobru();
            break;
        case "getBancos" :
            get_bancos();
            break;
        case "enviar_efecty_baloto" :
            enviar_efecty_baloto();
            break;
        case "recargar" :
            recargar();
            break;
        case "enviar_bancos" :
            enviar_bancos();
            break;
        case "cobrar_cobru" :
            cobrar_cobru();
            break;
        default: echo('Error, no existe el dato "TIPO" en el objeto POST');
            break;
}

function get_balance(){

    $token = get_token();

    $url = "https://prod.cobru.co/balance/";

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

    $resp = curl_exec($curl);

    curl_close($curl);

    $responseRequest = json_decode($resp);

    if(isset($responseRequest->error)){

        $respuesta['mensaje']= $responseRequest->error;
        $respuesta['status'] ='warning';
        $respuesta['id'] = 0;

        json_encode($respuesta);

    }else{
        $respuesta['mensaje']= $resp;
        $respuesta['status'] ='success';
        $respuesta['id'] = 1;
    }

    echo json_encode($respuesta);
}

function get_bancos(){
    $token = get_token();

    $url = "https://prod.cobru.co/bank_list_third_party_withdraw/";

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

    $resp = curl_exec($curl);

    curl_close($curl);

    $responseRequest = json_decode($resp);

    if(isset($responseRequest->error)){

        $respuesta['mensaje']= $responseRequest->error;
        $respuesta['status'] ='warning';
        $respuesta['id'] = 0;


    }else{
        $respuesta['mensaje']= $responseRequest;
        $respuesta['status'] ='success';
        $respuesta['id'] = 1;

    }

    echo json_encode($respuesta);
}

function enviar_cobru(){

    $token = get_token();

    $url = "https://prod.cobru.co/send/";

    $post2 = array(
        'to_user' => $_POST['to_user'],
        'amount' => $_POST['amount']
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
    curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($post2));

    $resp = curl_exec($curl);

    curl_close($curl);

    $responseRequest = json_decode($resp);

    if(isset($responseRequest->pk)){

        $respuesta['mensaje']= 'Se realizó el envío de forma correcta';
        $respuesta['status'] ='success';
        $respuesta['id'] = 1;

    }else{

        $respuesta['mensaje']= 'No fue posible realizar en el envío, por favor revise los datos';
        $respuesta['status'] ='warning';
        $respuesta['id'] = 0;
    }

    echo json_encode($respuesta);
}

function enviar_efecty_baloto(){
    $token = get_token();

    $url = "https://prod.cobru.co/cashwithdraw/";

    $post2 = array(
        'method' => $_POST['method'],
        'document' => $_POST['document'],
        'amount' => $_POST['amount'],
        'exp_days' => 1,
        'name' => $_POST['name'],
        'coupon' => ''
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
    curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($post2));

    $resp = curl_exec($curl);

    curl_close($curl);

    $responseRequest = json_decode($resp);

    if(isset($responseRequest->status) && $responseRequest->status == 'ok'){

        $respuesta['mensaje']= 'Se realizó el envío de forma correcta';
        $respuesta['status'] ='success';
        $respuesta['id'] = 1;

    }else{

        $respuesta['mensaje']= 'No fue posible realizar en el envío, por favor revise los datos';
        $respuesta['status'] ='warning';
        $respuesta['id'] = 0;
    }

    echo json_encode($respuesta);
}

function recargar(){

    $token = get_token();

    $url = "https://prod.cobru.co/request_service_reload/";

    $post2 = array(
        'value' => $_POST['value'],
        'recipient' => $_POST['recipient'],
        'operator' => $_POST['operator']
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
    curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($post2));

    $resp = curl_exec($curl);

    curl_close($curl);

    $responseRequest = json_decode($resp);

    if(isset($responseRequest->result)){

        $respuesta['mensaje']= $responseRequest->message;
        $respuesta['resultado'] = $responseRequest->result;
        $respuesta['status'] ='success';
        $respuesta['id'] = 1;

    }else{

        $respuesta['mensaje']= 'No fue posible realizar la recarga, por favor trate nuevamente mas tarde.';
        $respuesta['status'] ='warning';
        $respuesta['id'] = 0;
    }

    echo json_encode($respuesta);
}

function enviar_bancos(){

    $token = get_token();

    $url = "https://prod.cobru.co/thirdpartywithdraw/";

    $post2 = array(
        'amount' => $_POST['amount'],
        'account_holder_name' => $_POST['account_holder_name'],
        'account_type' => $_POST['account_type'],
        'account_holder_document' => $_POST['account_holder_document'],
        'account_holder_document_type' => $_POST['account_holder_document_type'],
        'account_number' => $_POST['account_number'],
        'bank_name' => $_POST['bank_name']
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
    curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($post2));

    $resp = curl_exec($curl);

    curl_close($curl);

    $responseRequest = json_decode($resp);

    if(isset($responseRequest->pk)){

        $respuesta['mensaje']= 'Tranferencia correcta, el id de la transacción es '.$responseRequest->pk;
        $respuesta['status'] ='success';
        $respuesta['id'] = 1;

    }else{

        $respuesta['mensaje']= 'No fue posible realizar en el envío, por favor revise los datos';
        $respuesta['status'] ='warning';
        $respuesta['id'] = 0;
    }

    echo json_encode($respuesta);
}

function cobrar_cobru(){

    $token = get_token();

    $url = "https://prod.cobru.co/cobru/";

    $post2 = array(
        'amount' => $_POST['amount'],
        'description' => $_POST['description'],
        'expiration_days' => 7,
        'client_assume_costs' => false,
        'payment_method_enabled' => "{\"baloto\": true, \"efecty\": true, \"pse\": true, \"credit_card\": false, \"NEQUI\": true, \"BTC\": false, \"BCH\": false, \"DAI\": false, \"DASH\": false }",
        'platform' => "API",
        'callback' => "https://guruxy.com/",
        'iva' => 0
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
    curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($post2));

    $resp = curl_exec($curl);

    curl_close($curl);

    $responseRequest = json_decode($resp);

    if(isset($responseRequest->pk)){

        $respuesta['mensaje']= 'El id de la transacción es '.$responseRequest->pk.' y la url para realizar el pago es https://prod.cobru.co/'.$responseRequest->url;
        $respuesta['status'] ='success';
        $respuesta['id'] = 1;

    }else{

        $respuesta['mensaje']= 'No fue posible crear el cobru, por favor trate nuevamente mas adelante';
        $respuesta['status'] ='warning';
        $respuesta['id'] = 0;
    }

    echo json_encode($respuesta);
}

function get_token() {

    $url = "https://prod.cobru.co/token/";

    $post2 = array(
        'username' => $_SESSION['user'],
        'password' => $_SESSION['password']
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

