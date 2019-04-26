<?php 
  include_once "Include/header.php"; 
  
?>
    <title >Wayfare- Hjemmeside  </title>
  </head>
  <link rel="icon" href="assets/tab-icon.png" sizes="2x2">
  <body >
    <!-- Optional JavaScript -->
    <script type="text/javascript" src="js/TopScroll.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    
  

    <!-- Navigasjons bar -->
   <?php 
      include_once 'include/navbar.php';
    ?>
   <!-- Navigasjons bar slutt -->
   <!--------------------------->



   <!-- Hoved container -->
   <div class="indexContainer container">


<!-- Jumbotron feltet som inneholder velkommen delen av nettsiden -->
<div class="jumbotron text-center bg-transparent indexContainerWayfareText">
  <h1 class="wfVelkommen">Velkommen til Wayfare!</h1>
</div>


<!-- Rad bortover nettsiden -->
<div class="row indexRow bg-transparent ">
    <div class="col"> <!-- Columns med lik bredde -->
      <div class="col"> <!-- Columns med lik bredde -->
        <div class="card kort border-0 shadow-lg">
            <div class="card-body text-center">
              <h4 class="card-title font-weight-bold">Hva er Wayfare?</h4>
              <p class="card-text"Quick text to build up on the card title></p>
              <h4><a href="info.php" class="card-link">Trykk her for å lære mer om Wayfare</a> </h4>
            </div>
        </div>
    </div>
    </div>

    <div class="col-sm-12 col-md-4"> <!-- Columns med lik bredde -->
        <div class="card kort mb-4 border-0 shadow-lg">  <!-- Gir kortene mellomrom mellom hverandre slik at de blir bedre plass --> 
            <div class="card-body text-center">
              <h4 class="card-title font-weight-bold">Ofte stilte spørsmål </h4>
              <p class="card-text"Quick text to build up on the card title></p>
              <h4><a href="faq.php" class="card-link ">Trykk her for å se ofte stile spørsmål</a> </h4>
            </div>
        </div>
    </div>

    <div class="col"> <!-- Columns med lik bredde -->
      <div class="col"> <!-- Columns med lik bredde -->
        <div class="card border-0 kort shadow-lg">
            <div class="card-body text-center">
              <h4 class="card-title font-weight-bold">Registrer bruker</h4>
              <p class="card-text"Quick text to build up on the card title></p>
              <h4><a href="registrer.html" class="card-link">Trykk her for å registere en ny bruker</a> </h4>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="row mt-sm-4 mt-md-0"> <!-- Margin top small 4 og Margin top medium 0-->


</div>

</div>

<?php 
  include_once "include/footer.php";
  ?>
