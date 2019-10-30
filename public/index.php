<?php

    require_once "../vendor/autoload.php";
    require_once "../vendor/MF/Helpers/view.php";

    $route = new \MF\Routes\Route;

    require_once "../routes/web.php";

    $route->initRoutes();

?>
