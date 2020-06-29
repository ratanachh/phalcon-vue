<?php
declare(strict_types=1);

use Phalcon\Mvc\Router;

defined('BASE_URI') || define('BASE_URI', $_GET['_url'] ?? '/');
defined('PROJECT_PATH') || define('PROJECT_PATH', str_replace(BASE_URI, '/', urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))));

//$router = $di->getRouter(false);

/**
 * @var $router Router
 */
//$router->add('/', 'Home:index');

// Define your routes here
$router->addGet('/', "Home::index");

$router->addGet('/contact-us', "ContactUs::index");

$router->addGet('/product', 'Product::index');

$router->notFound(['controller' => 'error', 'action' => 'notFound']);
//
$router->setDefaults(['controller' => 'home', 'action' => 'index']);
//$router->handle(BASE_URI);
