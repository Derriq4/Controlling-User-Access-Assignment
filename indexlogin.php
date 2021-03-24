<?php
	session_start();

	// if($_SERVER['REQUEST_METHOD'] == "POST")
	// {
	// 	//something was posted
	// 	$user_name = $_POST['user_name'];
	// 	$password = $_POST['password'];

	// 	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
	// 	{

	// 		//read from database
	// 		$query = "select * from users where user_name = '$user_name' limit 1";
	// 		$result = mysqli_query($con, $query);

	// 		if($result)
	// 		{
	// 			if($result && mysqli_num_rows($result) > 0)
	// 			{

	// 				$user_data = mysqli_fetch_assoc($result);
					
	// 				if($user_data['password'] === $password)
	// 				{

	// 					$_SESSION['user_id'] = $user_data['user_id'];
	// 					header("Location: index1.php");
	// 					die;
	// 				}
	// 			}
	// 		}
			
	// 		echo "wrong username or password!";
	// 	}else
	// 	{
	// 		echo "wrong username or password!";
	// 	}
	// }
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
              <p class="alert alert-<?php 
                 if (isset($_GET['wrongCredLogin'])) {
                     # code...
                      if (isset($_SESSION['alertTypeError'])) {
                        # code...
                        echo $_SESSION['alertTypeError'];
                        session_unset();
                        session_destroy();
                      } elseif($_GET['update']){
                        echo $_SESSION['alertTypeError'];
                        session_unset();
                        session_destroy();
                      } 
                      else {
                        echo "danger";
                      }
                   }

                            if (isset($_GET['nverified'])) {
                     # code...
                      if (isset($_SESSION['alertTypeError'])) {
                        # code...
                        echo $_SESSION['alertTypeError'];
                        session_unset();
                        session_destroy();
                      } elseif($_GET['update']){
                        echo $_SESSION['alertTypeError'];
                        session_unset();
                        session_destroy();
                      } 
                      else {
                        echo "danger";
                      }
                   }


                 ?>"> 
                <?php 
                   if (isset($_GET['wrongCredLogin'])) {
                     # code...
                      if (isset($_SESSION['userUnaivable'])) {
                        # code...
                        echo $_SESSION['userUnaivable'];
                        session_unset();
                        session_destroy();
                      }
                       else {
                        echo "user details are wrong, kindly check and try again";
                      }
                   }

                   if (isset($_GET['nverified'])) {
                     # code...
                      if (isset($_SESSION['notVerified'])) {
                        # code...
                        echo $_SESSION['notVerified'];
                        session_unset();
                        session_destroy();
                      } else {
                        echo "not verified yet";
                      }
                   }

                ?>
              </p>
              <p class="alert alert-<?php 
                      if(isset($_GET['update'])){
                          if($_SESSION['typeAlert']){
                            echo $_SESSION['typeAlert'];
                            session_unset();
                            session_destroy();
                          } else {
                            echo "info";
                          }
                      }

                ?>">
            <?php  
              if (isset($_GET['update'])) {
                        # code...
                        if (isset($_SESSION['updateSuccess'])) {
                          # code...
                        echo $_SESSION['updateSuccess'];
                        session_unset();
                        session_destroy();
                        } else {
                          echo "reset successful login with new password";
                        }
                      }
                 ?> 				
				<form action="authen/access.php" method="post">
					<h3>Log In</h3>
					<div class="form-wrapper">
						<input type="text" name="email" id="email" placeholder="Enter email" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="password" id="password" placeholder="Enter Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>					
          <input type="submit" name="login">
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