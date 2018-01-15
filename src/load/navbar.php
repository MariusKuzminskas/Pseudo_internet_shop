<?php   

require('./php/dbConnection.php');


$sql_textas = "SELECT * FROM menu";
$resultatas = mysqli_query( $prisijungimas, $sql_textas );

// Gauname SQL Objekta
$menuPavadinmaiSQL = $resultatas;
$i=0;
// paverciame i assoc masyva
$menuPavadinmai = mysqli_fetch_assoc($menuPavadinmaiSQL);
// is kiekvienos lenteles eilute pasiimu pavadinima is name stulpelio ir sudedu i nauja masyva kuri panaudosiu navigacijos meniu reiksmems
if ($menuPavadinmai !== NULL) {
    while ($i <= 4) {
        $menuPavadinmai = mysqli_fetch_assoc($menuPavadinmaiSQL);
        // print_r($menuPavadinmai['name']);
        // echo "<br>";
        $menu[$i] = $menuPavadinmai['name'];
        $i++;
    } 
}





?>



<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand mb-0 h1" href="index.php">
        <img class="d-inline-block img-fluid" src="img/logo.png" alt="logotipas">
        <h3 class="d-inline-block ">Sapnu Gaudyklės</h3></a>
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- what to toggle -->
    <div class="collapse navbar-collapse   " id="navbarSupportedContent">
        <div class="navbar-nav text-uppercase ">
            <!-- <a class="nav-item nav-link d-inline-block " href="#home"> <i class="fa fa-search text-dark d-inline-block " aria-hidden="true"></i> </a> -->
            <a class="nav-item nav-link mx-3" href="index1.php">   <h5><?php echo $menu[0] ?></h5> </a>
            <a class="nav-item nav-link mx-3" href=" index.php">    <h5><?php echo $menu[1] ?></h5> </a>
            <a class="nav-item nav-link mx-3" href=" shop.php">     <h5><?php echo $menu[2] ?>  </h5> </a>
            <a class="nav-item nav-link mx-3" href=" apie.php">     <h5><?php echo $menu[3] ?>  </h5></a>
            <a class="nav-item nav-link mx-3" href="kontaktai.php"> <h5><?php echo $menu[4] ?>  </h5></a>
            <!-- <a class="nav-item nav-link d-inline-block" href="#home"> <i class="fa fa-bars text-dark d-inline-block" aria-hidden="true"></i> </a> -->
        </div>
    </div>
</nav>

<?php 

// FREE result

mysqli_free_result($menuPavadinmaiSQL);

// close connection

//mysqli_close($prisijungimas);
