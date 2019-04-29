<?php
	
	include_once "dbh.inc.php";

 $con = mysqli_connect('localhost', 'root', '');

 if(!$con){
     echo  'Not connected to server';
 }

 if(!mysqli_select_db($con, 'Wayfare')){
     echo 'Database not selected';
 }

 $username  = $_POST['username'];
 $email = $_POST['email'];
 $phonenumber = $_POST['phonenumber'];
 $usertype  = $_POST['usertype'];
 $password  = $_POST['password'];


 $sql = "SELECT * FROM users WHERE user_first='$email' or user_email='$email'";
 $result = mysqli_query($con, $sql);
 $resultCheck = mysqli_num_rows($result);


 /* $sql2 = "UPDATE users (user_first, user_tlf, user_brukertype) VALUES ('$username', '$phonenumber', '$usertype')
 		WHERE '$email' = user_email";//  AND '$password' == user_passord"; */

 $sql2 = "UPDATE users
 			SET user_first = '$username', user_tlf ='$phonenumber', user_brukertype='$usertype'
 			WHERE '$email' = user_email;";
 


 	if ($resultCheck < 1) {
 		header("Location: ../profil.php?update=error1");
 		exit();
 	} else {
 		if ($row = mysqli_fetch_assoc($result)) {
 		 	// echo $row['user_uid'];
 		 	//De-hasing the password

 		 	$hashedPwdCheck = password_verify($password, $row['user_passord']);
 		 	if ($hashedPwdCheck == false) {
 		 		header("Location: ../profil.php?update=error2");
 		 		exit();
 		 	} elseif ($hashedPwdCheck == true) {
 		 	 	//Log in the user here
 		 	 	$result2 = mysqli_query($con, $sql2);
 				// $resultCheck = mysqli_num_rows($result);
 				//$resultCheck2 = mysqli_affected_rows($result2);

 		 	 // 	$result = mysqli_query($con, $sql);
 		 	 // 	$row = mysqli_fetch_assoc($result);
 				// if ($resultCheck2 > 0) {
 		 	 	$_SESSION['user_first'] = $row['user_first'];
 		 	 	$_SESSION['user_email'] = $row['user_email'];
 		 	 	$_SESSION['user_tlf'] = $row['user_tlf'];
 		 	 	$_SESSION['user_brukertype'] = $row['user_brukertype'];
 		 	 	//$_SESSION['u_uid'] = $row['user_uid'];
 		 	 	header("Location: ../profil.php?update=success");
 		 	 	exit();
 		 	 	//}
 		 	 	//else {
 		 	 	//	header("Location: ../profil.php?update=fail");
 		 	 	//	exit();
 		 	 	// }
 		 	}
 		}
 	
 
// else {
	header("Location: ../profil.php?login=error3");
	exit();
}


/* 


 if(!mysqli_query($con, $sql))
 {
    echo 'Not inserted';
    header("Location: ../profil.php?not_inserted");
 }
 else
 {
    echo 'Inserted';
    $_SESSION['user_first'] = $username;//$row['user_first'];
 	// $_SESSION['user_email'] = $email;//$row['user_email'];
 	$_SESSION['user_tlf'] = $phonenumber; // $row['user_tlf'];
 	$_SESSION['user_brukertype'] = $usertype; // $row['user_brukertype'];
    header("Location: ../profil.php?inserted");
 }

 // header("refresh:2; url=liste.php"); */ 
?> 