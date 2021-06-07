<?php include("../connect.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Shorten Links</title>
  
<link href="../css/style.css" rel="stylesheet">
<link href="../output.css" rel="stylesheet">
<script src="https://use.fontawesome.com/f00636cbad.js"></script>


</head>
<body class="bg-gray-100">



<?php 
include("navbar.php");
echo "<div class='md:flex flex-row'>";
include("sidebar.php");

?>


<div class="mt-5 container">

<p class="text-xl text-gray-600"><b>New Shorten Link</b></p>
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
                      <a href="#" class="text-indigo-700">New Links</a>
                    </li>
                  </ul>
 </div>               


<br>
<br>

<!--  -->





<div class="pt-5 bg-white shadow-lg shadow-2xl   rounded-3xl rounded-lg text-center">
      <div class="max-w-md mx-auto">
    
    
      <form class="banner-form pt-4" action="../short.php" method="post">
      <input name="url" class="p-15 ring shadow appearance-none border rounded-3xl rounded-lg w-full  py-4 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="url_field"  type="url"   onchange="validateUrl()"  placeholder="Your Url Here" required/>
      <button if="validate-field" class="mt-5 shadow-lg inline-flex items-center h-10 px-5 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
    <svg class="w-4 h-4 mr-3 fill-current" viewBox="0 0 20 20"><path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
  <span>Shorten</span>
</button>
    </form>

        </div>
        <br>
 
</div>


<!--  -->

<div class="absolute inset-x-0 bottom-0 bg-white text-center bottom p-3 font-bold border-b border-gray-200 rounded">


Copyright © Bitly.help 2021 
</div>

</body>
</html>