<?php
session_start();
require_once 'config.php';

if (isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phone'];
    $password = sha1($_POST['password']);
    $confirm_password = $_POST['confirm_password'];
    
    if($_POST['password'] === $_POST['confirm_password']){
        
        $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password)
            VALUES (?,?,?,?,?) ";
        $stmtinsert = $connection ->prepare($sql);
        $result = $stmtinsert->execute([$firstname,$lastname,$email,$phonenumber,$password]);
        
        if ($result) {
            header('Location: main.php');
            
        }
            
    
    }else{
    echo "Failed!";
    }
    
       
}


?>

<html>
<head>
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="jquery-3.4.1.min.js"></script>
	<script src="sweetalert2.all.min.js"></script>

<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.img {
 
  background-image: url("images/back.jpg");
  height: 100%;
  filter: blur(8px);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
}

.container {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.5); 
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 30%;
  padding: 20px;
  text-align: left;
}
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
<body>

<div class="img"></div>
	<div class="container">
			<form action="" method="post">
		
				
					<h1>Register</h1>
					
					
					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" placeholder="Firstname" required>

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname" type="text" name="lastname" placeholder="Lastname" required>

					<label for="email"><b>Email</b></label>
					<input class="form-control" id="email" type="email" name="email" placeholder="Email" required>

					<label for="phone"><b>Phone Number</b></label>
					<input class="form-control" id="phone" type="number" name="phone" placeholder="Phone Number" required>

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password" type="password" name="password" placeholder="Password" required><br>
					
					<label for="confirm_password"><b>Confirm Password</b></label>
					<input class="form-control" id="confirm_password" type="password" name="confirm_password" placeholder="Re-enter Password Password" required><br>
				
					
					<input class="btn" type="submit" id="register" name="register" value="Sign up"><br><br>
					<p>Already have an account? <a href="login.php">Login here</a>.</p>

				
			
		
	</form>
</div>





</body>

</html>