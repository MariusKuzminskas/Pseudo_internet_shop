<?php require_once("./load/head.html");    ?>

<body>

    <!-- NAV SECTION START  ******************************************** -->
    <div class="trigger"></div>        
    <div class="container-fluid nav-container">
        <?php require_once("./load/navbar.html");  ?>                
    </div>
    <!-- NAV SECTION END  ******************************************** -->
    
    <!-- Selection section START  ******************************************** -->
    <section class="container selection-section">
        <div class="row">
            <div class="col-md-12  my-3">
                <form>
                    <div class="form-row align-items-center d-flex justify-content-end">
                        <div class="col-auto ">
                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Moterims</span>
                            </label>
                        </div>
                        <div class="col-auto ">
                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Vyrams</span>
                            </label>
                        </div>
                        <div class="col-auto ">
                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Vaikams</span>
                            </label>
                        </div>
                        <div class="col-auto">
                            <!-- <label class="mr-sm-2" for="inlineFormCustomSelect">Rūšiuoti</label> -->
                            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                <!-- <option selected>Choose...</option> -->
                                <option value="1">Naujausi viršuje</option>
                                <option value="2">Pigiausi viršuje</option>
                                <option value="3">Brangiausi viršuje</option>
                            </select>
                        </div>
                        <!-- <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Selection section END  ******************************************** -->
    <!-- Items section Start  ******************************************** -->
    <section class="container items-section">
        <div class="row">
            <article class="col-md-4 item-container" data-aos="fade-down">
                <div class="img-container">
                    <a href="preke.php">
                        <img class="img-fluid" src="img/port-thumb/5.jpg" alt="Sapnu gaudyklės nuotrauka">
                        <div class="sale-container bg-dark text-light  px-1 ">
                            <p class="blockqoute my-auto text-uppercase font-weight-bold">Išpardavimas</p></div></div>
                    </a>
                <div class="under-image-container mt-3 d-flex justify-content-between">
                    <div class="text-container "><h5>Sapnų gaudyklė # 5</h5></div>
                    <div class="price-container "><p><s class="disabled">30eur </s> 20 eur</p>
                    </div></div>
            </article>
            <article class="col-md-4 item-container" data-aos="fade-up">
                <div class="img-container">
                    <img class="img-fluid" src="img/port-thumb/2.jpg" alt="Sapnu gaudyklės nuotrauka">
                    <!-- <div class="sale-container bg-dark text-light  px-1 "><p class="blockqoute my-auto text-uppercase font-weight-bold">Išpardavimas</p></div> -->
                    </div>
                <div class="under-image-container mt-3 d-flex justify-content-between">
                    <div class="text-container "><h5>Sapnų gaudyklė # 2</h5></div>
                    <div class="price-container "><p> 30 eur</p>
                    </div></div>
            </article>
            <article class="col-md-4 item-container" data-aos="fade-down">
                <div class="img-container">
                    <img class="img-fluid" src="img/port-thumb/3.jpg" alt="Sapnu gaudyklės nuotrauka">
                    <div class="sale-container bg-dark text-light  px-1 ">
                        <p class="blockqoute my-auto text-uppercase font-weight-bold">Išpardavimas</p></div></div>
                <div class="under-image-container mt-3 d-flex justify-content-between">
                    <div class="text-container "><h5>Sapnų gaudyklė # 3</h5></div>
                    <div class="price-container "><p><s class="disabled">30eur </s> 20 eur</p>
                    </div></div>
            </article>
            <article class="col-md-4 item-container ">
                <div class="img-container">
                    <img class="img-fluid" src="img/port-thumb/4.jpg" alt="Sapnu gaudyklės nuotrauka">
                    <!-- <div class="sale-container bg-dark text-light  px-1 "><p class="blockqoute my-auto text-uppercase font-weight-bold">Išpardavimas</p></div> -->
                </div>
                <div class="under-image-container mt-3 d-flex justify-content-between">
                    <div class="text-container "><h5>Sapnų gaudyklė # 4</h5></div>
                    <div class="price-container "><p> 24 eur</p>
                    </div></div>
            </article>
            <article class="col-md-8 item-container ">
                <div class="img-container">
                    <img class="img-fluid" src="img/crop/9.jpg" alt="Sapnu gaudyklės nuotrauka">
                    <!-- <div class="sale-container bg-dark text-light  px-1 "><p class="blockqoute my-auto text-uppercase font-weight-bold">Išpardavimas</p></div> -->
                </div>
                <div class="under-image-container mt-3 d-flex justify-content-between">
                    <div class="text-container "><h5>Sapnų gaudyklė # 9</h5></div>
                    <div class="price-container "><p> 50 eur</p>
                    </div></div>
            </article>

        </div>
    </section>

    <!-- Items section END  ******************************************** -->

<!-- FOOTER SECTION Start  ******************************************** -->
<?php   require_once("./load/footer.html"); ?>