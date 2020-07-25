<?php

/**
 * @param $connect подключение к базе
 * возвращаем массив всех имеющихся заказов
 */
function getPosts($connect){
    $orders = mysqli_query($connect, "SELECT * FROM `orders`");
    $ordersList = [];
    while ($order = mysqli_fetch_assoc($orders)) {
        $ordersList[] = $order;
    }
    return $ordersList[1];
}