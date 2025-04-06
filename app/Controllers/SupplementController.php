<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class SupplementController extends Controller
{
    public function index()
    {
        $query = $this->request->getGet('q');
        $fda = [];

        if ($query) {
            $searchTerm = urlencode($query);
            $url = "https://api.fda.gov/drug/label.json?search=$searchTerm&limit=5";

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $response = curl_exec($ch);
            curl_close($ch);

            if ($response !== false) {
                $decoded = json_decode($response, true);
                if (!empty($decoded['results'])) {
                    $fda = $decoded;
                }
            }
        }

        return view('supplements', [
            'fda' => $fda,
            'query' => $query
        ]);
    }
}
