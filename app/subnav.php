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
	.rotate_open{
		animation: rotate_open .3s forwards linear;
	}

	.rotate_close{
		animation: rotate_close .3s forwards linear;
	}
	@keyframes rotate_open{
		from {
			transform: rotate(0deg);
		  }
		  to {
			transform: rotate(90deg);
		  }

	}

	@keyframes rotate_close{
		from {
			transform: rotate(90deg);
		  }
		  to {
			transform: rotate(0deg);
		  }

	}
	.sub_naviagtion_outer{
/* 		background-color: #FBFBFB; */

	}



	.sub_naviagtion_main {
		width: 100%;
		display: flex;
		flex-direction: column;
		font-family: Arial, Helvetica, sans-serif;
		background-color: #FBFBFB;

	}

	.sub_naviagtion_main_dropdown {
		width: 100%;
		display: inline-grid;
		grid-template-columns: auto auto;
/* 		background-color: #FBFBFB; */
		border-radius: .625rem;
	}

	.sub_naviagtion_main_dropdown > button {
			display: inline-grid;
			place-content: space-between;
			grid-auto-flow: column;
			width: 100%;
			grid-column-start: 1;
			grid-column-end: 3;
			padding:.875rem 1.5rem;
	}

	.sub_naviagtion_main_dropdown > button:hover {
	filter: brightness(125%);
	}

	.sub_naviagtion_main_dropdown:last-child {
		margin-bottom: 0rem;
	}

	.sub_naviagtion_main_dropdown_icon {
		width: .875rem;
		height: .875rem;
		justify-self: end;
		align-self: center;
		cursor: pointer;
		color: #454545;

	}

	.sub_naviagtion_main_dropdown_title {
		color: #454545;
		font-size: .875rem;
		align-self: center;
		cursor:pointer;
		display:inline-grid;
		grid-auto-flow: column;
		justify-content: left;
		align-items: center;
		gap:.875rem;
	}
	.sub_naviagtion_main_dropdown_title:hover > a{
		color:#03599B;
	}
	.sub_naviagtion_main_dropdown_title svg{
		height: 14px;
		width: 14px;
	}
	.sub_naviagtion_main_dropdown_text {
		background-color: #ffffff;
		padding: 1.25rem  1.5rem;
		grid-column:1 / 3;

	}
	.sub_naviagtion_main_dropdown_text>nav>ul>li{
		padding:.625rem 1.25rem;
	}

	.sub_naviagtion_main_dropdown_text>nav>ul>li:hover > .sub_nav_link,
	.sub_naviagtion_main_dropdown_text>nav>ul>li:hover ,
	.sub_nav_link:hover {
		background-color: #fbfbfb;
		color:#03599B;
		border-radius: 6px;
	}

	.sub_nav_link {
		display: block;
		width: 100%;
		color: #454545;
		font-size: .875rem;
		font-family: Arial, Helvetica, sans-serif;
	}

	/* sm	640px  */
	@media (min-width: 640px) {  }

	/*md	768px	*/
	@media (min-width: 768px) {

			.sub_naviagtion_main {
			margin-top: 1.875rem;
		}

		.sub_naviagtion_main_dropdown {
			width: auto;
		}
	  }

	/* lg	1024px	*/
	@media (min-width: 1024px) {


		.sub_naviagtion_main_dropdown {

		}

		.sub_naviagtion_main {
			margin-top: 1.875rem;

		}
	 }

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


		 <div class="sub_naviagtion_main">
		 <div class="sub_naviagtion_main_dropdown">
			 <button class="sub_naviagtion_main_dropdown_button"
				 id="drop_down_1"
				 type="button"
				 aria-expanded="false"
				 aria-controls="drop_down_body_1">
			 <div class="sub_naviagtion_main_dropdown_title">
				<a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" >
					  <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
					  <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
					</svg>
</a> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" >
  <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
</svg>
<h4>Admissions</h4>
			</div>
			 <div class="sub_naviagtion_main_dropdown_icon rotate_close">
				 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
				   <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
				 </svg>
			 </div>
			 </button>
			 <div class="sub_naviagtion_main_dropdown_text " style="display: none;">
				 <p>Also in Admissions & Aid</p>
				 <nav>
				<ul>
					<li><a href="#" class="sub_nav_link">Undergraduate Majors</a></li>
					<li> <a href="#" class="sub_nav_link">Online Programs</a></li>
					<li><a href="#" class="sub_nav_link">Graduate Programs</a></li>
					<li><a href="#" class="sub_nav_link">Dual-Degree Programs</a></li>
					<li><a href="#" class="sub_nav_link">Special Programs</a></li>
					<li><a href="#" class="sub_nav_link">Registrar</a></li>
					<li><a href="#" class="sub_nav_link">Office of the Provost</a></li>
					<li><a href="#" class="sub_nav_link">Student Resources</a></li>
				</ul>
				 </nav>
			 </div>
		 </div>
		 </div>




	  </main>
	  <footer></footer>
	  <script>
			var arrowed_drop_down_012524 =  (function () {

				 var dropdown_icon = $(".sub_naviagtion_main_dropdown_icon");
				 var dropdown_title = $(".sub_naviagtion_main_dropdown_title");
				 var dropdown_text = $(".sub_naviagtion_main_dropdown_text");
				 var dropdown_button = $(".sub_naviagtion_main_dropdown_button");

			 $( document ).ready(function() {
					  //set the click event for button interaction
					  $(".sub_naviagtion_main_dropdown").on("click",function(){
						  $(this).find('.sub_naviagtion_main_dropdown_icon').trigger("click");

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
