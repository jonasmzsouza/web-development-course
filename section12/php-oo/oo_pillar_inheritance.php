<?php

    class Vehicle {
        public $plate = null;
        public $color = null;
        
        function speedUp() {
            echo 'speed up';
        }

        function brake() {
            echo 'brake';
        }
    }

    class Car extends Vehicle {
        public $sunroof = true;

        function __construct($plate, $color) {
            $this->plate = $plate;
            $this->color = $color;
        }

        function openSunroof() {
            echo 'open sunroof';
        }

        function changeDirectionPosition() {
            echo 'change the direction position';
        }
    }

    class Motocycle extends Vehicle {
        public $handlebarCounterweight = true;

        function __construct($plate, $color) {
            $this->plate = $plate;
            $this->color = $color;
        }

        function cram() {
            echo 'cram';
        }
    }
    
    $car = new Car('ACB1234', 'Red');
    $motocycle = new Motocycle('BCA4321', 'Blue');

    echo '<pre>';
    print_r($car);
    print_r($motocycle);
    echo '</pre>';

    $car->openSunroof();
    echo '<br />';
    $car->speedUp();
    echo '<br />';
    $car->brake();

    echo '<hr />';

    $motocycle->cram();
    echo '<br />';
    $motocycle->speedUp();
    echo '<br />';
    $motocycle->brake();    

?>