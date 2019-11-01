<?php

Use eftec\bladeone\BladeOne;

function view($view, $data = null)
{
    $views = "../resources/views/";
    $cache = "../storage/cache";
    $blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);

    echo $blade->run($view, $data);
}
