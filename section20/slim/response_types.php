<?php

    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require 'vendor/autoload.php';

    $app = new \Slim\App([
        'settings' => [
            'displayErrorDetails' => true
        ]
    ]);

    /* response types
        header, text, json, xml
    */
    $app->get('/header', function (Request $request, Response $response) {

        $response->write('This is a header return');
        return $response->withHeader('allow', 'PUT')
                ->withAddedHeader('Content-Length', 20);

    });

    $app->get('/json', function (Request $request, Response $response) {

        return $response->withJson([
            "name" => "Jonas Souza",
            "Address" => "Street 18"
            ]);

    });

    $app->get('/xml', function (Request $request, Response $response) {

        $xml = file_get_contents('file');
        $response->write($xml);
        return $response->withHeader('Content-Type', 'application/xml');

    });

    $app->run();

?>