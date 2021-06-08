<?php 

include("../connect.php");

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
<style>
table{
display: block;
overflow-x: auto;
}
</style>


<?php 
include("navbar.php");

$user_id = $_SESSION['user_id'];

echo "<div class='md:flex flex-row'>";
include("sidebar.php");

?>



<div class="mt-5 container">

<p class="text-xl text-gray-600"><b>Links</b></p>
<br>

<div class="bg-white border-b border-gray-200 rounded">
<ul class="flex p-3 text-gray-500 text-sm lg:text-base">
                    <li class="inline-flex items-center">
                      <a href="/">Home</a>
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
                      <a href="/components">Dashboard</a>
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
                      <a href="#" class="text-indigo-700">Withdrawal</a>
                    </li>
                  </ul>
 </div>               


<br>

<!--  -->




<div class="grid md:grid-cols-3 grid-cols-1   gap-4">
  <div class="bg-purple-700 text-white  p-4"><p class="text-3xl">₹0</p><p>Available</p></div>
  
  <div class="bg-yellow-400 p-4"><p class="text-2xl">₹0</p><p>Pending Withdrawn</p></div>
  <div class="bg-red-600 text-white  p-4"><p class="text-3xl">₹0</p><p>Total Withdraw</p></div>
 

</div>

<div class="bg-white mt-5 pb-10 p-3 rounded-t-lg shadow">
<br>
<div class="text-center">
<button class="bg-green-500 hover:bg-blue-green text-white font-bold py-2 px-4 border border-pink-700 rounded">
  Withdraw
</button>
</div>
<br>


<p class="text-lg text-center font-bold m-5">Withdrawal Statement</p>
<table class="rounded-t-lg  mx-auto bg-gray-200 text-gray-800">
<tbody style="width: 100%;display: table;">
  <tr class="text-left border-b-2 border-gray-300">
    <th class="px-4 py-3">id</th>
    <th class="px-4 py-3">Date</th>
    <th class="px-4 py-3">Status</th>
    <th class="px-4 py-3">Withdrawal Method</th>
    <th class="px-4 py-3">Withdrawal Amount</th>
  </tr>
  

  <!-- Loop php -->
  <tr class="bg-gray-100 border-b border-gray-200">
    <td class="px-4 py-3">#1</td>
    <td class="px-4 py-3">06-08-2021</td>
    <td class="px-4 py-3">Pending</td>
    <td class="px-4 py-3">PhonePe</td>
    <td class="px-4 py-3">500</td>
  </tr> 
  
</tbody>
</table>

<!-- classic design -->

</div>

<!--  -->





<div class="bg-white text-center mt-10 p-3 font-bold border-b border-gray-200 rounded">


Copyright © Bitly.help 2021 
</div>



</body>
</html>