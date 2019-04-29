<?php 
  include_once "Include/header.php"; 
  
?>
    <title >Wayfare- Hjemmeside  </title>
  </head>
  <link rel="icon" href="assets/tab-icon.png" sizes="2x2">
  <body class="faqBody">
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
   <div class="container faqcontainer">

  <h2>Ofte stilte spørsmål</h2>

  <div class="accordion">
    <div class="accordion-item">
      <a>Lorem ipsum dolor sit amet</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Lorem ipsum dolor sit amet</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Lorem ipsum dolor sit amet</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Lorem ipsum dolor sit amet</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Lorem ipsum dolor sit amet</a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
      </div>
    </div>
  </div>
</div>

<script>
const items = document.querySelectorAll(".accordion a");

function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>

<!-- Footer -->
<!-- Footer -->
<?php 
  include_once "include/footer.php";
  ?>
    <!-- Footer -->
    <!-- Footer -->

  </body>


</html>