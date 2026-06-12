<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../app/config/database4.php';



$app->get('/', function (request $request, response $response, $args) {
    $response->getBody()->write("Welcome to the Reservas API");
    return $response;
});
$app->run();
