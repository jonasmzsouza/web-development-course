<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Array</title>
</head>
<body>

    <?php

        //false - boolen value
        //null or empty - special values

        $employee1 = null;
        $employee2 = '';
        $employee3 = false;

        echo '<h3>NULL VALUES</h3>';
        if(is_null($employee1)) {
            echo 'Yes, the variable is null';
        } else {
            echo 'No, the variable is not null';
        }

        echo '<br />';
        if(is_null($employee2)) {
            echo 'Yes, the variable is null';
        } else {
            echo 'No, the variable is not null';
        }

        echo '<br />';
        if(is_null($employee3)) {
            echo 'Yes, the variable is null';
        } else {
            echo 'No, the variable is not null';
        }        
        
        echo '<h3>EMPTY VALUES</h3>';
        if(empty($employee1)) {
            echo 'Yes, the variable is empty';
        } else {
            echo 'No, the variable is not empty';
        }

        echo '<br />';
        if(empty($employee2)) {
            echo 'Yes, the variable is empty';
        } else {
            echo 'No, the variable is not empty';
        }
        
        echo '<br />';
        if(empty($employee3)) {
            echo 'Yes, the variable is empty';
        } else {
            echo 'No, the variable is not empty';
        }           

    ?>

</body>
</html>