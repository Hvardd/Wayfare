<?php

function FyllListe () {
    $conn = mysqli_connect("localhost", "root", "", "Wayfare");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT Fornavn, Etternavn, Start, Slutt, Dato, Pris FROM kjoreliste";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
    $btnCounter = 0; // Teller for navn på hver knapp iforhold til sql listen 
   while($row = $result->fetch_assoc()) {
    $btnCounter++;
    echo "<tr><td>" . $row["Fornavn"]."</td><td>" . $row["Start"] . "</td><td>" . $row["Slutt"] . "</td><td>" . $row["Dato"] . "</td><td>"
. $row["Pris"].",-". "</td><td><button class='btn btn-primary' name='$btnCounter'>Velg</button></td></tr>"; 
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
}
?>