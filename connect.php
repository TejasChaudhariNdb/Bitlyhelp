<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bitlyhelp';
$base_url='http://localhost/Bitlyhelp/u/index.php?redirect='; 



$conn = mysqli_connect("localhost","root","","bitlyhelp");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}


?>