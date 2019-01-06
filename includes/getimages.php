<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
    // Include the database configuration file
    require 'dbConfig.php';


    if ( isset($_COOKIE["order_by"]) ){
        $order=$_COOKIE["order_by"];
    }else{
        $order='views';
    }

    // Get files from the database
    $query = $db->query("SELECT * FROM files ORDER BY ".$order." DESC");

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $filePath = 'images/jill_photos/'.$row["file_name"];
            $fileId   = $row["id"];
            $fileMime = mime_content_type($filePath);
            $views    = $row["views"];
            //if ( $views == NULL ) { $views=0; }
            ?>
                <div class='img-div' >
                    <img src="<?php echo $filePath; ?>" 
                        id="<?php echo $fileId; ?>"
                        onclick="view_images(this.id)"
                        alt="<?php echo $fileId; ?>"
                        title="click to view" >
                    <p id="<?php echo "v-".$fileId; ?>" ><?php echo "$views views" ; ?></p>
                </div>
            <?php 

    }
    }else{ 
            ?>
                    <p>No file(s) found...</p>
            <?php
    } 
?>

