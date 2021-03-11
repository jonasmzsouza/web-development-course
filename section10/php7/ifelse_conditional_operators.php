<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - IfElse: Conditional Operators</title>
</head>
<body>

    <?php

        //==
        if(25 == '25'){
            echo 'True';
        }else{
            echo 'False';
        }

        echo '<br>';

        //===
        if(25 === '25'){
            echo 'True';
        }else{
            echo 'False';
        }

        echo '<br>';

        //!= or <>
        if(25 != 15){
            echo 'True';
        }else{
            echo 'False';
        }

        echo '<br>';

        //!==
        if(25 !== 25){
            echo 'True';
        }else{
            echo 'False';
        }

        echo '<br>';

        //<
        if(25 < 15){
            echo 'True';
        }else{
            echo 'False';
        }

        echo '<br>';

        //>
        if(25 > 15){
            echo 'True';
        }else{
            echo 'False';
        }

        echo '<br>';

        //<=
        if(25 <= 15){
            echo 'True';
        }else{
            echo 'False';
        }

        echo '<br>';

        //>=
        if(-25 >= 15){
            echo 'True';
        }else{
            echo 'False';
        }
    ?>

</body>
</html>