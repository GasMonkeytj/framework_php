<?php

$route->addRoute([
    'route'         => '/home',
    'controller'    => 'HomeController',
    'action'        => 'index'
]);

$route->addRoute([
    'route'         => '/about',
    'controller'    => 'AboutController',
    'action'        => 'index'
]);
