<?php  
session_start();
include "config.php";

	$get = json_decode(file_get_contents("php://input"));
	$username = mysqli_real_escape_string($db, $get->username);
	$password = mysqli_real_escape_string($db, $get->password);
	$hash = md5($password);
	$sql = "SELECT username,password FROM users WHERE username='$username' && password='$hash'";
	$query = mysqli_query($db, $sql);
	if (mysqli_num_rows($query) > 0) {
		$_SESSION['username'] = $username;
		header('location:../dashboard.php');
	}
	else {
		echo "<div class='alert alert-danger'>Wrong username or password</div>";
	}

?>