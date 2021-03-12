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
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

    <?php require_once "scripts/navbar.php" ?>

    <div class="container">
        <div class="row">

            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="scripts/validate_login.php" method="post">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>

                                <?php if(isset($_GET['login']) && $_GET['login'] == 'error') { ?>
                                    <div class="text-danger">Invalid email or password</div> 
                                <?php } ?>

                                <?php if(isset($_GET['login']) && $_GET['login'] == 'error2') { ?>
                                    <div class="text-danger">Log in before accessing protected pages</div> 
                                <?php } ?>                                

                            <button class="btn btn-lg btn-info btn-block" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>