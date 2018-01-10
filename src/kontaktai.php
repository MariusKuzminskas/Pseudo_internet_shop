<?php require_once("./load/headK.html");    ?>
<body>
    <div class="trigger"></div>
    <!-- NAV SECTION START  ******************************************** -->
    <div class="container-fluid nav-container">
    <?php require_once("./load/navbar.html"); ?>
    </div>
    <!-- NAV SECTION END  ******************************************** -->
    

    <section class="container about-section">
        <div class="row mt-4">
            <div class="col-md-6 ">
                <h2 class="text-center">Susisiekite</h2>
                <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">Vardas, Pavardė</label>
        </div>
    </div>
      <div class="row">
      <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Telephone</label>
      </div>
      
      <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate">
          <label for="email">El. pašto adresas</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">create</i>  
        <textarea id="textarea1" class="materialize-textarea"></textarea>
        <label for="textarea1">Jūsų pranešimas</label>
        </div>
      </div>
      <div class="row">
          <div class="col s12 center-align">
            <button class="btn waves-effect waves-light" type="submit" name="action">Sųsti
                <i class="material-icons right">send</i>
            </button>
          </div>
      </div>

    </form>
  </div>
            
            </div>
            <div class="col-md-6">
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