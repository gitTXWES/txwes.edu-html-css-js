<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title> TEMPLATE TITLE </title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>
		<script src="https://cdn.tailwindcss.com"></script>

		<style>
			*,
			*::before,
			*::after {
				font-family: Arial, Helvetica, sans-serif;
				box-sizing: border-box;
				border-width: 0;
				border-style: solid;
			}
		</style>

	</head>
	<body>
	  <header>
		<div class="p-8 text-lime-600 fixed">
			<span class="sm:hidden">xs</span>
			<span class="hidden sm:block md:hidden">sm</span>
			<span class="hidden md:block lg:hidden">md</span>
			<span class="hidden lg:block xl:hidden">lg</span>
			<span class="hidden xl:block 2xl:hidden">xl</span>
			<span class="hidden 2xl:block">2xl</span>
		</div>
	</header>
		<main style="margin-left: auto; margin-right:auto; width:100%">

			<style>
			.rotate_open{
				animation: rotate_open .3s forwards linear;
			}

			.rotate_close{
				animation: rotate_close .3s forwards linear;
			}
			@keyframes rotate_open{
				from {
					transform: rotate(180deg);
				  }
				  to {
					transform: rotate(0deg);
				  }

			}

			@keyframes rotate_close{
				from {
					transform: rotate(0deg);
				  }
				  to {
					transform: rotate(180deg);
				  }

			}
			.faq_block_outer{
				background-color:#ffffff;
			}

			.faq_block_header {
				display: block;
				width: auto;
			}

			.faq_block_header_h2_wrap {
				width: auto;
				margin-bottom: 1.25rem;
			}

			.faq_block_header_h2 {
				font-family: Oswald, Arial, Helvetica, sans-serif;
				color: #002460;
				font-weight: 500;
				font-size: 3rem;
				text-transform: capitalize;
				margin-bottom: 1.25rem;
				line-height: 3.625rem;
			}


			.faq_block_main {
				margin-top: 1.25rem;
				width: 100%;
				display: flex;
				flex-direction: column;
				font-family: Arial, Helvetica, sans-serif;
			}

			.faq_block_main_dropdown {
				width: 100%;
				display: inline-grid;
				grid-template-columns: auto auto;
				padding: 1.25rem 0rem;
				background-color: #ffffff;
				border-radius: .625rem;
				margin-bottom: 1.25rem;
			}

			.faq_block_main_dropdown > button {
					display: inline-grid;
					place-content: space-between;
					grid-auto-flow: column;
					width: 100%;
					grid-column-start: 1;
					grid-column-end: 3;
			}

			.faq_block_main_dropdown:last-child {
				margin-bottom: 0rem;
			}

			.faq_block_main_dropdown_icon {
				width: 1.125rem;
				height: 1.125rem;
				justify-self: end;
				align-self: center;
				cursor: pointer;
			}
			 .faq_block_main_dropdown_title:hover + .faq_block_main_dropdown_icon {
				filter: brightness(125%);
				}
			.faq_block_main_dropdown_icon:hover{
				filter:brightness(125%);
			}
			.faq_block_main_dropdown_title {
				color: #1a1a1a;
				font-size: 1.125rem;
				align-self: center;
				cursor:pointer;
			}

			.faq_block_main_dropdown_text {
				margin-top: 1.25rem;
				color: #454545;
				font-size: 1rem;
				font-family: Arial, Helvetica, sans-serif;

			}

			.faq_block_main_dropdown_text p:first-child {
				margin-bottom: 1rem;
			}
			/* sm	640px  */
			@media (min-width: 640px) {  }

			/*md	768px	*/
			@media (min-width: 768px) {
				.faq_block_lightblue {
					padding: 3.75rem 3.875rem;
					display: grid;
					grid-auto-flow: row;
					place-content: center;
				}

				.faq_block_header {
					display: flex;
					width: auto;
					flex-direction: column;
				}

				.faq_block_header_h2_wrap {
					width: auto;
					margin-bottom: 1.25rem;
				}

				.faq_block_header_h2 {
					margin-bottom: 1.875rem;
				}


				.faq_block_main {
					margin-top: 1.875rem;
					width: auto;
				}

				.faq_block_main_dropdown {
					width: auto;
				}
			  }

			/* lg	1024px	*/
			@media (min-width: 1024px) {
				.faq_block_lightblue {
					padding: 3.75rem 0;
					display: grid;
					grid-auto-flow: row;
					place-content: center;
				}

				.faq_block_header {
					flex-direction: row;

				}

				.faq_block_header_body_wrap {
					margin-left: 5rem;
				}

				.faq_block_header_h2_wrap {
					width: 18.75rem;
					margin-bottom: 0rem;
				}

				.faq_block_main_dropdown {

				}

				.faq_block_main {
					margin-top: 1.875rem;

				}
			 }

			/*xl	1280px	*/
			@media (min-width: 1280px) {  }
			/*2xl	1536px	*/

			@media (min-width: 1536px) {  }
			</style>
		<div class="faq_block_outer">
			<div class="faq_block_header">
				<div class="faq_block_header_h2_wrap">
					<h2 class="faq_block_header_h2">Choose Your Concentration</h2>
					<svg style="height: 5px; width: 60px;"  fill="#fed000" viewBox="0 0 60 5" xmlns="http://www.w3.org/2000/svg">
					  <rect width="60" height="5" rx="2.5"/>
					</svg>
				</div>
			</div>
			<div class="faq_block_main">
				<div class="faq_block_main_dropdown">
					<button class="faq_block_main_dropdown_button"
						id="drop_down_1"
						type="button"
						aria-expanded="false"
						aria-controls="drop_down_body_1">
					<h4 class="faq_block_main_dropdown_title">General Business</h4>
					<div class="faq_block_main_dropdown_icon rotate_close">
						<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
					</div>
					</button>
					<div class="faq_block_main_dropdown_text " style="display: none;"
						id="drop_down_body_1"
						role="region"
						aria-labelledby="drop_down_1">
						<p>With your general business degree from TXWES, you'll be prepared to take on a career in a number of different industries. Classes like Money & Banking, Principles of Marketing, Sales Management, International Business and more will teach you business principles that will set you up for success after graduation.</p>
						<p>Take classes for professional certifications like Project+, Professional Scrum Master (PSM I) and Lean Six Sigma Green Belt (LSSGB) and you'll really be ahead of the competition.</p>
					</div>
				</div>

				<div class="faq_block_main_dropdown">
					<button class="faq_block_main_dropdown_button"
					id="drop_down_2"
					type="button"
					aria-expanded="false"
					aria-controls="drop_down_body_2">
					<h4 class="faq_block_main_dropdown_title">Management</h4>
					<div class="faq_block_main_dropdown_icon rotate_close" >
						<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
					</div>
					</button>
					<div class="faq_block_main_dropdown_text " style="display: none;"
						id="drop_down_body_1"
						role="region"
						aria-labelledby="drop_down_1">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>

				<div class="faq_block_main_dropdown">
					<button class="faq_block_main_dropdown_button"
						id="drop_down_3"
						type="button"
						aria-expanded="false"
						aria-controls="drop_down_body_3">
				<h4 class="faq_block_main_dropdown_title">Supply Chain Management</h4>
						<div class="faq_block_main_dropdown_icon rotate_close" >
							<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
						</div>
				</button>
					<div class="faq_block_main_dropdown_text " style="display: none;"
						id="drop_down_body_3"
						role="region"
						aria-labelledby="drop_down_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>

				<div class="faq_block_main_dropdown">
					<button class="faq_block_main_dropdown_button"
						id="drop_down_3"
						type="button"
						aria-expanded="false"
						aria-controls="drop_down_body_3">
				<h4 class="faq_block_main_dropdown_title">Supply Chain Management</h4>
						<div class="faq_block_main_dropdown_icon rotate_close" >
							<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
						</div>
				</button>
					<div class="faq_block_main_dropdown_text " style="display: none;"
						id="drop_down_body_3"
						role="region"
						aria-labelledby="drop_down_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>

				<div class="faq_block_main_dropdown">
					<button class="faq_block_main_dropdown_button"
						id="drop_down_3"
						type="button"
						aria-expanded="false"
						aria-controls="drop_down_body_3">
				<h4 class="faq_block_main_dropdown_title">Supply Chain Management</h4>
						<div class="faq_block_main_dropdown_icon rotate_close" >
							<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
						</div>
				</button>
					<div class="faq_block_main_dropdown_text " style="display: none;"
						id="drop_down_body_3"
						role="region"
						aria-labelledby="drop_down_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>

				<div class="faq_block_main_dropdown">
					<button class="faq_block_main_dropdown_button"
						id="drop_down_3"
						type="button"
						aria-expanded="false"
						aria-controls="drop_down_body_3">
				<h4 class="faq_block_main_dropdown_title">Supply Chain Management</h4>
						<div class="faq_block_main_dropdown_icon rotate_close" >
							<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
						</div>
				</button>
					<div class="faq_block_main_dropdown_text " style="display: none;"
						id="drop_down_body_3"
						role="region"
						aria-labelledby="drop_down_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>

				<div class="faq_block_main_dropdown">
					<button class="faq_block_main_dropdown_button"
						id="drop_down_3"
						type="button"
						aria-expanded="false"
						aria-controls="drop_down_body_3">
				<h4 class="faq_block_main_dropdown_title">Supply Chain Management</h4>
						<div class="faq_block_main_dropdown_icon rotate_close" >
							<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
						</div>
				</button>
					<div class="faq_block_main_dropdown_text " style="display: none;"
						id="drop_down_body_3"
						role="region"
						aria-labelledby="drop_down_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>

				<div class="faq_block_main_dropdown">
					<button class="faq_block_main_dropdown_button"
						id="drop_down_3"
						type="button"
						aria-expanded="false"
						aria-controls="drop_down_body_3">
				<h4 class="faq_block_main_dropdown_title">Supply Chain Management</h4>
						<div class="faq_block_main_dropdown_icon rotate_close" >
							<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
						</div>
				</button>
					<div class="faq_block_main_dropdown_text " style="display: none;"
						id="drop_down_body_3"
						role="region"
						aria-labelledby="drop_down_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>

				<div class="faq_block_main_dropdown">
					<button class="faq_block_main_dropdown_button"
						id="drop_down_3"
						type="button"
						aria-expanded="false"
						aria-controls="drop_down_body_3">
				<h4 class="faq_block_main_dropdown_title">Supply Chain Management</h4>
						<div class="faq_block_main_dropdown_icon rotate_close" >
							<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
						</div>
				</button>
					<div class="faq_block_main_dropdown_text " style="display: none;"
						id="drop_down_body_3"
						role="region"
						aria-labelledby="drop_down_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>

				<div class="faq_block_main_dropdown">
					<button class="faq_block_main_dropdown_button"
						id="drop_down_3"
						type="button"
						aria-expanded="false"
						aria-controls="drop_down_body_3">
				<h4 class="faq_block_main_dropdown_title">Supply Chain Management</h4>
						<div class="faq_block_main_dropdown_icon rotate_close" >
							<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
						</div>
				</button>
					<div class="faq_block_main_dropdown_text " style="display: none;"
						id="drop_down_body_3"
						role="region"
						aria-labelledby="drop_down_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>

				<div class="faq_block_main_dropdown">
					<button class="faq_block_main_dropdown_button"
						id="drop_down_3"
						type="button"
						aria-expanded="false"
						aria-controls="drop_down_body_3">
				<h4 class="faq_block_main_dropdown_title">Supply Chain Management</h4>
						<div class="faq_block_main_dropdown_icon rotate_close" >
							<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
						</div>
				</button>
					<div class="faq_block_main_dropdown_text " style="display: none;"
						id="drop_down_body_3"
						role="region"
						aria-labelledby="drop_down_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>

			</div>
		</div>


		</main>
		<footer></footer>
		<script>
				var landing_page_drop_down_05172023 =  (function () {

					 var dropdown_icon = $(".faq_block_main_dropdown_icon");
					 var dropdown_title = $(".faq_block_main_dropdown_title");
					 var dropdown_text = $(".faq_block_main_dropdown_text");
					 var dropdown_button = $(".faq_block_main_dropdown_button");

				 $( document ).ready(function() {
						  //set the click event for button interaction
						  $(".faq_block_main_dropdown").on("click",function(){
							  $(this).find('.faq_block_main_dropdown_icon').trigger("click");

						  })

							   dropdown_button.on("click", function(e){
								   e.stopPropagation();
								   $(this).children().last().trigger("click");
							   })

						   //sets the click event on h4 to toggle the open
							   dropdown_title.on("click", function(e){
								   e.stopPropagation();
								   $(this).next().trigger("click");
							   })

						   //sets  the click event on triangle icon
							   dropdown_icon.on("click", function(e){
								   e.stopPropagation();
								   opened_closed($(this));
							   })

				 });

				 //distributes the click event depending on class
					 function opened_closed(icon){
						 if(icon.hasClass("rotate_close")){
							 handle_open(icon);
						 } else {
							 handle_close(icon);
						 }
					 }

					 //removes .rotate_close class and adds .rotate_open triggering css animation and jquery content show animation changes aria label to true
					 function handle_open(icon){
						 dropdown_icon.addClass("rotate_close")
						 icon.removeClass("rotate_close");
						 icon.addClass("rotate_open");
						 dropdown_text.hide(300);
						 icon.parent().attr("aria-expanded", "true");
						 icon.parent().next().show(300);
						 }

					 //removes .rotate_open class and adds .rotate_close  triggering css animation and jquery content hide animation
					 function handle_close(icon){
						 icon.removeClass("rotate_open");
						 icon.addClass("rotate_close");
						 icon.parent().attr("aria-expanded", "false");
						 icon.parent().next().hide(300);
					 }


				})();

		</script>
	</body>
</html>
