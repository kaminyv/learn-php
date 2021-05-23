<?php

$operand1 = (int)(($_SERVER['REQUEST_METHOD'] === 'POST')? $_POST['operand1'] : $_GET['operand1']);
$operand2 = (int)(($_SERVER['REQUEST_METHOD'] === 'POST')? $_POST['operand2'] : $_GET['operand2']);
$opermeth = htmlspecialchars(($_SERVER['REQUEST_METHOD'] === 'POST')? $_POST['opermeth'] : $_GET['opermeth']);

// Функция проверки на число
function checkNum($arg1, $arg2) {
    $arg1 = gettype($arg1);
    $arg2 = gettype($arg2);
    if (($arg1 === 'integer' || $arg1 === 'double') && ($arg2 === 'integer' || $arg2 === 'double') ) {
        return true;
    } else {
        return false;
    }
}

// Функция суммы
function add($arg1, $arg2) {
    return $res =(checkNum($arg1, $arg2))? $arg1 + $arg2 : 'Argument error';
}

// Функция разности
function sub($arg1, $arg2) {
    return $res =(checkNum($arg1, $arg2))? $arg1 - $arg2 : 'Argument error';
}

// Функция произведения
function mlt($arg1, $arg2) {
    return $res =(checkNum($arg1, $arg2))? $arg1 * $arg2 : 'Argument error';
}

// Функция деления
function div($arg1, $arg2) {

    if (checkNum($arg1, $arg2) && $arg2 <> 0) {
        $res = $arg1 / $arg2;
    } else {
        $res = 'Argument error';
    }

    return $res;
}

// Функция определения операции
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'add':
            return add($arg1, $arg2);
            break;
        case 'sub':
            return sub($arg1, $arg2);
            break;
        case 'mlt':
            return mlt($arg1, $arg2);
            break;
        case 'div':
            return div($arg1, $arg2);
            break;
        default:
            return 'Invalid operation type';
    }
}

$response['result'] = mathOperation($operand1, $operand2, $opermeth);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo json_encode($response);
}

