<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Array</title>
</head>
<body>

    <?php

        //sequential
        echo '<h3>Sequential</h3>';
        //$fruit_list  = array('Banana', 'Apple', 'Strawberry', 'Grape');
        $fruit_list  = ['Banana', 'Apple', 'Strawberry', 'Grape'];

        $fruit_list[] = 'Pineapple';

        echo '<pre>';
            var_dump($fruit_list);
        echo '</pre>';

        echo '<hr />';

        echo '<pre>';
            print_r($fruit_list);
        echo '</pre>';

        echo $fruit_list[2];

        //associative
        echo '<h3>Associative</h3>';
        $fruit_list2 = array(
            'a' => 'Pear', 
            'b' => 'Orange',
            'c' => 'Avocado', 
            'd' => 'Watermelon');

        $fruit_list2['x'] = 'Cashew';            

        echo '<pre>';
            var_dump($fruit_list2);
        echo '</pre>';
        
        echo $fruit_list2['x'];

    ?>

</body>
</html>