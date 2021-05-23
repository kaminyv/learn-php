<?php

function prepareVariables($page, $action) {
    $params = [];


//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
    $params = [];
    switch ($page) {

        case 'index':
            $params['name'] = 'Админ';
            break;

        case 'catalog':
            $params['goods'] = getGoods();
            break;

        case 'catalogone':
            $id = (int)$_GET['id'];
            $params['goods'] = getOneGoods($id);
            break;

        case 'files':
            $params['files'] = getFiles();
            //  _log($params, 'params');
            break;

        case 'apicatalog':
            echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
            die();
            break;

        case 'news':
            $params['news'] = getNews();
            break;

        case 'newsone':
            $id = (int)$_GET['id'];
            $params['news'] = getOneNews($id);
            break;

        case 'feedback':
            $params['message'] = doFeedbackAction($action);

            $params['feedback'] = getAllFeedback();
            break;

    }

    return $params;
}
