<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->post('/upload', function ($request, $response, $args) {

    $files = $request->getUploadedFiles();
    if (empty($files['newfile'])) {
        throw new Exception('Expected a newfile');
    }
 
    $newfile = $files['newfile'];
    // do something with $newfile

    if ($newfile->getError() === UPLOAD_ERR_OK) {
        $uploadFileName = $newfile->getClientFilename();
        echo "archivo nombre:" . $uploadFileName;
        $newfile->moveTo("/archivo/$uploadFileName");
    }

    $response->getBody()->write("Hello, hola mundo slim Fw post");
    return $response;
});

$app->get('/', function (Request $request, Response $response) {    
    $response->getBody()->write("Hello, hola mundo slim Fw GET");
    return $response;
});

$app->run();