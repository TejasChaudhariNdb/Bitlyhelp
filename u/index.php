<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitly.help</title>
    <link href="../css/style.css" rel="stylesheet">
<link href="../output.css" rel="stylesheet">
<script src="https://use.fontawesome.com/f00636cbad.js"></script>


</head>
<body>
<?php include("navbar.php")?>    
<style>
p{
    margin: 0 0 10px;
    font-size: 14px;
}
</style>
    
</body>
</html>

<?php
include("../connect.php");

if(isset($_GET['redirect']) && $_GET['redirect']!="")
{ 
$slug=urldecode($_GET['redirect']);
 
$url= GetRedirectUrl($slug);
$conn->close();

// header("location:".$url);
// exit;
}


function addWallet($id){

     global $conn;

     $sql = "update user set wallet=wallet+0.245 where id='".$id."' ";
     $conn->query($sql);
     // echo "done";          
     // echo $id;          
          
     

}


function increaseHits($hits,$row,$slug){
     global $conn;

$newhit = $hits+1;

     $cookie_name = $slug;
     $cookie_value = "true";
     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
     if(!isset($_COOKIE[$cookie_name])) {
          // echo "Cookie named '" . $cookie_name . "' is not set!";

          $sql = "update url_shorten set hits='".$newhit."' where id='".$row['id']."' ";
          $conn->query($sql);
          addWallet($row['user_id']);
     } else {
          // echo "Cookie '" . $cookie_name . "' is set!<br>";
          // echo "Value is: " . $_COOKIE[$cookie_name];
     }
     

  
}

function GetRedirectUrl($slug){
    global $conn;
    $query = "SELECT * FROM url_shorten WHERE short_code = '".addslashes($slug)."' "; 
    $result = $conn->query($query);

	if ($result->num_rows > 0) {
   $row = $result->fetch_assoc();
   $hits=$row['hits'];
//    $hits=$row['hits']+1;
//    $sql = "update url_shorten set hits='".$hits."' where id='".$row['id']."' ";
//    $conn->query($sql);

increaseHits($hits,$row,$slug);

return $row['url'];

}
   else 
    { 
   die("Invalid Link!");

}
   }




?>



<!-- Ads area -->


<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-fb+5w+4e-db+86"
     data-ad-client="ca-pub-3791610326848343"
     data-ad-slot="5707836998"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<div class="flex justify-center mt-6">
<div class=" bg-blue-200  w-8/12 max-w-3xl">

Ads will show here

<br>
<br>
<br>
<br>

<div class="flex justify-center ">
<a target="_blank" href="<?php echo $url?>" class="bg-green-500  hover:bg-blue-400 text-white font-bold py-2 px-4 rounded inline-flex items-center">
  <svg class="animate-bounce fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
  <span>Download</span>
</a>
</div>


<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-fb+5w+4e-db+86"
     data-ad-client="ca-pub-3791610326848343"
     data-ad-slot="5707836998"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<br>
<br>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-fb+5w+4e-db+86"
     data-ad-client="ca-pub-3791610326848343"
     data-ad-slot="5707836998"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<br>
<br>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-fb+5w+4e-db+86"
     data-ad-client="ca-pub-3791610326848343"
     data-ad-slot="5707836998"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br>

</div>
</div>
<br>
<hr>
<br>
<!-- Dump Text -->

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-fb+5w+4e-db+86"
     data-ad-client="ca-pub-3791610326848343"
     data-ad-slot="5707836998"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<div class="flex justify-center">
<div class="warp max-w-4xl bg-gray-200">
<div class="container ">
<div class="blog-content"><h4 style="color: #5a5a5a; font-size: 22px;">Hard Drive Data Recovery</h4>

<p>Safety is a major requirement of every type of data. Maybe, you have credential files, memorable images, favorite songs, or videos that you love to keep in your hard drives. But, sometimes we accidentally delete those media files and we don’t know how to recover that lost data again. Actually, it is hectic and sometimes it may cause you biggest loss if you are an organization. Data is a crucial part of every business as well as for the individual.</p>

<h4 style="color: #5a5a5a; font-size: 22px;">What Is Hard Drive?</h4>

<p>A hard drive, the hard disk drive is an electro-mechanical data storage which stores and retrieve digital information via the help of magnetic storage with one or more rigid rapidly rotating disks coated with a thin layer of magnetic material. Basically, it has four types of hard drives:-</p>

<ul>
	<li>Parallel Advanced Technology Attachment (PATA)</li>
	<li>Serial ATA (SATA)</li>
	<li>Small Computer System Interface (SCSI)</li>
	<li>Solid States Drives (SSD)</li>
</ul>

<p>Hard disk drive (HDD) is nothing but is a mechanism which controls the positioning, reading, and writing of the hard disk, and presents data storage. Every computer has installed a hard drive in them itself at the time when a computer has been prepared. so, it can store the files of the operating system, software program, and an individual's personal files. It helps to fast access to a large amount of data available in the operating system. Now come up to the question that what if we lost our useful information and files from the hard disk drive? Data recovery is a process via which you can retrieve your lost, inaccessible, corrupted, damaged or formatted data from the other storage viz. Secondary storage when you can access your data in a normal way. Normally, a data recovery scenario occurs when an operating system fails to function, non- functioning of a storage device, coincidental deletion or damage, etc. The other reasons for the malfunctioning of files and information could be a drive-level failure, drive partition or a hard disk drive failure. In such circumstances data is not easily readable from the media devices.</p>

<h4 style="color: #5a5a5a; font-size: 22px;">Different Solutions For Different Types Of Hard Drives</h4>

<p>Desktop Data Recovery:- &nbsp;If we are in a hurry, we just save our data on desktop rather save that particular file in a specific folder. Many times, just because of power shut down, we lost our files from the desktop and we need a frequent way to get our files back. Don’t worry there are so many hard drive data recovery service providers in the market. Laptop Data Recovery:- Laptop data recovery services are also available in the market which helps you to your lost data of personal or business laptop. Outsource to the trustworthy companies which can help you to recover your lost laptop data. External Hard Drive:- Sometimes there is so much data which we can’t store in the existing hard drive of our desktop. Hence, we use external drives to store our precious data securely. If you mistakenly formatted your external drive then there are hard drive data recovery service provider companies which helps you to retrieve your data. SSD Data Recovery:- SSD (Solid-state drives) is also a great way to store your data. But, if you mistakenly deleted your whole data and finding a way to recover it then go for the hard drive data recovery services.</p>

my<h1>MY</h1>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-fb+5w+4e-db+86"
     data-ad-client="ca-pub-3791610326848343"
     data-ad-slot="5707836998"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
my

<h5>Conclusion</h5>

<p>Lost of your precious data can really be a big problem for you. If you mistakenly lost your data and you need urgent recovery then you should definitely go for the experts. There are so many companies which provide hard drive data recovery services. Outsource to anyone for getting trustworthy service and to recover your precious data.</p>
<br>

</div>


</div>
</div>
</div>

<br>
<br>

<center>If this link is illegal/DMCA repot at <strong>admin@bitly.help</strong></center>


<br>
<br>
