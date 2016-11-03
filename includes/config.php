<?php 

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','development');

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

// Database settings
define('DB_HOST','localhost');
define('DB_NAME','MyBand');
define('DB_USERNAME','root');
define('DB_PASSWORD','');

$conn = mysqli_connect("localhost", "root", "", "MyBand");

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

?>
