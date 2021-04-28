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

            $routes['aboute_us'] = array(
                'route' => '/about_us',
                'controller' => 'indexController',
                'action' => 'aboutUs'
            );

            $this->setRoutes($routes);
        }

    }

?>