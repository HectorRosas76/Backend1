<?php

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {
$app->get('/4', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

};


