<?php
date_default_timezone_set('Europe/Amsterdam');
// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include 'includes/functies.php';
// Assign value of page title to the smarty variable 'title', usually the value comes from a database

//Header gedoe
$templateParser->assign('title', 'EMINEM');
$templateParser->display('head.tpl');
$templateParser->display('header.tpl');


//Pagina's uitlezen
$action = isset($_GET['action'])?$_GET['action']:'home';
switch($action){
    case 'home':        
        // Get newsarticles from database
        include('model/select_newsarticles.php');
        // Show newsarticles 'old style' => refactor to template system.
        //include('views/newsarticles.php');
        //fetch_assoc should not be in the view!
        $templateParser->assign('result', $result);
        $templateParser->display('newsarticles.tpl');
        break;
    case 'about':
        //go to about model
        //assign to smarty
        $templateParser->display('about.tpl');
        break;
//    case 'evenementen':
//        $templateParser->display('evenementen.tpl');
//        break;
//    case 'muziek';
//        $templateParser->display('muziek.tpl');
//        break;
}



$footerText = 'Made by me for school';
//geef de php variable aan een smarty
$templateParser->assign('footerString', $footerText);
$templateParser->display('footer.tpl');