<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share this Link</title>
    <script src="https://richinfo.co/js/rp.js"></script>
    <link href="css/style.css" rel="stylesheet">
<link href="output.css" rel="stylesheet">
<script src="https://use.fontawesome.com/f00636cbad.js"></script>


</head>
<body>


<?php

include("connect.php");
include("Dashboard/auth_session.php");

include("./components/navbar.php");


$url = $_POST['url'];

if(isset($_POST['url'])){

  
}else{
header("location:index.php");    
}

if(!isset($_SESSION['user_id'])){

  header("location:login.php");    
 
}


$user_id = $_SESSION['user_id'];

// echo $user_id;
$url_short_code =  GetShortUrl($url,$user_id);
$newUrl = $base_url.$url_short_code;


function GetShortUrl($url,$user_id){
    global $conn;
    
    $query = "SELECT * FROM url_shorten WHERE url = '".$url."' and  user_id =  '".$user_id."' ";


    $result = $conn->query($query);
    if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    return $row['short_code'];
 
}else {
   $short_code = generateUniqueID();
   $sql = "INSERT INTO url_shorten (url, short_code, hits,user_id)
   VALUES ('".$url."', '".$short_code."', '0','$user_id')";
   if ($conn->query($sql) === TRUE) {
   return $short_code;
   } else { 
   die("Unknown Error Occured");
   }
   }
   

}


function generateUniqueID(){
    global $conn; 
    $token = substr(md5(uniqid(rand(), true)),0,7); 
    
    $query = "SELECT * FROM url_shorten WHERE short_code = '".$token."' ";
    $result = $conn->query($query); 
    if ($result->num_rows > 0) {
    generateUniqueID();
    } else {
    return $token;
    }
   }



   function GetRedirectUrl($slug){
    global $conn;
    $query = "SELECT * FROM url_shorten WHERE short_code = '".addslashes($slug)."' "; 
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
   $row = $result->fetch_assoc();
   $hits=$row['hits']+1;
   $sql = "update url_shorten set hits='".$hits."' where id='".$row['id']."' ";
   $conn->query($sql);
   return $row['url'];
   }
   else 
    { 
   die("Invalid Link!");
   }
   }

?>


<style>
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

.link_box{

background-color: #eee;
opacity: 1;
height: 30px;
padding: 5px 10px;
font-size: 15px;
line-height: 1.5;
color: #555;
background-image: none;
border: 1px solid #ccc;
transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;

}


    </style>


<div class="container mb-12 mt-5">


<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
  <div class="flex">
    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
    <div>
      <p class="font-bold">This is Original Link</p>
      <p class="text-sm"><?php
echo " <a href='$newUrl'>". $url . "</a> "; 
?></p>
    </div>
  </div>
</div>

</div>

<div class="m-3">
<span class="w-3/6">


<div class="flex flex-wrap items-stretch w-full mb-4 relative">
			<input value="http://bitly.help/u/?redirect=<?php echo $url_short_code?>" id="lk6" readonly="" type="text" class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border h-10 border-grey-light rounded rounded-r-none px-3 relative link_box">
            <div class="flex -mr-px">
				<span class="flex items-center leading-normal bg-grey-lighter rounded rounded-l-none border border-l-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm"> 

                
<div class="tooltip">

<button onclick="copy('lk6') " onmouseout="outFunc('6')"><i class="fa fa-copy"></i> </button>

  
  <span class="tooltiptext" id="ulk6">Copy to clipboard</span>
</div>
            </span>


        </div>	
</span>
</div>


<div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 shadow  mt-10" role="alert">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
  <p>Share this shorten link and earn money</p>

</div>



<div class="flex justify-center mt-12">
<a href="Dashboard/" class="bg-pink-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
Dashboard
</a>
</div>


<script>
function copy(url) {
  /* Get the text field */
  var link_id = url;
  var copyText = document.getElementById(link_id);
  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");



  /* Alert the copied text */
  var tooltip = document.getElementById("u"+url);
  tooltip.innerHTML = "Copied: ";
} 

function outFunc(id) {
  var tooltip = document.getElementById("ulk"+id);
  tooltip.innerHTML = "Copy to clipboard";
}

</script>

</body>

</html>