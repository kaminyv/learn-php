<?php
	// Задание 3
	$a = 5; // Объявляем переменную и присваиваем числовое значение 5
    $b = '05'; // Объявляем переменную и присваиваем строковое значение 05
    var_dump($a == $b); // Почему true? Потому что нестрогое сравнение с преобразованием сроки в число. 
    var_dump((int)'012345'); // Почему 12345? Преобразование в целочисленное число.
    var_dump((float)123.0 === (int)123.0); // Почему false? Строгое сравнение разные типы данных. 
    var_dump((int)0 === (int)'hello, world'); // Почему true? При преобразовании строки в число возвращает 0
	
	// Задание 5
	$a = 1;
	$b = 2;
	$a = $a + $b;
	$b = $a - $b;
	$a = $a - $b;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP Level-1.</title>
</head>
<body>
<h1>PHP. Уровень 1</h1>
<p>Урок 1. Введение в PHP</p>
<h3>Задание № 3 и 5.</h3>
<p>Код внутри index.php</p>
<h3>Задание № 4</h3>
<p>По ссылкам</p>
<nav>
<a href="/template1">Шаблон 1</a>
<a href="/template1">Шаблон 2</a>
<a href="/template1">Шаблон 3</a>
</nav>
</body>
</html>