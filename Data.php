<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Maurya
 * Date: 3/3/2017
 * Time: 3:14 PM
 */

if(isset($_POST) && isset($_FILES)){

    $data=array();
    $data["Name"]=$_POST["Name"];
    $data["Email"]=$_POST["Email"];

    if ( 0 < $_FILES['Resume']['error'] ) {
        echo 404;
    }
    else {
        $data['file']=$_FILES['Resume']['name'];
        // storing file in content dir
        move_uploaded_file($_FILES['Resume']['tmp_name'], 'content/' . $_FILES['Resume']['name']);
        $data['file']=$_FILES["Resume"]['name'];
        echo json_encode($data);
    }

} else{
    echo 404;
}

