<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll(); // Fetch all products from the database

        return view('products', $data); // Load the products view
    }

    public function view($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id); // Fetch single product by ID

        if (!$data['product']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Product not found");
        }

        return view('product_detail', $data); // Load the product detail page
    }
}
