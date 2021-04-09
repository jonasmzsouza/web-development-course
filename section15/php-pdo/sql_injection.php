<?php

    if(!empty($_POST['user']) && !empty($_POST['password'])) {

        $dsn = 'mysql:host=localhost;dbname=db_php_pdo';
        $user = 'root';
        $password = '';

        try{
            $connection = new PDO($dsn, $user, $password);

            /* vulnerable to sql injection:
            security threat that takes advantage of flaws in systems that interact with databases using SQL commands, 
            where the attacker is able to insert a custom and improper SQL statement into a query (SQL query) 
            through the data input of an application, such as application forms or URL */

            $query = "SELECT * FROM tb_user WHERE ";
            $query .= " email = '{$_POST['user']}' ";
            $query .= " AND password = '{$_POST['password']}' ";

            echo $query;

            $stmt = $connection->query($query); 
            $user = $stmt->fetch();
            echo '<hr>';

            echo '<pre>';
            print_r($user);
            echo '</pre>';

        } catch(PDOException $e) {
            echo 'Erro: ' .$e->getCode(). ' Mensagem: ' .$e->getMessage();
        }

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center" style="height:100vh">
        <div class="row d-flex align-items-center">
            <div class="col">
                <form action="sql_injection.php" method="post">
                    <div class="mb-3">
                        <input type="text" name="user" placeholder="user" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" placeholder="password" class="form-control">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>