<?php

namespace App\Actions;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeAction
{
    protected $view;

    public function __construct($viewService)
    {
        $this->view = $viewService;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        return $this->view->render($response, 'home.html');
    }
}
