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

include 'model/select_title.php';

session_start();

//Inlog gedoe


//naam van ingelode persoon, indien persoon is ingelogd
if(isset($_SESSION['id'])){
    $userid = $_SESSION['id'];
    $templateParser->assign('name', $userid);
    $templateParser->assign('log', 'U bent ingelogd');
}else{ 
    $templateParser->assign('name', 'Niet ingelogd');
    $templateParser->assign('log', 'Klik hier om in te loggen');
}
//header
$templateParser->assign('title', 'EMINEM');
$templateParser->display('head.tpl');
$templateParser->display('header1.tpl');

//Aside
$templateParser->assign('result2', $result2);
$templateParser->display('aside-left.tpl');

//Gedoe voor de videos
//De code wordt toegevoegd aan de database
$iframe = '<iframe width="650" height="410" src="https://www.youtube.com/embed/';
$iframe2 = '" frameborder="0" allowfullscreen></iframe>';
$templateParser->assign('frame1', $iframe);
$templateParser->assign('frame2', $iframe2);

//main
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
    case 'evenementen':
        $templateParser->display('evenementen.tpl');
        break;
    case 'muziek':
        include('model/select_music.php');
        $templateParser->assign('result1', $result1);
        $templateParser->display('muziek.tpl');
        break;
    case 'login':
        if (!isset($_SESSION['id'])){
            $templateParser->display('login.tpl');
        }
        else{
            //delete
            include 'model/select_delete_title.php';
            $templateParser->assign('result3', $result3);
            $templateParser->display('admin.tpl');
        }
        break;
//    case 'admin':
//        
//        break;
}

//aside
$templateParser->display('aside-right.tpl');

//Footer
$footerText = 'Made by me for school';
//geef de php variable aan een smarty
$templateParser->assign('footerString', $footerText);
$templateParser->display('footer.tpl');