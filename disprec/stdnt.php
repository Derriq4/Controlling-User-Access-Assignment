<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Student Portal</title>
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
		    <!-- Bootstrap CSS -->
  <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

	</head>

	<body>

	<?php
      require 'connection.php';
    ?>

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
				<form action="connection.php" method="post" enctype="multipart/form-data">	
					<h3>Student Details</h3>
					<div class="form-wrapper">
         			<input type="text" name="studentName" id="studentName" class="form-control" placeholder="Student Name" value="<?php echo $name  ?>" required="" >
                    <span><?php echo $nameErr ?></span>
					</div>
					<div class="form-wrapper">
						<input type="email" name="studentEmail" id="studentEmail" class="form-control" placeholder="Email" value="<?php echo $email  ?>" required="">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" name="studentPhone" id="phone" class="form-control" placeholder="Enter Phone Number" value="<?php echo $phone  ?>" required="">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
         			<select name="studentGender" class="form-control" required="">
         				<option value="<?php echo $gender  ?>" ><?php echo $gender  ?></option>
         				<option value="" disabled selected>Gender</option>
         				<option value="male">Male</option>
         				<option value="female">Female</option>
         				<option value="female">Other</option>
         			</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="number" name="studentAge" id="studentAge" class="form-control" placeholder="Age" value="<?php echo $age  ?>" required="">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<label for="profileImage" style="padding: 10px;">Upload Student Image</label>
                    <input type="file" name="studentImage" id="studentImage" value="<?php echo $studentImage  ?>" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>

					<?php
                      if ($update == true):
                    ?>
					<button type="submit" id="update" name="update" value="Update Student Details">Update Student Details
						<i class="zmdi zmdi-arrow-right"></i></button>	
					 <?php
                      else:
                     ?>	
					<button type="submit" id="save" name="save" value="Updload Student Details">Upload Student Details
						<i class="zmdi zmdi-arrow-right"></i></button>	                    			
                <?php
                  endif;
                ?>
         	</form>
			</div>
		</div>
		<br>

		<hr>
		<br>
         <!-- table -->
         <div class="container">
            <!-- php code for reading records -->
            <?php
            //setting connection
             $mysqli = new mysqli("localhost","root","","school") or die($mysqli->error);
             
             //variable to store search input
             $searchName = '';
             if (isset($_POST['search'])) {
                 # code...
                $searchName = $_POST['searchValue'];
             }


            //sql for fetching of records 
             $result = $mysqli->query("SELECT * FROM students_table") or die($mysqli->error);
             // $result = $mysqli->query("SELECT * FROM students WHERE studentname='$searchName'") or die($mysqli->error);

             // if ($result === TRUE) {
             //     # code...
             //    header('location: index.php');
             // }

            ?>
            <form action="index.php" method="post">
                <input type="text" name="searchValue" id="searchValue" placeholder="Search Using First Name" class="form-control col-sm-4">
                <br>
                <input type="submit" name="search" id="search" class="btn btn-info" value="Search Student">
            </form>
            <br>
            <caption>Students</caption>
            <table class="table table-dark">
           
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Student Image</th>
                    <th>Registration date</th>

                </tr>
     <?php
                while ($row = $result->fetch_assoc()) :
                ?>
                <tr>
                    <td><?php echo $row['id'];  ?> </td>
                    <td><?php echo $row['studentsname'];  ?></td>
                    <td><?php echo $row['email'];  ?></td>
                    <td><?php echo $row['phoneNumber'];  ?></td>
                    <td><?php echo $row['gender'];  ?></td>
                    <td><?php echo $row['age'];  ?></td>
                    <td><?php
                      echo "<img src='studentImages/" . $row['studentImage'] ."' style='width: 120px; height=120px;'>";

                     ?></td>
                    <td><?php echo $row['reg_date'];  ?></td>
                 </tr>
                 <?php
                 endwhile;
                 ?>
            </table>
             
         </div>

<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>