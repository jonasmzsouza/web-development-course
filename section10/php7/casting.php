<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Casting</title>
</head>
<body>

    <?php
    
        //gettype() = > returns the type of the variable
        $value = '14.52'; //string
        $value2 = (float) $value;  //float, double, real
        $value3 = (integer) $value;  //integer, int
        $value4 = (integer) $value;  //boolean, bool

        echo $value. ' ' .gettype($value);
        echo '<br />';
        echo $value2. ' ' .gettype($value2);
        echo '<br />';
        echo $value3. ' ' .gettype($value3);
        echo '<br />';
        echo $value4. ' ' .gettype($value4);                  

    ?>

</body>
</html>