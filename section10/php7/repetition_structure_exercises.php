<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Repetition Structure</title>
</head>
<body>

    <?php

        $array = [];

        while(count($array) <= 5) {
            $num = rand(1, 60);
            
            if (!in_array($num, $array)){
                $array[] = $num;
            }
        }

        echo '<pre>';
            echo print_r($array);
        echo '</pre>';        

    ?>

</body>
</html>