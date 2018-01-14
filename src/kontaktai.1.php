<?php session_start();
require_once("./load/headK.html");    ?>
<body>
    <!-- <div class="trigger"></div> -->
    <!-- NAV SECTION START  ******************************************** -->
    <div class="navbar-fixed nav-container">
    <?php //require_once("./load/navbar.html"); ?>
    
    <nav class="nav-extended">
    <div class="nav-wrapper valign-wrapper grey lighten-3  ">
      <a href="#" id="logo-text" class="brand-logo right">  Sapnų Gaudyklės</a>
      <a href="#" class="brand-logo right"><img class="" src="img/logo.png" alt="logotipas"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
      <li><a class="" href="index1.php">   <h5>Pagrindinis2</h5> </a></li>
      <li><a class="" href=" index.php">    <h5>Pagrindinis </h5> </a></li>
      <li><a class="" href=" shop.php">     <h5>Parduotuvė  </h5> </a></li>
      <li><a class="" href=" apie.php">     <h5>Apie mane   </h5></a></li>
      <li><a class="" href="kontaktai.php"><h5>Kontaktai   </h5></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
    <!-- <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">Test 1</a></li>
        <li class="tab"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab"><a href="#test4">Test 4</a></li>
      </ul>
    </div> -->
  </nav>

    
    </div>
    <!-- NAV SECTION END  ******************************************** -->
           <!-- alertas sekmingo siuntimo atveju -->
           <div class="alert alert-success text-center" role="alert">
                        Jūsų žinutė buvo išsųsta
           </div>
    

    <section class="container about-section">
        <div class="row">
            <div class="col m6 ">
                <h2 class="center">Susisiekite</h2>
                <div class="row">
                    <div class="col m12">
                        <form class="" action='#' method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" class="validate" name="vardas" >
                                    <label for="icon_prefix">Vardas, Pavardė</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" class="validate" name="telefonas" placeholder="+370">
                                    <label for="icon_telephone">Telephone</label>
                                </div>
                            
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" type="email" class="validateTE" name="elpastas" required  >
                                    <label for="email">El. pašto adresas</label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">create</i>  
                                    <textarea id="textarea1" class="materialize-textarea" name="zinute" required></textarea>
                                    <label for="textarea1">Jūsų pranešimas</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 center-align">
                                    <button  class="btn waves-effect waves-light" type="submit" name="button">Sųsti
                                            <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>

                            <div id="isiustas"></div>

                        </form>
                    </div>
                </div>    
            <!-- </div>   -->
            
            <?php 
                if (isset($_SESSION["isiuntimas"])) {  session_destroy();  }

                if (isset($_POST["elpastas"])) { 
                    include("./php/email.php");  
                    //   session_start();
                    //   $_SESSION["isiuntimas"] = 1;  
                    }
            ?> 
    
           
             
            
            <div class="col m6">
                <div id="map"></div>
                <div class="input-field col s12">
                                <i class="material-icons prefix">create</i>  
                                <textarea id="textarea1" class="materialize-textarea" name="zinute" required></textarea>
                                <label for="textarea1">Jūsų pranešimas</label>
                </div>

            </div>
        <!-- </div> -->
    </section>

    <section class="row">
        <div class="col s12">
        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="./img/port-thumb/1.jpg"></a>
            <a class="carousel-item" href="#two!"><img src="./img/port-thumb/2.jpg"></a>
            <a class="carousel-item" href="#three!"><img src="./img/port-thumb/3.jpg"></a>
            <a class="carousel-item" href="#four!"><img src="./img/port-thumb/4.jpg"></a>
            <a class="carousel-item" href="#five!"><img src="./img/port-thumb/5.jpg"></a>
        </div>
        </div>
    </section>

<!-- FOOTER SECTION Start  ******************************************** -->
<?php  // require("./load/footer.html"); ?>

<footer>
    <div class="">
        <div class="row grey-text text-lighten-3 ">
            <div class="col l3">
                <h4>Sapnų Gaudyklės</h4>
                <img class="img-fluid" src="../img/logo-150.png" alt="logotipas">
            </div>
            <div class="col l3 ">
                <h4>Ieškokite mūsų:</h4>
                <a href="http://www.facebook.com/gaudykles" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="http://www.instagram.com/sapnu.gaudykles">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col l6">
                <h4>instagram</h4>
                <div id="instafeed">
                    
                </div>
            </div>

        </div>
    </div>
</footer>


<!-- map kontaktu pslpiui -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1xBXtQo2-VpKXYMxJzlwGnPal8Cs6bDY&callback=initMap" async defer></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<!-- materialize -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script type="text/javascript" src="js/instafeed.min.js"></script>
<!-- <script src="js/fadeFunc.js"></script> -->
<script src="js/script_kontaktai.js"></script>
</body>

</html>