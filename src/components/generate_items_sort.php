<?php require('../php/dbConnection.php'); 
        //create query
        
        //checking if call to generate items is from ajax f-ion
        if (isset($_POST['sortType'])) {
            
            if ($_POST['sortType'] == 2) {
                $query = 'SELECT * FROM prekes ORDER BY kaina ASC';
                } else if ($_POST['sortType'] == 3) {
                    $query = 'SELECT * FROM prekes ORDER BY kaina DESC';
                } else { $query = 'SELECT * FROM prekes'; }
        
        } else { $query = 'SELECT * FROM prekes'; }
       
        

        //Get result in a msqla obj
        $result = mysqli_query($conn, $query);
        
        //fetch row by row
        while ($preke = mysqli_fetch_assoc($result)) {
             ?>


        
            <div class="col-lg-4 mt-5">
                <article class="shop-item-container ">
                    <!-- img container -->
                    <div class="img-container position-relative">
                        <a href="item.php?id=<?php echo $preke['id']?>"><img src="./img/port-thumb/<?php echo $preke['image']?>.jpg" alt="sapnu gaudyklės nuotrauka"></a>
                        <p class="sale bg-dark text-light blockquote text-uppercase px-1 position-absolute">
                        <?php if ($preke['sale']) {
                            echo "išpardavimas";    
                        }?>
                        </p>
                    </div>
                    <!-- under img container -->
                    <div class="under-img-container text-center">     
                        <p><?php echo $preke['pavadinimas']?></p>
                        <p> 
                        <!-- ispardavimo kainos rodymas arba ne -->
                        <?php if ($preke['sale']) {
                            echo '<s class="text-muted">'.$preke['kaina_buvusi'].' eur</s>'; 
                        } ?>                     
                        <?php echo $preke['kaina']?> eur</p>
                        <a href="item.php?id=<?php echo $preke['id']?>" class="btn btn-outline-dark" >Plačiau...</a>
                    </div>
                </article>
            </div>

        <?php }; // end while  
        
        //free result
        mysqli_free_result($result);
        
        // close connection
        mysqli_close($conn);
        
        ?>