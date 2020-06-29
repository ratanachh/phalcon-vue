<?php
declare(strict_types=1);

namespace App\Http\Controller;

class HomeController extends ControllerBase
{

    public function indexAction()
    {
        echo 'Home index';
    }

    public function contactUsAction()
    {
        echo 'Home contact us';
    }

}

