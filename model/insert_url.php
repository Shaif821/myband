<?php
include '../includes/config.php';

$url = $_POST['url'];

$code = substr($url, 17, 28);

$sql = "INSERT INTO muziek(url)
        VALUES('$code')";

$result = mysqli_query($conn, $sql);

if(!$result){
    echo "Er lijkt iets misgegaan.....";
}
else {
   header("Location: ../");
}

?>