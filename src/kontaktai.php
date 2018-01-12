<?php session_start();
require_once("./load/headK.html");    ?>
<body>
    <div class="trigger"></div>
    <!-- NAV SECTION START  ******************************************** -->
    <div class="container-fluid nav-container">
    <?php require_once("./load/navbar.html"); ?>
    </div>
    <!-- NAV SECTION END  ******************************************** -->
           <!-- alertas sekmingo siuntimo atveju -->
           <div class="alert alert-success text-center" role="alert">
                        Jūsų žinutė buvo išsųsta
           </div>
    

    <section class="container about-section">
        <div class="row mt-4">
            <div class="col m6 ">
            <h2 class="text-center">Susisiekite</h2>
                <div class="row">
    <form class="col s12" action='#' method="post"  >
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
            <!-- <button id="siusti" type="submit" name="button" class="btn waves-effect waves-light" >Sųsti -->
            <button  class="btn waves-effect waves-light" type="submit" name="button">Sųsti
                <i class="material-icons right">send</i>
            </button>
          </div>
      </div>

    <div id="isiustas"></div>

    </form>
    <?php 
    if (isset($_SESSION["isiuntimas"])) {  session_destroy();  }

    if (isset($_POST["elpastas"])) { 
          include("./php/email.php");  
        //   session_start();
        //   $_SESSION["isiuntimas"] = 1;  
        }
    ?> 
    
   
    
     
            
  </div>
            
            </div>
            <div class="col m6">
                <div id="map"></div>
            </div>
        </div>
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
<?php   require("./load/footer.html"); ?>