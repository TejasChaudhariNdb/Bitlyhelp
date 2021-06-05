<?php
session_start();

include("../connect.php");

// Array ( [name] => Tejas [last] => Chaudhari [with_method] => PhonePe [with_id] => 9158110065@ybl ) 

$name= $_POST['name'];
$last = $_POST['last'];
$with_method = $_POST['with_method'];
$with_id = $_POST['with_id'];





$name = mysqli_real_escape_string($conn, $name);
$last = mysqli_real_escape_string($conn, $last);
$with_method = mysqli_real_escape_string($conn, $with_method);
$with_id = mysqli_real_escape_string($conn, $with_id);
$email = $_SESSION['email'];


$query    = "UPDATE user SET name = '$name' , last_name='$last' , withdraw_method='$with_method',withdraw_id='$with_id' WHERE email = '$email'";

echo $query;

$result = mysqli_query($conn, $query);

// $rows = mysqli_num_rows($result);
echo mysqli_error($conn);
header("Location: profile.php");





?>