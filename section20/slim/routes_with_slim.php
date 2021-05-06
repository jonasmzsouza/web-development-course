<?php

    require 'vendor/autoload.php';

    $app = new \Slim\App;

    $app->get('/test', function() {

        echo 'test list';

    });

    // [] -> define attributes as optional
    $app->get('/users[/{id}]', function($request, $response) {

        $id = $request->getAttribute('id');
        echo 'User List: ' . $id;

    });

    // [] -> define attributes as optional
    $app->get('/posts[/{year}[/{month}]]', function($request, $response) {

        $year = $request->getAttribute('year');
        $month = $request->getAttribute('month');
        echo "Posting list Year: " . $year . " Month: " . $month;

    });

    //: -> this is necessary to define a regular expression, for example.
    //.* -> regular expression to accept any value after /
    $app->get('/list/{items:.*}', function($request, $response) {

        $items = $request->getAttribute('items');
        
        echo '<pre>';
        var_dump(explode("/", $items));
        echo '</pre>';

    });

    //name routes
    $app->get('/blog/posts/{id}', function($request, $response) {
        echo "Posting list to an ID";
    })->setName("blog");

    $app->get('/mysite', function($request, $response) {
        $return = $this->get("router")->pathFor("blog", ["id" => "5"]);
        echo $return;
    });


    //group routes
    $app->group('/v1', function() {

        $this->get('/users', function() {
            echo 'User list';
        });
        
        $this->get('/posts', function() {
            echo 'Posting list';
        });

    });

    $app->run();

?>