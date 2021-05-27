<?php

function basketCount(){
    $session = session_id();
    return getAssocResult("SELECT COUNT(id) AS id FROM basket WHERE session_id='{$session}'")[0]['id'];;
}

function getBasket() {
    $session = session_id();
    return getAssocResult("SELECT basket.id basket_id, goods.image, goods.id good_id, goods.name, goods.description, goods.price FROM basket,goods WHERE basket.goods_id=goods.id AND session_id = '{$session}'");
}

function deleteBasket($id) {
    $id = (int)$id;
    $session = session_id();
    $basketSession = getAssocResult("SELECT session_id FROM basket WHERE id={$id}")[0]['session_id'];
    if ($session == $basketSession) {
        executeQuery("DELETE FROM basket WHERE basket.id = {$id}");
    }
}

function addBasket($id) {
    $id = (int)$id;
    $session = session_id();
    executeQuery("INSERT INTO basket(goods_id, session_id) VALUES ({$id},'{$session}')");
}

function addBasketTest() {
    return 'AB';
}
