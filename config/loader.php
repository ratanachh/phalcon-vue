<?php

$loader = new \Phalcon\Loader();

// Register namespaces
$loader->registerNamespaces([
    'App\Http\Controller'    => $config->application->controllersDir,
    'App\Model' => $config->application->modelsDir
]);

$loader->register();
