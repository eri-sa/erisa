<?php  
session_start();
require_once 'config.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    
   
        
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
        $stmtinsert =$ConnectingDB ->prepare($sql);
        $result = $stmtinsert->execute([$email, $password]);
       while($row = $stmtinsert->fetch_array()):
        	$_SESSION['email'] = $row['email'];
        	$_SESSION['password'] = $row['password'];
       endwhile;

        if ($password === $_SESSION['password']) {
            header('Location: main.php');
            
        }
            
    
    }else{
    echo "Failed!";
    
    
       
}



?>


<html>
<head>
	<title> Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
<style >
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.img {
  /* The image used */
  background-image: url("images/back.jpg");

  min-height: 655px;
  filter: blur(8px);
  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 30%;
  padding: 30px;
  text-align: left;
}




/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px 14px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}


</style>
</head>
<body >

	<div class="img"></div>
	<form action="login.php" method="post">
		
			<div class="container">
				
					<h1>Login</h1>
				
					<hr class="mb-3">
					<label for="email"><b>Email</b></label>
					<input class="form-control" id="email" type="email" name="email" placeholder="Enter yor email"  required>

					<label for="password"><b>Password</b></label>
			 		<input class="form-control" id="password" type="password" name="password" placeholder="Enter your password" required><br>
					<p><a href="register.php">Forgot Email or Password?</a></p>
					<hr class="mb-3">
					<input class="btn btn-dark" type="submit" id="login" name="login" value="Sign in"><br><br>
				    <p><a href="register.php">Create an account</a></p>
			</div>	
		
	</form>
	

</body>
</html>