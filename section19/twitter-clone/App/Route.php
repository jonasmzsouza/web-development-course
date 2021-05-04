<?php

    namespace App;

    use MF\Init\Bootstrap;

    class Route extends Bootstrap{

        protected function initRoutes() {

            $routes['home'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'index'
            );

            
            $routes['signup'] = array(
                'route' => '/signup',
                'controller' => 'indexController',
                'action' => 'signup'
            );

            $routes['register'] = array(
                'route' => '/register',
                'controller' => 'indexController',
                'action' => 'register'
            );

            $routes['authenticate'] = array(
                'route' => '/authenticate',
                'controller' => 'AuthController',
                'action' => 'authenticate'
            );

            $routes['timeline'] = array(
                'route' => '/timeline',
                'controller' => 'AppController',
                'action' => 'timeline'
            );

            $routes['logoff'] = array(
                'route' => '/logoff',
                'controller' => 'AuthController',
                'action' => 'logoff'
            );

            $routes['tweet'] = array(
                'route' => '/tweet',
                'controller' => 'AppController',
                'action' => 'tweet'
            );

            $routes['who_to_follow'] = array(
                'route' => '/who_to_follow',
                'controller' => 'AppController',
                'action' => 'whoToFollow'
            );

            $routes['action'] = array(
                'route' => '/action',
                'controller' => 'AppController',
                'action' => 'action'
            );

            $routes['remove'] = array(
                'route' => '/remove',
                'controller' => 'AppController',
                'action' => 'remove'
            );

            $this->setRoutes($routes);
        }

    }

?>