<?php include('./load/head.php'); ?>

<body class="bg-light" >
    <!-- top logo -->
    <?php include('./components/logo.php'); ?>
    <!-- NAVIGATION -->
    <section class="container navigation-section">
        <?php include('./components/navigation.php'); ?>    
        
    </section>

    <!-- Carousel -->
    <section class="hero-img-carousel-section container mt-2">
    <div class="row py-5">
            <div class="col-lg-8 mx-auto">
                <?php include('./components/carousel.php'); ?>    
            </div>
        </div>
    </section>
    
    <!-- Instagram row -->
    <section class="container instagram-posts">
        <?php include('./components/instafeed.php'); ?>    
    </section>
    <!-- Spacer -->
    <div class="height-20v"></div>
    
    
    
    <!-- Footer and scripts -->
    <section class="bg-white promo-footer">
        <img class="img-fluid d-block mx-auto" src="./img/footer.jpg" alt="gaudyklių pristatymas nemokakas visoje lietuvoje">
    </section>
    <?php include('./components/footer.php'); ?>    

    
    
  
    <script src="./js/script.js"></script>
</body>
</html>