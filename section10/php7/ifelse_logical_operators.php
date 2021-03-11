<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - IfElse: Logical Operators</title>
</head>
<body>

    <?php

        // && or AND -> returns true if all expressions results are true
        //t and f = f
        if(25 == '25' && 25 > 35){
            echo 'True';
        }else{
            echo 'False';
        }

        echo '<br>';

        // || or OR -> returns true if at least one of the results of the expressions is true
        //t and f = t
        if(25 == '25' || 25 > 35){
            echo 'True';
        }else{
            echo 'False';
        }

        echo '<br>';

        // XOR -> returns true only if a result of the expressions is true
        //t and f = t
        if(25 == '25' XOR 25 > 35){
            echo 'True';
        }else{
            echo 'False';
        }

        echo '<br>';
        
        // | -> inverted the result returned by the expression
        //t and f = t = !(t) = f
        if(!(25 == '25' XOR 25 > 35)){
            echo 'True';
        }else{
            echo 'False';
        }

        echo '<br>';            
    ?>

</body>
</html>