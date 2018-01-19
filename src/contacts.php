<?php include('./load/head.php'); ?>

<body class="bg-light" >
    <!-- top logo -->
    <div class=""> <img class="d-block mx-auto" src="./img/logo-150.png" alt="sapnų gaudyklės Logotipas"> </div>
    <!-- NAV -->
    <section class="container navigation-section">
        <?php include('./components/navigation.php'); ?>    
    </section>
    
    <!-- Main -->
    <section class="container main-contacts-container">
    
    <div class="row my-4">
        <div class="col-md-5">
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
        <div class="col-md-7">
        <img class="rounded img-fluid  " src="./img/crop/14.jpg" alt="sapnų gaudyklės nuotrauka">
        </div>
    </div> 
    
    
    
    <section class="instagram-posts">
        <?php include('./components/instafeed.php'); ?>    
    </section>




    </section>
    
    
    
    
    
    
    <!-- Footer and scripts -->
    <?php include('./components/footer.php'); ?>    

    
    
  
    <script src="./js/script.js"></script>
</body>
</html>