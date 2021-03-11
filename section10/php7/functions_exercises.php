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

        function calculateIncomeTax($value) {
            $tax = 0;
            $aliquot = 0;

            if ($value <= 1903.98) {
                $tax = 'You are free!';
            } else if ($value >= 1903.99 && $value <= 2826.65) {
                $aliquot = 7.5;
                $tax = $value * ($aliquot / 100);
            } else if ($value >= 2826.66 && $value <= 3751.05) {
                $aliquot = 15;
                $tax = $value * ($aliquot / 100);
            } else if ($value >= 3751.06 && $value <= 4664.68) {
                $aliquot = 22;
                $tax = $value * ($aliquot / 100);
            } else if ($value > 4664.68) {
                $aliquot = 27.5;
                $tax = $value * ($aliquot / 100);
            }

            $result = "For income $$value the tax rate is $aliquot%. The tax amount is: $tax"; 
            
            echo $result;
        }

        echo calculateIncomeTax(4558.28);

    ?>

</body>
</html>