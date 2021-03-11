<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Functions: Manipulate Arrays</title>
</head>
<body>

    <?php

        echo '<h3>IS ARRAY</h3>';
        $array1 = array('table', 'chair');
        $return = is_array($array1);

        if($return) {
            echo 'Yes, it is an array';
        } else {
            echo 'No, it is not an array';
        }

        #---------------------------------------
        echo '<hr />';
        echo '<h3>ARRAY KEYS</h3>';
        $array2 = [1 => 'a', 5 => 'b', 8=> 'c'];
        echo '<pre>';
            print_r($array2);
        echo '</pre>';

        $array_keys = array_keys($array2);
        echo '<pre>';
            print_r($array_keys);
        echo '</pre>';

        #---------------------------------------
        echo '<hr />';
        echo '<h3>SORT</h3>';
        $array3 = array('keyboard', 'mouse', 'hdmi clabe', 'monitor', 'computer cabinet');
        echo '<pre>';
            print_r($array3);
        echo '</pre>';
        
        sort($array3);
        echo '<pre>';
            print_r($array3);
        echo '</pre>';

        #---------------------------------------
        echo '<hr />';
        echo '<h3>ASORT</h3>';
        $array3 = array('keyboard', 'mouse', 'hdmi clabe', 'monitor', 'computer cabinet');
        echo '<pre>';
            print_r($array3);
        echo '</pre>';
        
        asort($array3);
        echo '<pre>';
            print_r($array3);
        echo '</pre>';

        #---------------------------------------
        echo '<hr />';
        echo '<h3>COUNT</h3>';
        $array3 = array('keyboard', 'mouse', 'hdmi clabe', 'monitor', 'computer cabinet');
        echo '<pre>';
            print_r($array3);
            echo count($array3);
        echo '</pre>';

        #---------------------------------------
        echo '<hr />';
        echo '<h3>ARRAY MERGE</h3>';
        $array4 = ['osx', 'windows'];
        $array5 = array('linux');
        $array6 = ['solaris'];
        
        $array_merge = array_merge($array4, $array5, $array6);
        echo '<pre>';
            print_r($array_merge);
        echo '</pre>';

        #---------------------------------------
        echo '<hr />';
        echo '<h3>EXPLODE</h3>';
        $string = '10/03/2021';
        $explode = explode('/', $string);
        echo '<pre>';
            print_r($explode);
            echo $explode[2]. '-' .$explode[1]. '-' .$explode[0];
        echo '</pre>';
        
        #---------------------------------------
        echo '<hr />';
        echo '<h3>IMPLODE</h3>';
        $array7 = ['a', 'b', 'c', 'd'];
        $implode = implode(',', $array7);
        echo $implode;

    ?>

</body>
</html>