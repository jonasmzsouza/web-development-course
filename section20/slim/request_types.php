<?php

    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require 'vendor/autoload.php';

    $app = new \Slim\App;

    /* 
    Request types or http verbs

    get -> Recuperar recurso do servidor (Select)
    post -> Criar dado no srvidor (Inserir)
    put -> Atualizar dados no servidor (Update)
    delete -> Deletar dados do servidor (Delete)
    */

    $app->get('/posts', function (Request $request, Response $response) {

        $response->getBody()->write("Posting list");

        return $response;
    });

    $app->post('/users/add', function (Request $request, Response $response) {

        //Retrieve post ($_POST)
        $post = $request->getParsedBody();
        $name = $post['name'];
        $email = $post['email'];
        $response->getBody()->write($name . " - " . $email);

        /*
        Insert in the database with INSERT INTO...
        */

        return $response;
    });

    $app->put('/users/update', function (Request $request, Response $response) {

        //Retrieve post ($_POST)
        $post = $request->getParsedBody();
        $id = $post['id'];
        $name = $post['name'];
        $email = $post['email'];
        $response->getBody()->write("Update success: " . $id);

        /*
        Update the database with UPDATE...
        */

        return $response;
    });

    $app->delete('/users/delete/{id}', function (Request $request, Response $response) {

        $id = $request->getAttribute('id');

        /*
        Delete the database with DELETE...
        */
        $response->getBody()->write("Success in deleting: " . $id);

        return $response;
    });

    $app->run();

?>