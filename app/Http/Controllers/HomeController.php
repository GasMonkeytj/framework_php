<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        view('home.index', ['data' => ['teste 1', 'teste 2', 'teste 3']]);
    }
}
