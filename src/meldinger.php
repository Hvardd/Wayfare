<?php 
  include_once "include/header.php"; 
 ?>
 
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
   <?php 
      include_once 'include/navbar.php';
    ?>
       <!-- Navigasjons bar slutt -->
       <!--------------------------->



       <!-- Hoved container -->
     <!--MDB Tables-->
     <div class="container liste-container mt-4 shadow-lg p-3 mb-5 bg-white rounded">

            <div class="text-center darken-grey-text mb-4">
                <h1 class="font-bold mt-4 mb-3 h5">Meldinger</h1>
                
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12">
                                
                            <div class="input-group md-form form-sm form-2 pl-0">
                           
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
                           
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>

                        
                        <?php
                             include "php/FyllListe.php";
                             FyllListe();
                         ?>

                        
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