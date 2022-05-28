<?php
$senha = $_GET['pass'];
$usuario = '20190016779';
$url = 'https://adslindo.tk/login';
    $ch = curl_init($url);
    $jsonData = array('usuario' => $usuario, 'senha' => $senha);
    $jsonDataEncoded = json_encode($jsonData);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result_data = curl_exec($ch);
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($statusCode == 200) {
        echo($senha);
    }else{
        echo "erro";
    }
    curl_close($ch);  