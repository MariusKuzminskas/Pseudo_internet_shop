<?php 


define('HOST', 'localhost');
define('DB_NAME', 'gakles_11');
define('DB_USER', 'gakles_11');
define('DB_PASSWORD', 'Tauridas775');


$conn = mysqli_connect( HOST, DB_USER, DB_PASSWORD, DB_NAME );    // pask parametras pportas

if (mysqli_connect_errno()) {
    echo "failed to connect to MSQL " . mysqli_connect_errno();
}


mysqli_set_charset($conn,"utf8");












// function getPrisijungimas() {
    //     global $prisijungimas;   // nes f-cijos viduje $prisijungimas nepasiekiamas nes local scope 
    //     if ($prisijungimas) {
    //     //    echo "Sekmingai prisijungta prie DB <br>";
    //     } else {
    //         die ('prisijungti prie DB nepavyko' . mysqli_connect_error() );
    //     };
    //     return $prisijungimas;
    // }

// getPrisijungimas();


