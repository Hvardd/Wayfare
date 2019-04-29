<?php
 $con = mysqli_connect('localhost', 'root', '');

 if(!$con){
     echo  'Not connected to server';
 }

 if(!mysqli_select_db($con, 'Wayfare')){
     echo 'Database not selected';
 }

 $Navn  = $_POST['Navn'];
 $Start = $_POST['Start'];
 $Slutt = $_POST['Slutt'];
 $Dato  = $_POST['Dato'];
 $Pris  = $_POST['Pris'];

 $sql = "INSERT INTO kjoreliste (Fornavn, Start, Slutt, Dato, Pris) VALUES ('$Navn', '$Start', '$Slutt', '$Dato', '$Pris')";

 if(!mysqli_query($con, $sql))
 {
    echo 'Not inserted';
    header("Location: ../liste.php?not_inserted");
 }
 else
 {
    echo 'Inserted';
    header("Location: ../liste.php?inserted");
 }

 // header("refresh:2; url=liste.php");
?>