<?php

    class Person {

        public $name = null;

        function __construct($name) {
            echo 'started object';
            $this->name = $name;
        }

        function __destruct() {
            echo 'object removed';
        }

        function __get($attribute) {
            return $this->$attribute;
        }
        
        function run() {
            return $this->__get('name') . ' are running';
        }

    }

    $person = new Person('Jonas');
    echo '<br />Name: ' . $person->__get('name');
    echo '<br />' . $person->run();

    echo '<br />';
    unset($person); //purposely removing the object from memory

?>