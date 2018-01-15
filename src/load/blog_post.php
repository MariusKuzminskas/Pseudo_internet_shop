<?php 
include("../php/dbConnection.php");

$tema = $_POST['tema'];
$textas = $_POST['textas'];
$tema = mysqli_real_escape_string($prisijungimas, $tema);
$textas = mysqli_real_escape_string($prisijungimas, $textas);


$sql = "INSERT INTO blog VALUES ('', '$tema', '$textas', '' )";
//echo $sql;
$result = mysqli_query($prisijungimas, $sql);

//var_dump($_POST);
