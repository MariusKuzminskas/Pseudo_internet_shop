<?php include('./load/head.php'); ?>

<body class="bg-light" >
    <!-- top logo -->
    <?php include('./components/logo.php'); ?>
    <!-- NAV -->
    <section class="container navigation-section">
        <?php include('./components/navigation.php'); ?>    
    </section>
    
    <!-- Main -->
    <section class="container shop-container">
        <h4 class="text-center py-5" >Įsigykite sapnų gaudyklę</h4>
    
        <!-- Item row -->
        <div class="row">
            <div class="col-lg-4">
                <article class="item-container ">
                    <!-- img container -->
                    <div class="img-container position-relative">
                        <img src="./img/port-thumb/9.jpg" alt="sapnu gaudyklės nuotrauka">
                        <p class="sale bg-dark text-light blockquote text-uppercase px-1 position-absolute"> išpardavimas</p>
                    </div>
                    <!-- under img container -->
                    <div class="under-img-container text-center">
                        <h4>pavadinimas</h4>
                        <p>20 eur</p>
                        <a href="#" class="btn btn-outline-dark" >Pirkti</a>
                    </div>
                </article>
            </div>
        </div>
        

        <!-- item row end -->
        
       

    </section>
    
    
    
    
    
    
    <!-- Footer and scripts -->
    <?php include('./components/footer.php'); ?>    

    
    
  
    <script src="./js/script.js"></script>
</body>
</html>