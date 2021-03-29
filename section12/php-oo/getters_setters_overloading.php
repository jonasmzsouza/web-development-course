<?php

    class Employee {

    public $name = null;
    public $telephone = null;
    public $numberChildren = null;
    public $position = null;
    public $salary = null;

    //getters setters
    function __set($attribute, $value) {
        $this->$attribute = $value;
    }
    
    function __get($attribute) {
        return $this->$attribute;
    }

    function summarizeEmpReg() {
        return $this->__get('name') . ' has ' . $this->__get('numberChildren') . ' chil(ren), has phone number is ' . $this->__get('telephone') . ' holds the position of ' . $this->__get('position') . ' and has the salary of ' . $this->__get('salary');
    }

    function modifyNumberChildren($numberChildren) {
        // affect an object attribute
        $this->numberChildren = $numberChildren;
    }

    }   

    $y = new Employee();
    $y->__set('name','John');
    $y->__set('numberChildren', 2);
    $y->__set('telephone','99 9999-9999');
    $y->__set('position','Web Developer');
    $y->__set('salary','$ 4500.0');
    echo $y->summarizeEmpReg();
    echo '<hr />';

    $x = new Employee();
    $x->__set('name','Mary');
    $x->__set('numberChildren', 5);
    $x->__set('telephone','11 1111-1111');
    $x->__set('position','Project Manager');
    $x->__set('salary','$ 9500.0');    
    echo $x->summarizeEmpReg();

?>