<?php 
include("../php/dbConnection.php");

$picCountNew = $_POST['picCountNew'];

$limit = [ 4, 2, 3 ];
$sql = "SELECT * FROM apie_foto_ajax LIMIT $picCountNew";
$result = mysqli_query($prisijungimas, $sql);

//var_dump($result);
if (mysqli_fetch_assoc($result)) {
    while ($dbEilute = mysqli_fetch_assoc($result)) { 
        // $dbEilute['klase'];
        // echo "<br>";
    ?>


<div class="<?php echo $dbEilute['klase'];?>"> <img class="img-thumbnail" src="<?php echo $dbEilute['src'];?>" alt="sapnu gaudykles nuotrauka"></div>


<?php 
    } //end of for
}

?>