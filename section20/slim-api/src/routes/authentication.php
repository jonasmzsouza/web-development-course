<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Product;
use App\Models\User;
use \Firebase\JWT\JWT;

//Routes for token generation
$app->post('/api/token', function($request, $response) {

    $data = $request->getParsedBody();
    $email = $data['email'] ?? null;
    $password = $data['password'] ?? null;

    $user = User::where('email', $email)->first();    

    if( !is_null($user) && (md5($password) === $user->password )) {

        // generate token
        $secretKey = $this->get('settings')['secretKey'];
        $accessKey = JWT::encode($user, $secretKey);

        return $response->withJson([
            'key' => $accessKey
        ]);
    }

    return $response->withJson([
        'status' => 'error'
    ]);

});
