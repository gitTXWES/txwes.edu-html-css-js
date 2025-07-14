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

		<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
		<style>
			*,
			*::before,
			*::after {
				font-family: Arial, Helvetica, sans-serif;
				box-sizing: border-box;
				border-width: 0;
				border-style: solid;
				margin:0;
			}
			a{
				text-decoration: none;
			}
			a:visited{
				color:inherit;
			}
			.breadcrumb_outer{
			 max-width:1320px;
			margin:auto auto;
			display: none;
			}
			.breadcrumb_inner{
				font-size: 1rem;
				color:#454545;
				padding: .5rem;
				display: flex;
				flex-direction: row;
				place-items: center;
				font-family: Arial,Helvetica,sans-serif;
			text-transform: lowercase;
			}
			.breadcrumb_inner>a{
				text-transform: lowercase;
				text-decoration: none;
			}
			.breadcrumb_inner>a:first-child{
			display: contents;
			}

			.breadcrumb_inner>a, 	.breadcrumb_inner>svg, 	.breadcrumb_inner>a>svg{
			margin-right:.5rem;
				color:#03599B;
			}

			.header_top_block {
				flex-direction: row;
				place-content: space-between;
				align-items: center;
				width: 100%;
				height: 90px;
				background-color: #00417A;
				display: none;
				padding: 20px 50px;
			}

			.header_top_block_logo {
				height: 3.125rem;
				width: 13.75rem;
			}

			.header_top_block_phone {
				display: flex;
				flex-direction: row;
				align-items: flex-start;
				padding: .5rem .65rem;
				border: 1px solid #84AAD2;
				border-radius: 0.875rem;
			}

			.header_top_block_phone_icon {
				width: 1.75rem;
				height: 1.25rem;
			}

			.header_top_block_phone_number {
				color: #ffffff;
				font-size: 1rem;
				font-weight: 400;
				line-height: 1.125rem;
				margin-left: .5rem;
			}

			.header_nav_block {
				background: #002460;
				width: 100%;
				padding: 1.25rem;
				display: flex;
				justify-content: space-between;
				align-items: center;
			}

			.header_nav_block_logo {
				height: 3.125rem;
				width: 13.75rem;
			}

			.header_nav_block_mobile_navigation {
				cursor: pointer;
				position: relative;
			}

			.header_nav_block_menu_icon {
				width: 2rem;
				height: 2rem;
				color: #ffffff;
			}

			.icon_open {
				display: block;
			}

			.icon_close {
				display: none;
			}

			.header_nav_block_nav {
				display: none;
				color: #ffffff;
				font-size: 1rem;
				flex-direction: column;
				position: absolute;
				z-index: 40;
				right: 1.25rem;
				padding: 1.5rem;
				background-color: #00417A;
				top: 4.5rem;
				gap: .5rem;
				border-radius: .875rem;
			}

			.header_nav_block_nav li:nth-child(even) {
				display: none;
			}

			.header_nav_block_nav li {
				cursor: pointer;
				padding: .375rem;
				border-radius: .5rem;

			}

			.header_nav_block_nav li:hover,
			.header_nav_block_nav li a:hover {
				background-color: #ffffff;
				color: #00417A;
			}


			.banner_2_outer{
				height:26.5rem;

			}
			.banner_2_inner{
				height: 100%;
				position: relative;
			}
			.banner_2_image{
				background-image:url('https://www.statesman.com/gcdn/presto/2023/03/11/NAAS/67be7772-91d1-4c7e-adf8-931af8054f9d-SXSW_South_by_Southwest_Day_2_SED_003.JPG?crop=2399,1350,x0,y9&width=2399&height=1350&format=pjpg&auto=webp');
				height: 100%;
				background-size:cover ;
				background-position: right bottom;

			}

			.banner_2_headline_transparency{
				background: linear-gradient(0deg, #00417A, #00417A), linear-gradient(274.62deg, #002460 0%, #00417A 98.45%);
				padding: 1.25rem;
				opacity: .75;
				height:5.5rem;
				bottom:0;
				width:100%;
				z-index:10;
				position: absolute;
			}
			.banner_2_headline_wrap{
				padding: 0rem 1.25rem;
				position: absolute;
				bottom:0;
				height:5.5rem;
				z-index:20;
							}

			.banner_2_headline{
				font-family: Oswald, Arial, Helvetica, sans-serif;
				font-style: normal;
				font-weight: 500;
				font-size: 1.25rem;
				line-height: 1.5rem;
				text-transform: uppercase;
				color: #FFFFFF;
				margin-bottom: .5rem;


			}
			.banner_2_subheadline{
				color:#FFFFFF;
				font-size:1rem;

			}

			/* sm	640px  */
			@media (min-width: 640px) {
				.banner_2_outer{}
				.banner_2_inner{}
				.banner_2_headline_wrap{}
				.banner_2_headline{}
				.banner_2_subheadline{}
			 }

			/*md	768px	*/
			@media (min-width: 768px) {
				.breadcrumb_outer{
					display:block;
					width: 100%;
					margin-top:1.25rem;
					margin-left: .125rem;
				}
				.breadcrumb_inner{
					padding:0 3.875rem;
				}

				.header_top_block {
						display: flex;
					}

					.header_nav_block {
						padding: 0rem 0rem;
						display: block;
					}

					.header_nav_block_mobile_navigation,
					.header_nav_block_logo {
						display: none;
					}
				.header_nav_block_nav li:hover, .header_nav_block_nav li a:hover {
						background-color: inherit;
						color: inherit;
					}
					.header_nav_block_nav {
						display: flex;
						flex-direction: row;
						justify-content: center;
						align-items: center;
						gap: 2.5rem;
						height: 2.875rem;
						position: relative;
						right: auto;
						top: auto;
						border-radius: 0rem;
						width: 100%;
						background-color: inherit;
					}

					.header_nav_block_nav li {
						padding: 0rem;
						border-radius: 0rem;
					}

					.header_nav_block_nav li:nth-child(2n) {
						display: inline-block;
					}

					.header_nav_block_phone {
						display: none;
					}

				.banner_2_outer{
					width: 100%;
					margin:2.5rem auto 0;
				}

				.banner_2_inner{
					width: 100%;
					padding:0 3.875rem;

					}
					.banner_2_image{
						border-radius: .875rem;
					}

				.banner_2_headline_transparency{
					width: calc(100% - 124px);
					border-bottom-right-radius: .875rem;
					border-bottom-left-radius: .875rem;
					height:6.5rem;

				}
				.banner_2_headline_wrap{
					border-bottom-right-radius: .875rem;
					border-bottom-left-radius: .875rem;
					height:6.5rem;
				}


				.banner_2_headline{
					font-size:2rem;
					margin-bottom:1rem;
				}
				.banner_2_subheadline{
					font-size:1.125rem;
				}
			  }

			/* lg	1024px	*/
			@media (min-width: 1024px) {
				.banner_2_outer{}
				.banner_2_inner{
					padding:0 5rem;

				}
				.banner_2_headline_wrap{

				}
				.banner_2_headline{

				}
				.banner_2_subheadline{}

				.banner_2_headline_transparency{
					width: calc(100% - 160px);
				}
			 }


			/*xl	1280px	*/
			@media (min-width: 1280px) {
				.banner_2_outer{}
				.banner_2_inner{}
				.banner_2_headline_wrap{}
				.banner_2_headline{}
				.banner_2_subheadline{}
			 }
			/*2xl	1536px	*/

			@media (min-width: 1536px) {
				.banner_2_outer{}
				.banner_2_inner{}
				.banner_2_headline_wrap{}
				.banner_2_headline{}
				.banner_2_subheadline{}
			 }
		</style>
	</head>
	<body>
		<header>
					<div class=" header_top_block">
				<a class="header_top_block_logo" href="#">
					<img class="" src="/designByJoe/images/logo.png" alt="Texas Wesleyan Logo"/>
				</a>
				<a  class="" href="tel:8175874474">
				<div  class=" header_top_block_phone">
						<img class=" header_top_block_phone_icon" src="/designByJoe/images/button_phone_icon 1.png" alt="telephon icon" />
						<span class=" header_top_block_phone_number">Call Us: 817-587-4474</span>
				</div>
				</a>
			</div>
			<div class=" header_nav_block">
				<a class="header_nav_block_logo" href="#">
					<img class="" src="/designByJoe/images/logo.png" alt="Texas Wesleyan Logo"/>
				</a>
			<div class="header_nav_block_mobile_navigation">
				<div class="header_nav_block_menu_icon icon_open">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" >
				  	  <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
				   </svg>
				</div>
				<div class="header_nav_block_menu_icon icon_close">
				   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" >
				   	  <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
				  </svg>
			   </div>
			</div>
				<nav class="header_nav_block_nav">
				<ul style="display: contents;">
					<li><a href="#">About</a></li>
					<li>|</li>
					<li><a href="#">Scholarships</a></li>
					<li>|</li>
					<li><a href="#">Concentrations</a></li>
				</ul>
				<div  class=" header_top_block_phone header_nav_block_phone">
						<img class=" header_top_block_phone_icon" src="/designByJoe/images/button_phone_icon 1.png" alt="telephon icon" />
						<span class=" header_top_block_phone_number">Call Us: 817-587-4474</span>
				</div>
				</nav>
			</div>
			<div class="breadcrumb_outer"><div class="breadcrumb_inner"><a href="https://www.txwes.edu/"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="height:1rem;width:1rem;">
			  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
			</svg></a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="height:1.5rem;width:1.5rem;">   <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18"></path> </svg><a href="https://cms.txwes.edu/terminalfour/preview/13/en/36273">SandBox</a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="height:1.5rem;width:1.5rem;">   <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18"></path> </svg>New President</div></div>
	</header>
		<main style="margin-left: auto; margin-right:auto; width: 100%; padding-bottom: 12rem;">



			<div class="banner_2_outer">
				<div class="banner_2_inner">
					<div class="banner_2_image"></div>
					<div class="banner_2_headline_transparency"></div>
					<div class="banner_2_headline_wrap">
						<h1 class="banner_2_headline">OFFICE OF THE PRESIDENT</h1>
						<p class="banner_2_subheadline">Dwayne Elizondo Mountain Dew Camacho </p>
					</div>
				</div>
			</div>



			<!--     end banner  -->





			</main>

		<script>
			const mobile_nav = $(".header_nav_block_mobile_navigation");
			const open_icon = $(".icon_open");
			const close_icon = $(".icon_close");
			const nav = $(".header_nav_block_nav");

			open_icon.on("click", function(){
				$(this).hide();
				close_icon.show();
				nav.css('display','flex');
			})

			close_icon.on("click", function(){
				$(this).hide();
				nav.hide();
				open_icon.show();
			})
			$(window).resize( function(){
				nav.removeAttr("style");
				open_icon.show();
				close_icon.hide();
			} )

		</script>
	</body>
</html>
