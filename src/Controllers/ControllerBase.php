<?php
declare(strict_types=1);

namespace App\Http\Controller;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;

class ControllerBase extends Controller
{
    /**
     * Execute before the router so we can determine if this is a private
     * controller, and must be authenticated, or a public controller that is
     * open to all.
     *
     * @param Dispatcher $dispatcher
     *
     * @return boolean
     */
    public function beforeExecuteRoute(Dispatcher $dispatcher): bool
    {
        $controllerName = $dispatcher->getControllerName();
        $actionName     = $dispatcher->getActionName();
        echo $controllerName;
        return true;
    }
}
