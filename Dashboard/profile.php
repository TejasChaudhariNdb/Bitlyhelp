<?php 
session_start();
include("../connect.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Bitly.help</title>
  
<link href="../css/style.css" rel="stylesheet">
<link href="../output.css" rel="stylesheet">
<script src="https://use.fontawesome.com/f00636cbad.js"></script>


</head>
<body class="bg-gray-100">



<?php 
include("navbar.php");
echo "<div class='md:flex flex-row'>";
include("sidebar.php");

$email = $_SESSION['email'];

$sql = "SELECT * FROM user where email = '$email'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {

    $id = $row['id'];
    $name = $row['name'];
    $last = $row['last_name'];

    $withdraw_method = $row['withdraw_method'];
    $withdraw_id = $row['withdraw_id'];

  }
  

?>

<style>

    </style>

<div class="mt-5 container">

<p class="text-xl text-gray-600"><b>Profile Links</b></p>
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
                      <a href="/Dashboard">Dashboard</a>
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
                      <a href="#" class="text-indigo-700">Profile</a>
                    </li>
                  </ul>
 </div>               


<br>

<!--  -->

<div class="bg-white shadow">

<p class="p-2 text-xl text-gray-600">Billing Address</p>
<br>
<hr>


<!--  -->


<form class="w-full  p-5" action="profile_code.php" method="post">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        First Name
      </label>
      <input value="<?php echo $name ?>" name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Tejas">
    
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Last Name
      </label>
      <input value="<?php echo $last ?>" name="last" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Last Name">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3  md:w-1/2 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
   Address 
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Address">
      <p class="text-gray-600 text-xs italic">Valid address</p>

    </div>
 
 
 
    <div class="w-full px-3 md:w-1/2 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
State
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="State">
   
    </div>
 
  </div>
  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
        City
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Nandurbar">
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Country
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
   

   <?php include("country_option.php");?>
   
   
   
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
        Zip
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="425412">
    </div>
  </div>


<h3 class=" text-sm text-gray-600">Withdrawal Info</h3>
<br>
<hr/>
<br>
<div class="inline-block relative w-full">
  <select name="with_method" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
    <option value="">Choose</option>
  <option value="<?php echo $withdraw_method ?>" selected><?php echo $withdraw_method?></option>
    <option value="phonepe">PhonePe</option>
    <option value="googlepay">Google Pay</option>
    <option value="paytm">Paytm</option>
  </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>
</div>

<!--  -->

<table class="table-fixed mt-5">
  <thead>
    <tr>
      <th class="w-1/5 px-4 py-2">#</th>
      <th class="w-1/4 px-4 py-2">Withdrawal Method</th>
      <td class="w-1/4 px-4 py-2">Minimum  Amount</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border px-4 py-2">1</td>
      <td class="border px-4 py-2">PhonePe</td>
      <td class="border px-4 py-2">₹400</td>
    </tr>
    <tr>
      <td class="border px-4 py-2">1</td>
      <td class="border px-4 py-2">Google Pay</td>
      <td class="border px-4 py-2">₹400</td>
    </tr>
    <tr>
      <td class="border px-4 py-2">1</td>
      <td class="border px-4 py-2">Paytm</td>
      <td class="border px-4 py-2">₹400</td>
    </tr>

  </tbody>
</table>

<!--  -->
<br>

<h3 class=" text-sm text-gray-600">Payment info</h3>
<div class="flex flex-wrap -mx-3 mb-6 mt-5">
    <div class="w-full px-3  md:w-1/2 md:mb-0">
      <input name="with_id" value="<?php echo $withdraw_id ?>"class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="enter payment id ">
   
    </div>
    </div>

    <div class="flex items-center justify-center">
<button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
  Submit
</button>
</div>

</div>
</form>


<!--  -->
</div>
</div>
 



<div class="bg-white text-center mt-10 p-3 font-bold border-b border-gray-200 rounded">


Copyright © Bitly.help 2021 
</div>


<script>

</script>

</body>
</html>