<?php

//use Slim\Factory\AppFactory;
//
//require __DIR__ . '/../../vendor/autoload.php';
//
//$endpointRes = require __DIR__ . '/../app/Presentation/Routers/endpointRes.php';
//
//$app = AppFactory::create();
//
//$endpointRes($app);
//
//$app->run();

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/4', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->run();

