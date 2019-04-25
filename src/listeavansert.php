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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#"><a href="index.php"><h1 class="logo">Wayfare</h1></a> <!-- Wayfare logo -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Hjem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profil.php">Profil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="kontakt.php"> Kontakt </a>
                </li>

                <?php 
                  include_once "include/navcheck.php";
                  ?>

                <li class="nav-item">
                    <a class="nav-link" href="liste.php">Kjøreliste</a>
                </li>
            </ul>
        </div>
    </nav>
   <!-- Navigasjons bar slutt -->
   <!--------------------------->



 <!-- Hoved container -->
 <div class="sjåførKort">
        <div id="kort-content">

          <?php 
          include_once 'php/hentSjafor.php';
          hentSjafor();
          ?>
<!-- 
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
 --> 
        </div>
      </div>

      <!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLongTitle">Send melding  til #Sjåfør Navn</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          

          <!-- Melding boks -->
            <div class="container">
                <div class="row">
                  <div class="span4" style="padding-bottom: 0">
                          <form accept-charset="UTF-8" action="" method="POST">
                              <textarea class="span"  id="new_message" name="new_message"
                              placeholder="Skriv inn meldingen din her" rows="5"></textarea>
                          </form>
                      </div>
                </div>
              </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Lukk</button>
          <button class="btn btn-info bg-primary" type="submit">Send melding</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Bekreftelse modal -->
  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle">Sikker på at du vil velge denne kjøreruten?</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer ">
            <button class="btn btn-info bg-primary" type="submit">Ja</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Nei</button>
          </div>
        </div>
      </div>
    </div>
<?php 
  include_once "include/footer.php";
  ?>
