<?php require_once("./load/head.html");    ?>

<body>

    <!-- NAV SECTION START  ******************************************** -->
    <div class="trigger"></div>        
    <div class="container-fluid nav-container">
        <?php require_once("./load/navbar.php");  ?>                
    </div>
    <!-- NAV SECTION END  ******************************************** -->
    
    <?php   
     
    $id = $_GET['id'];

    $sql = "SELECT * FROM shop_prekes WHERE id=$id";
    $dataRowMsql = mysqli_query($prisijungimas, $sql);
    
    $dataRow = mysqli_fetch_assoc($dataRowMsql);
    
    //var_dump($dataRow);
    
    ?>
    
    
    <!-- MAIN item section start  ******************************************** -->
    <section class="container item-container">
        <!-- MAIN item row start  ******************************************** -->
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="img-container">
                    <img class="img-fluid" src="img/1920/<?php echo $id ?>.jpg" alt="Sapnu gaudyklės nuotrauka">
                </div>
            </div>
            <div class="col-lg-6">
                <article class="about-item-container">
                    <div class="item-name-container">
                        <h2>Sapnų Gaudyklė #<?php echo $id  ?></h2>
                    </div>
                    <div class="price-container">
                        <p>
                        <?php if ($dataRow['sale'] == 1) { echo "<s class='disabled'>" . $dataRow['full_price'] . "eur </s>"; } ?> <?php print($dataRow['price']); ?> eur</p>
                    </div>
                    <div class="paragraph-container">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, quas. Ipsum doloribus enim sed iste
                            reiciendis earum est velit, eos qui obcaecati maxime ea, sit fugit dicta nobis consectetur omnis
                            provident? Labore a, modi ipsam libero quod laboriosam odio praesentium!</p>
                    </div>
                    <div class="to-cart-container">
                        <button class="btn btn-primary btn-lg">Pirkti dabar</button>
                    </div>
                </article>
            </div>
        </div>
        <!-- MAIN item row end  ******************************************** -->
        <hr>
        <div class="spacing"></div>
        <h2 class="text-center">Kitos mūsų prekės:</h2>
        <div class="line-div mx-auto my-3 mb-ė"></div>
        <div class="row additional-items-row">
            <!-- situos bus galima dinamiskai -->
            <article class="col-md-4 item-container" >
                <div class="img-container position-relative" data-aos="fade-down">
                    <a href="preke.html">
                        <img class="img-fluid" src="img/port-thumb/5.jpg" alt="Sapnu gaudyklės nuotrauka">
                        <div class="sale-container bg-dark text-light  px-1 position-absolute ">
                            <p class="blockqoute my-auto text-uppercase font-weight-bold">Išpardavimas</p>
                        </div>
                    </a>
                </div>
               
                <div class="under-image-container mt-3 d-flex justify-content-between">
                    <div class="text-container ">
                        <h5>Sapnų gaudyklė # 5</h5>
                    </div>
                    <div class="price-container ">
                        <p>
                            <s class="disabled">30eur </s> 20 eur</p>
                    </div>
                </div>
            </article>
            <article class="col-md-4 item-container position-relative " data-aos="fade-up">
                <div class="img-container">
                    <img class="img-fluid" src="img/port-thumb/2.jpg" alt="Sapnu gaudyklės nuotrauka">
                    <!-- <div class="sale-container bg-dark text-light  px-1 "><p class="blockqoute my-auto text-uppercase font-weight-bold">Išpardavimas</p></div> -->
                </div>
                <div class="under-image-container mt-3 d-flex justify-content-between">
                    <div class="text-container ">
                        <h5>Sapnų gaudyklė # 2</h5>
                    </div>
                    <div class="price-container ">
                        <p> 30 eur</p>
                    </div>
                </div>
            </article>
            <article class="col-md-4 item-container" data-aos="fade-down">
                <div class="img-container position-relative ">
                    <img class="img-fluid" src="img/port-thumb/3.jpg" alt="Sapnu gaudyklės nuotrauka">
                    <div class="sale-container bg-dark text-light  px-1 ">
                        <p class="blockqoute my-auto text-uppercase font-weight-bold">Išpardavimas</p>
                    </div>
                </div>
                <div class="under-image-container mt-3 d-flex justify-content-between">
                    <div class="text-container ">
                        <h5>Sapnų gaudyklė # 3</h5>
                    </div>
                    <div class="price-container ">
                        <p>
                            <s class="disabled">30eur </s> 20 eur</p>
                    </div>
                </div>
            </article>

        </div>

    </section>
    <!-- MAIN item section end  ******************************************** -->





<!-- FOOTER SECTION Start  ******************************************** -->
<?php   require_once("./load/footer.html"); ?>