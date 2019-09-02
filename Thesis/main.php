<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					
				</button>
				<a class="navbar-brand" href="#">Webpage</a>
				
			</div>
			<div  class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav">
					<li ><a  href="#">Airport</a></li>
					<li ><a  href="#">Urban Lines</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Terminals 
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">International Terminal</a></li>
							<li><a href="#">North Terminal</a></li>
							<li><a href="#">South Terminal</a></li>
							<li><a href="#">Southeast Terminal</a></li>
						</ul>
					</li>
					<li ><a href="#">Eco Volis Station</a></li>
					<li ><a href="#">Mobike</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" name="Search" >
					</div>	
					<button class="btn btn-default" name="SearchButton">Go</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>Profile<span class="caret"></span></a>
					
					<ul class="dropdown-menu">
						<li><a href="account.php"><?php echo "Hi, ".$username; ?></a></li>
						<li><a href="account.php">Edit Profile</a></li>		
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
					</ul>
					</li>
				</ul>
			</div>		
		</div>		
	</nav>

	<div class="container">
		<h3>Welcome</h3>
		<p>This is a Web Page. Hope you like it!</p>
	</div>
</body>
</html>