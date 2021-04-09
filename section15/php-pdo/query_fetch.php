<?php

    $dsn = 'mysql:host=localhost;dbname=db_php_pdo';
    $user = 'root';
    $password = '';

    try{
        $connection = new PDO($dsn, $user, $password);

        $query = '
            SELECT * FROM tb_user WHERE id = 2
        ';

        $stmt = $connection->query($query);

        // array of arrays
        // () or (PDO::FETCH_BOTH) - associative and numeric indexes
        // (PDO::FETCH_ASSOC) - associative indexes
        // (PDO::FETCH_NUM) - numeric indexes

        // array of objects
        // (PDO::FETCH_OBJ)

        $user = $stmt->fetch(PDO::FETCH_OBJ);

        echo '<pre>';
        print_r($user);
        echo '</pre>';

        echo $user->name;

    } catch(PDOException $e) {
        echo 'Erro: ' .$e->getCode(). ' Mensagem: ' .$e->getMessage();
        // We can use exception capture to log the error.
    }

?>