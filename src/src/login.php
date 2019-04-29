<?php 
  include_once "include/header.php"; 

  ?>
    <title>Login</title>
  </head>
  <body class="loginBody" id="LoginPage">
    <!-- Optional JavaScript -->
    <script type="text/javascript" src="js/Funksjoner.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  

    <!-- Navigasjons bar -->

   <!-- Navigasjons bar slutt -->
   <!--------------------------->



   <!-- Hoved container -->
   

    <section class="container-fluid">
      
        <section class="row justify-content-center">
          <section class="col-12 col-sm6 col-md-3">
            <!-- Login form -->
              <form class="form-container" action="include/login.inc.php" method="POST">
                <button type="button" class="btn btn-primary" onclick="location.href='index.php';">Gå tilbake</button>
                <h3 class="text-center">Log inn</h3>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email addresse</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Skriv inn email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Passord</label>
                    <input type="password" name="passord" class="form-control" id="exampleInputPassword1" placeholder="Passord">
                  </div>
                  <div class="form-group form-check">
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Logg inn</button>
                  <p class="text-black text-center">Har du ikke bruker? <br> Trykk <a href="registrer.php">her</a> for å registrere</p>
                </form>

          </section>
        </section>
    </section>

    <!-- Script for å føre  brukeren tilbake til siden de var på før de gikk inn på login siden -->
    <script>
        function goBack() {
          window.history.back();
        }
        </script>

  </body>


</html>