<?php require_once("./load/head.html");    ?>

<body>

    <!-- NAV SECTION START  ******************************************** -->
    <div class="trigger"></div>        
    <div class="container-fluid nav-container">
        <?php require_once("./load/navbar.php");  ?>                
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
        <?php include("./load/shop_preke.php") ?>
            
        </div>
    </section>

    <!-- Items section END  ******************************************** -->

<!-- FOOTER SECTION Start  ******************************************** -->
<?php   require_once("./load/footer.html"); ?>