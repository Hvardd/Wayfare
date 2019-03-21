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
<div class="indexContainer container shadow-lg bg-white rounded">


    <!-- Jumbotron feltet som inneholder velkommen delen av nettsiden -->
    <div class="jumbotron text-center shadow-lg rounded bg-primary">
      <h1 class="display-4">Velkommen til Wayfare!</h1>
    </div>


    <!-- Rad bortover nettsiden -->
    <div class="row">
        <div class="col"> <!-- Columns med lik bredde -->
          <div class="col"> <!-- Columns med lik bredde -->
            <div class="card">
                <div class="card-body text-center">
                  <h5 class="card-title">Hva er Wayfare?</h5>
                  <p class="card-text"Quick text to build up on the card title></p>
                  <a href="#WayfareInfo" class="card-link">Trykk her for å lære mer om Wayfare</a>
                </div>
            </div>
        </div>
        </div>

        <div class="col-sm-12 col-md-4"> <!-- Columns med lik bredde -->
            <div class="card mb-4">  <!-- Gir kortene mellomrom mellom hverandre slik at de blir bedre plass --> 
                <div class="card-body text-center">
                  <h5 class="card-title">Begynn med Wayfare </h5>
                  <p class="card-text"Quick text to build up on the card title></p>
                  <a href="#BegynnWayfare" class="card-link">Her lærer du å bruke Wayfare</a>
                </div>
            </div>
        </div>

        <div class="col"> <!-- Columns med lik bredde -->
          <div class="col"> <!-- Columns med lik bredde -->
            <div class="card">
                <div class="card-body text-center">
                  <h5 class="card-title">Registrer bruker</h5>
                  <p class="card-text"Quick text to build up on the card title></p>
                  <a href="registrer.html" class="card-link">Trykk her for å registere en ny bruker</a>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="row mt-sm-4 mt-md-0"> <!-- Margin top small 4 og Margin top medium 0-->

        <div class="col-sm-12 col-md-8 text-sm-center tex-md-left">
            <h3>An important heading</h3>
            <p class="lead"> A sort of important subheading can go hear, which is larger and gray</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> 
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>


        <div class="col-sm-12 col-md-4">
            <h3 class="mb-4"> Secondary Menu</h3>

            <ul class="nav flex-column nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>

                <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                </li>

                <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>

    </div>

</div>


<!-- Container 2 for mer informasjon på hjemmesiden -->

<div class="indexContainer2 container shadow-lg bg-white rounded" id="WayfareInfo">

  <div class="jumbotron text-center shadow-lg rounded bg-primary">
    <h1 class="display-4">Hva er Wayfare?</h1>
    <p class="lead"></p>
  <p class="lead">
  </p>
  
  </div>


  <div class="row mt-sm-4 mt-md-0" > <!-- Margin top small 4 og Margin top medium 0-->

      <div class="col-sm-12 col-md-8 text-sm-center ">
          <h3>An important heading</h3>
          <p class="lead"> A sort of important subheading can go hear, which is larger and gray</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> 
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>



  </div>

</div>


<!-- Container 3 for mer informasjon på hjemmesiden -->
<div class="indexContainer2 container shadow-lg bg-white rounded mt-5 mb-5" id="BegynnWayfare">



  <div class="jumbotron text-center shadow-lg rounded bg-primary">
      <h1 class="display-4">Her kan du lære om Wayfare!</h1>
      <p class="lead"></p>
    <p class="lead">
    </p>
    
    </div>
  
  
    <div class="row mt-sm-4 mt-md-0" > <!-- Margin top small 4 og Margin top medium 0-->
  
        <div class="col-sm-12 col-md-8 text-sm-center ">
            <h3>An important heading</h3>
            <p class="lead"> A sort of important subheading can go hear, which is larger and gray</p>
  
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> 
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
  
  
  
    </div>
  
  </div>

<?php 
  include_once "include/footer.php";
  ?>
