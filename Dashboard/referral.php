<?php 

session_start(); 

$email = $_SESSION['email'];
include("../connect.php");


$sql = "SELECT * FROM user where email = '$email'";
$result = mysqli_query($conn, $sql);


  while($row = mysqli_fetch_assoc($result)) {

    $name = $row["name"];
     $id = $row['id'];

}
$name = str_replace(' ', '', $name);
$reffer_code = $name.$id;


$sql2 = "SELECT * FROM user where referral_code = '$reffer_code'";
$result2 = mysqli_query($conn, $sql2);







echo mysqli_error($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Links</title>
  
<link href="../css/style.css" rel="stylesheet">
<link href="../output.css" rel="stylesheet">
<script src="https://use.fontawesome.com/f00636cbad.js"></script>



</head>
<body class="bg-gray-100">



<?php 
include("navbar.php");
// include("sidebar.php");

?>

<style>
pre{
  white-space: pre-wrap;
display: block;
/* padding: 9.5px; */
/* margin: 0 0 10px; */
font-size: 13px;
line-height: 1.42857143;
color: #333;
word-break: break-all;
}
    </style>

<div class="mt-5 container">

<p class="text-xl text-gray-600"><b>Referrals </b></p>
<br>

<div class="bg-white border-b border-gray-200 rounded">
<ul class="flex p-3 text-gray-500 text-sm lg:text-base">
                    <li class="inline-flex items-center">
                      <a href="../">Home</a>
                      <svg
                        class="h-5 w-auto text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </li>
                    <li class="inline-flex items-center">
                      <a href="/">Dashboard</a>
                      <svg
                        class="h-5 w-auto text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </li>
                    <li class="inline-flex items-center">
                      <a href="#" class="text-indigo-700">Referrals </a>
                    </li>
                  </ul>
 </div>               


<br>




<!--  -->

<div class="bg-white rounded p-3 mb-3 shadow">
<p class="text-gray-700">The Bitly.help referral program is a great way to spread the word of this great service and to earn even more money with your short links! Refer friends and receive 20% of their earnings for life! </p>
<div class="link_box bg-gray-200 p-2 rounded mt-3 text-gray-800">
<pre class="text-sm" style="white-space: pre-wrap;">https://bitly.help/Dashboard/sign.php?reff=<?php echo $reffer_code;?></pre>
</div>
</div>




<div class="bg-white rounded p-3 mb-3 shadow">

<div class="box-header">
<div class="flex"><i class="fa  fa-share-square-o" style="font-size: 25px; margin-right:6px;"></i> 
<h3 class="box-title">Referrals</h3>
</div>
<br>
<!--  -->
<div>
      <table class="min-w-full table-auto">
        <thead class="justify-between">
          <tr class="bg-gray-800">
            <th class="mb:px-16 px-2 py-2">
              <span class="text-gray-300">#</span>
            </th>
    
            <th class="mb:px-16 px-6 py-2">
              <span class="text-gray-300">Name</span>
            </th>
    
            <th class="mb:px-16 py-2">
              <span class="text-gray-300">Date</span>
            </th>

     </tr>
        </thead>
        <tbody class="bg-gray-200">



<?php

$i = 0;
while($row = mysqli_fetch_assoc($result2)) {
    
    $i++;
    $name = $row["name"];
    $date = $row['created_at'];
    
    $d=strtotime($date);


?>


          <tr class="bg-white border-4 border-gray-200">
         
            <td>
              <span class=" ml-2 font-semibold"><?php echo $i ?></span>
            </td>
         
            <td>
              <span class=" ml-2 font-semibold"><?php echo $name ?></span>
            </td>

            <td class="ml-2 px-2 py-2">
              <span><?php echo date("d-M-y h:i:a", $d);?></span>
            </td>
          
          
          </tr>

<?php
}


?>


        </tbody>
      </table>
    </div>
<!--  -->
</div>
</div>

</div>





<!--  -->

<div class="bg-white text-center mt-10 p-3 font-bold border-b border-gray-200 rounded">


Copyright © Bitly.help 2021 
</div>

</body>
</html>