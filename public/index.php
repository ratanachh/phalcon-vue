<?php
declare(strict_types=1);

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Dispatcher;
use phalcon\Dispatcher\Exception;
use App\Http\Controllers\ErrorController;

error_reporting(E_ALL);

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');

try {
    /**
     * The FactoryDefault Dependency Injector automatically registers
     * the services that provide a full stack framework.
     */
    $di = new FactoryDefault();

    /**
     * Read services
     */
    require_once APP_PATH . '/config/services.php';

    /**
     * Handle routes
     */
    require_once APP_PATH . '/config/router.php';

    /*
     * Using default router error
     * Initialize the Dispatcher
     */
    /*
    $di->set('dispatcher', function () use ($di) {
        $eventsManager = $di->getShared('eventsManager');
        $eventsManager->attach('dispatch:beforeException', function ($event, $dispatcher, $exception) {
            switch ($exception->getCode()) {
                case Exception::EXCEPTION_HANDLER_NOT_FOUND:
                case Exception::EXCEPTION_ACTION_NOT_FOUND:
                    $dispatcher->forward(['controller' => 'error', 'action' => 'notFound', 'params' => [$exception->getMessage()]]);
                    return false;
                default:
                    $dispatcher->forward(['controller' => 'error', 'action' => 'unCaughtException', 'params' => [$exception->getMessage()]]);
                    return false;
            }
        });
        $dispatcher = new Dispatcher();
        $dispatcher->setEventsManager($eventsManager);
        return $dispatcher;
    },
        true
    );
    */


    /**
     * Get config service for use in inline setup below
     */
    $config = $di->getConfig();

    /**
     * Include Autoloader
     */
    require_once APP_PATH . '/config/loader.php';

    /**
     * Handle the request
     */
    unset($_GET['_url']);
    $application = new \Phalcon\Mvc\Application($di);
    $application->handle(BASE_URI)->send();
} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
