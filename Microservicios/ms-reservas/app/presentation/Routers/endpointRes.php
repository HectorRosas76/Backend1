<?php

use App\Presentation\Repositories\TestRepository;
use App\Presentation\Repositories\reservasrepos;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use App\Models\Reservascontroller;


return function (App $app) {
   $app->get('/4', [TestRepository::class, 'hola']);

   $app->post('/reservas', [reservasrepos::class, 'create']);
   };
