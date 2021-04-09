<?php

    $dsn = 'mysql:host=localhost;dbname=db_php_pdo';
    $user = 'root';
    $password = '';

    try{
        $connection = new PDO($dsn, $user, $password);

        $query = '
            CREATE TABLE tb_user(
                id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                name VARCHAR(50) NOT NULL,
                email VARCHAR(100) NOT NULL,
                password VARCHAR(32) NOT NULL
            )
        '; 

        $return = $connection->exec($query); 
        // 0 - the table is created, but the return is zero, as there are no records yet.
        echo $return;

        $query = '
            INSERT INTO tb_user(
                name, email, password
            )values(
                "Jonas M", "jonas@email.com", "123456"
            )
        '; 

        $return = $connection->exec($query);
        // 1 - returns one, because the table exists and we are using DML commands, that is, modifying the record.
        echo $return;

        $query = '
            INSERT INTO tb_user(
                name, email, password
            )values(
                "John W.", "john@email.com", "123456"
            )
        '; 
        $return = $connection->exec($query); 
        echo $return;

        $query = '
            INSERT INTO tb_user(
                name, email, password
            )values(
                "Rebecca P.", "rebecca@email.com", "123456"
            )
        ';

        $return = $connection->exec($query); 
        echo $return;

    } catch(PDOException $e) {
        echo 'Erro: ' .$e->getCode(). ' Mensagem: ' .$e->getMessage();
        // We can use exception capture to log the error.
    }

?>