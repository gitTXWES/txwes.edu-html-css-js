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
			*{
				font-family: Arial, Helvetica, sans-serif;
				box-sizing: border-box;
				border-width: 0;
				border-style:solid;
			}

			.header_top_block{
				display: flex;
				flex-direction: row;
				justify-content: space-beeen;
				align-items: center;
				padding: 20px 350px;
				width: 100%;
				height: 90px;
				background-color: #004B8D;
			}
			.header_top_block_logo{
				height: 3.125rem;
				width:13.75rem;
			}
			.header_top_block_phone{
				display: flex;
				flex-direction: row;
				align-items: flex-start;
				padding: .5rem .65rem;
				border: 1px solid #5C8AB9;
				border-radius: 10px;

			}
			.header_top_block_phone_icon{
				width: 1.75rem;
				height: 1.25rem;
			}
			.header_top_block_phone_number{
				color:#ffffff;
				font-size: 1rem;
				font-weight: 400;
				line-height: 1.125rem;
				margin-left: .5rem;
			}
			.header_nav_block{
				background:  #002460;
				width: 100%;
							padding: 1rem auto;
			}
			.header_nav_block_nav{
				color: #ffffff;
				font-size: 1rem;
				display: flex;
				flex-direction: row;
				justify-content: center;
				align-items: center;
				gap: 2.5rem;
				height: 2.875rem;
			}
			.banner{
				background-image: url( "designByJoe/images/OBBA_LP_banner_desktop-1 1.png");
				height: 37.5rem;
				position: relative;
				display: flex;
			}
			.banner_filter{
				position: absolute;
				z-index:10;
				width: 100%;
				height: 37.5rem;
				background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%);
			}
			.banner_title_outer{
				position: absolute;
				z-index: 20;
				left: 21.75rem;
				bottom:3.125rem;
				color:#ffffff;
			}
			.banner_title{
				font-weight: 500;
				font-family: Oswald, Arial, sans-serif;
				font-size: 3rem;
				text-transform: uppercase;
				padding-bottom: 1.25rem;
			}
			.banner_title_sub{
				font-weight: 400;
				font-size: 1.5rem;
			}
			.banner_imbed_outer{
				position: absolute;
				z-index: 30;
				right:21.875rem;
				place-self: center;
			}
			.program_text{
				text-align: center;
				margin-top:6.25rem;
				font-weight: 400;
			}
			.program_text_title{
				color: #002460;
				font-weight: 500;
				font-family: Oswald, Arial, Helvetica, sans-serif;
				font-size: 3rem;
				text-transform: uppercase;
				margin-bottom: 1.25rem;

			}
			.program_text_body{
				color:#1a1a1a;
				font-size: 1rem;
				line-height: 1.5rem;
				opacity: .7;
			}
			.cards_block{
				margin-top: 2.5rem;
				display: grid;
				row-gap: 3.75rem;
				grid-template-columns: 350px 350px;
				place-content: center;
			}
			.card{
				display: flex;
				flex-direction: column;
				flex-wrap: nowrap;
				place-items: center;
			}
			.card_icon{
				display: flex;
				height: 6.25rem;
				width:6.25rem;
				background: linear-gradient(274.62deg, #0072BC 0%, #5C8AB9 98.45%), linear-gradient(274.62deg, #002460 0%, #0072BC 98.45%);
				border-radius: 15px;
				margin-bottom: 1.25rem;
			}
			.card_heading{
				font-family: Oswald, Arial, sans-serif;
				font-weight: 400;
				font-size: 1.5rem;
				color:#004B8D;
				text-transform: uppercase;

			}
			.card_heading_sub{
				font-family: Arial, Helvetica, sans-serif;
				font-weight: 400;
				font-size: 1rem;
				color: #1A1A1A;
				opacity: .7;
				margin-top:.25rem;
			}


		</style>

	</head>
	<body>
		<header>
			<div class="p-8 text-lime-600 absolute">
			<span class="sm:hidden">xs</span>
			<span class="hidden sm:block md:hidden">sm</span>
			<span class="hidden md:block lg:hidden">md</span>
			<span class="hidden lg:block xl:hidden">lg</span>
			<span class="hidden xl:block 2xl:hidden">xl</span>
			<span class="hidden 2xl:block">2xl</span>
		</div>
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
				<nav class="header_nav_block_nav">
				<ul style="display: contents;">
					<li><a href="#">About the Program</a></li>
					<li>|</li>
					<li><a href="#">Open House</a></li>
					<li>|</li>
					<li><a href="#">Online Classes</a></li>
					<li>|</li>
					<li><a href="#">Important Dates</a></li>
					<li>|</li>
					<li><a href="#">CCNE Accredited</a></li>
				</ul>
				</nav>
			</div>
			<div class=" banner ">
				<div class=" banner_filter"></div>
				<div class=" banner_title_outer">
					<h1 class=" banner_title">GET YOUR BUSINESS DEGREE 100% ONLINE</h1>
					<h2 class=" banner_title_sub">Scholarships up to $22,000 per year</h2>
				</div>
				<div class=" banner_imbed_outer">
					<img class="" src="/designByJoe/images/Form.png"
				</div>

			</div>

	</header>
		<main style="margin-left: auto; margin-right:auto; max-width:900px">
			<div class=" program_text">
				<h1 class=" program_text_title">A holistic DNP program</h1>
				<p class=" program_text_body">Our post-master's DNP program isn’t like others you’ve seen. We focus on developing advanced practice nurses who provide holistic and relationship-centered patient care. Our graduates are prepared to bring integrative approaches to practice as healthcare providers, nurse coaches, educators and leaders in their fields.</p>
			</div>
		    <div class= " cards_block">
				<div class="card">
					<div class="card_icon">
						<img src="/designByJoe/images/HOLISTIC APPROACH.png" alt="hands holding a heart">
					</div>
					<h3 class="card_heading">HOLISTIC APPROACH</h3>
					<i class="card_heading_sub">Learn to treat the whole patient.</i>
				</div>

				<div class="card">
					<div class="card_icon">
						<img src="/designByJoe/images/SELF-CARE.png" alt="person and ekg">
					</div>
					<h3 class="card_heading">Self-Care</h3>
					<i class="card_heading_sub">Learn self-care to prevent burnout.</i>
				</div>

				<div class="card">
					<div class="card_icon">
						<img src="/designByJoe/images/BUSINESS LITERACY.png" alt="briefcase icon">
					</div>
					<h3 class="card_heading">BUSINESS LITERACY</h3>
					<i class="card_heading_sub">Learn to run your own primary-care practice.</i>
				</div>

				<div class="card">
					<div class="card_icon">
						<img src="/designByJoe/images/NURSE COACHING.png" alt="hands holding a heart">
					</div>
					<h3 class="card_heading">NURSE COACHING</h3>
					<i class="card_heading_sub">Master techniques to care for your patients.</i>
				</div>

			</div>


		</main>
		<footer></footer>
	</body>
</html>
