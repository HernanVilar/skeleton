<?php
/*require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;


$app = AppFactory::create();
$app->setBasePath("/skeleton/public");;

//registrar rutas
(require_once __DIR__ . '/routes.php')($app);
/*return function($app)
{
    $app->get('/', function (Request $request, Response $response, $args) {
        $response->getBody()->write("Archivo Routes.php");
        return $response;
    });
};
$app->run();*/
//registrar middleware
/*
(require __DIR__. '/Middleware.php');*/

//return $app;

require_once __DIR__ . '/../vendor/autoload.php';
use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->setBasePath("/skeleton/public");




(require_once __DIR__ . '/routes.php')($app);




return $app;