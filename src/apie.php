<?php require_once("./load/head.html");    ?>

<body>

   <!-- NAV SECTION START  ******************************************** -->
   <div class="trigger"></div>        
   <div class="container-fluid nav-container">
       <?php require_once("./load/navbar.php");  ?>                
   </div>
   <!-- NAV SECTION END  ******************************************** -->

<section class="container apie-section">
    <div class="row mt-3">
        <div class="col-lg-6"> <img class="img-fluid" src="./img/autore.jpeg" alt="Autores nuotrauka"> </div>
        <div class="col-lg-6">
            <h3 class="text-center display-4" >Aš esu Darytoja</h3>
            <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque ratione officia repellendus impedit quibusdam architecto laborum debitis exercitationem aut! Enim asperiores dignissimos a quia non. Aliquam repudiandae quas dolores aspernatur, aliquid iste officiis, soluta maiores ad consequatur quibusdam odio ab? Dignissimos, blanditiis dicta. Qui illo quod sunt, tempora deserunt ipsam, quas quos placeat excepturi hic veritatis numquam neque, facilis saepe.</p>
            <img class="img-thumbnail " src="./img/crop/16.jpg" alt="sapnu daudykles nuotrauka">
            <img class="img-thumbnail " src="./img/crop/14.jpg" alt="sapnu daudykles nuotrauka">
        </div>
    </div>
    <div id="loadMore" class="row mt-4">
        <!-- cia iloadina AJAX -->
        
    </div>
        <div class="row pt-3">
            <div class="col-lg-12" ><button id="loadBtn" class="btn btn-lg btn-outline-primary center">Rodyti daugiau nuotraukų</button></div>
        </div>
</section>





<!-- FOOTER SECTION Start  ******************************************** -->
<?php   require_once("./load/footer.html"); ?>