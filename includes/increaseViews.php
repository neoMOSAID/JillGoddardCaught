<?php
    /*
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
     */

    require 'dbConfig.php';

    if ( isset($_POST["image_id"] ))  {
        $id=$_POST["image_id"];
    }else{
        $id=0;
    }
    $query = " UPDATE files SET views = views + 1 WHERE id = '".$id."';";
    if(! $result = $db->query($query)){
        //printf("error: %s\n", $mysqli->error );
        exit();
    }

?>


