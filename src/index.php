<?php require_once("./load/head.html");    ?>

    <body>
        <!-- FB page embed
        <div id="fb-root"></div>
            <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script> -->
       
        <!-- TOP SECTION START  ******************************************** -->
        <section class="container-fluid top-section" id="home">
            
            <article class="absolute-left-bottom p-2">
                <h1 class="text-uppercase text-light">Sapnų Gaudyklės</h1>
            </article>
        </section>
        <!-- TOP SECTION END  ******************************************** -->
        
    <!-- NAV SECTION START  ******************************************** -->
    <div class="trigger"></div>        
    <div class="container-fluid nav-container">
        <?php require_once("./load/navbar.html");  ?>                
    </div>
    <!-- NAV SECTION END  ******************************************** -->
        <!-- THREE PIC SECTION START  ******************************************** -->
        <div class="container three-pic-container">
            <!-- <h1>labukas</h1> -->
            <!-- <button class="btn btn-primary">Paspausk</button> -->
            <div class="row tree-pic-row">
                <article class=" col-md-4 item-container ">
                    <div class="img-container" data-aos="zoom-in-left" >
                        <img class="img-fluid" src="img/crop/1.jpg" alt="Sapnu gaudyklės nuotrauka"> 
                        <div class="sale-container bg-dark text-light px-1 "><p class="blockqoute my-auto text-uppercase font-weight-bold" >Išpardavimas</p></div>
                    </div>
                    <div class="under-image-container mt-3 d-flex justify-content-between">
                        <div class="text-container "><h5>Sapnų gaudyklė #1</h5></div>
                        <div class="price-container "><p><s class="disabled">30eur </s> 20 eur</p></div>
                    </div>
                </article>
                <article class=" col-md-4 item-container " data-aos="zoom-in-up">
                    <div class="img-container">
                        <img class="img-fluid" src="img/crop/2.jpg" alt="Sapnu gaudyklės nuotrauka"> 
                        <div class="sale-container bg-dark text-light px-1 "><p class="blockqoute my-auto text-uppercase font-weight-bold" >Išpardavimas</p></div>
                    </div>
                    <div class="under-image-container mt-3 d-flex justify-content-between">
                        <div class="text-container "><h5>Sapnų gaudyklė #2</h5></div>
                        <div class="price-container "><p><s class="disabled">30eur </s> 20 eur</p></div>
                    </div>
                </article>
                <article class=" col-md-4 item-container " data-aos="zoom-in-right">
                    <div class="img-container ">
                        <img class="img-fluid" src="img/crop/3.jpg" alt="Sapnu gaudyklės nuotrauka"> 
                        <div class="sale-container bg-dark text-light px-1 "><p class="blockqoute my-auto text-uppercase font-weight-bold" >Išpardavimas</p></div>
                    </div>
                    <div class="under-image-container mt-3 d-flex justify-content-between">
                        <div class="text-container "><h5>Sapnų gaudyklė #3</h5></div>
                        <div class="price-container "><p><s class="disabled">30eur </s> 20 eur</p></div>
                    </div>
                </article>
                
            </div>
        </div>
        <!-- THREE PIC SECTION END  ******************************************** -->
        
        <!-- PICTURE GRID HEADLINE SECTION START  ******************************************** -->
        <div class="container text-headline-container" data-aos="zoom-in">
            <div class="row my-4">
                <div class="col-md-6 offset-md-3 text-headline-container-column">
                    <h2 class="text-center">Įsigykite Sapnų gaudyklę</h2>
                    <div class="line-div mx-auto my-3"></div>
                    <p class="text-justify">Sapnų gaudyklė – ne tik jaukus ir originalus miegamojo interjero akcentas. Legendos skelbia, kad šis amuletas apsaugo nuo blogų, piktų minčių ir dvasių, nemalonių sapnų, padeda greičiau užmigti ir miegančiajam siunčia ramius, spalvotus ir džiugius linkėjimus iš sapnų pasaulio, o kai kurie žmonės pasikabina ją savo automobiliuose kaip laimę nešantį ženklą.</p>
                </div>
            </div>
        </div>
        <!-- PICTURE GRID HEADLINE SECTION END  ******************************************** -->
        <!-- PICTURE GRID SECTION START  ******************************************** -->
        <div class="container-fluid pic-grid-container">
            <div class="row no-gutters">
                <div class="col-md-4" data-aos="fade-right" ><img class="img-fluid" src="img/crop/4.jpg" alt="Sapnu gaudyklės nuotrauka"><h2>Sapnu gaudyklė #4</h2></div>
                <div class="col-md-4"data-aos="fade-down"><img class="img-fluid" src="img/crop/5.jpg" alt="Sapnu gaudyklės nuotrauka"><h2>Sapnu gaudyklė #5</h2></div>
                <div class="col-md-4"data-aos="fade-left"><img class="img-fluid" src="img/crop/6.jpg" alt="Sapnu gaudyklės nuotrauka"><h2>Sapnu gaudyklė #6</h2></div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-8"><img class="img-fluid" src="img/crop/7.jpg" alt="Sapnu gaudyklės nuotrauka"></div>
                <div class="col-md-4">
                    <div class="col-md-12 px-0"> <img class="img-fluid" src="img/crop/8.jpg" alt="Sapnu gaudyklės nuotrauka"></div>
                    <div class="col-md-12 px-0"><img class="img-fluid" src="img/crop/9.jpg" alt="Sapnu gaudyklės nuotrauka"></div>
            </div>
            
            </div>
            </div>
        </div>
        <!-- PICTURE GRID SECTION END  ******************************************** -->
        <!-- REVIEW SECTION START  ******************************************** -->
        <div class="container comments-section my-4 position-relative">
            <h2 class="text-center mb-4" >Ką apie mus sako žmonės?</h2>
            <div class="btn-container d-flex justify-content-between align-content-center">
                    <button class="btn btn-outline-dark mx-3"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                    <button class="btn btn-outline-dark mx-3"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
            </div>
            
            <div class="comments-container d-flex justify-content-center">
            <iframe class="fb-post" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fbagalinga%2Fposts%2F10210257610744488%3A0&width=500" width="500" height="354" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><div>
            <iframe class="fb-post" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fagne.suchodolskyte%2Fposts%2F1648690111808810%3A0&width=500" width="500" height="354" style="border:none;overflow:hidden" scrolling="yes" frameborder="0" allowTransparency="true"></iframe>
            </div>
        
        </div>
        </div>
        <!-- REVIEW SECTION END  ******************************************** -->
        
        
        
    <!-- FOOTER SECTION Start  ******************************************** -->
    <?php   require("./load/footer.html"); ?>