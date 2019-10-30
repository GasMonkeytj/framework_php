<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        view('home.index', ['teste 1', 'teste 2', 'teste 3']);
    }
}
