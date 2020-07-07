<?php
declare(strict_types=1);

namespace App\Providers;

use App\Plugins\Acl;
use App\Application;
use Phalcon\Di\DiInterface;
use Phalcon\Di\ServiceProviderInterface;

class AclProvider implements ServiceProviderInterface
{
    /**
     * @var string $providerName
     */
    protected $providerName = 'acl';

    /**
     * @param DiInterface $di
     *
     * @return void
     */
    public function register(DiInterface $di): void
    {
        /** @var Application $application */
        $application = $di->getShared(Application::APPLICATION_PROVIDER);
        /** @var string $rootPath */
        $rootPath = $application->getRootPath();

        $di->setShared($this->providerName, function () use ($rootPath) {
            $filename         = $rootPath . '/config/acl.php';
            $privateResources = [];
            if (is_readable($filename)) {
                $privateResources = include $filename;
                if (!empty($privateResources['private'])) {
                    $privateResources = $privateResources['private'];
                }
            }

            $acl = new Acl();
            $acl->addPrivateResources($privateResources);

            return $acl;
        });
    }
}
