<?php

use Psr\Container\ContainerInterface;
use Slim\Views\Twig;

$container->set('viewService', function () {
    return Twig::create(__DIR__ . '/../templates', ['cache' => false]);
});

$container->set(App\Actions\HomeAction::class, function (ContainerInterface $c) {
    return new App\Actions\HomeAction($c->get('viewService'));
});

return $container;
