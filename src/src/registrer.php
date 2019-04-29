<?php 
  include_once "include/header.php"; 

  ?>
    <title>Login</title>
  </head>
  <body class="loginBody">
    <!-- Optional JavaScript -->
    <script type="text/javascript" src="js/Funksjoner.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


   <!-- Hoved container -->
   <div class="registerContainer container registerContainer col-sm-12 col-md-4 mt-4">
     
        <article class="card-body mx-auto registerArticle" style="max-width: 400px;">
            <button type="button" class="btn btn-primary" onclick="goBack()">Gå tilbake</button>
            <h4 class="card-title mt-3 text-center">Lag bruker</h4>
            <p class="text-center">Lag din egen Wayfare bruker nå</p>
            <p>

            </p>
            </p>
            <form action="include/signup.inc.php" method="POST">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                <input name="navn" class="form-control" placeholder="Navn" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                 </div>
                <input name="email" class="form-control" placeholder="Email addresse" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input name="tlf" class="form-control" placeholder="Telefonnummer" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                </div>
                <select class="form-control" name="brukertype">
                    <option selected=""> Velg Wayfare bruker type</option>
                    <option>Sjåfør</option>
                    <option>Passasjer</option>
                    <option>Begge</option>
                </select>
            </div> <!-- form-group end.// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="passord" class="form-control" placeholder="Velg passord" type="password">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="passord2" class="form-control" placeholder="Repeter Passord" type="password">
            </div> <!-- form-group// -->                                      
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block"> Fullfør  </button>
            </div> <!-- form-group// -->      
            <p class="text-center">Har du en bruker? <a href="login.php">Logg Inn</a> </p>                                                                 
        </form>
        </article>
        
        </div> 
        <!--container end.//-->


  </body>


</html>