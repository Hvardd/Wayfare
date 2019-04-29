<?php
  session_start();

  // print_r($_SESSION);
  // exit();
  $conn = mysqli_connect("localhost", "root", "", "Wayfare");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 

  $message = $_POST['new_message'];

  if (strlen($message) == "0") {
    header("Location: ../liste.php?meldingforkort");
    //echo "pess";
    exit();
  }

  echo strlen($message);
 // exit();
  $myPost = array_values($_POST);
  $id = $myPost[1];

  $sql2 = "Select * from kjoreliste where TurID=".$id."";
  $result2 = $conn->query($sql2);

  while ($row2 = $result2->fetch_assoc()) {
  $user_id = $row2["user_email"];
  }



  $sql = "SELECT * FROM Avtaler Where TurID = '".$id."' and epost1='".$user_id."' and epost2='".$_SESSION['user_email']."' ";
// $user_id2 $_SESSION['user_email']
  $result = $conn->query($sql);
 // $sql4 = "Insert into meldinger(TurId, Melding, AvtaleId) 
 //            values('".$id."','".$message." ". $_SESSION['user_email']."','".$avtaleId."')";


 if ($result) {
  while($row = $result->fetch_assoc()) {
   //  echo $row['column_name']; // Print a single column data
    echo print_r($row);   
    $avtaleId = $row['AvtaleId'];
    var_dump($avtaleId);
    // exit();    // Print the entire row data
    $sql4 = "Insert into meldinger(TurID, Melding, AvtaleId) 
            values('".$id."','".$message." ". $_SESSION['user_email']."','".$avtaleId."')";
    $result4 = $conn->query($sql4);

    // echo "test";
    header("Location: ../liste.php?meldingSendt1");
    exit();

    }
  }
//   exit();


  if (mysqli_num_rows($result) == 0) {
   // output data of each row

    $sql3 = "Insert into avtaler(Epost1,Epost2,TurID)
            Values('".$user_id."','".$_SESSION['user_email']."','".$id."');";

    $result3 = $conn->query($sql3);

    $result = $conn->query($sql);

    $result4 = $conn->query($sql4);

    header("Location: ../liste.php?meldingSendt2");
   
    exit();



} else { echo "0 results"; }
$conn->close();

header("Location: ../liste.php?meldingIkkeSendt");
?>