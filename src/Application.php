<?php
declare(strict_types=1);

namespace App;

use Exception;
use Phalcon\Di\DiInterface;
use Phalcon\Di\FactoryDefault;
use Phalcon\Di\ServiceProviderInterface;
use Phalcon\Http\ResponseInterface;
use Phalcon\Mvc\Application as MvcApplication;

class Application
{
    const APPLICATION_PROVIDER = 'bootstrap';

    /**
     * @var MvcApplication
     */
    protected $app;

    /**
     * @var DiInterface
     */
    protected $di;

    /**
     * Project root path
     *
     * @var string
     */
    protected $rootPath;


    /**
     * @param string $rootPath
     *
     * @throws Exception
     */
    public function __construct(string $rootPath)
    {
        $this->di       = new FactoryDefault();
        $this->app      = $this->createApplication();
        $this->rootPath = $rootPath;

        $this->di->setShared(self::APPLICATION_PROVIDER, $this);

        $this->initializeProviders();

    }//end __construct()


    /**
     * Run Application
     *
     * @return string
     * @throws Exception
     */
    public function run(): string
    {
        $baseUri  = $this->di->getShared('url')->getBaseUri();
        $position = (strpos($_SERVER['REQUEST_URI'], $baseUri) + strlen($baseUri));
        $uri      = '/'.substr($_SERVER['REQUEST_URI'], $position);
        print_r($baseUri);
        /**
         * @var ResponseInterface $response
         */
        $response = $this->app->handle($uri)->getContent();

        return (string) $response;

    }//end run()


    /**
     * Get Project root path
     *
     * @return string
     */
    public function getRootPath(): string
    {
        return $this->rootPath;

    }//end getRootPath()


    /**
     * @return MvcApplication
     */
    protected function createApplication(): MvcApplication
    {
        return new MvcApplication($this->di);

    }//end createApplication()


    /**
     * @throws Exception
     */
    protected function initializeProviders(): void
    {
        $filename = $this->rootPath.'/config/providers.php';
        if (!file_exists($filename) || !is_readable($filename)) {
            throw new Exception('File providers.php does not exist or is not readable.');
        }

        $providers = include_once $filename;

        foreach ($providers as $providerClass) {
            /*
                @var ServiceProviderInterface $provider
            */
            $provider = new $providerClass;
            $provider->register($this->di);
        }

    }//end initializeProviders()


}//end class
