<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body class="bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto">
				<div class="card mt-5">
				<div class="card-title mt-5">
					<h4 class="bg-success text-white text-center py-3"> Registration Form for Users</h4>
				</div>
				<div class="card-body">
					<!---normal php
					<form action="process.php" method="post">
						<input type="text" placeholder="username" name="name" class="form-control my-2">
						<input type="email" placeholder="email" name="email" class="form-control mb-2">
						<button type="Submit" name="submit" class="btn btn-success">Submit</button>
					</form>
				-->

					<!-----php with ajax--->
					<form method="post">
						<input type="text" placeholder="username" id="user" class="form-control my-2">
						<input type="email" placeholder="email" id="email" class="form-control mb-2">
						<button type="button" id="btn" class="btn btn-success">Submit</button>
					</form>
					<div id="msg" class="text-center"></div>
				</div>
			</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
</body>
</html>