<?php
declare(strict_types=1);

namespace App\Providers;

use Phalcon\Di\DiInterface;
use Phalcon\Di\ServiceProviderInterface;
use Phalcon\Loader;

class LoaderProvider implements ServiceProviderInterface
{
    /**
     * @var Loader $loader
     */
    protected $loader;

    /**
     * LoaderProvider constructor.
     */
    public function __construct()
    {
        $this->loader = new Loader();
    }

    /**
     * @param DiInterface $di
     *
     * @return void
     */
    public function register(DiInterface $di): void
    {
        $config = $di->getShared('config');
        // Register namespaces
        $this->loader->registerNamespaces([
            'App\Http\Controller'    => $config->application->controllersDir,
            'App\Model' => $config->application->modelsDir
        ]);

        $this->loader->register();
    }
}