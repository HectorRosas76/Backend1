<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/config/database4.php';
var_dump(
    file_exists(__DIR__ . '/../app/Controllers/ReservasController.php')
);

var_dump(
    class_exists(\App\Controllers\ReservasController::class)
);

exit;

$endpointRes = require __DIR__ . '/../app/Presentation/Routers/endpointRes.php';

$app = AppFactory::create();

$endpointRes($app);

$app->run();