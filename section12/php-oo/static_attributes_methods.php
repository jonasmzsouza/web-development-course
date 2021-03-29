<?php

    class Example {
        public static $attr1 = 'I am a static attribute';
        public $attr2 = 'I am a normal attribute';

        public static function method1(){
            echo 'I am a static method';
        }

        public function method2() {
            echo 'I am a normal method';
        }
    }

    // :: - scope resolution
    echo Example::$attr1;
    echo '<br />';
    Example::method1();
    //echo Example::$attr2; //error
    //Example::method2(); //error

    //cannot use $ this in static methods

    $example = new Example();
    // echo $example->$attr1; // error - is not accessible through the operator ->
    echo '<br />';
    echo $example->method1();
    echo '<br />';
    echo $example->attr2;
    echo '<br />';
    echo $example->method2();

?>