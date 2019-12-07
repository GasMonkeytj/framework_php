<?php

    define('__ROOT__', substr(dirname(__FILE__), 0, -6));

    require_once "../vendor/autoload.php";
    require_once "../vendor/MF/Helpers/view.php";

    $route = new \MF\Routes\Route;
    $database = new \MF\Database\Connection;
    $database->connectDatabase();

    require_once "../routes/web.php";

    $route->initRoutes();
?>
