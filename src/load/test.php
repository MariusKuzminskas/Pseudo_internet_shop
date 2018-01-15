<?php 
include("../php/dbConnection.php");


$sql = "SELECT * FROM shop_prekes";
$result = mysqli_query($prisijungimas, $sql);

//var_dump($result);
//if (mysqli_fetch_assoc($result)) {
    while ($dbEilute = mysqli_fetch_assoc($result)) { 
        
        print_r($dbEilute);
        echo "<br>";
    ?>


    


<?php 
    } //end of for
//}

?>