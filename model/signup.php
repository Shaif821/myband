<?php
session_start();
//Include de connectie van de database
include '../includes/config.php';

//Haalt de ingevoerde waarde van de form uit
$first = $_POST['first'];
$last = $_POST['last'];
$user = $_POST['user'];
$pass = $_POST['pass'];


//Insert de waarders/values in de de database
$sql = "INSERT INTO login (first, last, user ,pass) 
VALUES ('$first','$last', '$user', '$pass')";


//Hierdoor wordt het uitgevoerd in de database
$result = mysqli_query($conn, $sql);


if(!$result){
    echo "Er lijkt iets misgegaan";
}else {
    header("Location: ../");
}

?>