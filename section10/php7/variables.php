<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Variables</title>
</head>
<body>

    <?php

        //string
        $name = 'Jonas Muniz';
        //int
        $age = 32;
        //float
        $weight = 67.8;
        //boolean
        $smoker_yn = false;
    ?>

    <h1>Registration form</h1>
    <br/>
    <p>Name: <?= $name ?></p>
    <p>Age: <?= $age ?></p>
    <p>Weight: <?= $weight ?></p>
    <p>Smoker: <?= $smoker_yn ?></p>

</body>
</html>