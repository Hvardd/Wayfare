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
   <section class="container-fluid">
      

        <section class="row justify-content-center">
          <section class="col-12 col-sm6 col-md-3">
            <!-- Login form -->
              <form class="form-container" action="php/insert.php" method="post">
                <h3 class="text-center">Legg til din kjørerute</h3>

                   <div class="form-group">
                   <label for="exampleInputEmail1">Navn:</label>
                   <input type="text" name="Navn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Skriv ditt navn">
                   </div>

                   <div class="form-group">
                   <label for="exampleInputEmail1">Kjører fra:</label>
                   <input type="text" name="Start" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hvor kjører du fra?">
                   </div>

                   <div class="form-group">
                   <label for="exampleInputPassword1">Kjører til:</label>
                   <input type="text" name="Slutt" class="form-control" id="exampleInputPassword1" placeholder="Hvor kjører du til?">
                   </div>

                   <div class="form-group">
                   <label for="exampleInputPassword1">Dato:</label>
                   <input type="text" name="Dato" class="form-control" id="exampleInputPassword1" placeholder="Når kjører du?">
                   </div>

                   <div class="form-group">
                   <label for="exampleInputPassword1">Pris:</label>
                   <input type="text" name="Pris" class="form-control" id="exampleInputPassword1" placeholder="Pris">
                   </div>


                  <input type="submit" value="Fullfør og legg til kjøreliste" class="btn btn-primary btn-block"></button>
                </form>

          </section>
        </section>
    </section>


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