<?php
include '../connection.php';
session_start();

//variables 
$email = $password = $encrypted = $userRole = $status  = '';
$emailErr = $passwordErr = '';

$_SESSION['userUnaivable'] = "Wrong credentials, try again or create an account";
$_SESSION['alertTypeError'] = "danger";
 
if (isset($_POST['login'])) {
	# code...
	if (empty($_POST['email'])) {
		# code...
		$emailErr = "email required";
	} else {
		$email = $_POST['email'];
	}

	if (empty($_POST['password'])) {
		# code...
		$passwordErr = "email required";
	} else {
		$password = $_POST['password'];
	}

	if (empty($emailErr) && empty($passwordErr)) {
		# code...
		$loginSql = "SELECT * FROM users WHERE email='$email' && password='" .md5($password) .  "'";
				$result = mysqli_query($conn,$loginSql);


		//finding no of row matching the query
		$num = mysqli_num_rows($result);
		// echo $num;

		if ($num == 1) {
			# code...
             //use the while loop to fetch records of matched row 
			while ($row = mysqli_fetch_array($result)) {
				# code...
				$userRole = $row['role'];
				$status = $row['verified_status']; //name inside [] refers to the column name 
			}

			//redirect ,switch
			switch ($userRole) {
				case 'admin':
					# code...
				    if ($status == "yes") {
				    	# code...
				     $_SESSION['activeuser'] = $email;
                     header('location: ../public/admindashboard.php?loggedin');

				    } else {
				    	$_SESSION['notVerified'] = "not verified yet";
				    	header('location: ../public/admindashboard.php?nverified');
				    }
					break;

					case 'user':

			          $_SESSION['activeuser'] = $email;
                      header('location: ../public/userdashboard.php?loggedin');
					break;
				
				default:
					# code...
				     $_SESSION['guest'] = "welcome guest user";
				     header('location: ../public/dashboard.php?guest');
					break;
			}





			// header('location: ../public/dashboard.php?logged');
		} else {
			$_SESSION['userUnaivable'];
			header('location: ../index.html?wrongCredLogin');
		}
	}



}



?>