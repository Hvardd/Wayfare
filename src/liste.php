<?php 
  include_once "include/header.php"; 
 ?>
 
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
                            <input class="form-control my-0 py-1 pl-3 purple-border" type="text" placeholder="Søk her..." aria-label="Search">
                            <span class="input-group-addon waves-effect purple lighten-2" id="basic-addon1"><a><i class="fa fa-search white-text" aria-hidden="true"></i></a></span>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                
                <!-- Grid row -->
                <!--Table-->
                <div class="liste">
                <table class="table table-hover">
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
                        <tr>
                            <td>TorKristian Slåtta Kåsene</td>
                            <td>Bø</td>
                            <td>Lunde</td>
                            <td>19.01.2019</td>
                            <td>250,-</td>
                            <td><button class="btn btn-primary">Velg</button></td>
                        </tr>
                        <tr>
                            <td>Arne Lerve</td>
                            <td>Gvarv</td>
                            <td>Skien</td>
                            <td>19.01.2019</td>
                            <td>150,-</td>
                            <td><button class="btn btn-primary">Velg</button></td>
                        </tr>
                        <tr>
                            <td>Anette Albertsen</td>
                            <td>Skien</td>
                            <td>Ulefoss</td>
                            <td>19.01.2019</td>
                            <td>75,-</td>
                            <td><button class="btn btn-primary">Velg</button></td>
                        </tr>
                        <tr>
                            <td>Sondre Hemningen</td>
                            <td>Bø</td>
                            <td>Notodden</td>
                            <td>19.01.2019</td>
                            <td>150,-</td>
                            <td><button class="btn btn-primary">Velg</button></td>
                        </tr>
                        <tr>
                            <td>Jakob Helgelia</td>
                            <td>Notodden</td>
                            <td>Skien</td>
                            <td>19.01.2019</td>
                            <td>250,-</td>
                            <td><button class="btn btn-primary">Velg</button></td>
                        </tr>
                        <tr>
                            <td>Lars Elvebretsen</td>
                            <td>Ulefoss</td>
                            <td>Bø</td>
                            <td>19.01.2019</td>
                            <td>175,-</td>
                            <td><button class="btn btn-primary">Velg</button></td>
                        </tr>
                        <tr>
                                <td>Henrik Todal</td>
                                <td>Lunde</td>
                                <td>Bø</td>
                                <td>19.01.2019</td>
                                <td>250,-</td>
                                <td><button class="btn btn-primary">Velg</button></td>
                            </tr>
                            <tr>
                                <td>Arne Lerve</td>
                                <td>Gvarv</td>
                                <td>Skien</td>
                                <td>19.01.2019</td>
                                <td>150,-</td>
                                <td><button class="btn btn-primary">Velg</button></td>
                            </tr>
                            <tr>
                                <td>Anette Albertsen</td>
                                <td>Skien</td>
                                <td>Ulefoss</td>
                                <td>19.01.2019</td>
                                <td>75,-</td>
                                <td><button class="btn btn-primary">Velg</button></td>
                            </tr>
                            <tr>
                                <td>Sondre Hemningen</td>
                                <td>Bø</td>
                                <td>Notodden</td>
                                <td>19.01.2019</td>
                                <td>150,-</td>
                                <td><button class="btn btn-primary">Velg</button></td>
                            </tr>
                            <tr>
                                <td>Jakob Helgelia</td>
                                <td>Notodden</td>
                                <td>Skien</td>
                                <td>19.01.2019</td>
                                <td>250,-</td>
                                <td><button class="btn btn-primary">Velg</button></td>
                            </tr>
                            <tr>

                                <td>Lars Elvebretsen</td>
                                <td>Ulefoss</td>
                                <td>Bø</td>
                                <td>19.01.2019</td>
                                <td>175,-</td>
                                <td><button class="btn btn-primary">Velg</button></td>
                            </tr>

                        

                        
                    </tbody>
                    <!--Table body-->
                </table>
            </div>
                <!--Table-->
            </div>
        </div>
        </div>

<?php 
    include_once "include/footer.php";
?>