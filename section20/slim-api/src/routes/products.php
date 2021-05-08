<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Product;

//Routes
/*
ORM -> Object Relational Mapper
Illuminate -> is the engine of the laravel database, however, we don't use laravel
Eloquent ORM
*/
$app->group('/api/v1', function() {

    // list products
    $this->get('/products/list', function($request, $response){

        $products = Product::get();
        return $response->withJson([ $products ]);
    });

    // add products
    $this->post('/products/add', function($request, $response){

        $data = $request->getParsedBody();
        $product = Product::create( $data );
        return $response->withJson( $product );
    });

    // retrieve product for a given id
    $this->get('/products/list/{id}', function($request, $response, $args){

     $product = Product::findOrFail( $args["id"]);
     return $response->withJson( $product );

    });

    // update product for a given id
    $this->put('/products/update/{id}', function($request, $response, $args){

            $data = $request->getParsedBody();
            $product = Product::findOrFail( $args["id"]);
            $product->update( $data );
            return $response->withJson( $product );

    });

    // remove product for a given id
    $this->get('/products/remove/{id}', function($request, $response, $args){

        $product = Product::findOrFail( $args["id"]);
        $product->delete();
        return $response->withJson( $product );
   
    });

});