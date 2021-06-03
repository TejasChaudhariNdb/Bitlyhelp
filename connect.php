<?php

$servername = 'localhost';
$username = 'u323335931_tejas';
$password = 'Games@1234';
$dbname = 'u323335931_bitlyhelp';
$base_url='http://bitly.help/u/index.php?redirect='; 



$conn = mysqli_connect("localhost",$username,$password,$dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}


?>