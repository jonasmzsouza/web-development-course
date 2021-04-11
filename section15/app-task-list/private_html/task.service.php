<?php

    class TaskService {

        private $connection;
        private $task;

        public function __construct(Connection $connection, Task $task) {
            $this->connection = $connection->connect();
            $this->task = $task;
        }

        public function insert(){
            $query = 'INSERT INTO tb_task(ds_task)VALUES(:ds_task)';
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':ds_task', $this->task->__get('ds_task'));
            $stmt->execute();
        }

        public function recover() {
            $query = '
                SELECT
                    t.id_task, s.ds_status, t.ds_task
                FROM 
                    tb_task as t
                    LEFT JOIN tb_status AS s ON (t.id_status = s.id_status)
            ';
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        /* Can we use the labels named or '?' informing in bindValue the position
        
        $query = "UPDATE tb_task SET ds_task = ? WHERE id_task = ?"
        ...
        $stmt->bindValue(1, $this->task->__get('ds_task'));
        $stmt->bindValue(2, $this->task->__get('id_task'));
        */
        public function update() {
            $query = "UPDATE tb_task SET ds_task = :ds_task WHERE id_task = :id_task";
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':ds_task', $this->task->__get('ds_task'));
            $stmt->bindValue(':id_task', $this->task->__get('id_task'));
            return $stmt->execute();
        }

        public function remove() {
            $query = 'DELETE FROM tb_task WHERE id_task = :id_task';
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':id_task', $this->task->__get('id_task'));
            return $stmt->execute();
        }

        public function accomplished() {
            $query = "UPDATE tb_task SET id_status = :id_status WHERE id_task = :id_task";
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':id_status', $this->task->__get('id_status'));
            $stmt->bindValue(':id_task', $this->task->__get('id_task'));
            return $stmt->execute();
        }

        public function recoverPendingTasks() {
            $query = '
                SELECT
                    t.id_task, s.ds_status, t.ds_task
                FROM 
                    tb_task as t
                    LEFT JOIN tb_status AS s ON (t.id_status = s.id_status)
                WHERE
                    t.id_status = :id_status
            ';
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':id_status', $this->task->__get('id_status'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);      
        }

    }

?>