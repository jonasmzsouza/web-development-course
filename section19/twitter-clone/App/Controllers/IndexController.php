<?php

    namespace App\Controllers;

    // miniframework resources
    use MF\Controller\Action;
    use MF\Model\Container;


    class IndexController extends Action {

        public function index() {

            $this->view->login = isset($_GET['login']) ? $_GET['login'] : '';
            $this->render('index');
        }

        public function signup() {

            $this->view->user = array(
                'name' => '',
                'email' => '',
                'password' => '',
            );

            $this->view->registrationError = false;
            $this->render('signup');
        }

        public function register() {

            // retrieve form data
            $user = Container::getModel('User');

            $user->__set('name', $_POST['name']);
            $user->__set('email', $_POST['email']);
            $user->__set('password', md5($_POST['password']));

            // success
            if($user->validateRegistration() && count($user->getUserByEmail()) == 0) {
                $user->save();
                $this->render('registered');
            } 
            //error
            else {
                $this->view->user = array(
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                );

                $this->view->registrationError = true;
                $this->render('signup');
           }
        }
    }

?>