<?php
//TODO сделать пути абсолютными

//Первым делом подключим файл с константами настроек
include "../config/config.php";

//Читаем параметр page из url, чтобы определить, какую страницу-шаблон
//хочет увидеть пользователь, по умолчанию это будет index

$url_array = explode('/', $_SERVER['REQUEST_URI']);

if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
}
//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
$params = [];
switch ($page) {

    case 'index':
        $params['name'] = 'Админ';
        break;

    case 'catalog':
        $params['catalog'] = getCatalog();
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

    case 'gallery':
        $params['gallery'] = getImages();
        $params['gallery1'] = uploadImage();
        break;

    case 'galleryone':
        $id = (int)$_GET['id'];
        $params['gallery'] = getImage($id);
        break;
}

echo render($page, $params);


