<?php
// to get values passed from form in login.php file
$servername = "localhost";
$username = "root";
$password="";
$dbname="login";
$conn=mysqli_connect($servername, $username, $password, $dbname);
echo("connection");
$username = $_POST['username'];
$password = $_POST['password'];
// query the database for user
$result = mysqli_query("select * from users where username = '$username' and password = '$password'")
	or die("failed to query database " .mysqli_error());
	$row = mysqli_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password){
		echo "Login Success Welcome ".$row['username'];
	}else {
		echo "Failed to login!";
	}
?>