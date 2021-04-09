<?php

    $dsn = 'mysql:host=localhost;dbname=db_php_pdo';
    $user = 'root';
    $password = '';

    try{
        $connection = new PDO($dsn, $user, $password);

        $query = '
            SELECT * FROM tb_user
        ';

        echo '<h1>Foreach</h1>';
        $stmt = $connection->query($query);
        $users_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($users_list as $key => $value) {
            echo $value['name'];
            echo '<hr />';
        }

        echo '<hr />';

        echo '<h1>Foreach - Query on the run</h1>';
        foreach($connection->query($query) as $key => $value) {
            print_r($value['name']);
            echo '<hr>';
        } 


    } catch(PDOException $e) {
        echo 'Erro: ' .$e->getCode(). ' Mensagem: ' .$e->getMessage();
        // We can use exception capture to log the error.
    }

?>