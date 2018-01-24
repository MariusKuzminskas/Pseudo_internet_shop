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
        <!-- <h4 class="text-center py-5" >Įsigykite sapnų gaudyklę</h4> -->
    


        <!-- Item row -->
        <div class="row">
        <?php include('./components/generate_items.php'); ?>
        
            
        </div>
        
                
        
        
        <!-- item row end -->
        
       

    </section>
    
    
    
    
    
    
    <!-- Footer and scripts -->
    <?php include('./components/footer.php'); ?>    

    
    
  
    <script src="./js/script.js"></script>
</body>
</html>