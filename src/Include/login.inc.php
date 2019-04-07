<?php

 session_start();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$passord = mysqli_real_escape_string($conn, $_POST['passord']);

	if (empty($email)||empty($passord)){
		header("Location: ../login.php?login=empty");
		exit();
 } else {
 	$sql = "SELECT * FROM users WHERE user_first='$email' or user_email='$email'";
 	$result = mysqli_query($conn, $sql);
 	$resultCheck = mysqli_num_rows($result);
 	
 	if ($resultCheck < 1) {
 		header("Location: ../login.php?login=error1");
 		exit();
 	} else {
 		if ($row = mysqli_fetch_assoc($result)) {
 		 	// echo $row['user_uid'];
 		 	//De-hasing the password

 		 	$hashedPwdCheck = password_verify($passord, $row['user_passord']);
 		 	if ($hashedPwdCheck == false) {
 		 		header("Location: ../login.php?login=error2");
 		 		exit();
 		 	} elseif ($hashedPwdCheck == true) {
 		 	 	//Log in the user here
 		 	 	$_SESSION['user_first'] = $row['user_first'];
 		 	 	$_SESSION['user_email'] = $row['user_email'];
 		 	 	$_SESSION['user_tlf'] = $row['user_tlf'];
 		 	 	$_SESSION['user_brukertype'] = $row['user_brukertype'];
 		 	 	//$_SESSION['u_uid'] = $row['user_uid'];
 		 	 	header("Location: ../index.php?login=success");
 		 	 	exit();
 		 	}
 		}
 	}
 }
} else {
	header("Location: ../login.php?login=error3");
	exit();
}
