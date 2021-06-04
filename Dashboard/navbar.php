<?php

include("auth_session.php");

?>

<nav class="relative flex flex-wrap items-center justify-between px-2 py-3 bg-indigo-700 ">
  <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
    <div class="w-full relative flex justify-between lg:w-auto  px-4 lg:static lg:block lg:justify-start">
      <a class="text-lg  font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="#pablo">
      Bitly.help
      </a>
      <button class="text-white cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
        <i class="fa fa-bars"></i>
      </button>
    </div>
    <div class="lg:flex flex-grow items-center hidden " id="example-collapse-navbar">
      <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
        <li class="nav-item">
          <a class="px-3 py-2 flex items-center text-m uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
            <i class="fa fa-home text-lg leading-lg text-white opacity-75"></i><span class="ml-2">Home </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="px-3 py-2 flex items-center text-m uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
            <i class="fa fa-money text-lg leading-lg text-white opacity-75"></i><span class="ml-2">Available Balance : $1</span>
          </a>
          
        </li>
        <li class="nav-item">
          <a class="px-3 py-2 flex items-center text-m uppercase font-bold leading-snug text-white hover:opacity-75" href="../Dashboard/logout.php">
            <i class="fa  fa-sign-out text-lg leading-lg text-white opacity-75"></i><span class="ml-2">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>

function toggleNavbar(collapseID){
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("flex");
  }

</script>