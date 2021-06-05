<?php include("../connect.php")?>

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


<style>
.link_box{

    background-color: #eee;
opacity: 1;
height: 30px;
padding: 5px 10px;
font-size: 12px;
line-height: 1.5;
color: #555;
background-image: none;
border: 1px solid #ccc;
transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;

}


</style>


</head>
<body class="bg-gray-100">



<?php 
include("navbar.php");
echo "<div class='md:flex flex-row'>";
include("sidebar.php");

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


    </style>

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
                      <a href="#" class="text-indigo-700">Links</a>
                    </li>
                  </ul>
 </div>               


<br>

<!--  -->
<div class="repaet">

<?php

$sql = "SELECT * FROM url_shorten where user_id = 1 and hide = 0";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
     $lkid = $row['id'];
    $link = $row["url"];
    $parse = parse_url($link);
    $host = $parse['host'];
    $link = str_ireplace('www.', '', $host);
    
    $shorten_url = $base_url.$row['short_code'];

?>


<div class="bg-white rounded p-3 mb-3 shadow">
<p class="text-blue-700 text-lg"><i class="fa fa-link pr-2"></i><?php echo $row["short_code"]?></p>
<p class="text-gray-400 text-xs"><i class="fa fa-calendar  pr-2"></i>01-06-2021 , 1:45 AM - <a href="<?php echo $row["url"];?>" class="text-blue-500 text-base"><?php echo $link?></a></p>
<div class="mt-3 flex justify-between pb-2">

<span class="w-3/6">


<div class="flex flex-wrap items-stretch w-full mb-4 relative">
			<input value="<?php echo $shorten_url?>" id="lk<?php echo $row['id']?>" readonly="" type="text" class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border h-10 border-grey-light rounded rounded-r-none px-3 relative link_box" >
            <div class="flex -mr-px">
				<span class="flex items-center leading-normal bg-grey-lighter rounded rounded-l-none border border-l-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm"> 

                
<div class="tooltip">

<button  onclick="copy('lk<?php echo $lkid ?>') "   onmouseout="outFunc('<?php echo $lkid?>')"><i class="fa fa-copy"></i> </button>

  
  <span class="tooltiptext" id="ulk<?php echo $lkid?>">Copy to clipboard</span>
</div>
            </span>

        </div>	
            
	

        </div>	
</span>
<span><a href="edit.php?link=<?php echo $lkid ?>" class="text-sm bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit  </a> <a href="hide_unhide.php?status=hide&link_id=<?php echo $lkid;?>" class="text-sm ml-3 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hide</a></span>


</div>

</div>

<?php

}


}else {
  echo "0 results";
}


?>


</div>
</div>
</div>



<!--  -->





<div class="bg-white text-center mt-10 p-3 font-bold border-b border-gray-200 rounded">


Copyright © Bitly.help 2021 
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