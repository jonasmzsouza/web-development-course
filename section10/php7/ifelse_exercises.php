<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - IfElse: Exercises</title>
</head>
<body>

    <?php

        $age = 30;
        $weight = 67.8;
        $result;

        if(($age >= 16  && $age <= 69) && $weight >= 50) {
            $result = 'meets requirements';
        } else {
           $result = 'does not meet the requirements';
        }
    ?>

    <h1>Donate blood</h1>
    <p>Can the person donate blood or not??
        <?= $result?>
    </p>

</body>
</html>