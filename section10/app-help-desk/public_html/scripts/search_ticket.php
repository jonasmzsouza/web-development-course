<?php 

    $tickets = array();

    $file = fopen('../../private_php/file.hd', 'r');

    while(!feof($file)) {

        $record = fgets($file);
        $record_details = explode('#', $record);

        // we will only display the ticket, if it was created by the user
        if($_SESSION['profile_id'] == 2) {
    
            // if authenticated user is not the opening user of the ticket then do nothing
            if($_SESSION['id'] != $record_details[0]) {
                continue;
            } else {
                $tickets[] = $record; // add the file record to the $tickets array
            }
    
        } else {
            $tickets[] = $record; //add the file record to the $tickets array
        }
    
    }

    fclose($file);
?>