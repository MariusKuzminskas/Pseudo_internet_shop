<?php include('./load/head.php'); ?>

<body class="bg-light" >
    <!-- top logo -->
    <?php include('./components/logo.php'); ?>
    <!-- NAV -->
    <section class="container navigation-section">
        <?php include('./components/navigation.php'); ?>    
    </section>
    
    <!-- Main -->
    <section class="container item-container">
        <?php require('./php/dbConnection.php'); 
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            } else { $id = 1; } 
            
            //create query
            $query = 'SELECT * FROM prekes WHERE id='.$id.'';

            //Get result in a msqla obj
            $result = mysqli_query($conn, $query);
            
            //fetch row by row
            $preke = mysqli_fetch_assoc($result);

            //free result
            mysqli_free_result($result);
            
            // close connection
            mysqli_close($conn);
        ?>

        <article class="row color-dark-grey d-flex mt-5">
            <!-- image column -->
            <div class="col-lg-6 pic-container position-relative">
                <p class="sale bg-dark text-light blockquote text-uppercase position-absolute px-1">
                <?php   if ($preke['sale']) {
                            echo "išpardavimas";    
                        }?>
                </p>
                <img class="rounded img-fluid" src="./img/1920/<?php echo $preke['image']?>.jpg" alt="sapnų gaudyklės nuotrauka"> </div>
            <!-- Text column -->
            <div class="col-lg-6">
                <!-- Pavadinimas -->
                <div class="item-name-container ">
                    <h4 class="h2 bg-light font-w300" ><?php echo $preke['pavadinimas']?></h4>
                </div>
                <!-- kaina -->
                <div class="price-container bg-light h4 mb-3">
                    <p class="font-w300">
                <?php if ($preke['sale']) {
                    echo '<s class="text-muted ">'.$preke['kaina_buvusi'].' eur</s>'; } ?>    
                <?php echo $preke['kaina']?> eur</p></div>
                <!-- Matmenys -->
                <div class="row bg-grey  matmenys-container">
                    <div class="col-4">
                        <p class="text-uppercase ">Matmenys:</p>
                    </div>
                    <div class="col">
                        <p>ilgis: <?php echo $preke['ilgis']?>cm</p>
                        <p>skersmuo: <?php echo $preke['skersmuo']?>cm</p>
                    </div>
                </div>
                <!-- Medziagos -->
                <div class="row medziagos-container bg-light">
                    <div class="col-4">
                    <div><p class="text-uppercase">Medžiagos:</p></div>    
                    </div>
                    <div class="col">
                        <p><?php echo $preke['medziagos_1']?></p>
                        <p><?php echo $preke['medziagos_2']?></p>
                    </div>
                </div>
                <!-- buy button -->
                <div class="to-cart-container bg-grey row">
                    <div class="col-lg-12">
                        <!-- Button trigger modal -->
                        <button class="btn btn-dark btn-lg blockquote mt-3" data-toggle="modal" data-target="#pirkti_forma1">pirkti</button>
                    </div>
                </div>    
            </div>
        </article>
        
    
    
       

        <!-- Modal 1 -->
        <div class="modal fade" id="pirkti_forma1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="exampleModalLongTitle">Įsigyti šią sapnų gaudyklę</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <!-- <p>Norėdami įsigyti šią sapnų gaudyklę, perveskite bankiniu pavedimu 20 eur į saskaitą LT9000000444555. Gaudyklė bus jums išsiųsta iškarto gavus pavedimą. Užpildykite rezervacijos lentelę</p>  -->
                    <!-- form -->
                    <div class="form-group">
                        <label for="pristatymoBudas">Pasirinkite pristatymo būdą:</label>
                        <select class="form-control" id="pristatymoBudas">
                        <option value="option1" selected="selected" >Nemokamas siuntimas Lietuvos paštu</option>
                        <option value="option2">Pristatymas kurjeriu 1-2 d.d.: €5.00</option>
                        <option value="option3">Atsiimti OMNIVA paštomate 1-2 d.d. €1.00</option>
                    </select>
                    </div>
                    <div class="row">
                        <div class="col-3 mb-1"> <p class="text-center">ID: <?php echo $preke['id']?></p> </div>
                        <div class="col mb-1"> <p class="text-center">Galutinė suma: <span id="priceShip"><?php echo $preke['kaina']?></span>eur</p> </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col">
                            <input type="text" name="vardas" id="" class="form-control" placeholder="Vardas">
                        </div>
                        <div class="col">
                            <input type="text" name="pavarde" id="" class="form-control" required  placeholder="Pavardė">
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col">
                            <input type="tel" name="telefonas" id="" class="form-control" placeholder="telefonas">
                        </div>
                        <div class="col">
                            <input type="email" name="elpastas" id="" class="form-control" required  placeholder="el. paštas">
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col">
                            <input type="text" name="miestas" id="" class="form-control" required placeholder="miestas">
                        </div>
                        <div class="col">
                            <input type="text" name="gatve" id="" class="form-control" required  placeholder="gatvė ir namo nr">
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-6">
                            <input type="text" name="postCode" id="" class="form-control"  placeholder="Pašto kodas">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"> 
                            <p class="text-justify">Norėdami užsisakyti šią gaudyklė padarykite <span class="priceShip"><?php echo $preke['kaina']?></span> eur bankinį pavedimą
                            į sąskaitą: <span class="font-weight-bold">LT497300010141118654</span> "Swedbank" 
                            Kamilė Steponavičiūtė</p> 
                        </div>
                    </div>
               
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Atšaukti</button>
                <button type="button" class="btn btn-primary">Pirkti</button>
            </div>
            </div>
        </div>
        </div>

        
    

<div class="height-20v"></div>
<!-- <div class="div-row-long my-3 mx-auto"> </div> -->

    </section>
    
    
    
    
    
    
    <!-- Footer and scripts -->
    <?php include('./components/footer.php'); ?>    

    
    
  
    <script src="./js/script.js"></script>
</body>
</html>