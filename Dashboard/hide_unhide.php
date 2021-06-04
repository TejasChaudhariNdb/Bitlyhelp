<?php
include("../connect.php");
$link_id = $_GET['link_id'];
$status = $_GET['status'];



$link_id = mysqli_real_escape_string($conn, $link_id);
$status = mysqli_real_escape_string($conn, $status);

if($status === 'hide'){
    $status_code = 1;

}else{
    $status_code = 0;
}

        // Check user is exist in the database
        $query    = "UPDATE url_shorten SET hide = '$status_code' WHERE id = '$link_id'";

        echo $query;

        $result = mysqli_query($conn, $query);

        // $rows = mysqli_num_rows($result);
        echo mysqli_error($conn);

        

        if($status === 'hide'){
            header("Location:links.php");
        }else{
            
            header("Location: hiddenlinks.php");
         
        }

        
?>