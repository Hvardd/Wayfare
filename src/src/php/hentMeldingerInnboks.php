<?php

function FyllListe () {
    $conn = mysqli_connect("localhost", "root", "", "Wayfare");

   // print_r($_POST);

    if (!isset($_SESSION['user_email'])) {
      echo 'Ikke logget inn';
      exit();
    }

  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM meldinger Where AvtaleId = '".$_POST['AvtaleId']."' and TurId ='".$_POST['TurId']."'"; 

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
   // output data of each row
    $btnCounter = 0; // Teller for navn på hver knapp iforhold til sql listen 
   while($row = $result->fetch_assoc()) {
    $btnCounter++;
    echo "<form method='POST' action='listeavansert.php'><tr><td>" . $row["MeldingID"]."</td><td>" . $row["TurID"] . "</td><td>" . $row["Melding"] . "</td><td>" . $row["AvtaleId"] . "</td><td>   </td><td><!--button type='submit' class='btn btn-primary' name='$btnCounter'>Velg</button--></td></tr></form>"; 
}
echo "<form method='POST' action='php/sendMelding.php'> <td><input name='melding' style='height:100px;width:200px;'></input></td> 
<td><input name='TurId' value='".$_POST['TurId']."'style='display:none'></input></td> 
<td><button type='submit' class='btn btn-primary' name='AvtaleId' value='".$_POST['AvtaleId']."'>Send</button></td> </form>";
echo "</table>";

// array('0','foo','1','bar')
// $_POST['AvtaleId']
} else { echo "0 results"; }
$conn->close();
}
?>