<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account | Bitly.help</title>
  
    <link href="../css/style.css" rel="stylesheet">
<link href="../output.css" rel="stylesheet">
<script src="https://use.fontawesome.com/f00636cbad.js"></script>


</head>

<style>

.title {
  font-family: "Arial Black", sans-serif;
  font-size: 2.2em;
  letter-spacing: -1px;
  background-color: black;
  color: white;
  padding: 5px;
  border-radius: 10px;
  margin-top: 5px;
  padding-left: 20px;
  padding-right: 20px;
 }
</style>

<body class="bg-gradient-to-r from-pink-400 to-blue-500">

<div class="container">

<center style="margin-top: 20px;"><span class="title">Bitly.help</span></center>


<div class="bg-white shadow-md rounded px-8 pt-5 pb-8 mb-4 flex flex-col mt-7 max-w-md mx-auto">
<h5 class="mb-4  text-indigo-500 hover:text-indigo-400 text-center text-2xl font-extrabold text-gray-900">
       Create New account
      </h5>
    <div class="mb-4">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
        Email
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" type="text" placeholder="Username">
    </div>
    <div class="mb-4">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
       Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="name" type="text" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="******************">
   
      <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker float-right" href="#">
        Forgot Password?
      </a>
    </div>
    
    <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-black-500 group-hover:text-white-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
         Create Account
        </button>
      </div>


      <a class="text-center font-bold text-m text-red mt-2 " href="login.php">
Already have account
      </a>

</div>

</div>

</body>
</html>