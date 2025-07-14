<?php

include("php/class-tx-wes-alerts.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<script src="https://cdn.tailwindcss.com"></script>
	<style>
		* {
			font-family: Arial, Helvetica, sans-serif;
		}

		body {
			width: 100%;
		}
	</style>
</head>

<body>
	<header>
		<div class="p-8 text-lime-600">
			<span class="sm:hidden">xs</span>
			<span class="hidden sm:block md:hidden">sm</span>
			<span class="hidden md:block lg:hidden">md</span>
			<span class="hidden lg:block xl:hidden">lg</span>
			<span class="hidden xl:block 2xl:hidden">xl</span>
			<span class="hidden 2xl:block">2xl</span>
		</div>
	</header>
	<main class="mb-8" style="margin-left: auto; margin-right:auto; width:100%; max-width:896px;">
<div class="alerts-banner-wrap w-full p-4 mb-6 bg-[#002460] flex items-center justify-between relative">
		<h1 class="alerts-page-title text-2xl font-bold sm:ml-4 text-white">Texas Weslyan Alerts</h1>
		<div class="alert-menu inline-flex justify-end relative">
			<div class=" alert-menu-open mr-6 z-20 relative" style="display: block;">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				</svg>
			</div>
			<div class="alert-menu-close mr-6 z-20 relative" style="display: none;">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFFFFF" class="w-6 h-6">
					<path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
				</svg>
			</div>
			<div class="alert-menu-nav-wrap absolute bg-[#CCCCCC] w-52 md:w-80 z-10 rounded-lg p-8 -top-2 right-2 text-white text-center" style="display: none;">
				<nav>
						<div class=" font-semibold mb-2"><a href="http://localhost/alerts/index.php">view all alerts</a></div>
						<div class=" font-semibold"><a href="http://localhost/alerts/create.php">create new alert</a></div>
				</nav>
			</div>
		</div>
	</div>
		<div class="tx_wes_alert_message">

		</div>
		<div class="grid w-full px-4 mx-auto">
			<div class="inline-grid w-full grid-flow-col font-semibold border-b-4 p-4 grid-cols-2 ">
				<div class=""> Alert Name</div>
				<div class="text-center"> Status</div>
			</div>
			<?php

$tx_wes_alerts = new TxWesAlerts();
$current_alerts = $tx_wes_alerts->get_all_alerts();
$alert_show = 'http://localhost/alerts/edit.php';
foreach($current_alerts as $alert){

echo(
  '<div class="inline-grid w-full grid-flow-col border-b-2 p-4 grid-cols-2 mt-2" style="border-color: #fed000;">
  <div class="col-start-1 text-xl">'.$alert["alert_name"].'</div>
  <div class="col-start-2 text-slate-200 text-center ml-6">' );
  if($alert["active"]){
	 echo('<h3 class="uppercase text-red-500">Active</h3>');
 }else{
	 echo('<h3 class="uppercase text-black-50">inactive</h3>');
 }
 echo('
  </div>
  <div class="col-start-1 col-span-full text-left my-4 text-black"><h2 class="font-semibold mb-2 text-[#CCCCCC]">Instructions: </h2>'.$alert["instructions"].'
  </div>
  <div class="col-start-1 col-span-full text-left my-4 text-black"><h2 class="font-semibold mb-2 text-[#CCCCCC]">Description: </h2>'.$alert["description"].'
  </div>
	<div class="buttons-wrapper col-start-1 col-span-full">
	  <form  style="display: inline" action="'.$alert_show.'">
	  <input type="hidden" name="alert_id" value="'.$alert["id"].'" />
		<button  class="mb-4 mt-2 ml-0 sm:mb-0 w-40 border border-indigo-500 bg-[#0072BC] text-white rounded-md py-2 transition duration-500 ease select-none hover:bg-[#004B8D] focus:outline-none focus:shadow-outline" type="submit" >update</button>
	  </form>
	</div>
</div>');

}
?>
		</div>

	</main>

	<script src="js/alerts.js" ></script>

</body>

</html>
