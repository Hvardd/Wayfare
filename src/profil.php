<?php 
  include_once "include/header.php"; 

  ?>
    <title>Login</title>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  

    <!-- Navigasjons bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#"><a href="/"><h1 class="logo">Wayfare</h1></a> <!-- Wayfare logo -->
    
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
    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
                            Kontakt
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Product 1</a>
                            <a class="dropdown-item" href="#">Product 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Another Product</a>
                        </div>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Registrer / Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="liste.php">Kjøreliste</a>
                    </li>
                </ul>
            </div>
        </nav>
       <!-- Navigasjons bar slutt -->
       <!--------------------------->



   <!-- Hoved container -->
   <div class="container emp-profile shadow-lg mb-5 bg-white rounded">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="assets/profil.png" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                            Endre bilde
                            <input type="file" name="file"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                                <h5>
                                    Default Sjåfør
                                </h5>
                                <h6>
                                    Sjåfør
                                </h6>
                                <p class="proile-rating">Kvalitet: <span>8/10</span></p> 
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Om meg</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Statistikk</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Endre profil"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work text-center">
                        <h3>Informasjon</h3>
                        <p>Telefon Nummer: 95095095</p><br/>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Brukernavn</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>DefaultSjåfør123</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Navn</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Default Sjåfør</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Default-Sjåfør@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Telefon Nummer:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>123 456 7890</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Tildelt jobb:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Sjåfør</p>
                                        </div>
                                    </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Antall ruter kjørt:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>5</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Fornøyde kunder</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>4</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Misfornøyde kunder</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>1</p>
                                        </div>
                                    </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>           
    </div>


<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 bg-primary">

        <!-- Footer Links -->
        <div class="container text-center text-md-left text-white">
    
          <!-- Grid row -->
          <div class="row">
    
            <!-- Grid column -->
            <div class="col-md-4 mx-auto">
    
              <!-- Content -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Her finner du noen linker</h5>
              <p>Her kan du finne ulike linker til steder på nettsiden, eller så kan du trykke på "Tilbake til toppen" knappen for å komme tilbake til toppen av nettsiden.</p>
    
            </div>
            <!-- Grid column -->
    
            <hr class="clearfix w-100 d-md-none">
    
            <!-- Grid column -->
            <div class="col-md-2 mx-auto">
    
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Linker</h5>
    
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Hjem</a>
                </li>
                <li>
                  <a href="#!">Hvordan bruke Wayfare?</a>
                </li>
                <li>
                  <a href="#!">Spørsmål og svar</a>
                </li>
                <li>
                  <a href="#!">Informasjon om Wayfare</a>
                </li>
              </ul>
    
            </div>
            <!-- Grid column -->
    
            <hr class="clearfix w-100 d-md-none">
    
            <!-- Grid column -->
            <div class="col-md-2 mx-auto">
    
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Linker</h5>
    
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Din profil</a>
                </li>
                <li>
                  <a href="#!">Bytte bruker</a>
                </li>
                <li>
                  <a href="#!">Bruker oversikt</a>
                </li>
                <li>
                  <a href="#!">Logg ut</a>
                </li>
              </ul>
    
            </div>
            <!-- Grid column -->
    
            <hr class="clearfix w-100 d-md-none">
            <!-- Grid column -->
    
          </div>
          <!-- Grid row -->
    
        </div>
        <!-- Footer Links -->
    
        <hr>
    
        <ul class="list-unstyled list-inline text-center py-2">
          <li class="list-inline-item">
            <h5 class="mb-1"></h5>
          </li>
          <li class="list-inline-item">
            <a href="#!" class="btn btn-danger btn-rounded">Tilbake til toppen</a>
          </li>
        </ul>
    
        <hr>
    
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-white">© 2019 Copyright:
          <a href="index.html"> Wayfare.no</a>
        </div>
        <!-- Copyright -->
    
    </footer>
    <!-- Footer -->

  </body>


</html>