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

        $general_list = [];

        $general_list['fruits'] = array(
            1 => 'Pear', 
            2 => 'Orange',
            3 => 'Avocado', 
            4 => 'Watermelon'
        );
        $general_list['people'] = [
            1 => 'John',
            2 => 'Mary', 
            3 => 'Paul'
        ];

        echo '<pre>';
        print_r($general_list);
        echo '</pre>';

        echo '<hr />';
        echo $general_list['fruits'][3];
        echo '<br />';
        echo $general_list['people'][3];

    ?>

</body>
</html>