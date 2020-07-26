<?php
// Избегаем проблем с CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Content-Type: application/json');

require 'connect.php';
require 'function.php';

$q = $_GET['q'];
$params = explode('/', $q);

$type = $params[0];

//foreach ($params as $param){
//    echo ($param . '/');
//}

if ($type === 'orders') getOrders($connect);
    elseif ($type === 'orders') makeOrder($connect, destId);


