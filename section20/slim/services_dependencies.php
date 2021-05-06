<?php

    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require 'vendor/autoload.php';

    $app = new \Slim\App([
        'settings' => [
            'displayErrorDetails' => true
        ]
    ]);

    // Container dependency injection
    class Service {

    }
    $service = new Service;

    // Pimple Container
    $container = $app->getContainer();
    $container['service'] = function() {
        return new Service;
    };

    $app->get('/service', function (Request $request, Response $response) {

        $service = $this->get('service');
        var_dump($service);

    });

    // Controllers as service
    /*
    $container = $app->getContainer();
    $container['View'] = function() {
        return new MyApp\View;
    };
    $app->get('/user', '\MyApp\controllers\Home:index'); */
    $container = $app->getContainer();
    $container['Home'] = function() {
        return new MyApp\controllers\Home( new MyApp\View );
    };
    $app->get('/user', 'Home:index');

    $app->run();

?>