<!-- creating a connection -->
<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'school';

$conn = new mysqli($servername,$username,$password,$dbname);
// checking for connection errors
if ($conn->connect_error) {
	echo "connection failed" . $conn->connect_error;
}
?>