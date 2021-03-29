<?php

    namespace A;

    class Customer implements registerInterface {
        public $name = 'Jonas';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr) {
            return $this->$attr;
        }
        public function save(){
            echo 'save';
        }        
    }

    interface RegisterInterface {
        public function save();
    }
    
?>