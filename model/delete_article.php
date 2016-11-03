<?php
session_start();

include '../includes/config.php';
if(isset($_POST['submit'])){
    $del = $_POST['del'];
}else {
    echo "er is iets misgegeaan";
}

$sql4 = "DELETE FROM newsarticles WHERE id= $del";

$result4 = mysqli_query($conn, $sql4);

if(!$result4){
    echo "Er lijkt iets misgegaan....";
}else {
    header('Location: ../');
}

?>