<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home'); // Ensure 'home.php' exists in 'app/Views/'
    }

    public function getGymCount()
{
    $randomCount = rand(5, 30); // Simulate gym count
    return $this->response->setJSON(['count' => $randomCount]);
}

}
