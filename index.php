<?php



//общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

//подключмнеи файлов
define('ROOT',dirname(__FILE__));
require_once(ROOT . '/components/Router.php');
require_once(ROOT . '/components/DB.php');

//установка соединения с базой данных


//вывоз Router
$router=new Router();
$router->run();