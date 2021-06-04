<?php
include("../connect.php");

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['email'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}


$email = stripslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($conn, $email);

$name = stripslashes($_REQUEST['name']);
$name = mysqli_real_escape_string($conn, $name);

$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($conn, $password);


$referral_code  = stripslashes($_POST['referral_code']);
$referral_code  = mysqli_real_escape_string($conn, $referral_code);


echo $referral_code;

$query2    = "SELECT * FROM `user` WHERE email='$email'";
$result2 = mysqli_query($conn, $query2);
$rows2 = mysqli_num_rows($result2);
if ($rows2 == 1) {

echo "Email already exits";

header("Location:sign.php?error=already");


} else {


    
$query    = "INSERT into `user` (name, password, email,referral_code )
VALUES ('$name', '" . md5($password) . "', '$email','$referral_code')";
$result   = mysqli_query($conn, $query);

echo mysqli_error($conn);
if ($result) {
    echo "<div class='form'>
          <h3>You are registered successfully.</h3><br/>
          <p class='link'>Click here to <a href='login.php'>Login</a></p>
          </div>";

          header("location:login.php");

        } else {
    echo "<div class='form'>
          <h3>Required fields are missing.</h3><br/>
          <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
          </div>";
}


}




?>