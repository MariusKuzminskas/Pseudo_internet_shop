<?php 


function getPrekes() {
    global $prisijungimas;
    $sql_textas = "SELECT * FROM shop_prekes";
    //echo $sql_textas; 
    // Liepti vykdyti musu sql texto query
    $resultatas = mysqli_query( $prisijungimas, $sql_textas );
    
    if ($resultatas) {
        // echo "<br> preke rasta <br>";
        return $resultatas;
    } else {
        echo "ERROR:  preke nerasta <br>";
        return null;
    }
}




$prekes = getPrekes(); // gauname vis1 msql masyva
$kiek_prekiu = 11;
$vienaprekesEile = mysqli_fetch_assoc($prekes); // pavercia viena eilute is  msql masyvo ir pavercia assoc array


if($vienaprekesEile != NULL) {
            // while ( $vienaprekesEile ) {
            for ($i=0; $i < $kiek_prekiu; $i++) { 
                    
                $vienaprekesEile = mysqli_fetch_assoc($prekes);
                
       
// $idedit = 

$item_ID = ($vienaprekesEile['id']);
$bs_col = $vienaprekesEile['bs_col'];
$linkas = "preke.php?id=$item_ID";
$img_src = $vienaprekesEile['img_src'];
$sale = $vienaprekesEile['sale'];
$item_price = $vienaprekesEile['price'];


?>


<article class="<?php print($bs_col); ?> item-container" data-aos="fade-down">
    <div class="img-container">
        <a href=<?php print($linkas); ?>>
            <img class="img-fluid" src=<?php print($img_src); ?> alt="Sapnu gaudyklės nuotrauka">
            <div class="sale-container bg-dark text-light  px-1 ">
                <p class="blockqoute my-auto text-uppercase font-weight-bold">Išpardavimas</p>
            </div>
    </div>
    </a>
    <div class="under-image-container mt-3 d-flex justify-content-between">
        <div class="text-container ">
            <h5>Sapnų gaudyklė # <?php print($item_ID); ?></h5>
        </div>
        <div class="price-container ">
            <p>
                <s class="disabled">30eur </s> <?php print($item_price); ?> eur</p>
        </div>
    </div>
</article>

<?php

    } //while end
} //if end

?>