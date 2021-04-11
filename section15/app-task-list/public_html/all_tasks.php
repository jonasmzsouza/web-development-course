<?php

	$action = 'recover';
	require 'task_controller.php';
	
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Task List</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
		integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
		crossorigin="anonymous" />

	<!-- Custom Style-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Custom Script-->
	<script src="action.js"></script>

</head>

<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
				Task List
			</a>
		</div>
	</nav>

	<div class="container app">
		<div class="row">
			<div class="col-sm-3 menu">
				<ul class="list-group">
					<li class="list-group-item"><a href="index.php">Pending tasks</a></li>
					<li class="list-group-item"><a href="new_task.php">New Task</a></li>
					<li class="list-group-item active"><a href="#">All tasks</a></li>
				</ul>
			</div>

			<div class="col-sm-9">
				<div class="container page">
					<div class="row">
						<div class="col">
							<h4>All Tasks</h4>
							<hr />

							<?php foreach($tasks as $key => $task) { ?> 
								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9" id="task_<?= $task->id_task ?>">
										<?= $task->ds_task ?> (<?= $task->ds_status ?>)
									</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger" onclick="remove(<?= $task->id_task ?>)"></i>

										<?php if($task->ds_status == 'pending') { ?>
											<i class="fas fa-edit fa-lg text-info" onclick="edit(<?= $task->id_task ?>, '<?= $task->ds_task ?>')"></i>
											<i class="fas fa-check-square fa-lg text-success" onclick="accomplished(<?= $task->id_task ?>)"></i>
										<?php } ?>
									</div>
								</div>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>