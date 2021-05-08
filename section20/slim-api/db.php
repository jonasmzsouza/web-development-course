<?php

    if (PHP_SAPI != 'cli') {
        exit('Run via CLI');
    }

    require __DIR__ . '/vendor/autoload.php';

    // Instantiate the app
    $settings = require __DIR__ . '/src/settings.php';
    $app = new \Slim\App($settings);

    // Set up dependencies
    $dependencies = require __DIR__ . '/src/dependencies.php';
    $container = $dependencies($app);

    $db = $container->get('db');

    $schema = $db->schema();
    $products = 'products';
    $users = 'users';

    $schema->dropIfExists($products);
    $schema->dropIfExists($users);

    //Create table
    $schema->create($products, function($products){

        $products->increments('id');
        $products->string('name', 100);
        $products->text('description');
        $products->decimal('price', 11, 2);
        $products->string('manufacturer', 60);
        $products->timestamps();

    });

    //Create users
    $schema->create($users, function($users){

        $users->increments('id');
        $users->string('name', 100);
        $users->string('email', 150);
        $users->string('password', 32);
        $users->timestamps();

    });

    // Populate tables
    $db->table($products)->insert([
        'name' => "Galaxy Note20 Ultra Mystic Bronze 256GB",
        'description' => "Smartphone Samsung Galaxy Note 20 Ultra 256GB 5G Wi-Fi Screen 6.9 '' Dual Chip 12MP RAM Triple Camera + Selfie 10MP - Mystic Bronze",
        'price' => 955.00,
        'manufacturer' => 'Samsung',
        'created_at' => '2021-05-07',
        'updated_at' => '2021-05-07'
    ]);

    $db->table($products)->insert([
        'name' => "Novo Apple iPhone 12 Pro Max (128 GB, Graphite)",
        'description' => "iPhone 12 Pro Max Graphite, with 6.7 ”Screen, 5G, 128 GB and 12MP Triple Camera",
        'price' => 1662.00,
        'manufacturer' => 'Apple',
        'created_at' => '2021-05-07',
        'updated_at' => '2021-05-07'
    ]);

    // Populate users
    $db->table($users)->insert([
        'name' => "Jonas Souza",
        'email' => "jonas@test.com",
        'password' => md5('123456'),
        'created_at' => '2021-05-07',
        'updated_at' => '2021-05-07'
    ]);

    $db->table($users)->insert([
        'name' => "Mary White",
        'email' => "mary@test.com",
        'password' => md5('123456'),
        'created_at' => '2021-05-07',
        'updated_at' => '2021-05-07'
    ]);

?>