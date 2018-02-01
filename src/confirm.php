<?php   session_start();
        include('./load/head.php'); ?>

<body class="bg-light" >
    <!-- top logo -->
    <?php include('./components/logo.php'); ?>
    <!-- NAV -->
    <section class="container navigation-section">
        <?php include('./components/navigation.php'); ?>    
    </section>
    
    <!-- Main -->
    <section class="container cofirm-container">
    <?php 

    // if (isset($_POST)) {
    //     var_dump($_POST);
    // }


    
    
    
    require('./php/dbConnection.php'); 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else { die("ivyko klaida"); }
    //create query
    $query = 'SELECT * FROM prekes WHERE id='.$id.'';

    //Get result in a msqla obj
    $result = mysqli_query($conn, $query);
    
    //fetch row by row
    $preke = mysqli_fetch_assoc($result);

    
    
    //$kainaSuSiuntimu = $preke['kaina'];
    
        
    if (!isset($_SESSION['formSubmited'])) {
        // item price plus shipping method calculation
        if ($_POST['postMethod'] == "nemokamas_siuntimas") {
            $kainaSuSiuntimu = $preke['kaina'];
        } else if ($_POST['postMethod'] == "kurjeris") {
            $kainaSuSiuntimu = $preke['kaina'] + 5;
        } else if ($_POST['postMethod'] == "omniva") {
            $kainaSuSiuntimu = $preke['kaina'] + 1;
        }
    }
    


    ?>

    <div class="row mt-3">
        <div class="col-lg-3"> 
        <img class="rounded img-fluid" src="./img/1920/<?php echo $preke['image']?>.jpg" alt="sapnų gaudyklės nuotrauka">    
        </div>
        <div class="col-lg-6 col-md-9">
            <h4 class="font-weight-light">Prekės užsakymo patvirtinimas</h4>
            
            <!-- if confirm submit button was pressed -->
            <?php if (isset($_SESSION['formSubmited'])) { ?>
                <!-- order success alert -->
                <div class="alert alert-success" role="alert">
                    Jūsų gaudyklė užsakyta, apie prekę informacija gausite el. paštu.
                </div>
                
                <?php 
                    // insert customer and order details into DB
                    
                    // set item as sold = 1
                    $setSold = "UPDATE prekes SET sold=1 WHERE id=$id;";
                    $update = mysqli_query($conn, $setSold);
                    session_destroy();
                
                ?>
                

            <?php } else { ?> 
            
            
            <p class="text-justify">Paspausdami žemiau esantį mygtuką jūs patvirtinate kad jau padarėte arba netrukus padarysite <span class="font-weight-bold"><?php echo $kainaSuSiuntimu ?> eur</span>  bankinį pavedimą
            į sąskaitą: <span class="font-weight-bold">LT497300010141118654</span> "Swedbank", 
            Kamilė Steponavičiūtė.</p>
            <form action="./php/emailOrderToOwner.php" method="post">
                <input type="submit" class="btn btn-success mb-2" name="button" value="Patvirtinti">
            
                <p class="mb-1 pb-1">jūsų duomenys:</p>
                
                <div class="form-row mb-2">
                    <div class="col">
                        <input type="text" name="vardas" id="" class="form-control" placeholder="Vardas" value="<?php echo $_POST['vardas']?>">
                    </div>
                    <div class="col">
                        <input type="text" name="pavarde" id="" class="form-control" required placeholder="Pavardė" value="<?php echo $_POST['pavarde']?>">
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col">
                        <input type="tel" name="telefonas" id="" class="form-control" placeholder="telefonas" value="<?php echo $_POST['telefonas']?>">
                    </div>
                    <div class="col">
                        <input type="email" name="elpastas" id="" class="form-control" required value="<?php echo $_POST['elpastas']?>"  placeholder="el. paštas">
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col">
                        <input type="text" name="miestas" id="" class="form-control" required placeholder="miestas" value="<?php echo $_POST['miestas']?>">
                    </div>
                    <div class="col">
                        <input type="text" name="gatve" id="" class="form-control" required  placeholder="gatvė ir namo nr" value="<?php echo $_POST['gatve']?>">
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-6">
                        <input type="text" name="postCode" id="" class="form-control"  placeholder="Pašto kodas" value="<?php echo $_POST['postCode']?>">
                    </div>
                </div>
                <input type="hidden" name="postMethod" value="<?php echo $_POST['postMethod']?>" />
                <input type="hidden" name="id" value="<?php echo $preke['id']?>" />
                <input type="hidden" name="kaina" value="<?php echo $kainaSuSiuntimu?>" />
                <input type="hidden" name="formSubmited" value="1" />
            </form>
        </div>
        <?php } ?>
    </div>

    </section>
    
    
    
    
    
    
    <!-- Footer and scripts -->
    <?php include('./components/footer.php'); ?>    

    
    
  
    <script src="./js/script.js"></script>
</body>
    <?php
    //free result
    mysqli_free_result($result);
    
    // close connection
    mysqli_close($conn);
    ?>
</html>