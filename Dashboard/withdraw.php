<?php 

include("../connect.php");


?>

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




</head>
<body class="bg-gray-100">
<style>
table{
display: block;
overflow-x: auto;
}
</style>


<?php 
include("navbar.php");

$user_id = $_SESSION['user_id'];



$query2    = "SELECT * FROM `user` WHERE id = '$user_id'";
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($result2);
$wallet = $row2['wallet'];

$query2    = "SELECT * FROM `withdrawal` WHERE user_id = '$user_id'";
$result2 = mysqli_query($conn, $query2);

$pend = 0;
$with_done = 0;
while($row2 = mysqli_fetch_assoc($result2)){

  if($row2['status'] === "Pending"){
    $pend += $row2['amount'];

  }

  if($row2['status'] === "Paid"){
    $with_done += $row2['amount'];

  }


}

echo "<div class='md:flex flex-row'>";
include("sidebar.php");

?>



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
                      <a href="#" class="text-indigo-700">Withdrawal</a>
              
                    </li>
                  </ul>
 </div>               


<br>

<!--  -->




<div class="grid md:grid-cols-3 grid-cols-1   gap-4">
  <div class="bg-purple-700 text-white  p-4"><p class="text-3xl">₹<?php echo $wallet?></p><p>Available</p></div>
  
  <div class="bg-yellow-400 p-4"><p class="text-2xl">₹<?php echo $pend;?></p><p>Pending Withdrawn</p></div>
  <div class="bg-red-600 text-white  p-4"><p class="text-3xl">₹<?php echo $with_done;?></p><p>Total Withdraw</p></div>
 

</div>

<div class="bg-white mt-5 pb-10 p-3 rounded-t-lg shadow">
<br>
<div class="text-center">
<button onClick="withdraw(<?php echo $wallet?>)" class="bg-green-500 hover:bg-blue-green text-white font-bold py-2 px-4 border border-pink-700 rounded">
  Withdraw
</button>
<a id="with_btn" href="withdraw_code.php" class="text-indigo-700" hidden>Withdrawal</a>
</div>
<br>


<p class="text-lg text-center font-bold m-5">Withdrawal Statement</p>
<table class="rounded-t-lg  mx-auto bg-gray-200 text-gray-800">
<tbody style="width: 100%;display: table;">
  <tr class="text-left border-b-2 border-gray-300">
    <th class="px-4 py-3">id</th>
    <th class="px-4 py-3">Date</th>
    <th class="px-4 py-3">Status</th>
    <th class="px-4 py-3">Withdrawal Method</th>
    <th class="px-4 py-3"> UPI</th>
    <th class="px-4 py-3">Withdrawal Amount</th>
  </tr>

<?php

$query    = "SELECT * FROM `withdrawal` WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){

?>  

  <!-- Loop php -->
  <tr class="bg-gray-100 border-b border-gray-200">
    <td class="px-4 py-3">#<?php echo $row['id']?></td>
    <td class="px-4 py-3"><?php echo $row['date'];?></td>
    <td class="px-4 py-3"><?php echo $row['status'] ?></td>
    <td class="px-4 py-3"><?php echo $row['payment_method']?></td>
    <td class="px-4 py-3"><?php echo $row['upi']?></td>
    <td class="px-4 py-3"><?php echo $row['amount']?></td>
  </tr> 


<?php

}
?>
</tbody>
</table>

<!-- classic design -->

</div>

<!--  -->




<style>
		.animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		.animated.faster {
			-webkit-animation-duration: 500ms;
			animation-duration: 500ms;
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			animation-name: fadeIn;
		}

		.fadeOut {
			-webkit-animation-name: fadeOut;
			animation-name: fadeOut;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@keyframes fadeOut {
			from {
				opacity: 1;
			}

			to {
				opacity: 0;
			}
		}
	</style>



	<div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
		style="background: rgba(0,0,0,.7);">
		<div
			class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold">Withdraw</p>
					<div class="modal-close cursor-pointer z-50">
						<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="my-5">
				<p> Withdraw amount should be equal or greater than 350</p>
        </div>
				<!--Footer-->
				<div class="flex justify-end pt-2">
					<button
						class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
					<button
						class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button>
				</div>
			</div>
		</div>
	</div>

	<script>
	
  
  function withdraw(amt){

if(amt < 350){
      modal.classList.remove('fadeOut');
			modal.classList.add('fadeIn');
			modal.style.display = 'flex';
}else{


  var r = confirm("Are You Sure?");
if (r == true) {

  document.getElementById('with_btn').click();

}
 

}


  }
  
  
  
  	const modal = document.querySelector('.main-modal');
		const closeButton = document.querySelectorAll('.modal-close');

		const modalClose = () => {
			modal.classList.remove('fadeIn');
			modal.classList.add('fadeOut');
			setTimeout(() => {
				modal.style.display = 'none';
			}, 500);
		}

		const openModal = () => {
			// modal.classList.remove('fadeOut');
			// modal.classList.add('fadeIn');
			// modal.style.display = 'flex';
		}

		for (let i = 0; i < closeButton.length; i++) {

			const elements = closeButton[i];

			elements.onclick = (e) => modalClose();

			modal.style.display = 'none';

			window.onclick = function (event) {
				if (event.target == modal) modalClose();
			}
		}
	</script>


<div class="bg-white text-center mt-10 p-3 font-bold border-b border-gray-200 rounded">


Copyright © Bitly.help 2021 
</div>



</body>
</html>