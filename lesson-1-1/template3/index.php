<?php
$title = 'Главная страница - страница обо мне';
$header = 'Информация обо мне';
$current_year = date('Y');

$content = file_get_contents("template.html");

$content = str_replace('{{ TITLE }}', $title, $content);
$content = str_replace('{{ HEADER }}', $header, $content);
$content = str_replace('{{ CURRENT_YEAR }}', $current_year, $content);

echo $content;