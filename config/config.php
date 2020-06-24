<?php

/*
 * Modified: prepend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/src');
defined('BASE_URI') || define('BASE_URI', $_GET['_url'] ?? '/');
defined('PROJECT_PATH') || define('PROJECT_PATH', str_replace(BASE_URI, '/', urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))));

return new \Phalcon\Config([
    'database' => [
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '',
        'dbname'      => 'test',
        'charset'     => 'utf8',
    ],
    'application' => [
        'appDir'         => APP_PATH . '/',
        'controllersDir' => APP_PATH . '/Controllers/',
        'modelsDir'      => APP_PATH . '/Models/',
        'migrationsDir'  => APP_PATH . '/Migrations/',
        'viewsDir'       => APP_PATH . '/Views/',
        'pluginsDir'     => APP_PATH . '/Plugins/',
        'cacheDir'       => BASE_PATH . '/var/cache/',
        'baseUri'        => PROJECT_PATH,
    ]
]);
