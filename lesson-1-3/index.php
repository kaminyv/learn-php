<?php

define('TEMPLATES_DIR', 'templates/');
define('LAYOUTS_DIR', 'layouts/');


$page = 'index';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}


$params = ['menu' => getMenu(),];
switch ($page) {

    case 'index':
        $params['name'] = 'Админ';
        break;

    case 'catalog':
        $params['catalog'] = getCatalog();
        break;

    case 'apicatalog':
        echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
        die();
        break;
}

echo render($page, $params);

function getMenu() {
    return [
        [
            'name' => 'Главная',
            'link' => '/'
        ],
        [
            'name' => 'Каталог',
            'link' => '?page=catalog'
        ],
        [
            'name' => 'Задания',
            'link' => '#',
            'sub' => [
                [
                    'name' => 'Задания-1',
                    'link' => '?page=task1',
                ],
                [
                    'name' => 'Задания-2',
                    'link' => '?page=task2',
                ],
                [
                    'name' => 'Задания-3',
                    'link' => '?page=task3',
                ],
                [
                    'name' => 'Задания-4',
                    'link' => '?page=task4',
                ],
                [
                    'name' => 'Задания-5',
                    'link' => '?page=task5',
                ],
                [
                    'name' => 'Задания-7',
                    'link' => '?page=task7',
                ],
                [
                    'name' => 'Задания-8',
                    'link' => '?page=task8',
                ],
                [
                    'name' => 'Задания-9',
                    'link' => '?page=task9',
                ],
            ]
        ],
        [
            'name' => 'О нас',
            'link' => '?page=about'
        ],
    ];
}

function getCatalog() {
    return [
        [
            'name' => 'Пицца',
            'price' => 24
        ],
        [
            'name' => 'Чай',
            'price' => 1
        ],
        [
            'name' => 'Яблоко',
            'price' => 12
        ],
    ];
}



function render($page, $params = []) {
    return renderTemplate(LAYOUTS_DIR . 'main', [
        'menu' => renderTemplate('menu', $params),
        'content' => renderTemplate($page, $params)
    ]);
}



//$params = ['menu' => '<a></a>', 'content' => '...', $name = 'Alex'];
function renderTemplate($page, $params = []) {
    ob_start();

    extract($params);

//    foreach ($params as $key => $value) {
//        $$key = $value;
//    }

    $fileName = TEMPLATES_DIR . $page . ".php";

    if (file_exists($fileName)) {
        include $fileName;
    } else {
        die("404");
    }


    return ob_get_clean();
}
