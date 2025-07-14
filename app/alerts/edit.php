
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>
		<script src="https://cdn.tailwindcss.com"></script>
				<style>

			*{
				font-family: Arial, Helvetica, sans-serif;
			}
			body{
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
				<main style="margin-left: auto; margin-right:auto; width:100%; max-width:896px;">
<div class="alerts-banner-wrap w-full p-4 mb-6 bg-[#002460] flex items-center justify-between relative">
					<h1 class="alerts-page-title text-2xl font-bold sm:ml-4 text-white">Manage Alert</h1>
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

<div  class="tx_wes_alert_message flex place-items-center place-content-center" style="display: none;">
	<div id="message-close">
	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E00F00" class="w-6 h-6">
			  <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
	</div>
	<h2 id="message" class="ml-2 text-center text-[#E00F00] text-xl"></h2>
</div>
			<form id="updateAlertForm" method="POST" >
				<input type="hidden" name="alert_id" id="alert_id" value=""/>
				<div class="newalertformwrap grid w-full p-4 lg:px-0 ">
					<div class="mb-4">
						<label for="alert_name" class="text-sm p-4" style="color:#5c98ff;">alert name</label>
						<input type="text" name="alert_name" id="alert_name"
							class="mt-1 shadow w-full h-12 px-4 py-1 rounded-md border-2 border-slate-200 text-gray-800 focus:outline-none"  />
					</div>
					<div class="mb-4">
						<label for="alert_instructions" class="text-sm p-4" style="color:#5c98ff;">instructions</label>
						<textarea name="alert_instructions" id="alert_instructions"
							class="mt-1 shadow w-full h-32 px-4 py-1 rounded-md border-2 border-slate-200 text-gray-800 focus:outline-none" form="updateAlertForm"></textarea>
					</div>
					<div class="mb-4">
						<label for="alert_description" class="text-sm p-4" style="color:#5c98ff;">description</label>
						<textarea name="alert_description" id="alert_description"
							class="mt-1 shadow w-full h-32 px-4 py-1 rounded-md border-2 border-slate-200 text-gray-800 focus:outline-none"
							placeholder="reason to use this alert" form="updateAlertForm"></textarea>
					</div>
					<div class="grid  sm:grid-cols-2 sm:gap-4 mt-2">
						<button type="submit" class="w-40 border border-indigo-500 bg-indigo-500 text-white rounded-md  py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">update alert</button>
					</div>
				</div>
			</form>


	<form id="delete_alert">
		<button  id="delete" class="mb-4 sm:mb-0 w-40 border border-indigo-500 bg-indigo-500 text-white rounded-md py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline" type="submit" >Delete</button>
	</form>
	<div id="switch_button_wrap">
	  <div  id="activate" style="display: none">
	<form id="activate_alert" method="POST">
		<button  class="mb-4 sm:mb-0 w-40 border border-indigo-500 bg-indigo-500 text-white rounded-md py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline" >Activate</button>
	</form>
	  </div>
	  <div id="deactivate" style="display: none">
	<form id="deactivate_alert" method="POST">
		<button   class="mb-4 sm:mb-0 w-40 border border-indigo-500 bg-indigo-500 text-white rounded-md py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">Deactivate</button>
	</form>
	  </div>
	</div>

		<button  id="preview_alert" class="mb-4 sm:mb-0 w-40 border border-indigo-500 bg-indigo-500 text-white rounded-md py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"  >Preview</button>

	</main>
<script src="js/alerts.js"></script>

	</body>
</html>
