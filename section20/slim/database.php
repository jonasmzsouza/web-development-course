<?php

    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    use Illuminate\Database\Capsule\Manager as Capsule;

    require 'vendor/autoload.php';

    $app = new \Slim\App([
        'settings' => [
            'displayErrorDetails' => true
        ]
    ]);

    $container = $app->getContainer();
    $container['db'] = function() {
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'slim',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

            // Make this Capsule instance available globally via static methods... (optional)
        $capsule->setAsGlobal();

        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();

        return $capsule;

    };
    
    $app->get('/user', function (Request $request, Response $response) {

        $db = $this->get('db');
        //create table
        $db->schema()->dropIfExists('tb_user');
        $db->schema()->create('tb_user', function($table) {
            $table->increments('id_user');
            $table->string('nm_user');
            $table->string('ds_email')->unique();
            $table->timestamps();
        });

        //insert
        $db->table('tb_user')->insert([
            'nm_user' => 'Jonas Souza',
            'ds_email' => 'jonas@test.com'
        ]);
        $db->table('tb_user')->insert([
            'nm_user' => 'John Peter',
            'ds_email' => 'john@test.com'
        ]);
        $db->table('tb_user')->insert([
            'nm_user' => 'Mary Christ',
            'ds_email' => 'mary@test.com'
        ]);

        //update
        $db->table('tb_user')
                    ->where('id_user', 1)
                    ->update([
                        'nm_user' => 'Jonas'
        ]);

        //delete
        $db->table('tb_user')
                    ->where('id_user', 3)
                    ->delete();
        
        //list data
        $users = $db->table('tb_user')->get();
        foreach ($users as $user) {
            echo $user->nm_user . '<br>';
        }
    });    

    $app->run();

?>