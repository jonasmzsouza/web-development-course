<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Switch</title>
</head>
<body>

    <?php
    
        $parameter = 2;

        switch ($parameter) {
            case 1:
                echo 'Entered the case 1';
                break;
            case 2:
                echo 'Entered the case 2';
                break;
            case 3:
                echo 'Entered the case 3';
                break;                
            default:
            echo 'Entered the default';
                break;                            
        }

    ?>

</body>
</html>