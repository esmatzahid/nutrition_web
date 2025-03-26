<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home'); // Ensure 'home.php' exists in 'app/Views/'
    }
}
