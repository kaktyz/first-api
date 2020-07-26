<?php

//Метод получения информации о заказе  в одном Метод получение списка заказов.
/**
 * @param $connect подключение к базе
 * возвращаем массив всех имеющихся заказов
 */
function getOrders($connect){
    $orders = mysqli_query($connect, "SELECT * FROM `orders`");
    $ordersList = [];
    while ($order = mysqli_fetch_assoc($orders)) {
        $ordersList[] = $order;
    }
    echo json_encode($ordersList);
}


//Метод расчета стоимости доставки.


//Метод создания заказа.
function makeOrder($connect, destId){
    $destId = null;
    $whereId = 1;
    $order = mysqli_query($connect, "INSERT INTO `orders`(dest_id, wherefrom_id) VALUES  (`$destId`, `$whereId`)");
}