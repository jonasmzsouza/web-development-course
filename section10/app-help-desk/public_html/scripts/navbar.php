<?php

    $url = $_SERVER["REQUEST_URI"];
    $index = "index.php";
    


    if (!str_contains($url, $index)) {
        echo '
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" class="d-inline-block align-top logo" alt="">
                App Help Desk
            </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">LOGOUT</a>
                    </li>
                </ul>
        </nav>';
    } else {
        echo '
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" class="d-inline-block align-top logo" alt="">
                App Help Desk
            </a>
        </nav>';
    }

?>