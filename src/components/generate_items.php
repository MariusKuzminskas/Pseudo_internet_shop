<?php require('./php/dbConnection.php'); 
        //create query
        $query = 'SELECT * FROM prekes';

        //Get result in a msqla obj
        $result = mysqli_query($conn, $query);
        
        //fetch row by row
        while ($preke = mysqli_fetch_assoc($result)) {
             ?>


        
            <div class="col-lg-4">
                <article class="item-container ">
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
                            echo '<s class="text-muted">'.$preke['kaina_buvusi'].' eur</s>'; } ?>                     }   ?>
                        <?php echo $preke['kaina']?> eur</p>
                        <a href="#" class="btn btn-outline-dark" >Pirkti</a>
                    </div>
                </article>
            </div>

        <?php }; // end while   ?>