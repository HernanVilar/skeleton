<?php
/*
namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

 class AlumnosController{
  public function getAll(Request $request,Response $response)
  {
    $response->getBody()->write("Archivos routes");
    return $response;
  }
}*/
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Alumno;

class AlumnosController {

    public function getAll(Request $request, Response $response, $args)
    {
        //$rta = json_encode(Alumno::all());

        // $response->getBody()->write("Controller");
        $response->getBody()->write("hola");

        return $response;
    }
}