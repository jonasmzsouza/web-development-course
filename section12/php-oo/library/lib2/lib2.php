<?php

    namespace B;

    class Customer implements registerInterface {
        public $name = 'Paul';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }
        
        public function __get($attr) {
            return $this->$attr;
        }
        public function remove(){
            echo 'remove';
        }
    }

    interface RegisterInterface {
        public function remove();
    }  
    
?>