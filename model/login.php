<?php
session_start();
//Include de connectie van de database
include '../includes/config.php';

//Haalt de ingevoerde waarde van de form uit
$user = $_POST['user'];
$pass = $_POST['pass'];

//Als er een row is dat de ingevoerde user en pass match, dan logt het je in.
$sql = "SELECT * FROM login WHERE user='$user' AND pass='$pass'";

//Hierdoor wordt het uitgevoerd in de database
$result = mysqli_query($conn, $sql);

//EEn variable row is aangemaakt, dat gelijk is van de database. 
//als er geen resultaat is van de database
if(!$row = $result->fetch_assoc()){
    echo "Jou username of password is incorrect";
}else {
    $_SESSION['id'] = $row['user'];
}

header("Location: ../");
?>