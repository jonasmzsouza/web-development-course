<?php

    interface ElectronicEquipmentInterface {
        public function on();
        public function off();
    }

    Class Refrigerator implements ElectronicEquipmentInterface {
        public  function openDoor() {
            echo 'Open door';
        }

        public function on() {
            echo 'On';
        }

        public function off() {
            echo 'Off';
        }
    }

    Class TV implements ElectronicEquipmentInterface {
        public function changeChannel() {
            echo 'Change channel';
        }

        public function on() {
            echo 'On';
        }

        public function off() {
            echo 'Off';
        }
    }

    $x = new Refrigerator();
    $y = new TV();

    //------------------------------------
    interface MammalInterface {
        public function breathe();
    }

    interface TerrestrialInterface {
        public function walk();
    }

    interface AquaticInterface {
        public function swim();
    }

    class Human implements MammalInterface, TerrestrialInterface {
        
        public function breathe() {
            echo 'breathe';
        }

        public function walk() {
            echo 'walk';
        }

        public function talk() {
            echo 'talk';
        }
    }

    class Whale implements MammalInterface, AquaticInterface {

        public function breathe() {
            echo 'breathe';
        }

        public function swim() {
            echo 'swim';
        }

        public function squirt() {
            echo 'squirt';
        }
    }

    //---------------------------------
    interface AnimalInterface {
        public function eat();
    }

    interface birdInterface extends AnimalInterface{
        public function fly();
    }

    class Parrat implements birdInterface {
        public function eat() {
            echo 'eat';
        }

        public function fly() {
            echo 'fly';
        }
    }

?>