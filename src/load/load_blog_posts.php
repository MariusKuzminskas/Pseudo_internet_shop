<?php 
include("../php/dbConnection.php");


$sql = "SELECT * FROM blog";
$result = mysqli_query($prisijungimas, $sql);

//var_dump($result);
if (mysqli_fetch_assoc($result)) {
    while ($dbEilute = mysqli_fetch_assoc($result)) { 
        // $dbEilute['klase'];
        // echo "<br>";
    ?>


    <div class="card" >
        <div class="card-body">
            <h5 class="card-title"> <?php echo $dbEilute['subject'] ?> </h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $dbEilute['time'] ?></h6>
            <p class="card-text"><?php echo $dbEilute['body'] ?> </p>
            
        </div>
    </div>


<?php 
    } //end of for
}

?>