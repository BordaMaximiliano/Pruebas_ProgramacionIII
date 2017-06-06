<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response) {
    
    //$cdtodos = cd::TraerTodoLosCds();

    //var_dump($cdtodos);

    $response->getBody()->write("Hello, hola mundo slim Fw GET");

    return $response;
});

$app->post('/', function (Request $request, Response $response) {
    
    $response->getBody()->write("Hello, hola mundo slim Fw post");

    return $response;
});


$app->run();