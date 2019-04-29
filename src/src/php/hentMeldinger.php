<?php

function FyllListe () {
    $conn = mysqli_connect("localhost", "root", "", "Wayfare");



    if (!isset($_SESSION['user_email'])) {
      echo 'Ikke logget inn';
      exit();
    }

  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM avtaler Where Epost1 = '".$_SESSION['user_email']."' or Epost2 ='".$_SESSION['user_email']."'"; 

  $result = $conn->query($sql);


  if ($result->num_rows > 0) {
   // output data of each row
    $btnCounter = 0; // Teller for navn på hver knapp iforhold til sql listen 
   while($row = $result->fetch_assoc()) {
    $btnCounter++;
    echo "<form method='POST' action='MeldingerInnboks.php'><tr><td>" . $row["Epost1"]."</td><td>" . $row["Epost2"] . "</td><td name='AvtaleId'>" . " <input type='text' name='AvtaleId' value= '".$row['AvtaleId']."' readonly/>" . "</td><td name='TurID'>" . " <input type='text' name='TurId' value= '".$row['TurId']."' readonly/>" . "</td><td>   </td><td><button type='submit' class='btn btn-primary' name='$btnCounter'>Velg</button></td></tr></form>"; 
}

 /* echo "<form method='POST' action='MeldingerInnboks.php'><tr><td>" . $row["Epost1"]."</td><td>" . $row["Epost2"] . "</td><td name='AvtaleId'>" . $row["AvtaleId"] . "</td><td name='TurID'>" . $row["TurId"] . "</td><td>   </td><td><button type='submit' class='btn btn-primary' name='$btnCounter'>Velg</button></td></tr></form>"; 
*/ 

// <input type="text" name="AvtaleId" value=".$row["AvtaleId"]." />

echo "</table>";
} else { echo "0 results"; }
$conn->close();
}
?>