<!DOCTYPE html>
<html>
<head>
	<title>Your Profile</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
				<span class="sr-only"> Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="main.php">Home</a>
			
		</div>
		<ul class="nav navbar-nav navbar-right">

			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
			
		</ul>
		
	</nav>
<div class="row justify-content-center">
	<form action="" method="post">
		
			<div class="form-group">
				<label>Fristname</label>
				<input class="form-control" type="firstname" name="firstname" value="Enter your name">
				<label>Lastname</label>
				<input class="form-control" type="lastname" name="lastname" value="Enter your lastname">
				<label>Email</label>
				<input class="form-control" type="email" name="email" value="Enter your email">
				<label>Phone Number</label>
				<input class="form-control" type="phonenumber" name="phonenumber" value="Enter your phonenumber">
				<label>Password</label>
				<input class="form-control" type="password" name="password" value="Enter your password">
				<label>Confirm Password</label>
				<input class="form-control" type="password" name="confirm_password" value="Confirm your password">
				<button class="btn btn-primary" type="submit" name="save">Save</button>

			</div>
		
		
	</form>
</div>



	



</body>
</html>