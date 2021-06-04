<?php
include("../connect.php");


$link_id = $_POST['link_id'];
$new_url = $_POST['new_url'];



$link_id = mysqli_real_escape_string($conn, $link_id);
$new_url = mysqli_real_escape_string($conn, $new_url);



        // Check user is exist in the database
        $query    = "UPDATE url_shorten SET url = '$new_url' WHERE id = '$link_id'";

        echo $query;

        $result = mysqli_query($conn, $query);

        // $rows = mysqli_num_rows($result);
        echo mysqli_error($conn);

        

            
            header("Location: links.php");
   

        
?>