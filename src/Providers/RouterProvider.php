<?php
declare(strict_types=1);

namespace App\Providers;


use App\Application;
use Exception;
use Phalcon\Di\DiInterface;
use Phalcon\Di\ServiceProviderInterface;
use Phalcon\Mvc\Router;

class RouterProvider implements ServiceProviderInterface
{
    /**
     * @var string $providerName
     */
    protected $providerName = 'router';

    /**
     * @param DiInterface $di
     *
     * @return void
     */
    public function register(DiInterface $di): void
    {
        /**
         * Get application from Dependency Injection
         *
         * @var Application $application
         */
        $application = $di->getShared(Application::APPLICATION_PROVIDER);

        /**
         * @var string $basePath
         */
        $basePath = $application->getRootPath();

        $di->set(
            $this->providerName,
            function () use ($basePath) {
                $router = new Router(false);

                $routes = $basePath.'/config/routes.php';
                if (file_exists($routes) === false || is_readable($routes) === false) {
                    throw new Exception($routes.' file does not exist or is not readable.');
                }

                require_once $routes;

                return $router;
            }
        );

    }//end register()


}//end class
