<?php
session_start();
//Первым делом подключим файл с константами настроек
include "../config/config.php";


//Читаем параметр page из url, чтобы определить, какую страницу-шаблон
//хочет увидеть пользователь, по умолчанию это будет index

$url_array = explode('/', $_SERVER['REQUEST_URI']);
$action = $url_array[2];
if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
}

$params = prepareVariables($page, $action);

//_log($params, 'params');
echo render($page, $params);
