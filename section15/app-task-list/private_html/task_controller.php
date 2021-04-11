<?php

    require "../private_html/task.model.php";
    require "../private_html/task.service.php";
    require "../private_html/connection.php";

    $action = isset($_GET['action']) ? $_GET['action'] : $action;

    if($action == 'insert') {

        if(empty($_POST['ds_task'])) {
            header('Location: new_task.php');
        } else {
            $task = new Task();
            $task->__set('ds_task', $_POST['ds_task']);
    
            $connection = new Connection();
        
            $taskService = new TaskService($connection, $task);
            $taskService->insert();
        
            header('Location: new_task.php?inclusion=1');
        }

    } else if($action == 'recover') {

        $task = new Task();
        $connection = new Connection();

        $taskService = new TaskService($connection, $task);
        $tasks = $taskService->recover();
        
    } else if($action == 'update') {

        if(empty($_POST['ds_task']) && isset($_GET['page'])) {
            header('location: '. $_GET['page'] .'.php');
        } else {
            $task = new Task();
            $task->__set('id_task', $_POST['id_task'])
                ->__set('ds_task', $_POST['ds_task']);
    
            $connection = new Connection();
    
            $taskService = new TaskService($connection, $task);
            if($tasks = $taskService->update()) {
                if(isset($_GET['page'])) {
                    header('location: '. $_GET['page'] .'.php');
                }
            }
        }

    } else if($action == 'remove') {

        $task = new Task();
        $task->__set('id_task', $_GET['id_task']);

        $connection = new Connection();

        $taskService = new TaskService($connection, $task);
        $taskService->remove();
        
        if(isset($_GET['page'])) {
            header('location: '. $_GET['page'] .'.php');
        }

    } else if($action == 'accomplished') {

        $task = new Task();
        $task->__set('id_task', $_GET['id_task'])
            ->__set('id_status', 2);

        $connection = new Connection();

        $taskService = new TaskService($connection, $task);
        $taskService->accomplished();
        
        if(isset($_GET['page'])) {
            header('location: '. $_GET['page'] .'.php');
        }

    } else if($action == 'recoverPendingTasks') {

        $task = new Task();
        $task->__set('id_status', 1);

        $connection = new Connection();

        $taskService = new TaskService($connection, $task);
        $tasks = $taskService->recoverPendingTasks();

    }

?>