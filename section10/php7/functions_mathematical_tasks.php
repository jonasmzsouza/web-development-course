<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Functions: Mathematical Tasks</title>
</head>
<body>

    <?php

        $num = 14.855478;
        echo "NUMBER: $num";
        echo '<br /> CEIL: ' . ceil($num);
        echo '<br /> FLOOR: ' . floor($num);
        echo '<br /> FLOOR: ' . floor($num);
        echo '<br /> ROUND: ' . round($num);
        echo '<br /> RAND: '. rand(5, 25);
        echo '<br /> RANDMAX: '. getrandmax();
        echo '<br /> SQRT: '. sqrt($num);

    ?>

</body>
</html>