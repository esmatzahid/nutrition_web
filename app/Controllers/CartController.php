<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class CartController extends Controller
{
    public function index()
    {
        return view('cart'); // Load the cart view
    }
}
