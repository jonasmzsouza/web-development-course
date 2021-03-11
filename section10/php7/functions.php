<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Functions</title>
</head>
<body>

    <?php

        //void
        function showWelcome() {
            echo 'Welcome to the PHP course!<br />';
        }
        showWelcome();

        //return
        function calculateLandArea($width, $length) {
            return $width * $length;
        }
        $result = calculateLandArea(25, 45);
        echo $result;

    ?>

</body>
</html>