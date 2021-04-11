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

	<?php if(isset($_GET['inclusion']) && $_GET['inclusion'] == 1) { ?>
	<div class="bg-success pt-2 text-white d-flex justify-content-center">
		<h5>Task successfully inserted!</h5>
	</div>
	<?php } ?>

	<div class="container app">
		<div class="row">
			<div class="col-md-3 menu">
				<ul class="list-group">
					<li class="list-group-item"><a href="index.php">Pending tasks</a></li>
					<li class="list-group-item active"><a href="#">New Task</a></li>
					<li class="list-group-item"><a href="all_tasks.php">All tasks</a></li>
				</ul>
			</div>

			<div class="col-md-9">
				<div class="container page">
					<div class="row">
						<div class="col">
							<h4>New Task</h4>
							<hr />

							<form action="task_controller.php?action=insert" method="post">
								<div class="form-group">
									<label>Description of the task:</label>
									<input type="text" class="form-control" name="ds_task"
										placeholder="Example: Washing the car">
								</div>

								<button class="btn btn-success">Register</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>