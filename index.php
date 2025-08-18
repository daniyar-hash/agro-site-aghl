<?php

// FRONT CONTROLLER

// Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

// index.php
require_once __DIR__ . '/config/paths.php';



 require_once(ROOT.'/components/Autoload.php');



// Вызов Router
$router = new Router();
$router->run();