<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>APP Send Mail</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

	<div class="container">

		<div class="py-3 text-center">
			<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
			<h2>Send Mail</h2>
			<p class="lead">Your private email application!</p>
		</div>

		<div class="row">
			<div class="col-md-12">

				<div class="card-body font-weight-bold">
					<form action="processes_sending.php" method="post">
						<div class="form-group">
							<label for="to">To</label>
							<input name="to" type="text" class="form-control" id="to" placeholder="john@domain.com">
						</div>

						<div class="form-group">
							<label for="subject">Subject</label>
							<input name="subject" type="text" class="form-control" id="subject" placeholder="Email Subject">
						</div>

						<div class="form-group">
							<label for="message">Message</label>
							<textarea name="message" class="form-control" id="message"></textarea>
						</div>

						<button type="submit" class="btn btn-primary btn-lg">Send Message</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</html>