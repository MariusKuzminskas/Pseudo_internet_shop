<?php include('./load/head.php'); ?>

<body class="bg-light" >
    <!-- top logo -->
    <div class=""> <img class="d-block mx-auto" src="./img/logo-150.png" alt="sapnų gaudyklės Logotipas"> </div>
    <!-- NAV -->
    <section class="container navigation-section">
        <?php include('./components/navigation.php'); ?>    
    </section>
    
    <!-- Main -->
    <section class="container main-container">
        <h4 class="text-center py-5" >Įsigykite sapnų gaudyklę</h4>
    
        <!-- Item row -->
        <?php include('./components/item.php'); ?>    
        <!-- item row end -->
        <div class="div-row-long my-2 mx-auto"> </div>
        <!-- Item row -->
        <?php include('./components/item.php'); ?>    
        <!-- item row end -->
        <div class="div-row-long my-2 mx-auto"> </div>
        <!-- Item row -->
        <?php include('./components/item.php'); ?>    
        <!-- item row end -->
        <div class="div-row-long my-2 mx-auto"> </div>

    </section>
    
    
    
    
    
    
    <!-- Footer and scripts -->
    <?php include('./components/footer.php'); ?>    

    
    
  
    <script src="./js/script.js"></script>
</body>
</html>