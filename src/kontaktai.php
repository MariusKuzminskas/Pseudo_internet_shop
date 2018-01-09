<?php require_once("./load/head.html");    ?>
<body>
    <div class="trigger"></div>
    <!-- NAV SECTION START  ******************************************** -->
    <div class="container-fluid nav-container">
    <?php require_once("./load/navbar.html"); ?>
    </div>
    <!-- NAV SECTION END  ******************************************** -->
    

    <section class="container about-section">
        <div class="row mt-4">
            <div class="col-md-6 bg-info">
                <h2 class="text-center">Susisiekite</h2>
                <form class="my-5" >
                    <div class="form-group">
                      <label for="formGroupExampleInput">Jūsų vardas</label>
                      <input type="text" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Vardas Pavardė">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jūsų elektroninis paštas</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Jūsų žinutė</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="button-container d-flex justify-content-center">
                        <button type="submit" class="btn btn-lg btn-primary px-5 ">Išsiųsti</button>
                      </div>
                    </form>
            </div>
            <div class="col-md-6">
                <div id="map"></div>
            </div>
        </div>
    </section>

<!-- FOOTER SECTION Start  ******************************************** -->
<?php   require_once("./load/footer.html"); ?>