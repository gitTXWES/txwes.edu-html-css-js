<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Active Alert Alert</title>

		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>
		<script src="https://cdn.tailwindcss.com"></script>

		<style>
			*{
				font-family: Arial, Helvetica, sans-serif;
			}
		</style>

	</head>

	<body>

		<header>  <div class="p-8 text-lime-600">
			<span class="sm:hidden">xs</span>
			<span class="hidden sm:block md:hidden">sm</span>
			<span class="hidden md:block lg:hidden">md</span>
			<span class="hidden lg:block xl:hidden">lg</span>
			<span class="hidden xl:block 2xl:hidden">xl</span>
			<span class="hidden 2xl:block">2xl</span>
		</div>
	</header>
		<main style="margin-left: auto; margin-right:auto; width:100%">
		<div class="alerts-banner-wrap w-full p-4 mb-6 bg-[#002460] flex items-center justify-between relative">
			<h1 class="alerts-page-title text-2xl font-bold sm:ml-4 text-white">Active Alert Test</h1>
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





		</main>
		<footer></footer>
		<script>
			$(document).ready(function(){

				var alert_date = new Date();
			    $(".alert-menu-open").on("click", function() {
					$(this).hide();
					$(this).nextAll().show();
				})
				$(".alert-menu-close").on("click", function() {
					$(this).hide();
					$(this).next().hide();
					$(this).prev().show();

				})
					$.ajax({
					url: "http://localhost/alerts/php/get-active-alert.php",
					type: "GET",
					data: {
						"active_alert": "TRUE",
					},
					success: function(response) {
						alert_by_id = JSON.parse(response);
						console.log(alert_by_id);
						if(alert_by_id){
						fill_banner(alert_by_id);
					}
				}
			})

			function fill_banner(alert_info){
				alert_info.forEach((element) => {
					let alert_banner = `
					<alert-banner class="w-full bg-[#fff9f8] p-6 relative hidden">
						<div class="w-full flex place-content-between mb-4">

						<div class="box-1 w-3 hidden sm:block">
						<svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.42 50">

						  <g id="Layer_1-2" data-name="Layer 1">
							<path class="cls-1" d="M4.21,41.59c2.32,0,4.21,1.89,4.21,4.21s-1.89,4.21-4.21,4.21-4.21-1.82-4.21-4.21,1.89-4.21,4.21-4.21Zm-2.52-7.22L.91,.98c0-.63,.35-.98,.98-.98H6.59c.63,0,.91,.35,.91,.98l-.7,33.38c0,.63-.28,1.05-.98,1.05H2.6c-.63,0-.91-.42-.91-1.05Z"/>
						  </g>
						</svg>
						</div>
						<div class="box-2 ">

							<div  class=" text-red-500"><span id="alert_date" class="text-sm">February 1, 2023</span><br><h1 id="" class="alert_banner_title font-bold text-2xl uppercase">${element.alert_name}</h1></div>

						</div>
						<div class="box-3 close-alert ">
							<svg  id="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 cursor-pointer">
							  <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
							</svg>
						</div>
						</div>
						<div id="" class="banner_instructions col-span-full"> ${element.instructions}</div>
					</alert-banner>`;
					var placement = document.querySelector("body");
					placement.insertAdjacentHTML("afterbegin", alert_banner);
				});

			show_banner();
			}


			function show_banner(){
				var banner = $("alert-banner");
				banner.css("display", "block");
				$(".close-alert").on("click", function(){
					$(this).parent().parent().hide();
				})

			}

		});
		</script>
	</body>
</html>
