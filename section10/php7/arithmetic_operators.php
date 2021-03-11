<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arithmetic Operators</title>
</head>
<body>

    <?php

        //Arithmetic operators
        echo '<h3>Arithmetic operators</h3>';
        $num1 = 15;
        $num2 = 9;
        
        echo "The sum between $num1 and $num2 is: " . ($num1 + $num2);
        echo '<br />';
        echo "The subtraction between $num1 and $num2 is: " . ($num1 - $num2);
        echo '<br />';
        echo "The multiplication between $num1 and $num2 is: " . ($num1 * $num2);
        echo '<br />';
        echo "The division between $num1 and $num2 is: " . ($num1 / $num2);
        echo '<br />';
        echo "The module between $num1 and $num2 is: " . ($num1 % $num2);
        echo '<br />';

        //Assignment of values
        echo '<h3>Assignment of values</h3>';
        $x = 15;

        $x += 5;
        echo $x;
        echo '<br />';

        $x -= 5;
        echo $x;
        echo '<br />';

        $x *= 5;
        echo $x;
        echo '<br />';

        $x /= 5;
        echo $x;
        echo '<br />';
        
        $x %= 5;
        echo $x;
        echo '<br />';
        
        //Increment and decrement
        echo '<h3>Increment and decrement</h3>';
        $A = 9;
        echo "the value of the variable A is $A <br />";
        echo 'the value of the variable after the increment is ' . $A++ . '<br />';
        echo "Updated value A: $A <br />";
        echo 'the value of the variable before the increment is ' . ++$A . '<br />';
        echo 'the value of the variable after the decrement is ' . $A-- . '<br />';
        echo "Updated value A: $A <br />";
        echo 'the value of the variable before the decrement is ' . --$A . '<br />';        

    ?>

</body>
</html>