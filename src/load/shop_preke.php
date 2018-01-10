<?php 
$bs_col = "col-md-4";
$linkas = "preke.php";
$img_src = "img/port-thumb/5.jpg";
$sale = true;
$item_name = "Sapnų gaudyklė # 5";
$item_price = 20;

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
            <h5><?php print($item_name); ?></h5>
        </div>
        <div class="price-container ">
            <p>
                <s class="disabled">30eur </s> <?php print($item_price); ?> eur</p>
        </div>
    </div>
</article>