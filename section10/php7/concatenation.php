<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Concatenation</title>
</head>
<body>

    <?php

        $name = 'Jonas';
        $color = 'blue';
        $age = 32;
        $activity = 'to read books';

        echo 'Hello '. $name .', i see that your favorite color is '. $color .'. I see that you are '. $age .' years old and that like '. $activity .'.';

        echo '<br/>';

        echo "Hello $name, i see that your favorite color is $color. I see that you are $age years old and that like $activity .";
    ?>

</body>
</html>