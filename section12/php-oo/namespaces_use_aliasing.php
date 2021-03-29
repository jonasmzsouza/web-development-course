<?php

    require "./library/lib1/lib1.php";
    require "./library/lib2/lib2.php";

    use A\Customer as CA;
    use B\Customer as CB;

    $c = new CA();
    print_r($c);
    echo $c-> __get('name');

    $c = new CB();
    print_r($c);
    echo $c-> __get('name');    

?>