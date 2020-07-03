<?php
declare(strict_types=1);

namespace App\Http\Controller;

class SessionController extends ControllerBase
{

    /**
     * Default action. Set the public layout (layouts/public.volt)
     */
    public function initialize(): void
    {
        $this->view->setTemplateBefore('public');
    }
    
    public function loginAction(): void
    {
        echo "login";
    }


    public function signupAction(): void
    {
        $this->view->name = "test here";
    }

}