<?php
declare(strict_types=1);

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Application;

error_reporting(E_ALL);

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/src');

try {
    /**
     * The FactoryDefault Dependency Injector automatically registers
     * the services that provide a full stack framework.
     */
    $di = new FactoryDefault();

    /**
     * Read services
     */
    require_once BASE_PATH . '/config/services.php';

    /**
     * Handle routes
     */
    require_once BASE_PATH . '/config/router.php';


    /**
     * Get config service for use in inline setup below
     */
    $config = $di->getConfig();

    /**
     * Include Autoloader
     */
    require_once BASE_PATH . '/config/loader.php';

    /**
     * Handle the request
     */
    unset($_GET['_url']);
    $application = new Application($di);
    $application->handle(BASE_URI)->send();
} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
