<?php
session_start();

include("../connect.php");

// Array ( [name] => Tejas [last] => Chaudhari [with_method] => PhonePe [with_id] => 9158110065@ybl ) 

$password= $_POST['password'];


$password = mysqli_real_escape_string($conn, $password);

$email = $_SESSION['email'];

echo $password;

$query    = "UPDATE user SET password='" . md5($password) . "' WHERE email = '$email'";

echo $query;

$result = mysqli_query($conn, $query);

$rows = mysqli_num_rows($result);
echo mysqli_error($conn);
header("Location: index.php");





?>