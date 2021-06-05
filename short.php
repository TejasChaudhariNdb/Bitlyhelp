<?php

include("connect.php");
include("Dashboard/auth_session.php");




$url = $_POST['url'];
$user_id = 1;
echo $url;
echo "<br>";

$url_short_code =  GetShortUrl($url,$user_id);
$newUrl = $base_url.$url_short_code;

echo "Your url is <a href='$newUrl'>". $newUrl . "</a>"; 
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