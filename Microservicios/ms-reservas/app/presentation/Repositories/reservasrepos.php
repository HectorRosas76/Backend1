<?php

namespace App\Presentation\Repositories;
use App\Models\ReservasController;
use psr\Http\Message\ResponseInterface as Response;
use psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\ReservasController;

class reservasrepos {
    function create(request $request, response $response) {
    $body = $request->getBody()->getContents();
        $data = json_decode($body, true);
        $controller = new ReservasController();
        $reserva = $controller->guardarReserva($data);
        $dataJson = $reserva->toJson();
        $response->getBody()->write($dataJson);
    return $response->withStatus(201)
    ->withHeader('Content-Type', 'application/json');
        }
}