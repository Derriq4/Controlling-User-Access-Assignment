<?php
include '../connection.php';
session_start();


//variables to store input
$email = $newPass = '';
$emailErr = $newPassErr = $encrypted = '';

$_SESSION['updateSuccess'] = "reset successful login with new password";
$_SESSION['typeAlert'] = "info";

if (isset($_POST['update'])) {
	# code...
	if (empty($_POST['emailReset'])) {
		# code...
        $emailErr = "email is required";
	} else {
		$email = $_POST['emailReset'];
	}

		if (empty($_POST['passwordReset'])) {
		# code...
        $newPassErr = "password is required";
	} else {
		$newPass = $_POST['passwordReset'];
		$encrypted = md5($newPass);
	}


   if (empty($emailErr) && empty($newPassErr)) {
   	# code...

	$resetSql = "UPDATE users SET userpassword='$encrypted' WHERE email='$email'";

	$result = mysqli_query($conn,$resetSql);

	if ($result) {
		# code...
		$_SESSION['updateSuccess'];
		header('location: ../indexlogin.php?update');
	}
   } 
   else {
   	  echo "invalid details";
   }

}
 


?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Reset password</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../css/style.css">

	</head>

	<body>

	<div class="container">
	 <nav class="navbar navbar-inverse">
  	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">WebDev</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="public/about.php">About</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="public/Programs">Products</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="indexsign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="indexlogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav> 
	</div>

		<div class="wrapper" style="background-image: url('../images/wb1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="../images/webdev.jpg" alt="">
				</div>
				<form action="reset.php" method="post"> 			
					<h3>Reset Password</h3>
					<div class="form-wrapper">
						   <input type="email" name="emailReset" id="email" class="form-control" placeholder="Enter your Email">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" onkeyup="check();" name="passwordReset" id="password" class="form-control" placeholder="New password">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" onkeyup="check();" name="conpass" id="conpass" class="form-control" placeholder="Confirm password">
						<i class="zmdi zmdi-lock"></i>
						<span id="message"></span>
					</div>
					<button type="submit" id="update" name="update" value="reset password">Reset
						<i class="zmdi zmdi-arrow-right"></i></button>
				</form>
			</div>
		</div>
	<script type="text/javascript">
		 function check(){
		 	if (document.getElementById('password').value === document.getElementById('conpass').value) {
                   
                   document.getElementById('message').style.color = "green";
                   document.getElementById('message').innerHTML = "passwords match";
                   document.getElementById('save').disabled = false;
		 	} else {

                   document.getElementById('message').style.color = "red";
                   document.getElementById('message').innerHTML = "passwords do not match";
                   document.getElementById('save').disabled = true;
		 	}
		 }



	</script>


<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>