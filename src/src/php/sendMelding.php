<?php 

  session_start();

$conn = mysqli_connect("localhost", "root", "", "Wayfare");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 

 $sql4 = "Insert into meldinger(TurID, Melding, AvtaleId) 
            values('".$_POST['TurId']."','".$_POST['melding'] . " <br> " . $_SESSION['user_first']."','".$_POST['AvtaleId']."')";
    $result4 = $conn->query($sql4);

if ($result4) {
	header("Location: ../meldinger.php?meldingSendt");
}



?> 