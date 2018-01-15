<?php 

include('../php/dbConnection.php');

$sql_textas = "SELECT * FROM shop_prekes ORDER BY price ASC";
$prekes = mysqli_query( $prisijungimas, $sql_textas );

while ($vienaprekesEile = mysqli_fetch_assoc($prekes)) { // pavercia viena eilute is  msql masyvo ir pavercia assoc array

       


$item_ID = ($vienaprekesEile['id']);
$bs_col = $vienaprekesEile['bs_col'];
$linkas = "preke.php?id=$item_ID";
$img_src = $vienaprekesEile['img_src'];
$sale = $vienaprekesEile['sale'];
$item_price = $vienaprekesEile['price'];
$item_full_price = $vienaprekesEile['full_price'];


?>


<article class="<?php print($bs_col); ?> item-container" data-aos="fade-down">
    <div class="img-container">
        <a href=<?php print($linkas); ?>>
            <img class="img-fluid" src=<?php print($img_src); ?> alt="Sapnu gaudyklės nuotrauka">
            <div class="sale-container bg-dark text-light  px-1 ">
                <p class="blockqoute my-auto text-uppercase font-weight-bold"> <?php echo "Išpardavimas" ?></p>
            </div>
    </div>
    </a>
    <div class="under-image-container mt-3 d-flex justify-content-between">
        <div class="text-container ">
            <h5>Sapnų gaudyklė # <?php print($item_ID); ?></h5>
        </div>
        <div class="price-container ">
            <p>
            <?php echo "<s class='disabled'>" . $item_full_price. "eur </s>"?> <?php print($item_price); ?> eur</p>
        </div>
    </div>
</article>

<?php

    } //while end


?>