//<?php
//
//use App\Presentation\Repositories\TestRepository;
//use Psr\Http\Message\ResponseInterface as Response;
//use Psr\Http\Message\ServerRequestInterface as Request;
//use Slim\App;
//
//
//return function (App $app) {
//    $app->get('/4', function (Request $request, Response $response, $args) {
//        $controller = new TestRepository();
//        return $controller->hola($request, $response);
//    });
//   //$app->get('/4', [TestRepository::class, 'hola']);
//};
