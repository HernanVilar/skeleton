<?php

use Slim\Routing\RouteCollectorProxy;
use App\Controllers\AlumnosController;

//use App\Middleware\BeforeMiddleware;
//use App\Middleware\AlumnoValidateMiddleware;


return function ($app) {
    $app->group('/alumnos', function (RouteCollectorProxy $group) {
        $group->get('[/]', AlumnosController::class . ':getAll');
    });

};