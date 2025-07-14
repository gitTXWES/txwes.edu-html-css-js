<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content=" 160 max characters " />

		<link rel="canonical" href="https://txwes.edu/" />

		<!-- robot text to follow and index for search engines -->
		<meta name="robots" content="index,follow"><!-- All Search Engines -->
		<meta name="googlebot" content="index,follow"><!-- Google Specific -->

		<title>Texas Wesleyan—Project Name</title>

		<link rel="stylesheet" href="https://use.typekit.net/dyt3onb.css"/>
		<link rel="stylesheet" href="../css/size_indicator.css" />
		<link rel="stylesheet" href="../css/tailwind_preflight.css" />

		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>

		<style>
			.multi_button_outer  > * {
				font-family: "Peridot-Pe-Variable", Arial, Helvetica,sans-serif;
				font-variation-settings: "wght" 400, "ital" 0;
			}
			.multi_button_outer {
				position: relative;
				background-color: #002460;
				padding: 16px;
				border-radius: 6px;
				margin-top: 16px;
				width: fit-content;
			}
			.muti_button_text{
				display: flex;
				flex-direction: row;
				gap:1.5rem;

			}
		.muti_button_text > span {
			color:#ffffff;
		}
		.muti_button_text > span svg{
			width: 24px;
		}
			.multi_button_inner{
				display: none;
				position: absolute;
				background-color: #03599B;
				padding: 1.5rem;
				gap: 1.5rem;
				border-radius: 6px;
				left:0;
				top: -25px;
				width:320px;
				box-shadow: 2px 2px 2px 0px rgba(0,0,0,0.09),7px 7px 9px 0px rgba(0,0,0,0.15);
				opacity: 0;
			}
			.multi_button {
				background-color: #f1f1f1;
				padding:1rem;
				border-radius: 6px;
				font-size: 1rem;
				font-family: "Peridot-Pe-Variable", Arial, Helvetica,sans-serif;
				font-variation-settings: 'wght' 450, 'ital' 0;
				color:#1a1a1a;
			}
			.multi_button:hover, .multi_button:active, .multi_button:focus-visible  {
			background-color: #ffffff;
			}
			.multi_button:focus-visible,  .close_banner_menu_wrap:focus-visible, .multi_button_outer:focus-visible,
			.multi_button:focus,  .close_banner_menu_wrap:focus, .multi_button_outer:focus  {
				outline: 2px solid #fed000;
				outline-offset: 5px;
			}
			.close_banner_menu_wrap{
				width: 24px;
				height: 24px;
				justify-self: end;
				border-radius: 3px;
			}
			/* sm	640px  */
			@media (min-width: 640px) {  }

			/*md	768px	*/
			@media (min-width: 768px) {  }

			/* lg	1024px	*/
			@media (min-width: 1024px) { }

			/*xl	1280px	*/
			@media (min-width: 1280px) {  }
			/*2xl	1536px	*/

			@media (min-width: 1536px) {  }
		</style>

	</head>
	<body>
	  <header> </header>
	  <main>
		  <div class="size-indicator">
			  <span class="xs">xs</span>
			  <span class="sm">sm</span>
			  <span class="md">md</span>
			  <span class="lg">lg</span>
			  <span class="xl">xl</span>
			  <span class="xl2">2xl</span>
		  </div>

		  <div class="multi_button_outer" tabindex="0" role="button" aria-haspopup="menu" aria-expanded="false">
			<div class="muti_button_text"><span>RSVP</span><span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
				  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
				</svg></span></div>
		  	<div class="multi_button_inner" role="menu">
				  <button class="close_banner_menu_wrap">
				  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-close-circle" aria-labelledby="close_banner_menu" role="img">
				  <title id="close_banner_menu">circle with x mark in center</title>
				  <circle cx="12" cy="12" r="10" class="primary"/><path fill="#ffffff" class="secondary" d="M13.41 12l2.83 2.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 1 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12z"/>
				  </svg>
				  </button>
				  <a href="#" class="multi_button" role="menuitem">RSVP Commencement</a>
				  <a href="#" class="multi_button" role="menuitem">RSVP Robing</a>
				  <a href="#" class="multi_button" role="menuitem">RSVP Hooding</a>
		    </div>
		  </div>
	  </main>
	  <footer></footer>
	  <script>
	var NamespaceandDate =  (function () {
	   	$( document ).ready(function() {

			 const menu_opener = document.querySelector(".multi_button_outer");
			 const menu_closer = document.querySelector(".close_banner_menu_wrap");

			 	$(".multi_button_outer").on('click keypress', function(event){
					if( event.which == 1 || event.which == 13 || event.which == 32){
					 $(".multi_button_inner").css({"display":"grid"}).animate({
						 "opacity": 1
				 		},300)
						 change_aria_expanded(true);
						 set_button_focus(true);
					 }
			 			})

			function set_button_focus(isOpen){
				isOpen ? menu_closer.focus() : menu_opener.focus();
			}



		 	function change_aria_expanded(isOpen){
					$(".multi_button_outer").attr("aria-expanded", isOpen);
			 }

			 $(".close_banner_menu_wrap").on("click", function(event){
				 event.stopImmediatePropagation()
				 $(".multi_button_inner").animate({
						  "opacity": 0
					  },200).css({"display":"none"})
					  change_aria_expanded(false)
					  set_button_focus(false);
				  })
		   });
	})();
	  </script>
	</body>
</html>
