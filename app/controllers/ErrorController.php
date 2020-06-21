<?php
declare(strict_types=1);

class ErrorController extends ControllerBase
{
    public function notFoundAction($message = '')
    {
        // The response is already populated with a 404 Not Found header.
        echo 'Not found ';
        $this->response->setStatusCode(404, 'Not Found');
    }

    public function unCaughtExceptionAction($message)
    {
        // You need to specify the response header, as it's not automatically set here.
        echo 'Internal Server error: ' . $message;
        $this->response->setStatusCode(500, 'Internal Server Error: '. $message);
    }

}

