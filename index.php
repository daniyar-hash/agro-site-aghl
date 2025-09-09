<?php

// FRONT CONTROLLER

// Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

// index.php
require_once __DIR__ . '/config/paths.php';

require_once(ROOT.'/components/Autoload.php');

 


session_start();

if(!empty($_POST['login']) && $_POST['login'] ==='agro'){
    $_SESSION['auth'] = true;
}


if(!empty($_SESSION['auth'])){

   
// Вызов Router
$router = new Router();
$router->run();

}
else{
 echo "Сайт временно не доступен";

 if($_SERVER['REQUEST_URI']==='/'){
    ?>
    <form action="/" method="post">
    <input type="text" name="login">
    <button type="submit">Send</button>
    </form>
    <?php
 }


}



?>






