<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Home'); // Set Home as the default controller
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true); // Enable auto-routing (useful for development)

// Define routes
$routes->get('/', 'Home::index'); // Route for the homepage
$routes->get('home', 'Home::index'); // Route to Home controller
$routes->get('shop/product/(:num)', 'Shop::viewProduct/$1'); // Route for product pages
$routes->get('/', 'Home::index'); // Home page
$routes->get('/cart', 'CartController::index'); // Route for the cart page
$routes->get('/products', function () {
    return view('products'); // Load products.php view
});
$routes->get('/about', function () {
    return view('about'); // Load about.php view
});
$routes->get('/', 'Home::index'); // Home page
$routes->get('/products', 'ProductController::index'); // Product listing page
$routes->get('/shop/product/(:num)', 'ProductController::view/$1'); // Single product page
