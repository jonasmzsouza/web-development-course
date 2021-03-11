<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Functions: Manipulate Strings</title>
</head>
<body>

    <?php

        $text = 'Complete PHP Course';

        //string to lower
        echo $text . '<br />';
        echo strtolower($text);
        echo '<hr />';

        //string to upper
        echo $text . '<br />';
        echo strtoupper($text);
        echo '<hr />';

        //upper case first
        echo $text . '<br />';
        echo ucfirst($text);
        echo '<hr />';
        
        //string length
        echo $text . '<br />';
        echo strlen($text);
        echo '<hr />';

        //string replace
        echo $text . '<br />';
        echo str_replace('PHP', 'JavaScript', $text);
        echo '<hr />';
        
        //sub string
        echo $text . '<br />';
        echo substr($text, 0, 12) . '...';
        echo '<hr />';           

    ?>

</body>
</html>