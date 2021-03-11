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

        $records = array(
            array('title' => 'News title 1', 'content' => 'News content 1'),
            array('title' => 'News title 2', 'content' => 'News content 2'),
            array('title' => 'News title 3', 'content' => 'News content 3')
        );

        echo '<pre>';
        print_r($records);
        echo '</pre>';

        echo '<hr />';
        echo '<h3>WHILE</h3>';
        $idx = 0;
        while ($idx < count($records)) {
            echo '<h3>' .$records[$idx]['title']. '</h3>';
            echo '<p>' .$records[$idx]['content']. '</p>';
            echo '<hr />';
            $idx++;
        }

        #---------------------------------------
        echo '<hr />';
        echo '<h3>DO WHILE</h3>';
        $idx = 0;
        do {
            echo '<h3>' .$records[$idx]['title']. '</h3>';
            echo '<p>' .$records[$idx]['content']. '</p>';
            echo '<hr />';
            $idx++;
        } while ($idx < count($records)); 

        #---------------------------------------
        echo '<hr />';
        echo '<h3>FOR</h3>';
        for ($idx = 0; $idx < count($records); $idx++){
            echo '<h3>' .$records[$idx]['title']. '</h3>';
            echo '<p>' .$records[$idx]['content']. '</p>';
            echo '<hr />';
        }

        #---------------------------------------
        echo '<hr />';
        echo '<h3>FOREACH</h3>';
        $items = array('table', 'chair', 'stove', 'refrigerator', 'sofa');
        foreach($items as $item) {
            echo "$item ";

            if($item == 'stove') {
                echo '(* 20% off)';
            }

            echo '<br />';
        }

        $employee = array(
            array('name' => 'John', 'wage' => 2150),
            array('name' => 'Mary', 'wage' => 2700),
            array('name' => 'Paul', 'wage' => 2550)
        );
        echo '<pre>';
        print_r($employee);
        echo '</pre>';
        foreach($employee as $id => $emp) {

            foreach($emp as $id2 => $value) {
                echo "$id2 - $value <br />";
            }
            echo '<hr />';
        }

    ?>

</body>
</html>