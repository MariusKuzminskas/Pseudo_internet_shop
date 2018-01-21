<?php include('./load/head.php'); ?>

<body class="bg-light" >
    <!-- top logo -->
    <?php include('./components/logo.php'); ?>
    <!-- NAV -->
    <section class="container navigation-section">
        <?php include('./components/navigation.php'); ?>    
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
                        <form>
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control form-control-lg" placeholder="Vardas Pavardė">
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="tel" name="" id="" class="form-control form-control-lg" placeholder="telefonas">
                                </div>
                                <div class="col">
                                    <input type="email" name="" id="" class="form-control form-control-lg" placeholder="el. paštas">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" id="zinute" rows="3" placeholder="jūsų pranešimas"></textarea>
                            </div>
                            <input type="button" class="btn btn-outline-dark btn-lg" value="Siųsti...">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dešiny šonas -->
        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-center" >Sek mus</h4>
                        <a class="d-block bg-secondary text-center" href="http://www.facebook.com/gaudykles" target="_blank">
                        Facebook'e <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
                        </a>
                        <a href="http://www.instagram.com/sapnu.gaudykles">
                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
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