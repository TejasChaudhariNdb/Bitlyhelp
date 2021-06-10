<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payouts Rates</title>
    <script src="https://richinfo.co/js/rp.js"></script>
    <link href="css/style.css" rel="stylesheet">
<link href="output.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/gh/lipis/flag-icon-css@3.3.0/css/flag-icon.min.css" rel="stylesheet">
<script src="https://use.fontawesome.com/f00636cbad.js"></script>


</head>
<body>

<?php

include("components/navbar.php")
?>

<style>





    </style>


<div class="bg-black p-12 shadow-xl rounded-b-lg">
<h2 class="text-white text-center">Publisher Rates</h2>
</div>
<br>
<div class="container mb-12 mt-5">




<p class="text-lg text-center font-bold m-5">Publisher Rates on <?php echo "Today is " . date("d-m-Y"); ?></p>
<table class="rounded-t-lg m-5 w-5/6 mx-auto text-gray-100 bg-gradient-to-l from-indigo-500 to-indigo-800">
  <tr class="text-left border-b-2 border-indigo-300">
    <th class="px-4 py-3">Country</th>
    <th class="px-4 py-3">Earnings per 1000 Views</th>
   
  </tr>
  <tr class="border-b border-indigo-400">
    <td class="px-4 py-3"><span class="flag-icon flag-icon-in"></span> India</td>
    <td class="px-4 py-3">₹245</td>

  </tr>    
<!-- each row -->
  <tr class="border-b border-indigo-400">
    <td class="px-4 py-3"><span class="flag-icon flag-icon-pk"></span> Pakisthan</td>
    <td class="px-4 py-3">₹210</td>
 
  </tr>    
<!-- each row -->
  <tr class="border-b border-indigo-400">
    <td class="px-4 py-3"><span class="flag-icon flag-icon-ca"></span> Canada</td>
    <td class="px-4 py-3">₹310</td>
  </tr>    
<!-- each row -->

</table>

<!-- gradient design -->

<hr>
<br>

<p><span style="font-size:16px;"><strong>Why Views/Statistics/Earnings are not counting?</strong></span></p>
<ul class="list-disc">
<li>Visitors must be unique within 24 hours.</li>
<li>Must view your page for at least 10 seconds.</li>
<li>Visitors must have JavaScript enabled.</li>
<li>Visitors must have Cookies enabled.</li>
<li>Visitors must reach the destination/final page.&nbsp;</li>
</ul>

</div>


<?php
include("footer.php");
?>

</body>

</html>