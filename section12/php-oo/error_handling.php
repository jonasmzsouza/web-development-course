<?php

    // have a logic
    try {
        // has a logic where a potential error can occur (exception)
        echo '<h3> *** TRY *** </h3>';

        //$sql = 'Select * from costumers';
        //mysql_query($sql);

        if(!file_exists('require_file_a.php')) {
            throw new Exception("The file in question should have been available at " . date('d/m/Y H:i:s') . ", but it was not. Let's go anyway!");
        }

    } catch (Error $e) {
        echo '<h3> *** CATCH ERROR *** </h3>';
        echo '<p style="color: red">' . $e . '</p>';
        //stores the error in a database
    } catch (Exception $e) {
        echo '<h3> *** CATCH Exception *** </h3>';
        echo '<p style="color: red">' . $e . '</p>';
        //stores the error in a database
    }finally {
        echo '<h3> *** FINALLY *** </h3>';
    }

?>