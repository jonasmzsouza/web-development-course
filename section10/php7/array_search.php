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

        $fruit_list  = ['Banana', 'Apple', 'Strawberry', 'Grape'];

        echo '<pre>';
            print_r($fruit_list);
        echo '</pre>';

        //IN ARRAY
        echo '<h3>IN ARRAY</h3>';
        $isExisting = in_array('Apple', $fruit_list); //in_array: 0-false, 1-true - return true or false

        if($isExisting) {
            echo 'Yes, the searched value exists in the array';
        } else {
            echo 'No, the searched value does not exist in the array';
        }

        //ARRAY SEARCH
        echo '<h3>ARRAY SEARCH</h3>';
        $isExisting2 = array_search('Pineapple', $fruit_list); //return index or null

        if($isExisting2 != null) {
            echo 'Yes, the searched value exists in the array';
        } else {
            echo 'No, the searched value does not exist in the array';
        }

        //MULTIDIMENSIONAL ARRAY SEARCH
        echo '<h3>MULTIDIMENSIONAL ARRAY SEARCH</h3>';
        $general_list = [
            'fruits' => $fruit_list,
            'people' => ['John', 'Mary', 'Paul']
        ];

        echo '<pre>';
            print_r($general_list);
        echo '</pre>';
        
        echo in_array('Grape', $general_list['fruits']);

    ?>

</body>
</html>