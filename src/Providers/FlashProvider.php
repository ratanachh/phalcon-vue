<?php
declare(strict_types=1);

namespace App\Providers;


use Phalcon\Di\DiInterface;
use Phalcon\Di\ServiceProviderInterface;
use Phalcon\Escaper;
use Phalcon\Flash\Direct as Flash;

class FlashProvider implements ServiceProviderInterface
{
    /**
     * @var string $providerName
     */
    protected $providerName = 'flash';

    /**
     * @param DiInterface $di
     *
     * @return void
     */
    public function register(DiInterface $di): void
    {
        /**
         * Register the session flash service with the Twitter Bootstrap classes
         */
        $di->set($this->providerName, function () {
            $escaper = new Escaper();
            $flash = new Flash($escaper);
            $flash->setImplicitFlush(false);
            $flash->setCssClasses([
                'error'   => 'notification is-danger',
                'success' => 'notification is-success',
                'notice'  => 'notification is-info',
                'warning' => 'notification is-warning'
            ]);

            return $flash;
        });
    }
}