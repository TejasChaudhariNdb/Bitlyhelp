
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitly Help | Earn Money By Links</title>

    <link href="css/style.css" rel="stylesheet">
<link href="output.css" rel="stylesheet">
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

<script src="https://use.fontawesome.com/f00636cbad.js"></script>

<!-- <link href="tailwind.css" rel="stylesheet"> -->
<script>

</script>

</head>
<body>
<?php include("components/navbar.php");?>

<div class="h-50  ">
<div class="myblue h-full myround pt-10 pb-10">

<div class="container">
<div class="banner-content text-white">
                <h3 class="cate">SHORTEN URLS AND</h3>
                <h1 class="title">Earn Money</h1>
                <p>Transforming long, ugly links into Shorten URLs and earn big money. Get paid by every person who visits your URLs.</p>
      <br>
      <br>
      <br>
            </div>
            
</div>
</div>


<div class="container">

<div class="relative px-4 py-10 bg-white shadow-lg shadow-2xl   sm:rounded-3xl sm:p-20 z-50 mymargin rounded-lg text-center">
      <div class="max-w-md mx-auto">
      <h3 class="subtitle">Shorten URL Is Just Simple</h3>
       
    
      <form class="banner-form pt-4" action="short.php" method="post">
      <input name="url" class="p-15 ring shadow appearance-none border  rounded-full w-full  py-4 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="url_field"  type="url"   onchange="validateUrl()"  placeholder="Your Url Here" required/>
      <!-- <span class="text-xs text-red-700 hide" id="url_input">Enter Valid Url</span> -->
      <!-- <br> -->
      <button if="validate-field" class="mt-5 shadow-lg inline-flex items-center h-10 px-5 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
  <svg class="w-4 h-4 mr-3 fill-current" viewBox="0 0 20 20"><path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
  <span>Shorten</span>
</button>
    </form>

        </div>
        <br>
        <div class="banner-counter">
                    <div class="counter-item">
                        <h2 class="counter-title"><span class="counter">1,200,000</span>+</h2>
                        <p>Links clicked per day</p>
                    </div>
                    <div class="counter-item">
                        <h2 class="counter-title"><span class="counter">348,000,000</span>+</h2>
                        <p>Shortened links in total</p>
                    </div>
                    <div class="counter-item">
                        <h2 class="counter-title"><span class="counter">1,180,000</span>+</h2>
                        <p>Happy users registered</p>
                    </div>
                </div>


      </div>
      
    
    
    </div>


</div>

<br>
<br>
<br>


<section class="how-section padding-top padding-bottom pt-md-half pb-max-lg-0">
        <div class="container">
            <div class="section-header mb-low">
                <h2 class="title mb-0">How to start</h2>
            </div>
            <div class="  myrow justify-center mb--40">
                <div class="flex justify-center col-lg-4 col-md-6 col-sm-10">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="http://pixner.net/cortaly/main/assets/images/how/how1.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h6 class="title">CREATE AN ACCOUNT</h6>
                        </div>
                    </div>
                </div>
                <div class=" flex justify-center col-lg-4 col-md-6 col-sm-10">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="http://pixner.net/cortaly/main/assets/images/how/how2.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h6 class="title">SHORTEN YOUR LINK</h6>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center col-lg-4 col-md-6 col-sm-10">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="http://pixner.net/cortaly/main/assets/images/how/how3.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h6 class="title">Earn Money</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




<br>
<br>
<br>
<script>

function validateUrl(){
  console.log("validate")
}

</script>

<br>
</body>
</html>