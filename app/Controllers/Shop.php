<?php
namespace App\Controllers;

use App\Models\ProductModel;

class Shop extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('shop', $data);
    }
    
    public function viewProduct($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id);
        return view('product_view', $data);
    }
}