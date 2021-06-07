<?php
session_start();
include("../connect.php");

$email = stripslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($conn, $email);


$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($conn, $password);



        // Check user is exist in the database
        $query    = "SELECT * FROM `user` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['user_id'] = $row['id'];
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
        echo mysqli_error($conn);


?>