<?php

use Slim\Factory\AppFactory;
use DI\Container;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();

AppFactory::setContainer($container);

require __DIR__ . '/../app/config/dependencies.php';

$app = AppFactory::create();

require __DIR__ . '/../app/config/middlewares.php';

require __DIR__ . '/../app/config/routes.php';

$app->run();
