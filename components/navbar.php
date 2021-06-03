<nav class="relative flex flex-wrap items-center justify-between px-2 py-3 myblue ">
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
            <i class="fa fa-home text-lg leading-lg text-white opacity-75"></i><span class="ml-2">Home Tejas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="px-3 py-2 flex items-center text-m uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
            <i class="fa fa-money text-lg leading-lg text-white opacity-75"></i><span class="ml-2">Payout Rates</span>
          </a>
          
        </li>
        <li class="nav-item">
          <a class="px-3 py-2 flex items-center text-m uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
            <i class="fa  fa-sign-in text-lg leading-lg text-white opacity-75"></i><span class="ml-2">Login</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="px-3 py-2 flex items-center text-m uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
            <i class="fa  fa-user-circle text-lg leading-lg text-white opacity-75"></i><span class="ml-2">Register</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- 
<div class="py-20 h-screen bg-gray-300 px-2">
    <div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-xl">
        <div class="md:flex">
            <div class="w-full p-3">
                <div class="relative"> <i class="absolute fa fa-search text-gray-400 top-5 left-4"></i> <input type="text" class="bg-white h-14 w-full px-12 rounded-lg focus:outline-none hover:cursor-pointer" name=""> <span class="absolute top-4 right-5 border-l pl-4"><i class="fa fa-microphone text-gray-500 hover:text-green-500 hover:cursor-pointer"></i></span> </div>
            </div>
        </div>
    </div>
</div> -->


<script>
  function toggleNavbar(collapseID){
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("flex");
  }


  window.setInterval('refresh()', 10000); 	
    // Call a function every 10000 milliseconds 
    // (OR 10 seconds).

    // Refresh or reload page.
    function reHHHHfresh() {
        window .location.reload();
    }
</script>