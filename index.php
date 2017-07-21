<?php
/**
 * Подключение Composer в основном файле проекта.
 */

error_reporting(E_ALL);                     //выводим все ошибки на экран
ini_set('display_errors', 1);    //все отслеживаемые ошибки выводятся на экран браузера
require __DIR__ . "/vendor/autoload.php";     //подключение Composer
