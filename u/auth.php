<?php

if(!isset($_SESSION)) { 
  session_start(); 
} 

    if(!isset($_SESSION["email"])) {

    $auth_button =  '<li class="nav-item">
          <a class="px-3 py-2 flex items-center text-m uppercase font-bold leading-snug text-white hover:opacity-75" href="../Dashboard/login.php">
            <i class="fa  fa-sign-in text-lg leading-lg text-white opacity-75"></i><span class="ml-2">Login</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="px-3 py-2 flex items-center text-m uppercase font-bold leading-snug text-white hover:opacity-75" href="../Dashboard/sign.php">
            <i class="fa  fa-user-circle text-lg leading-lg text-white opacity-75"></i><span class="ml-2">Register</span>
          </a>
        </li>';
    
    }else{
     
        $auth_button = '
      <li class="nav-item">
        <a class="px-3 py-2 flex items-center text-m uppercase font-bold leading-snug text-white hover:opacity-75" href="../Dashboard/">
          <i class="fa  fa-user-circle text-lg leading-lg text-white opacity-75"></i><span class="ml-2">Dashboard</span>
        </a>
      </li>
 ';


    }
?>