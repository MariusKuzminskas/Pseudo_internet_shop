<?php include('./load/head.php'); ?>

<body class="bg-light" >
    <!-- top logo -->
    <div class=""> <img class="d-block mx-auto" src="./img/logo-150.png" alt="sapnų gaudyklės Logotipas"> </div>
    
    <section class="container navigation-section">
        <?php include('./components/navigation.php'); ?>    
    </section>
    
    <section class="hero-img-carousel-section container mt-2">
    <div class="row py-5">
            <div class="col-lg-8 mx-auto">
                <?php include('./components/carousel.php'); ?>    
            </div>
        </div>
    </section>
    
    
    <!-- THUMBS -->
    <section class="container border border-left-0 border-right-0 images-row">
        <div class="row py-5 border-bottom-1">
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="#"><img class="img-thumbnail" src="./img/crop/1.jpg" alt="sapnų gaudyklės nuotrauka"></a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="#"><img class="img-thumbnail" src="./img/crop/2.jpg" alt="sapnų gaudyklės nuotrauka"></a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="#"><img class="img-thumbnail" src="./img/crop/3.jpg" alt="sapnų gaudyklės nuotrauka"></a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="#"><img class="img-thumbnail" src="./img/crop/4.jpg" alt="sapnų gaudyklės nuotrauka"></a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="#"><img class="img-thumbnail" src="./img/crop/5.jpg" alt="sapnų gaudyklės nuotrauka"></a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="#"><img class="img-thumbnail" src="./img/crop/6.jpg" alt="sapnų gaudyklės nuotrauka"></a>
            </div>
        </div>
    </section>
    
    <div class="height-20v"></div>
    <!-- CARD -->
    <section class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto my-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sapnų Gaudyklė</h5>
                        <div class="div-row py-1 mx-auto"> </div>
                        <p class="card-text text-justify ">Sapnų gaudyklė – ne tik jaukus ir originalus miegamojo interjero akcentas. Legendos skelbia, kad šis amuletas apsaugo nuo blogų, piktų minčių ir dvasių, nemalonių sapnų, padeda greičiau užmigti ir miegančiajam siunčia ramius, spalvotus ir džiugius linkėjimus iš sapnų pasaulio, o kai kurie žmonės pasikabina ją savo automobiliuose kaip laimę nešantį ženklą.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    
    <!-- Footer and scripts -->
    <?php include('./components/footer.php'); ?>    

    
    
  
    <script src="./js/script.js"></script>
</body>
</html>