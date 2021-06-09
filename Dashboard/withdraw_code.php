<?php
include("../connect.php");
session_start();


$user_id = $_SESSION['user_id'];




$query    = "SELECT * FROM `user` WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);


$withdraw_method = $row['withdraw_method'];
$upi = $row['withdraw_id'];
$with_able = $row['wallet'];



if($with_able > 350){
$query    = "INSERT into `withdrawal` (user_id, amount,payment_method,upi,status ) VALUES ('$user_id','$with_able','$withdraw_method','$upi','Pending')";
$result   = mysqli_query($conn, $query);


echo mysqli_error($conn);
if ($result) {
  
     // Check user is exist in the database
     $query2   = "UPDATE user SET wallet = wallet - '$with_able' WHERE id = '$user_id'";


     $result2 = mysqli_query($conn, $query2);

     // $rows = mysqli_num_rows($result);
     echo mysqli_error($conn);




          header("location:withdraw.php");

        } else {
    echo "<div class='form'>
          <h3>Required fields are missing.</h3><br/>
          <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
          </div>";
}

}else{
    echo $with_able;
}

?>