<?php 


define('HOST', 'localhost');
define('DB_NAME', 'gaudykles');
define('DB_USER', 'root');
define('DB_PASSWORD', 'labukas5');


$prisijungimas = mysqli_connect( HOST, DB_USER, DB_PASSWORD, DB_NAME );    // pask parametras pportas

mysqli_set_charset($prisijungimas,"utf8");

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
