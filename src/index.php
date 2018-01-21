<?php include('./load/head.php'); ?>

<body class="bg-light" >
    <!-- top logo -->
    <div class=""> <img class="d-block mx-auto" src="./img/logo-150.png" alt="sapnų gaudyklės Logotipas"> </div>
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
    <?php include('./components/footer.php'); ?>    

    
    
  
    <script src="./js/script.js"></script>
</body>
</html>