<?php include('./load/head.php'); ?>

<body class="bg-light" >
    <!-- top logo -->
    <?php include('./components/logo.php'); ?>
    <!-- NAV -->
    <section class="container navigation-section">
        <?php include('./components/navigation.php'); ?>    
    </section>
    
    <!-- Main -->
    <section class="container shop-container">
        <h4 class="text-center py-5" >Įsigykite sapnų gaudyklę</h4>
    


        <!-- Item row -->
        <div class="row">
        <div class="col-lg-4">
        <?php require('./php/dbConnection.php'); 
        //create query
        $query = 'SELECT * FROM prekes';

        //Get result in a msqla obj
        $result = mysqli_query($conn, $query);
        
        //fetch row by row
        while ($preke = mysqli_fetch_assoc($result)) {
             ?>


        
            
                <article class="item-container ">
                    <!-- img container -->
                    <div class="img-container position-relative">
                        <a href="item.php"><img src="./img/port-thumb/<?php echo $preke['image']?>.jpg" alt="sapnu gaudyklės nuotrauka"></a>
                        <p class="sale bg-dark text-light blockquote text-uppercase px-1 position-absolute"> išpardavimas</p>
                    </div>
                    <!-- under img container -->
                    <div class="under-img-container text-center">     
                        <p><?php echo $preke['pavadinimas']?></p>
                        <p><s class="text-muted">25 eur</s> <?php echo $preke['kaina']?> eur</p>
                        <a href="#" class="btn btn-outline-dark" >Pirkti</a>
                    </div>
                </article>
            </div>
        </div>
        
        <?php  } //end while  ?>         
        
        
        <!-- item row end -->
        
       

    </section>
    
    
    
    
    
    
    <!-- Footer and scripts -->
    <?php include('./components/footer.php'); ?>    

    
    
  
    <script src="./js/script.js"></script>
</body>
</html>