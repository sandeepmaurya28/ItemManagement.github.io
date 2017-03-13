<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Maurya
 * Date: 3/13/2017
 * Time: 11:39 PM
 */
session_start();
$_SESSION['user']="Sandeep";
$_SESSION['CID']=121;

echo "<pre>";
print_r($_SESSION);
if(isset($_SESSION["CID"])){
    echo $_SESSION["CID"];
}