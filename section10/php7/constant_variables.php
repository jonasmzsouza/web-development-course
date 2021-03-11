<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Constant variables</title>
</head>
<body>

    <?php

        define('DB_URL', 'dev_user_address');
        define('DB_USER', 'dev_user');
        define('DB_PASSWORD', 'dev_password');

        echo DB_URL . '<br/> ';
        echo DB_USER . '<br/> ';
        echo DB_PASSWORD . '<br/> ';
    ?>

</body>
</html>