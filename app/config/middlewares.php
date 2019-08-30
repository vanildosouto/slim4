<?php
use Slim\Views\TwigMiddleware;

$app->add(TwigMiddleware::createFromContainer($app, 'viewService'));
