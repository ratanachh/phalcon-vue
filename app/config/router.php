<?php

defined('BASE_URI') || define('BASE_URI', $_GET['_url'] ?? '/');
defined('PROJECT_PATH') || define('PROJECT_PATH', str_replace(BASE_URI, '/', urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))));

$router = $di->getRouter(false);

// Define your routes here
$router->addGet('/', "Home::index");

$router->addGet('/product', 'Product::index');

$router->notFound(['controller' => 'error', 'action' => 'notFound']);

$router->setDefaults(['controller' => 'home', 'action' => 'index']);
$router->handle(BASE_URI);
