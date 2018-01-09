<?php require_once("./load/head.html");    ?>

    <body>
        
       
        <!-- TOP SECTION START  ******************************************** -->
        <section class="container-fluid top-section" id="home" data-slides='[
        "img/1920/1.jpg",
        "img/1920/2.jpg",
        "img/1920/3.jpg",
        "img/1920/4.jpg",
        "img/1920/5.jpg",
        "img/1920/6.jpg",
        "img/1920/7.jpg",
        "img/1920/8.jpg",
        "img/1920/9.jpg"
    ]'>
            <div class="btn-container d-flex justify-content-between align-content-center buttons-top">
                <button class="btn btn-outline-dark mx-3"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                <button class="btn btn-outline-dark mx-3"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
            </div>
            <article class="absolute-left-bottom p-2">
                <h1 class="text-uppercase ">Sapnų Gaudyklės</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus magnam laboriosam et, perspiciatis aut tenetur expedita sunt nam tempore blanditiis?</p>
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
                <!-- Code from facebook page  -->
                <!-- <div class="fb-post" data-href="https://www.facebook.com/paradnikaite/posts/10210433343938947:0" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/paradnikaite/posts/10210433343938947:0" class="fb-xfbml-parse-ignore"><p>Puiki dovana, a&#x10d;i&#x16b; u&#x17e; operatyvum&#x105;! Gaudys sapnus mielai mergaitei :)</p>Posted by <a href="https://www.facebook.com/paradnikaite">Agne Paradnikaite-Kivere</a> on&nbsp;<a href="https://www.facebook.com/paradnikaite/posts/10210433343938947:0">Wednesday, December 27, 2017</a></blockquote></div> -->
            </div>
        </div>
        <!-- REVIEW SECTION END  ******************************************** -->
        
        
        
    <!-- FOOTER SECTION Start  ******************************************** -->
    <?php   require_once("./load/footer.html"); ?>