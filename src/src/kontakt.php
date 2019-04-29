<?php 
  include_once "Include/header.php"; 
  
?>
    <title >Wayfare- Hjemmeside  </title>
  </head>
  <link rel="icon" href="assets/tab-icon.png" sizes="2x2">
  <body class="kontaktBody" >
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
   <div class="jumbotron jumbotron-sm kontaktContainer kontaktJumbotron bg-white">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-sm-12">
                  <h1 class="h1"><small>Kontakt oss!</small></h1>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-8">
              <div class="well well-sm">
                  <form>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Navn</label>
                                  <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                  </span>
                              <input type="text" class="form-control" id="name" placeholder="Tast inn navnet ditt" required="required" /></div>
                          </div>
                          <div class="form-group">
                              <label for="email">
                                  Email Adresse</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                  </span>
                                  <input type="email" class="form-control" id="email" placeholder="Tast inn email adressen din" required="required" /></div>
                          </div>
                          <div class="form-group">
                              <label for="subject">
                                  Mobil Nr.</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span>
                                  </span>
                                  <input type="phone" class="form-control" id="phone" placeholder="Tast inn ditt telefonnummer (ikke nødvendig)"/></div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Melding</label>
                              <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                  placeholder="Tast inn meldingen din her"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
  
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-warning pull-right bg-primary">Send</button>
                          </div>
                      </div>
                  </div>
                  </form>
              </div>
          </div>
          <div class="col-md-4">
              <form>
              <legend><span class="glyphicon glyphicon-globe"></span> Vår mail og nettside</legend>
              <address>
                  <strong>Wayfare.no</strong><br>
                  <abbr title="Telefon Nummer">
                      Tlf: 950959595</abbr>
                  
              </address>
              <address>
                  Mail: <a href="mailto:#">WayfareAS@hotmail.com</a>
              </address>
              </form>
          </div>
      </div>
  </div>

<?php 
  include_once "include/footer.php";
  ?>
