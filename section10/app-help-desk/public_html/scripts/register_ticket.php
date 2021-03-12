<?php

    session_start();

    $file = fopen('../../private_php/file.hd', 'a');

    foreach ($_POST as $key => $value) {       
        $_POST[str_replace('#', '-', $key)] = str_replace('#', '-', $value);
    }
    $text = $_SESSION['id'] . '#' . implode('#', $_POST) . PHP_EOL;

    fwrite($file, $text);

    fclose($file);

    header('Location: create_ticket.php?');

?>