<?php
declare(strict_types=1);

namespace App\Providers;

use Phalcon\Assets\Manager;
use Phalcon\Di\DiInterface;
use Phalcon\Di\ServiceProviderInterface;

class AssetsProvider implements ServiceProviderInterface
{
    protected const VERSION = "1.0.0";
    /**
     * @var string $providerName
     */
    protected $providerName = 'assets';

    /**
     * @param DiInterface $di
     *
     * @return void
     */
    public function register(DiInterface $di): void
    {
        $assetManager = new Manager();

        $di->setShared($this->providerName, function () use ($assetManager) {

            $assetManager->collection('css')
                ->addCss('/css/app.css?dc=' . self::VERSION, true);

            $assetManager->collection('js')
                ->addJs('/js/app.js?dc=' . self::VERSION, true)
                ->addJs('/js/manifest.js?dc=' . self::VERSION, true)
                ->addJs('/js/vendor.js?dc=' . self::VERSION, true)
                ->addJs('//code.jquery.com/jquery-3.5.1.min.js?dc=' . self::VERSION, false, true)
                ->addJs('//use.fontawesome.com/releases/v5.3.1/js/all.js?dc=' . self::VERSION, false, true);

            return $assetManager;
        });
    }
}
