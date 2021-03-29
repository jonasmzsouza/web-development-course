<?php

    class Employee {

    public $name = null;
    public $telephone = null;
    public $numberChildren = null;

    //getters setters

    function setName($name) {
        $this->name = $name;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setNumberChildren($numberChildren) {
        $this->numberChildren = $numberChildren;
    }

    function getName() {
        return $this->name;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getNumberChildren() {
        return $this->numberChildren;
    }    

    function summarizeEmpReg() {
        return "$this->name has $this->numberChildren child(ren) and his phone number is: $this->telephone";
    }

    function modifyNumberChildren($numberChildren) {
        // affect an object attribute
        $this->numberChildren = $numberChildren;
    }

    }   

    $y = new Employee();
    $y->setName('John');
    $y->setNumberChildren(2);
    $y->setTelephone('99 9999-9999');
    echo $y->getName() . ' has ' . $y->getNumberChildren() . ' chil(ren) and his phone number is ' . $y->getTelephone();
    echo '<hr />';

    $x = new Employee();
    $x->setName('Mary');
    $x->setNumberChildren(5);
    $x->setTelephone('11 1111-1111');
    echo $x->getName() . ' has ' . $x->getNumberChildren() . ' chil(ren) and his phone number is ' . $x->getTelephone();    

?>