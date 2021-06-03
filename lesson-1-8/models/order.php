<?php

function getOrders()
{
    return getAssocResult("SELECT * FROM orders ");
}

//function getOrderDetail($id)
//{
//    return [];
//}

function deleteOrder($id)
{
    $id = (int)$id;
    $orderCount = getAssocResult("SELECT COUNT (id) AS id FROM `orders`")[0];
    if ($orderCount != 0) {
        return executeQuery("DELETE FROM `order` WHERE `id` = {$id}");
    }
}

