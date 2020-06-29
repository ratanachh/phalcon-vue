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
                ->addCss(
                    '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css?dc=' . self::VERSION,
                    false,
                    false,
                    [
                        "media"       => "screen,projection",
                        "integrity"   => "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T",
                        "crossorigin" => "anonymous"
                    ]
                )
                ->addCss('/css/style.css?dc=' . self::VERSION, true, true, [
                    "media" => "screen,projection"
                ]);

            $assetManager->collection('js')
                ->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js?dc=' . self::VERSION, false, true, [
                    "integrity"   => "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo",
                    "crossorigin" => "anonymous"
                ])
                ->addJs(
                    '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js?dc=' . self::VERSION,
                    false,
                    true,
                    [
                        "integrity"   => "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM",
                        "crossorigin" => "anonymous"
                    ]
                );

            return $assetManager;
        });
    }
}
