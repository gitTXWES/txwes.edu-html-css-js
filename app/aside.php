<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title> TEMPLATE TITLE </title>

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
	<style>
		.section_nav_outer{
			border-radius: .875rem;
			background-color: #03599B;
			padding: 1.25rem 0;
		}
		.section_nav_inner{
		}
		.section_nav_inner>nav{
			padding-left: 2.5rem;
		}
		.section_nav_inner>nav>a{
			margin: 1.25rem auto;
			font-size: 1rem;
			color:#ffffff;
			width: 100%;
			margin-top:2.5rem;
			display: block;
			font-family: Oswald, Arial, Helvetica, sans-serif;

		}
		.section_nav_inner>nav>a:first-child{
			margin-top:0;
			font-size: 2rem;
			font-family: Oswald, Arial, Helvetica, sans-serif;
		}
	.image_headline_block_wrap{
			width: 100%;
			margin: 1.25rem auto;
		}

		.image_headline_block{
				display: grid;
				gap:1.25rem;
				padding: 0rem 1.25rem;
				max-width:56.25rem;
				grid-template-rows: 1fr 1fr;
				grid-auto-flow: row;
				justify-items: center;
				align-items: center;
				margin: 0 auto;
		}
		.image_block{
			width: 100%;
			max-width: 350px;
		}


		.image_block_image_wrap{
			aspect-ratio: 1/1;
			border-radius: 0.875rem;
			box-shadow: 1px 2px 4px rgba(189, 189, 189, 0.5);


		}
		.image_block_image_wrap >img{
			border-radius: 0.875rem;
			object-fit: cover;
			height: 100%;
			width: 100%;

		}

		.headline_block{
		}

		.headline_block>p{
			margin-bottom: 1.25rem;
			color:454545;
		}
		.headline_block_headline {
				color: #002460;
				font-weight: 500;
				font-family: Oswald, Arial, Helvetica, sans-serif;
				font-size: 1.75rem;
				text-transform: uppercase;
				margin-bottom: 1.25rem;
		}
		.headline_block_headline >svg{
			margin-bottom:1.25rem;
		}
		.headline_block_button_wrap{
			width: 100%;
			margin: 1.25rem auto 0rem;
		}
		.headline_block_button {
			padding: 0.8rem 3.5rem;
			font-size: 1rem;
			color: #1a1a1a;
			text-align: center;
			font-weight: 400;
			border-radius: 3.125rem;
			background-color: #fed000;
			width: fit-content;
			margin: 1.25rem 0rem 0rem 0rem;
			display: block;
			box-shadow: 1px 2px 4px rgba(189, 189, 189, 0.5);

		}
		.headline_block_button:hover {
			filter: brightness(103%);
		}

		/* sm	640px  */
		@media (min-width: 640px) {
			.image_headline_block{
				grid-auto-flow: column;
				grid-template-columns: 1fr 1fr;
				grid-template-rows: auto;
				align-items: start;
				padding:1.25rem 0rem 0rem;
			}@import("lp_bba.css");

			.headline_block_headline {
				font-size: 3rem;
			}
			.image_left{
				grid-column: 1/2;
				justify-self: start;

			}

			.image_right{
				grid-column: 2/3;
				justify-self: end;

			}
		 }

		/*md	768px	*/
		@media (min-width: 768px) {
			.image_headline_block_wrap{
				padding: 3.75rem 3.875rem;
			}
			.image_headline_block{
				gap:2.5rem;
				padding-top:0rem;

			}
		  }

		/* lg	1024px	*/
		@media (min-width: 1024px) {
			.image_headline_block_wrap{

			}
		 }

			</style>
		<main style="margin-left: auto; margin-right:auto; width:100%">
			<div class="grid grid-flow-col h-screen gap-20" style="grid-template-columns: auto 300px;">
			<div id="grid1" class=" h-full">
				<div class="image_headline_block_wrap">
					<div class="image_headline_block">
						<div class="headline_block">
						<h2 class="headline_block_headline">This is the headline</h2>
						<svg style="height: 5px; width: 60px; margin-bottom: 1.25rem;"  fill="#fed000" viewBox="0 0 60 5" xmlns="http://www.w3.org/2000/svg">
						  <rect width="60" height="5" rx="2.5"/>
						</svg>
						<p>Priority applications due: May 15
							Application deadline: Aug. 1</p>

							<p>	Make your career a priority and apply before
							our May 15 deadline. You'll have the opportunity to be part of our first round of interviews and have the best chance at securing your seat in
							our program.</p>
							<div class="headline_block_button_wrap">
							<a href="#" class="headline_block_button" >Sign Me Up </a>
							</div>
						</div>

						<div class="image_block image_left">
							<div class="image_block_image_wrap">
								<img src="images/AACSB-logo-landingPage 1.png">
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="w-full bg-blue-50 h-full col-start-2 col-end-3">
				<div class="section_nav_outer">
					<div class="section_nav_inner">
						<nav>
							<a href="#">SandBox</a>
							<a href="#">subsection</a>
							<a href="#">subsection</a>
							<a href="#">subsection</a>
						</nav>
					</div>
				</div>
			</div>
			</div>



		</main>
		<footer></footer>
		<script></script>
	</body>
</html>
