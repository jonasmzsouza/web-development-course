<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Functions: Manipulate Dates</title>
</head>
<body>

    <?php

        echo date('d/m/Y H:i');
        echo '<br / >';

        echo date_default_timezone_get();
        echo '<br / >';

        date_default_timezone_set('America/Sao_Paulo');
        echo date('d/m/Y H:i');

        $start_date = '2021-03-10';
        $final_date = '2021-03-28';
        echo '<br />';

        $start_time = strtotime($start_date);
        echo $start_date . ' - ' . $start_time;
        echo '<br />';

        $final_time = strtotime($final_date);
        echo $final_date . ' - ' . $final_time;

        $time_difference = abs($final_time - $start_time); 

        echo '<br />';
        echo "The difference in seconds between the dates: $start_date and $final_date is: $time_difference";
        
        $total_seconds_day = 24 * 60 * 60;

        echo '<br />';
        echo "One day has $total_seconds_day seconds";

        $days_difference = $time_difference / $total_seconds_day;

        echo '<br />';
        echo "The difference in days between the dates: $start_date and $final_date is: $days_difference";

    ?>

</body>
</html>