<?php

    require_once "../vendor/autoload.php";

    $routes = require_once "../routes/web.php";

    $route = new \MF\Routes\Route($routes);

	echo "it works";
?>
