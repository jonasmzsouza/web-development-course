<?php require_once "access_validator.php" ?>

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
                        Main
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="create_ticket.php">
                                    <img class="main_icon" src="../img/form_create_ticket.png">
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="consult_ticket.php">
                                    <img class="main_icon" src="../img/form_consult_ticket.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>