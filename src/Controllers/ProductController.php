<?php
declare(strict_types=1);

namespace App\Http\Controller;

class ProductController extends ControllerBase
{
    public function indexAction()
    {
//        print_r($this->response->getContent());
        echo 'product index';
    }

}

