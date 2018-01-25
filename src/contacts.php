<?php   session_start();
        include('./load/head.php'); ?>

<body class="bg-light" >
    <!-- top logo -->
    <?php include('./components/logo.php'); ?>
    <!-- NAV -->
    <section class="container navigation-section">
        <?php include('./components/navigation.php'); ?>    
   
    <!-- alertas sekmingo siuntimo atveju js. -->
    <?php if (isset($_SESSION["isiuntimas"])) {    ?>
           
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p class="blockquote text-center"><?php echo "Jūsų žinutė buvo išsųsta" ?></p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
            
    <?php }?>
    </section>
    
    <!-- Main -->
    <section class="container main-contacts-container">
    
    <div class="row my-4">
        <div class="col-md-6">
            <div class="form-container">
                <div class="card bd-primary text-center">
                    <div class="card-body">
                        <h3>Susisiekite</h3>
                        <p>Užpildykite formą ir mes kuo greičiau atsakysime.</p>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" name="vardas" id="" class="form-control form-control-lg" placeholder="Vardas Pavardė">
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="number" name="telefonas" id="" class="form-control form-control-lg" placeholder="telefonas">
                                </div>
                                <div class="col">
                                    <input type="email" name="elpastas" id="" class="form-control form-control-lg" required  placeholder="el. paštas">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="zinute" id="zinute" rows="3" required  placeholder="jūsų pranešimas"></textarea>
                            </div>
                            <input type="submit" name="button" class="btn btn-outline-dark btn-lg" value="Siųsti">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php 
                if (isset($_SESSION["isiuntimas"])) { session_destroy();   }

                // check if form was submited email field is required
                if (isset($_POST["elpastas"])) { 
                    include("./php/email.php");  
                    
                    //   $_SESSION["isiuntimas"] = 1;  
                    }
        ?> 




        <!-- Dešiny šonas -->
        <div class="col-md-6">
            <div class="row social-row">
                <div class="col-12">
                    <h4 class="text-center mb-4" >Sek mus</h4>
                    <div class="social-box ">
                        <a class="d-block border rounded text-center color-dark-grey" href="http://www.facebook.com/gaudykles" target="_blank">
                        Facebook <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
                        </a>
                        <a class="d-block border rounded text-center color-dark-grey" href="http://www.instagram.com/sapnu.gaudykles">
                        Instagram    <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                        </a>
                        <a class="d-block border rounded text-center color-dark-grey" href="#">
                        Rašyk laišką  <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Row end -->

    <div class="row two-pic-row">
        <div class="col-lg-6">
            <img class="img-fluid w-100" src="./img/crop/12.jpg" alt="Sapnu gaudyklės nuotrauka">
        </div>
        <div class="col-lg-6">
            <img class="img-fluid w-100" src="./img/crop/13.jpg" alt="Sapnu gaudyklės nuotrauka">
        </div>
        
    </div>
    
    </section>
    
    
    
    
    
    
    <!-- Footer and scripts -->
    <?php include('./components/footer.php'); ?>    

    
    
  
    <script src="./js/script.js"></script>
</body>
</html>