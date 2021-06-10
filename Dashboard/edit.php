<?php 

include("../connect.php");

$link_id = $_GET['link'];

$sql = "SELECT * FROM url_shorten where id = $link_id";
$result = mysqli_query($conn, $sql);


  while($row = mysqli_fetch_assoc($result)) {

    $link = $row["url"];


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Links</title>
  
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

    </style>

<div class="mt-5 container">

<p class="text-xl text-gray-600"><b>Edit Links</b></p>
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
                      <a href="#" class="text-indigo-700">Edit Links</a>
                    </li>
                  </ul>
 </div>               


<br>




<!--  -->


<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="save_link.php" method="post">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
       Long Url
      </label>
      <input value="<?php echo $link ?>" name="new_url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
      <input value="<?php echo $link_id ?>" name="link_id" hidden />
    </div>
    <div class="flex items-center justify-between">
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
  Save
      </button>
      
    </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Acme Corp. All rights reserved.
  </p>
</div>


<!--  -->

<div class="bg-white text-center mt-10 p-3 font-bold border-b border-gray-200 rounded">


Copyright © Bitly.help 2021 
</div>


</body>
</html>