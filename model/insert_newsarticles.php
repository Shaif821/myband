<?php
session_start();

include '../includes/config.php';

//Haalt de ingevoerde waarde van de form uit

//insert de waardes in de database

        $title = $_POST['title'];
        $cont = $_POST['cont'];
        $video = $_POST['vid'];
        $date = date("Y/m/d");
        $vid = substr($video, 17,28);

        $sql = "INSERT INTO newsarticles (title, content, video, date_created) 
        VALUES ( '$title', '$cont', '$vid', '$date')";

    $result = mysqli_query($conn, $sql);

if(!$result){
    echo "Er lijkt iets misgegaan....";
    echo $target_path;
    echo $title;
    echo $cont;
    echo $vid;
    echo $date;
    
}else {
    header("Location: ../");
}

?>



<!--
! == niet leeg
empty = leeg
-->


 



