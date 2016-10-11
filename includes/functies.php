<?php
/**
 * Created by PhpStorm.
 * User: shaif
 * Date: 26-9-2016
 * Time: 11:36
 */

function convertArray($DBResult){
    $resultArray = array();
    //convert DBResult to array
    while($row = $DBResult->fetch_assoc()){
        $resultArray[] = $row;
    }

    return $resultArray;

}



?>