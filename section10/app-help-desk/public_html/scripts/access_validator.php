<?php

    session_start();
    
    if(!($_SESSION['authenticated']) || $_SESSION['authenticated'] != 'YES') {
        header('Location: ../index.php?login=error2');
    }
   
?>