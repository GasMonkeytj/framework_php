<?php

function view($view, $data = null) {
    $view = str_replace(".", "/", $view);

    require_once "../resources/views/" . $view . ".blade.php";
}
