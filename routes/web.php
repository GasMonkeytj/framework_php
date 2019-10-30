<?php

$route->addRoutes([
    'route'         => '/home',
    'controller'    => 'HomeController',
    'action'        => 'index'
]);

$route->addRoutes([
    'route'         => '/about',
    'controller'    => 'AboutController',
    'action'        => 'index'
]);
