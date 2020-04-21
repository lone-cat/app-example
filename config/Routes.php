<?php

use app\HTTP\Controllers\DefaultController;
use LoneCat\Router\Router;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

$router = $container->get(Router::class);

$router->addGet('main', '/', DefaultController::class);

$router->addGet('page2', '/page2', [DefaultController::class => 'page2'])->middleware(
    function (ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface {
        $response = $handler->handle($request);
        return $response->withHeader('NewHeader', 'My new header');
    }
);