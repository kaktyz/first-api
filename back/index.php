<?php
// Избегаем проблем с CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');

header('Content-Type: application/json');
require 'connect.php';
require 'function.php';

$type = $_GET['q'];

if ($type === 'orders') getPosts($connect);

