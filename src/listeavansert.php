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
          <h3>#Sjåfør Navn</h3>

          <div class="kort-span"><span class="title">Kjører fra: </span><span class="name">Avgang</span></div>
          <div class="kort-span"><span class="title">Kjører til: </span><span class="name">Destinasjon</span></div>
          <div class="kort-span"><span class="title">Dato: </span><span class="name">2000.00.00</span></div>
          <div class="kort-span"><span class="title">Kl: </span><span class="name">00:00</span></div>
          <div class="kort-span"><span class="title">Pris: </span><span class="name">0,-</span></div>
          <div class="kort-detaljer"></div>
          <div class="kort-span"><h5>Denne sjåføren har mellomdestinasjoner</h5></div>
          <div class="container">
  <form>
    <div class="form-group">
      <select class="form-control" id="sel1">
        <option>Ingen</option>
        <option>Mellomdestinasjon 1</option>
        <option>Mellomdestinasjon 2</option>
        <option>Mellomdestinasjon 3</option>
      </select>
    </div>
  </form>
</div>


          <div class="kort-melding">Større melding fra Sjåføren om kjøreruten</div>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
              Kontakt Sjåfør
            </button>
          <br>
          <br>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
              Velg Kjørerute
            </button>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Skriv melding til Sjåfør...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"> <h4>Melding fra #KundeNavn til #SjåførNavn </h4></label>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Melding:</label>
            <textarea class="form-control" id="message-text" rows="7"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Lukk</button>
        <button type="button" class="btn btn-primary">Send Melding</button>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#modal3">
              Ja
            </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Nei</button>
          </div>
        </div>
      </div>
    </div>


      <!-- Bekreftelse modal 2 -->
  <div class="modal fade" id="modal3" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle">Informasjon om kjøreruten</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

<div class="card" style="width: 28.5rem;">
  <div class="card-body">
    <h5 class="card-title">Kjørerute</h5>
    <p class="card-text">Denne kjøreruten tar deg fra #Avgang til #Destinasjon</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">#SjåførNavn er sjåføren din</li>
    <li class="list-group-item">Dere drar #Klokkeslett den #Dato</li>
    <li class="list-group-item">Prisen på kjøreturen er: #Pris</li>
    <li class="list-group-item">Mellomdestinasjon: #Ingen eller #MellomDestinasjon01</li>
  </ul>
</div>

          </div>
          <div class="modal-footer ">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">
              Aksepter
            </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Lukk</button>
          </div>
        </div>
      </div>
    </div>
<?php 
  include_once "include/footer.php";
  ?>
