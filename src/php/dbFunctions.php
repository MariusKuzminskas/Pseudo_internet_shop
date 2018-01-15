<?php 


function createDoctor($vardas, $pavarde) {
    
    $sql_textas = "INSERT INTO doctors VALUES ('', '$vardas', '$pavarde')";
    // echo $sql_textas; 
    $rezultatas = mysqli_query(getPrisijungimas(), $sql_textas);
    if (!$rezultatas) {
        echo "sukurti nepavyko <br>". mysqli_error(getPrisijungimas() );    
    } else {echo "sql ivykdyta"; }
}


//2. editDoctor($nr, $vardas, $pavarde))=======================================

function editDoctor($nr, $vardas, $pavarde) {
    
    $sql_textas = "UPDATE doctors SET name='$vardas', lname='$pavarde' WHERE id=$nr";
    echo $sql_textas; 
    $rezultatas = mysqli_query(getPrisijungimas(), $sql_textas);
    if (!$rezultatas) {
        echo "update nepavyko <br>". mysqli_error(getPrisijungimas() );    
    } else {echo "sql ivykdyta"; }
}


//3. deleteDoctor($nr)=======================================

function deleteDoctor($nr) {
    
    $sql_textas = "DELETE FROM doctors WHERE id=$nr";
    echo $sql_textas; 
    $rezultatas = mysqli_query(getPrisijungimas(), $sql_textas);
    if (!$rezultatas) {
        echo "istrynei nepavyko <br>". mysqli_error(getPrisijungimas() );    
    } else {echo "sql ivykdyta"; }
}

// 4. getDoctors($nr) ==========================================

function getDoctor($nr) {
    $sql_textas = "SELECT * FROM doctors WHERE id=$nr";
    // echo $sql_textas; 

    // Liepti vykdyti musu sql texto query
    $resultatas = mysqli_query( getPrisijungimas(), $sql_textas );
    
    if ($resultatas) {
        //echo "radom daktara: $nr <br>";
        return $resultatas;
    } else {
        echo "ERROR: tokio daktaro nera <br>";
        return null;
    }
}

// testuojame ar f-ja gerai veikia gauname msql objekta reikia perversti
// $x = getDoctor(2);
// print_r($x); //mysqli objektas

// sudedame i assod masyva 
// $x = mysqli_fetch_assoc( $x );
// echo "<br><br>";
// print_r( $x );
// echo "<br><br>";


// foreach ($x as $key => $value) {
//     echo "<h2> $key: $value , </h2>";
// }

// $vardas = $x['name'];
// $pavarde = $x['lname'];

// echo "<h3> $vardas $pavarde </h3><br> ";


function getPrekes() {
    $sql_textas = "SELECT * FROM shop_prekes";
    //echo $sql_textas; 
    // Liepti vykdyti musu sql texto query
    $resultatas = mysqli_query( getPrisijungimas(), $sql_textas );
    
    if ($resultatas) {
        // echo "<br> preke rasta <br>";
        return $resultatas;
    } else {
        echo "ERROR:  preke nerasta <br>";
        return null;
    }
}


// $prekes = getPrekes(); // gauname vis1 msql masyva
// $vienaprekesEile = mysqli_fetch_assoc($prekes); // pavercia viena eilute is  msql masyvo ir pavercia assoc array
// // $vienaprekeArr = mysqli_fetch_array($prekes); // pavercia viena eilute is  msql masyvo ir pavercia assoc array




// print($vienaprekesEile['bs_col']);

// $item_ID = $vienaprekesEile['id'];
// $bs_col = $vienaprekesEile['bs_col'];
// $linkas = "preke.php?id=$item_ID";
// $img_src = $vienaprekesEile['img_src'];
// $sale = $vienaprekesEile['sale'];
// $item_price = $vienaprekesEile['price'];






// if($vienapreke != NULL) {
//         while ( $vienapreke ) {
//              echo "Vartotojo vardas: " . $vienapreke['img_src'] . "<br>";
//              $vienapreke = mysqli_fetch_assoc($prekes);
//             echo print_r($vienapreke);
//         }
//     }

 






    