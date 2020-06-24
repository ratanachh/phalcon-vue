<?php
declare(strict_types=1);

namespace App\Http\Controller;

class HomeController extends ControllerBase
{

    public function indexAction()
    {
        echo '<pre>';
//        print_r($this->response->redirect('/product')->setContent('data'));
//        exit;
        echo 'Home index';
    }

    public function contactUsAction()
    {
        echo 'Home contact us';
    }

}

