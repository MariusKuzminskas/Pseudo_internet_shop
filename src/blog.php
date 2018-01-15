<?php require_once("./load/head.html");    ?>

<body>

   <!-- NAV SECTION START  ******************************************** -->
   <div class="trigger"></div>        
   <div class="container-fluid nav-container">
       <?php require_once("./load/navbar.php");  ?>                
   </div>
   <!-- NAV SECTION END  ******************************************** -->

<section class="container blog-section">
    <div class="row">
        <div class="col-lg-4">
            <h2>Sukurti nauja Dienoraščio įrašą</h2>
            <div class="form-group">
                <label for="subject">Tema</label>
                <input class="form-control" type="text" id="subject" placeholder="Tema"  >
                <label class="mt-3" for="tekstas">Įrašas</label>
                <textarea class="form-control " id="tekstas" rows="3"></textarea> 
                <button id="blogBtn" class="btn btn-outline-success mt-2" >Įrašyti</button>                   
            </div>        
        </div>
        <div class="col-lg-6">
            <div id="blogas">
                <?php //include('./load/load_blog_posts.php') ?>
            </div>
        </div>
    </div>
</section>

<div id="php"></div>





<!-- FOOTER SECTION Start  ******************************************** -->
<?php   require_once("./load/footer.html"); ?>