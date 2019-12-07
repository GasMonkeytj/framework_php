<?php

    define('__ROOT__', substr(dirname(__FILE__), 0, -6));

    require_once "../vendor/autoload.php";
    require_once "../vendor/MF/Helpers/view.php";

    $dotenv = Dotenv\Dotenv::createImmutable(__ROOT__);
    $dotenv->load();

    $route = new \MF\Routes\Route;

    require_once "../routes/web.php";

    $route->initRoutes();
?>
