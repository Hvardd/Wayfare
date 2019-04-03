<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <!-- Vanlig CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Wayfare - Kjøreliste</title>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <script type="text/javascript" src="js/SøkListe.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <script>
    </script>

    <!-- Navigasjons bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#"><a href="/"><h1 class="logo">Wayfare</h1></a> <!-- Wayfare logo -->
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Hjem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.html">Profil</a>
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
                        <a class="nav-link" href="login.html">Registrer / Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="liste.html">Kjøreliste</a>
                    </li>
                </ul>
            </div>
        </nav>
       <!-- Navigasjons bar slutt -->
       <!--------------------------->



   <!-- Hoved container -->
 <!--MDB Tables-->
 <div class="container liste-container mt-4 shadow-lg p-3 mb-5 bg-white rounded">

        <div class="text-center darken-grey-text mb-4">
            <h1 class="font-bold mt-4 mb-3 h5">Her finner du en oversikt over sjåfører som bruker Wayfare</h1>
            <a class="btn btn-primary btn-md" href="" target="_blank">Vil du bli sjåfør?<i class="fa fa-download pl-2"></i></a>
            <a class="btn btn-primary btn-md" href="listeinput.php" target="_blank">Trykk her for å legge til din kjørerute<i class="fa fa-download pl-2"></i></a>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">Søk her...</h2>
                        <div class="input-group md-form form-sm form-2 pl-0">
                            <input class="form-control my-0 py-1 pl-3 purple-border" type="text" onkeyup="SøkListe()" placeholder="Søk etter din destinasjon her..." aria-label="Search" id="listeInput">
                            <span class="input-group-addon waves-effect purple lighten-2" id="basic-addon1"><a><i class="fa fa-search white-text" aria-hidden="true"></i></a></span>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                
                <!-- Grid row -->
                <!--Table-->
                <div class="liste">
                <table class="table table-hover" id="kjoreListe">
                    <!--Table head-->
                    <thead>
                        <tr>
                            <th>Sjåfør</th>
                            <th>Kjører fra</th>
                            <th>Kjører til</th>
                            <th>Dato</th>
                            <th>Pris</th>
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>

                    </tbody>
                    <!--Table body-->

<!-- Fyller listen med informasjon fra databasen -->
<?php
include "php/FyllListe.php";
FyllListe();
 ?>



                </table>
            </div>
                <!--Table-->
            </div>
        </div>
        </div>


<!-- Footer -->
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