<?php 

function hentSjafor() {
		
	reset($_POST);
	$key = key($_POST);
	// echo $key;


	$conn = mysqli_connect("localhost", "root", "", "Wayfare");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }  // Fornavn, Etternavn, Start, Slutt, Dato, Pris 
  $sql = "SELECT * FROM kjoreliste where TurId='$key'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {

   while($row = $result->fetch_assoc()) {
   	//print_r($row);
   	//exit();
    echo "<h3>#Sjåfør ". $row["Fornavn"] . " " . $row["Etternavn"] ."</h3>
          <div class='movie-details'></div>
          <div class='movie-castcrew'><span class='title'>Kjører fra: </span><span class='name'> " . $row["Start"] . "</span></div>
          <div class='movie-castcrew'><span class='title'>Kjører til: </span><span class='name'>". " " . $row["Slutt"] ."</span></div>
          <div class='movie-castcrew'><span class='title'>Dato: </span><span class='name'>".    " " .$row['Dato']."</span></div>
          <div class='movie-castcrew'><span class='title'>Kl: </span><span class='name'>"       . " " .$row['Klokkeslett'] . "</span></div>
          <div class='movie-castcrew'><span class='title'>Pris: </span><span class='name'>" ." ". $row['Pris'] . ",-</span></div>
          <div class='movie-synopsis'>". $row['Beskrivelse'] ."</div>
          <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal1'>
              Kontakt Sjåfør
            </button>
          <br>
          <br>
          <!-- button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal2'>
              Velg Kjørerute
            </button-->"; 
}
echo "</table>";  

} else { echo "0 results"; } 
$conn->close();
}



/* 
          <h3>#Sjåfør Navn</h3>
          <div class="movie-details"></div>
          <div class="movie-castcrew"><span class="title">Kjører fra: </span><span class="name">Avgang</span></div>
          <div class="movie-castcrew"><span class="title">Kjører til: </span><span class="name">Destinasjon</span></div>
          <div class="movie-castcrew"><span class="title">Dato: </span><span class="name">2000.00.00</span></div>
          <div class="movie-castcrew"><span class="title">Kl: </span><span class="name">00:00</span></div>
          <div class="movie-castcrew"><span class="title">Pris: </span><span class="name">0,-</span></div>
          <div class="movie-synopsis">Større melding fra Sjåføren om kjøreruten</div>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
              Kontakt Sjåfør
            </button>
          <br>
          <br>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
              Velg Kjørerute
            </button>
*/ 