<?php
declare(strict_types=1);


error_reporting(E_ALL);

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/src');

try {
    require_once BASE_PATH . '/config/loader.php';

    /**
     * Load .env configurations
     */
    Dotenv\Dotenv::create(BASE_PATH)->load();

    /**
     * Run Application!
     */
    echo (new \App\Application(BASE_PATH))->run();
} catch (Exception $e) {
    echo $e->getMessage(), '<br>';
    echo nl2br(htmlentities($e->getTraceAsString()));
}
