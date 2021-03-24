<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up|Log In</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>

	<?php
      require 'connection.php';
    ?>

	<div class="container">
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">WebDev</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Home</a></li>
      <li><a href="index.html">About</a></li>
      <li><a href="index.html">Contact</a></li>
      <li><a href="index.html">Programs</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="indexsign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="indexlogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav> 
	</div>

		<div class="wrapper" style="background-image: url('images/wb1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/webdev.jpg" alt="">
				</div>
				<form action="authen/register.php" method="post"> 
				<p class="alert alert-<?php 
                        if (isset($_GET['registered'])) {
                           # code...
                          echo $_SESSION['classTypeSuccess'];
                          session_unset();
                          session_destroy();
                       } elseif (isset($_GET['notreg'])) {
                           # code...
                               # code...
                          echo $_SESSION['classTypeError'];
                          session_unset();
                          session_destroy();
                       } elseif (isset($_GET['wrongCred'])){
                          echo $_SESSION['classTypeError'];
                          session_unset();
                          session_destroy();
                       }
                 ?>">
                    <?php
                       if (isset($_GET["registered"])) {
                           # code...
                          if (isset($_SESSION["reg"])) {
                            # code
                          echo $_SESSION["reg"];
                          session_unset();
                          session_destroy();
                          } else {
                            echo "registration successfull";
                          }
                     

                       } elseif (isset($_GET["notreg"])) {
                           # code...
                               # code...
                         if (isset($_SESSION["noreg"])) {
                           # code...
                          echo $_SESSION["noreg"];
                          session_unset();
                          session_destroy();
                         } else
                          {
                            echo "not registered";
                          }
                       
                       } elseif (isset($_GET['wrongCred'])) {
                         # code...
                         if (isset($_SESSION['userTaken'])) {
                           # code...
                           echo $_SESSION['userTaken'];
                           session_unset();
                           session_destroy();

                         } else {
                           echo "Credentials (Username or Email) currently exist. Try different credentials";
                         }
                       }

                    ?>


                </p>					
					<h3>Registration Form</h3>
					<div class="form-group">
						<input type="text" placeholder="First Name" name="fname" id="fname" class="form-control">
						<input type="text" placeholder="Last Name" 
						name="lname" id="lname"class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="text" name="username" id="username" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" name="email" id="email"placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="role" id="role" class="form-control" >
							<option value="" disabled selected>Select Role</option>
							<option value="admin">Admin</option>
							<option value="user">User</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" onkeyup="check();" name="password" id="password" placeholder="Enter Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" onkeyup="check();" name="conpass" id="conpass" placeholder="Confirm Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
         				<span id="message"></span>						
					</div>
					<button id="save" name="save">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
					<button><a href="authen/reset.php" style="color: white;">Reset
						<i class="zmdi zmdi-arrow-right"></i>
					</button>					
					<button><a href="indexlogin.php" style="color: white;">Login</a><i class="zmdi zmdi-arrow-right"></i></button>
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