<?php

namespace App\Presentation\Repositories;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class TestRepository
{
    public function hola (Request $request, Response $response) 
    {
    $response->getBody()->write("Hello world!");
        return $response;
        
    }
}