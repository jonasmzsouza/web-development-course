<?php 

    require_once "access_validator.php";
    require_once "search_ticket.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP Help Desk</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom Style-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>

    <?php require_once "navbar.php" ?>

    <div class="container">
        <div class="row">

            <div class="card-template">
                <div class="card">
                    <div class="card-header">
                        Consult ticket 
                    </div>

                    <div class="card-body">
                        
                        <?php foreach($tickets as $ticket) { ?>

                            <?php
                                $ticket_data = explode('#', $ticket);

                                if(count($ticket_data) < 3) {
                                    continue;
                                }
                            ?>
                    
                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title"><?=$ticket_data[1]?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?=$ticket_data[2]?></h6>
                                <p class="card-text"><?=$ticket_data[3]?></p>
                            </div>
                        </div>

                        <?php } ?>

                        <div class="row mt-5">
                            <a class="btn btn-lg btn-warning btn-block" href="home.php">
                                Go Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>