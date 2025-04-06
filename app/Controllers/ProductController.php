<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ProductController extends Controller
{
    public function view($id)
    {
        $products = [
            1 => 'Whey Protein',
            2 => 'Creatine Monohydrate',
            3 => 'Pre-Workout',
        ];
    
        if (!isset($products[$id])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Product not found");
        }
    
        $productName = $products[$id];
        $searchTerm = urlencode($productName);
        $searchUrl = "https://world.openfoodfacts.org/cgi/search.pl?search_terms=$searchTerm&json=1";
    
        $ch = curl_init($searchUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $response = curl_exec($ch);
        curl_close($ch);
    
        $decoded = json_decode($response, true);
        $productData = null;
    
        if (!empty($decoded['products']) && is_array($decoded['products'])) {
            foreach ($decoded['products'] as $item) {
                if (!empty($item['product_name'])) {
                    $productData = $item;
                    break;
                }
            }
        }
    
        return view('product_detail', [
            'productName' => $productName,
            'productData' => $productData
        ]);
    }

    public function randomProducts()
    {
        $url = "https://world.openfoodfacts.org/cgi/search.pl?action=process&sort_by=random&json=1&page_size=6";
    
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $response = curl_exec($ch);
        curl_close($ch);
    
        $decoded = json_decode($response, true);
    
        if (!isset($decoded['products'])) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'Failed to fetch products'
            ]);
        }
    
        // Clean up and simplify data before sending it to frontend
        $products = array_map(function ($item) {
            return [
                'product_name' => $item['product_name'] ?? 'Unnamed Product',
                'image_front_small_url' => $item['image_front_small_url'] ?? '',
            ];
        }, array_filter($decoded['products'], fn($p) => !empty($p['product_name'])));
    
        return $this->response->setJSON($products);
    }
    
    
    

    
}
