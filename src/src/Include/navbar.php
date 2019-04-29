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
                    <a class="nav-link" href="meldinger.php">Meldinger</a>
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