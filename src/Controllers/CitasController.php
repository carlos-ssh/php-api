<?php namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CitasController {
    public function getAll($request, $response, $arg){
        $response->getBody()->write("Hello world!");
        return $response;
    }

    public function ciudadesUnicas($request, $response, $arg){
        $response->getBody()->write("Hello world!");
        return $response;
    }
}
