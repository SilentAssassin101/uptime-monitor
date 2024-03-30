<?php

require_once 'router.php';

$router = new Router();

$router->addRoute('GET', '/', function() {
    echo "Hello, World!";
});

$router->addRoute('GET', '/about', function() {
    echo "About Us";
});

$router->addRoute('GET', '/user/(\d+)', function($id) {
    echo "User ID: $id";
});

// Example usage:
$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->dispatch($requestMethod, $requestUri);
