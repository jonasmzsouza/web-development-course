<?php

    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require 'vendor/autoload.php';

    $app = new \Slim\App([
        'settings' => [
            'displayErrorDetails' => true
        ]
    ]);

    // middleware
    /*
    $app->add( function($request, $response, $next) {
        $response->write('start layer 2 + ');
        return $next($request, $response);
    });*/

    $app->add( function($request, $response, $next) {
        $response->write('start layer 1 + ');
        $response = $next($request, $response);
        $response->write(' + end layer 1 ');
        //return $next($request, $response);
        return $response;
    });

    $app->add( function($request, $response, $next) {
        $response->write('start layer 2 + ');
        $response = $next($request, $response);
        $response->write(' + end layer 2 ');
        //return $next($request, $response);
        return $response;
    });

    $app->get('/user', function (Request $request, Response $response) {
        return $response->write('main action - users');
    });

    $app->get('/posting', function (Request $request, Response $response) {

        return $response->write('main action - posting');

    });


    $app->run();

?>