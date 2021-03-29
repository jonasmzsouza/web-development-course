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

        function changeGear() {
            echo 'Disengage the clutch and engage the gear';
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

        function changeGear() {
            echo 'Disengage the clutch with your foot and engage the gear with your hand';
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

        function changeGear() {
            echo 'Disengage the clutch with your hand and engage the gear with your foot';
        }        
    }

    class Truck extends Vehicle {}
    
    $car = new Car('ACB1234', 'Red');
    $motocycle = new Motocycle('BCA4321', 'Blue');
    $truck = new Truck();

    $car->changeGear();
    echo '<br />';
    $motocycle->changeGear();
    echo '<br />';
    $truck->changeGear();     

?>