<?php
if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$navn = mysqli_real_escape_string($conn,$_POST['navn']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$tlf = mysqli_real_escape_string($conn,$_POST['tlf']);
	$brukertype = mysqli_real_escape_string($conn,$_POST['brukertype']);
	$passord = mysqli_real_escape_string($conn,$_POST['passord']);

	// Error handlers

	// Check for empty fields
	if(empty($navn)||empty($email)||empty($tlf)||empty($brukertype)||empty($passord)){
		header("Location: ../registrer.php?signup=empty");
		exit();
		} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $navn)) { //||!preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../registrer.php?signup=invalid");
			exit();
			}
		elseif ($brukertype == "Velg Wayfare bruker type")  {
			header("Location: ../registrer.php?signup=brukertypefeil");
			exit();
		} else {
			// Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../registrer.php?signup=email");	
				exit();
				# code ... 
			} else {
				$sql = "SELECT * FROM users WHERE user_email='$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				$sql = "SELECT * FROM users WHERE user_tlf='$tlf'";
				$result2 = mysqli_query($conn, $sql);
				$resultCheck2 = mysqli_num_rows($result2);

				if ($resultCheck > 0) {
				 	header("Location: ../registrer.php?signup=emailtaken");
				 	exit(); 
				 }
				elseif ($resultCheck2 > 0) {
					header("Location: ../registrer.php?signup=phonenumbertaken");
					exit();
				 
				} else {
					// hashing the password
					$hashedPwd = password_hash($passord, PASSWORD_DEFAULT);
					// Insert the user into the database
					$sql = "INSERT INTO users (user_first, user_email,user_tlf, user_brukertype, user_passord) VALUES ('$navn','$email','$tlf', '$brukertype','$hashedPwd');";
					mysqli_query($conn, $sql);
					header("Location: ../index.php?signup=success");
					exit();
				}


			}
		}
	}

} else {
	header("Location: ../registrer.php?signup=error");
	exit();
}

