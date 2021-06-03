<?php
function basketController(&$params, $action)
{
    $goodorder = false;
    if (empty($action)) {$action = 'basket';}
    elseif ($action == 'addorder') {
        $goodorder = addToOrders($_POST['name'], $_POST['phone']);
        $action = 'basket';
    };

    $params['summ'] = getSummBasket();
    $params['basket'] = getBasket();
    $params['goodorder'] = $goodorder;
    $templateName = '/basket/'. $action;

    return render($templateName, $params);
}
