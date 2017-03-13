<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Maurya
 * Date: 3/13/2017
 * Time: 11:33 PM
 */

setcookie("user","sandeep",time()+10,"/");
if(isset($_COOKIE['user'])){
    echo "Cookie is set<pre>";
    print_r($_COOKIE);
} else{
    echo "Cookie is not set";
}
//setcookie("user","",time()-5,"/")  ;


?>