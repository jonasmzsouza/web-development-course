<?php

    class MyCustomException extends Exception {

        private $error = '';

        public function __construct($error) {
            $this->error = $error;
        }

        public function displayCustomErrorMessage() {
            echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color: white">';
                echo $this->error;
            echo '</div>';
        }
    }
    
    try {

        throw new MyCustomException('This is a test error');

    } catch (MyCustomException $e) {

        //Error (php)
        //Exception (developers)
        //Custom (developers)

        $e->displayCustomErrorMessage();

    } 

?>