<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$endpointRes = require __DIR__ . '/../app/Presentation/Routers/endpointRes.php';

$app = AppFactory::create();

$endpointRes($app);

$app->run();
