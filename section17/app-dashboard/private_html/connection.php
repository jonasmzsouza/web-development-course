<?php

    /*
    *  database connection class
    */
    class Connection {
        private $host = 'localhost';
        private $dbname = 'dashboard';
        private $user = 'root';
        private $password = '';

        public function connect() {
            try {
                $connection = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->password"
                );

                $connection->exec('set charset utf8');

                return $connection;

            } catch (PDOException $e) {
                echo '<p>'.$e->getMessage().'</p>';
            }
        }
    }
    
?>