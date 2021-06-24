<?php

namespace app\engine;

define('ROOT', dirname(__DIR__));
define('DS', DIRECTORY_SEPARATOR);
class Autoload
{
    function loadClass($className)
    {

        $fileName = str_replace(['app\\', '\\'], [ROOT . DS, DS], $className) . ".php";

        if (file_exists($fileName)) {
            include $fileName;

        }

    }
}

