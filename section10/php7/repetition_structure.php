<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Repetition Structure</title>
</head>
<body>

    <?php

        echo '<h3>WHILE</h3>';
        $num = 1;
        echo '*** loop start ***<br / >';
        while($num < 10) {
            $num++;
            
            if($num == 3 || $num == 8) {
                continue;
            }
            
            echo "$num<br />";

            /*if($num > 5){
                break;
            }*/
        }
        echo '*** loop end ***';

        #---------------------------------------
        echo '<hr />';
        echo '<h3>DO WHILE</h3>';
        $x = 1;
        do {
            echo "X = $x <br />";

            $x++;
            //continue
            //break
        } while($x < 9);
        
        #---------------------------------------
        echo '<hr />';
        echo '<h3>FOR</h3>';
        for($x = 1; $x <= 10; $x++){
            echo "X = $x <br />";

            //break
            //continue
        }
        
    ?>

</body>
</html>