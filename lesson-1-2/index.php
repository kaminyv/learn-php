<?php
$title = 'Learn PHP Level-1. Lesson-2';
$content = renderTemplate('about');
$content .= renderTemplate('task1');
$content .= renderTemplate('task2');
$content .= renderTemplate('task3');
$content .= renderTemplate('task4');
$content .= renderTemplate('task6');
$content .= renderTemplate('task7');
$header = renderTemplate('header');
$menu = renderTemplate('menu');
$footer = renderTemplate('footer');

echo renderTemplate('layout', $content, $menu, $footer, $header);

function renderTemplate($page, $content = '', $menu = '', $footer = '', $header = '') {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}


