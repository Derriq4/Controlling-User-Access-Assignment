<!DOCTYPE html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Homepage</title>
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
	<link rel="stylesheet" type="text/css" href="../css/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../css/style.css">
		
	</head>

	<body>
		<div class="container">
	 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.html">WebDev</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.html">Home</a></li>
      <li><a href="../index.html">About</a></li>
      <li><a href="../index.html">Contact</a></li>
      <li><a href="../index.html">Programs</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../indexsign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="../indexlogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav> 
	</div>

		<div class="wrapper" style="background-image: url('../images/wb1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="../images/webdev.jpg" alt="">
				</div>
				<div class="txt">
				<h2>Welcome</h2><br>
				<h4>to</h4><br>
				<h1>< <i>WeBDeV</i> ></h1><br>
				<h2>School</h2><br>
				<hr>
                <button><a href="../index.html" style="color: white;">Logout</a><i class="zmdi zmdi-arrow-right"></i><br><br></button>
				</div>
			</div>
		</div>
		
	</body>
</html>	

<form action="../authentication/logout.php">
	<input type="submit" name="logout" id="logout" value="Logout">
</form>
 
 	
</body>
</html>