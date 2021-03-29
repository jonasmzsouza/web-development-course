<?php

    class Father {
        private $name = 'John';
        protected $surname = 'White';
        public $humor = 'Happy';

        public function __get($attribute) {
            return $this->$attribute;
        }

        public function __set($attribute, $value) {
            
            // preg_replace -> performs a regular expression search and replaces
            if(strlen(preg_replace("/\s+/", "", $value)) > 0) {
                $this->$attribute = $value;
            }
        }

        private function executeMania() {
            echo 'Whistle';
        }

        protected function answer() {
            echo 'Hello';
        }

        public function performAction() {
            $x = rand(1, 10);

            if($x >= 1 && $x <= 8) {
                $this->answer();
            } else {
                $this->executeMania();
            }
        }
    }

    class Child extends Father {

        public function getAttr($attr) {
            return $this->$attr;
        }

        public function setAttr($attr, $value) {
            $this->$attr = $value;
        }        

    }

    $father = new Father;
    echo $father->humor;
    $father->humor = 'Sad';
    echo '<br />';
    echo $father->humor;
    // echo $father->executeMania(); //error - private method
    // echo $father->answer(); //error - protected method
    echo '<br />';
    echo $father->__get('name');
    $father->__set('name', '    ');
    echo '<br />';
    echo $father->__get('name');
    //access /assignment to a private/protected attribute is possible because of the magic get method
    echo '<br />';
    echo $father->name; 
    echo '<br />';
    echo $father->name = 'Jonas';
    echo '<br />';
    echo $father->performAction();

    echo '<hr />';

    $child =  new Child();
    echo '<pre>';
    print_r($child);
    echo '</pre>';
    echo $child->getAttr('humor');
    echo '<br />';
    echo $child->getAttr('surname');
    $child->setAttr('humor', 'Sad');
    echo '<br />';
    echo $child->getAttr('humor');
    // show object methods
    echo '<pre>';
    print_r(get_class_methods($child));
    echo '</pre>';
    echo $child->__get('name');
    $child->__set('name', 'Paul');
    echo '<pre>';
    print_r($child);
    echo '</pre>';
    echo $child->__get('name');

?>