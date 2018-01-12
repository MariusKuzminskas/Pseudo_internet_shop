<?php 




define('HOST', 'localhost');
define('DB_NAME', 'hospital12');
define('DB_USER', 'root');
define('DB_PASSWORD', 'labukas5');


$prisijungimas = mysqli_connect( HOST, DB_USER, DB_PASSWORD, DB_NAME );    // pask parametras pportas


function getPrisijungimas() {
    global $prisijungimas;   // nes f-cijos viduje $prisijungimas nepasiekiamas nes local scope 
    if ($prisijungimas) {
        echo "Sekmingai prisijungta prie DB <br>";
    } else {
        die ('prisijungti prie DB nepavyko' . mysqli_connect_error() );
    };
    return $prisijungimas;
}

// getPrisijungimas();



// 1. getDoctors($nr) ==========================================

function getDoctors() {
    $sql_textas = "SELECT * FROM doctors";
    echo $sql_textas; 

    // Liepti vykdyti musu sql texto query
    $resultatas = mysqli_query( getPrisijungimas(), $sql_textas );
    
    if ($resultatas) {
        echo "radom daktara: <br>";
        return $resultatas;
    } else {
        echo "ERROR: tokio daktaro nera <br>";
        return null;
    }
}

//getDoctors();
// testuojame ar f-ja gerai veikia gauname msql objekta reikia perversti
$x = getDoctors();

echo "mysql objektas: ";
print_r($x); //mysqli objektas

// sudedame i assod masyva 
$x = mysqli_fetch_all($x);

echo "<br><br>";
print_r( $x );
echo "<br><br>";

// echo "VARDUMP:   ";
// var_dump($x);

// foreach ($x as $key => $value) {   // atspausdina visa array
//     print_r($value);
//     // print_r($key);
//     echo "<br><br>";
// }
foreach ($x as $key => $value) {   // atspausdina visa array
    foreach ($value as $index => $val) {
        echo "$val. ";
    }
    // print_r($key);
    echo "<br><br>";
}

// $vardas = $x['name'];
// $pavarde = $x['lname'];

// echo "<h3> $vardas $pavarde </h3><br> ";


// echo "<h3>Lorem Ipsum's father was with Lee Harvey Oswald prior to Oswald's being, you
// know, shot. I write the best placeholder text, and I'm the biggest developer on
// the web by far... While that's mock-ups and this is politics, are they really so
// different? Lorem Ipsum better hope that there are no 'tapes' of our conversations before he
// starts leaking to the press! I write the best placeholder text, and I'm the
// biggest developer on the web by far... While that's mock-ups and this is
// politics, are they really so different? An ‘extremely credible source’ has
// called my office and told me that Barack Obama’s placeholder text is a fraud. </h3><br> ";