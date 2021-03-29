<?php

    class Employee {

    public $name = 'John';
    public $telephone = '99 9999-9999';
    public $numberChildren = 2;

    function summarizeEmpReg() {
        return "$this->name has $this->numberChildren child(ren)";
    }

    function modifyNumberChildren($numberChildren) {
        // affect an object attribute
        $this->numberChildren = $numberChildren;
    }

    }   


    $y = new Employee();
    echo $y->summarizeEmpReg();
    echo '<br />';
    $y->modifyNumberChildren(3);
    echo $y->summarizeEmpReg();
    echo '<hr />';

    $x = new Employee();
    echo $x->summarizeEmpReg();
    echo '<br />';
    $x->modifyNumberChildren(1);
    echo $x->summarizeEmpReg();

?>