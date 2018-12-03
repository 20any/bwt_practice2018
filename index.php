<?php

// FRONT CONTROLLER


ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

// Подключение...
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/loading.php');


//  Router
$router = new Router();
$router->run();