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
		<link rel="stylesheet" type="text/css" href="/designByJoe/css/lp_bba.css" />
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
			#scholarshipcongrats {
				display: none;
				text-align: center;
				margin:auto;
				background: #00417A;
				border-radius: 10px;
				padding: 1.25rem;
			}

			#scholarshipcongrats h3 {
				font-family: 'Oswald';
				color: #ffffff;
				text-transform: uppercase;
				letter-spacing: 2px;
				font-size: 1.5rem;
			}
			#scholarshipcongrats p {
				font-size: 1rem;
				color:#ffffff;
				margin-bottom: 1.25rem;

			}

			#scholarshipcongrats img {
				width: 80%;
				margin: 0 auto 1.25rem;
			}
			#scholarshipcongrats em{
				font-size: .75rem;
			}

			#scholarshipcongrats button {
				background-color: #fed000;
				border: none;
				color:  #002460;
				font-size: 1em;
				cursor: pointer;
				padding: 12px 18px;
				border-radius: 10px;
				margin-bottom: 1.25rem;
			}

			#scholarshiptransition {
				display: flex;
				width: 0%;
				align-items: center;
				justify-content: space-around;
				height: 100%;
				background-color: #c4e4f7;
				color: #ffffff;
				font-family: 'Oswald';
				font-size: 2.5em;
				text-transform: uppercase;
				letter-spacing: 2px;
				line-height: 100%;
				text-align: center;
				overflow: hidden;
				white-space: nowrap;
				position: absolute;
				top: 0px;
			}
		</style>
	</head>
	<body>
		<header>
		<div class="p-8 text-lime-600 fixed stroke-1 z-50">
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
			<div class="banner" style="display:none">
				<div class=" banner_filter"></div>
				<div class=" banner_title_outer">
					<h1 class=" banner_title">GET YOUR BUSINESS DEGREE 100% ONLINE</h1>
					<h3 class=" banner_title_sub">Scholarships up to $22,000 per year</h2>
				</div>
				<div class=" banner_imbed_outer">
					<img class="" src="/designByJoe/images/Form.png" />
				</div>
			</div>
	</header>
		<main style="margin-left: auto; margin-right:auto; width: 100%;">
			<!--     banner  -->
			<style>
				.banner_2_outer{
					height:26.5rem;

				}
				.banner_2_inner{
					height: 100%;
					position: relative;
				}
				.banner_2_image{
					background-image:url('images/banner.png');
					height: 100%;
					background-size:cover ;
					background-position: center;
				}

				.banner_2_headline_transparency{
					background: linear-gradient(0deg, #00417A, #00417A), linear-gradient(274.62deg, #002460 0%, #00417A 98.45%);
					padding: 1.25rem;
					opacity: 1;
					height:7.5rem;
					bottom:0;
					width:100%;
					z-index:10;
					position: absolute;
				}
				.banner_2_headline_wrap{
					padding: 1.25rem;
					position: absolute;
					bottom:0;
					height:7.5rem;
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
					.banner_2_outer{
						width: 100%;
						margin:1.25rem auto 0;
					}
					.banner_2_headline_transparency{
						opacity: .75;
					}
					.banner_2_headline_wrap{}
					.banner_2_headline{}
					.banner_2_subheadline{}
				  }

				/* lg	1024px	*/
				@media (min-width: 1024px) {
					.banner_2_outer{}
					.banner_2_inner{}
					.banner_2_headline_wrap{}
					.banner_2_headline{}
					.banner_2_subheadline{}
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

			<div class="banner_2_outer">
				<div class="banner_2_inner">
					<div class="banner_2_image"></div>
					<div class="banner_2_headline_transparency"></div>
					<div class="banner_2_headline_wrap">
						<h1 class="banner_2_headline">GET YOUR TEACHING CERTIFICATE AND MASTER'S DEGREE IN 2 YEARS</h1>
						<p class="banner_2_subheadline">For less than $6,500</p>
					</div>
				</div>
			</div>

	<!--
			<div style="position:relative; height: 460px;">
			<div style="width:100%; padding:0 1.25rem; ">
				<div style="position: relative;box-shadow: 1px 2px 4px rgba(189, 189, 189, 0.5);">
				<div id="form_c06410b5-6717-417a-ab61-b20214dac23a">Loading...</div><script>/*<![CDATA[*/var script = document.createElement('script'); script.async = 1; script.src = 'https://apply.txwes.edu/register/?id=c06410b5-6717-417a-ab61-b20214dac23a&output=embed&div=form_c06410b5-6717-417a-ab61-b20214dac23a' + ((location.search.length > 1) ? '&' + location.search.substring(1) : ''); var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(script, s);/*]]>*/</script>
				</div>
			</div>
			</div> -->

			<!--     end banner  -->



			<div class=" program_text">
				<h2 class=" program_text_title">100% Online. 100% Convenient. 100% Smaller. Smarter.</h2>
				<p class=" program_text_body">Our 100% online Bachelor's in Business Administration is designed to help you launch your career faster. With accelerated classes, you can get your bachelor's degree in as little as 3 years — or, if you already have college credits, you can finish your degree in as little as 15 months! Plus, with our big scholarships, you'll be able to get your degree without breaking the bank.
				</p>
			<p class=" program_text_body">
					You can pick the focus that matches your career goals, whether that's general business, management or supply chain. Plus, you can get professional certifications that will really make your resume stand out to future employers..
				</p>
			</div>
		    <div class= " cards_block">
				<div class="card">
					<div class="card_icon">
						<img src="/designByJoe/images/icon.png" alt="hands holding a heart">
					</div>
					<h3 class="card_heading">BIG SCHOLARSHIPS</h3>
					<i class="card_heading_sub">Merit scholarships ranging from
						$16,000–$22,000.</i>
				</div>

				<div class="card">
					<div class="card_icon">
						<img src="/designByJoe/images/icon-1.png" alt="person and ekg">
					</div>
					<h3 class="card_heading">CAREER PREPARATION</h3>
					<i class="card_heading_sub">3 concentrations and certifications
						to boost your career.</i>
				</div>

				<div class="card">
					<div class="card_icon">
						<img src="/designByJoe/images/icon-2.png" alt="briefcase icon">
					</div>
					<h3 class="card_heading">ACCELERATED CLASSES</h3>
					<i class="card_heading_sub">Finish faster with accelerated classes
						and 6 starts per year.</i>
				</div>

				<div class="card">
					<div class="card_icon">
						<img src="/designByJoe/images/icon-3.png" alt="hands holding a heart">
					</div>
					<h3 class="card_heading">ENGAGING EDUCATORS</h3>
					<i class="card_heading_sub">You'll still get expert instruction and
						one-on-one attention.</i>
				</div>
			</div>
			<div class="cta_block_blue">
				<div class="cta_block_blue_header">
					<div class="cta_block_blue_h2_wrap">
						<h2 class="cta_block_blue_h2">Your scholarship is waiting</h2>
						<svg style="height: 5px; width: 60px;"  fill="#fed000" viewBox="0 0 60 5" xmlns="http://www.w3.org/2000/svg">
						  <rect width="60" height="5" rx="2.5"/>
						</svg>
					</div>
					<p class="cta_block_blue_text">Don’t let the cost of tuition keep you from getting your bachelor's degree. We're a small school with big merit scholarships. We’re talking up to $22,000 per year for freshman and $20,000 per year for transfer students. Better yet, you'll get the same amount every year that you remain eligible. See how much you qualify for below.</p>
				</div>
				<div class="cta_block_blue_body">
					<div class="cta_block_blue_body_img_wrap">
						<img src="/designByJoe/images/scholarship_illustration 1.png" alt="people joyously celebrating their scholoarships" />
				    </div>
				<div class="cta_block_blue_form_wrap">
					<h2 class="cta_block_blue_form_heading">SEE YOUR BIG SCHOLARSHIP!</h2>
					<form onsubmit="return false;">
					<div class="cta_block_blue_form_inner">
						<label class="cta_block_blue_form_label" for="student_type">What type of Student are you?</label>
						<div class="cta_block_blue_form_select_wrap">
						<select id="student_type" class="cta_block_blue_form_select" onchange="setScholarshipGPAs()">
							<option value="" selected>Select one</option>
							<option value="0">Freshman</option>
							<option value="1">Early College or Dual Enrollment</option>
							<option value="2">Transfer</option>
						</select>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-[.875rem] h-[.875rem]">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
						</svg>

						</div>
						<label class="cta_block_blue_form_label" for="student_gpa">Your GPA</label>
						<div class="cta_block_blue_form_select_wrap">
						<select id="student_gpa" class="cta_block_blue_form_select" disabled></select>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-[.875rem] h-[.875rem]">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
						</svg>
						</div>
						<button class="cta_block_blue_form_button" onclick="scholarshipTransition()">Get My Estimate</button>
					</div>
				</form>
				</div>

				<div id="scholarshipcongrats">
						<img src="/designByJoe/images/congrats_illustration.png">
						<h3>Your yearly estimated scholarship is <span id="scholarshipamount"></span>*</h3>
						<p>Submit your info to find out how you can add up to an extra $3,000 to your scholarship per year.</p>
						<button>Send Me Info</button>
						<p style="font-size:0.7em;"><em>*This estimate is based on your self-reported information. Official
							scholarship awards will be determined after you submit your application and supporting documents.</em>
						</p>
					</div>
					<div id="scholarshiptransition">
						<div>Calculating...</div>
					</div>
				</div>
			</div>
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
		<!--     new contentt block  -->

		<style>
			.headline_body_left_right_outer{
				width: 100%;
				 margin: 1.25rem auto 0rem;
				 background: transparent;
				 padding: 0 1.25rem;
			}

			.headline_body_left_right_inner{
				display: grid;
				grid-auto-flow: row;
				max-width:56.25rem;
				gap:1.25rem;
				margin:0 auto 0;
			}

			.headline_body_left_right_headline_wrap{
				max-width: 18.5rem;
			}



			.headline_body_right{}

			.headline_body_headline{
				color: #002460;
				font-weight: 500;
				font-family: Oswald, Arial, Helvetica, sans-serif;
				font-size: 1.75rem;
				text-transform: uppercase;
				margin-bottom: 1.25rem;
				line-height: 58px;
			}

			.headline_body_left_right_body_wrap{}

			.headline_body_left_right_body_wrap>p, .headline_body_left_right_body_wrap>span{
				color: #454545;
				font-weight: 400;
				font-family:  Arial, Helvetica, sans-serif;
				font-size: 1rem;
				margin-bottom: 1.25rem;
				text-indent: 1.5rem;
			}
			.headline_body_left_right_body_wrap>p:last-child{
				margin-bottom:0rem;
			}
			/* sm	640px  */
			@media (min-width: 640px) {
			.headline_body_headline{
				font-size:3rem;
			}
			.headline_body_left_right_outer{
				margin:2.5rem auto 0rem;

			}

			 }

			/*md	768px	*/
			@media (min-width: 768px) {
				.headline_body_left_right_outer{
									 margin:5rem auto 0rem;
				 }
				.headline_body_left_right_inner{
					grid-auto-flow:column;
/* 					grid-template-columns: 1fr 1fr 1fr; */
					gap:6.25rem;
				}

				.headline_body_h__left{
/* 					//grid-column: 1/2; */
				}
				.headline_body_b__right{
/* 					grid-column: 2/4; */
				}

			 }

			/* lg	1024px	*/
			@media (min-width: 1024px) {
				.headline_body_left_right_outer{
					 margin:6.25rem auto 0rem;

				 }

			}

			/*xl	1280px	*/
			@media (min-width: 1280px) {  }
			/*2xl	1536px	*/

			@media (min-width: 1536px) {  }
		</style>
		<div class="headline_body_left_right_outer">
			<div class="headline_body_left_right_inner">
				<div class="headline_body_left_right_headline_wrap  headline_body_h__left">
					<h2 class="headline_body_headline">Want to go straight from a bachelor's
						to DNP?</h2>
					<svg style="height: 5px; width: 60px;" fill="#fed000" viewBox="0 0 60 5" xmlns="http://www.w3.org/2000/svg">
					  <rect width="60" height="5" rx="2.5"/>
					</svg>
				</div>
				<div class="headline_body_left_right_body_wrap headline_body_b__right">
<p>				We have a degree for that, too! Go straight from your bachelor's degree to a Doctor of Nursing Practice - Family Nurse Practitioner. With a terminal degree in nursing, you'll be a leader in your field and prepared to bring integrative approaches to practice as a healthcare provider, nurse coach and educator.
	<br>
	In as little as three years, you'll complete 86 credit hours online and 1,035 clinical hours wherever you are. Want to learn more?
	Just provide your contact information and one of our admissions counselors will be in touch.
</p>				</div>
			</div>
		</div>

		<!--     new content block  -->
		<div class="headline_body_centered_outer">
			<div class="headline_body_centered_inner">
			<div class="headline_body_centered_headline_wrap">
				<h2 class="headline_body_centered_headline">This is Catchy</h2>
				<svg style="height: 5px; width: 60px;"  fill="#fed000" viewBox="0 0 60 5" xmlns="http://www.w3.org/2000/svg">
				  <rect width="60" height="5" rx="2.5"/>
				</svg>
			</div>
				<div class="headline_body_centered_body_wrap">
					<p class="headline_body_centered_body">We know you’ve already put in the work to pass your licensure exam, so we don’t want you to take valuable time away from your clients to study for yet another test. Our program does not require you to take the GRE, just that you have your full, associate or intern license in Marriage and Family Therapy, Professional Counseling or Social Work.</p>
				</div>
			</div>
		</div>

			<div class="info_block_lightblue">
				<div class="info_block_header">
					<div class="info_block_header_h2_wrap">
						<h2 class="info_block_header_h2">Choose Your Concentration</h2>
						<svg style="height: 5px; width: 60px;"  fill="#fed000" viewBox="0 0 60 5" xmlns="http://www.w3.org/2000/svg">
						  <rect width="60" height="5" rx="2.5"/>
						</svg>
					</div>
					<div class="info_block_header_body_wrap">
						<p class="info_block_header_body">Our 100% online concentrations give you the skills you need to launch a successful career in any business field.</p>
					</div>
				</div>
				<div class="info_block_main">
					<div class="info_block_main_dropdown">
						<button class="info_block_main_dropdown_button"
							id="drop_down_1"
							type="button"
							aria-expanded="false"
							aria-controls="drop_down_body_1">
						<h4 class="info_block_main_dropdown_title">General Business</h4>
						<div class="info_block_main_dropdown_icon rotate_close">
							<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
						</div>
						</button>
						<div class="info_block_main_dropdown_text " style="display: none;"
							id="drop_down_body_1"
						    role="region"
						    aria-labelledby="drop_down_1">
							<p>With your general business degree from TXWES, you'll be prepared to take on a career in a number of different industries. Classes like Money & Banking, Principles of Marketing, Sales Management, International Business and more will teach you business principles that will set you up for success after graduation.</p>
							<p>Take classes for professional certifications like Project+, Professional Scrum Master (PSM I) and Lean Six Sigma Green Belt (LSSGB) and you'll really be ahead of the competition.</p>
						</div>
					</div>

					<div class="info_block_main_dropdown">
						<button class="info_block_main_dropdown_button"
						id="drop_down_2"
						type="button"
						aria-expanded="false"
						aria-controls="drop_down_body_2">
						<h4 class="info_block_main_dropdown_title">Management</h4>
						<div class="info_block_main_dropdown_icon rotate_close" >
							<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
						</div>
						</button>
						<div class="info_block_main_dropdown_text " style="display: none;"
							id="drop_down_body_2"
						    role="region"
						    aria-labelledby="drop_down_2">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>

					<div class="info_block_main_dropdown">
						<button class="info_block_main_dropdown_button"
							id="drop_down_3"
							type="button"
							aria-expanded="false"
							aria-controls="drop_down_body_3">
					<h4 class="info_block_main_dropdown_title">Supply Chain Management</h4>
							<div class="info_block_main_dropdown_icon rotate_close" >
								<svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
							</div>
					</button>
						<div class="info_block_main_dropdown_text " style="display: none;"
							id="drop_down_body_3"
							role="region"
							aria-labelledby="drop_down_3">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>

				</div>
			</div>
			<div class="cta_block_bottom">
				<div class="cta_block_bottom_text_wrap">
					<h2 class="cta_block_bottom_text_title">Are you ready for
						the next step? </h2>
					<p class="cta_block_bottom_text_body">Give us your contact info and a few other details today, and we’ll send you your 100% online bachelor's in business degree plan.</p>

					<a class="" href="#"><div class="cta_block_bottom_text_link"> Send degree plan</div></a>
				</div>
				<div class="cta_block_bottom_img_wrap">
					<img src="images/HappyPointingNurse.png" alt="smiling nurse pointing encouragingly at title" />
				</div>

			</div>
			<div class="accreditation_block">
				<div class="accreditation_block_img_wrap">
					<img src="/designByJoe/images/AACSB-logo-landingPage 1.png" alt="certificate image" />
				</div>
				<p class="accreditation_block_text">AACSB Accreditation represents the highest standard of achievement for business schools worldwide. Learn more on our website.</p>
			</div>
			</main>
		<footer class="lp_footer">
			<div class="lp_footer_logo_block">
				<div class="lp_footer_logo_block_img"><img src="/designByJoe/images/logo.png" alt="Texas Wesleyan Logo" /></div>
				<h3 class="lp_footer_logo_block_tag">Smaller. Smarter.</h3>
			</div>
			<div class="lp_footer_contact_block">
				<h5>Contact info</h5>
				<div class="lp_footer_contact_phone">
					<a href="tel:817-531-4444" style="display:contents;">
					<div class="lp_footer_contact_icon_wrap">
						<img src="/designByJoe/images/phone.png" alt="white telephone icon" />
					</div>
					<span class="lp_footer_phone_text">817-531-4444</span>
					</a>
			   </div>
				<div class="lp_footer_contact_address">
						<div class="lp_footer_contact_icon_wrap">
							<img src="/designByJoe/images/location.png" alt="white location icon" />
						</div>
						<span class="lp_footer_address_text">1201 Wesleyan Street<br class="footer_br"> Fort Worth, TX 76105</span>
			   </div>
			</div>
			<div class="lp_footer_legal_block">
				<a href="https:\\txwes.edu">&copy Texas Wesleyan University</a>
				<span>|</span>
				<a href="https://txwes.edu/admissions/what-will-it-cost/fees-costs-and-policies/university-policies/privacy-policy/">Privacy Policy</a>
			</div>
		</footer>
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
	<script>
		var landing_page_drop_down_05172023 =  (function () {

			 var dropdown_icon = $(".info_block_main_dropdown_icon");
			 var dropdown_title = $(".info_block_main_dropdown_title");
			 var dropdown_text = $(".info_block_main_dropdown_text");
			 var dropdown_button = $(".info_block_main_dropdown_button");

		 $( document ).ready(function() {
		  		//set the click event for button interaction
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
		<script>
		var scholarship05122023 =  (function () {
			var scholarships = [
					[   // High School GPA
						{
							"gpa": "3.95 or Higher",
							"amount": "$22,000"
						},
						{
							"gpa": "3.50 - 3.94",
							"amount": "$21,000"
						},
						{
							"gpa": "3.00 - 3.49",
							"amount": "$19,000"
						},
						{
							"gpa": "2.75 - 2.99",
							"amount": "$17,000 - $18,000"
						},
						{
							"gpa": "Under 2.75",
							"amount": "$16,000 - $17,000"
						}
					],
					[   // College GPA
						{
							"gpa": "3.75 or Higher",
							"amount": "$22,000"
						},
						{
							"gpa": "3.5 - 3.74",
							"amount": "$21,000"
						},
						{
							"gpa": "3.0 - 3.49",
							"amount": "$19,000"
						},
						{
							"gpa": "2.75 - 2.99",
							"amount": "$17,000 - $18,000"
						},
						{
							"gpa": "2.0 - 2.74",
							"amount": "$16,000 - $17,000"
						}
					],
					[   // Transfer GPA
						{
							"gpa": "3.5 or Higher",
							"amount": "$20,000"
						},
						{
							"gpa": "3.00 - 3.49",
							"amount": "$19,000"
						},
						{
							"gpa": "2.50 - 2.99",
							"amount": "$17,000 - $18,000"
						},
						{
							"gpa": "Under 2.50",
							"amount": "$16,000 - $17,000"
						}
					]
				];
			//Sets the appropriate Values for gpa and scholarship awards based on Student Type
				function setScholarshipGPAs() {
					var level = $('#student_type').val();
					$("#student_gpa").empty();
					$("#student_gpa").removeAttr('disabled');
					for (var x = 0; x < scholarships[level].length; x++) {
						$("#student_gpa").append('<option value="' + x + '">' + scholarships[level][x].gpa + '</option>')
					}
					getScholarship();
				}
			//returns an array of objects to get the amount of money awarded
				function getScholarship() {
					var level = $('#student_type').val();
					var gpa = $('#student_gpa').val();
					return scholarships[level][gpa];

				}
				//Sets the ammount of money inside Award Graphic
				function setScholarshipText() {
					$('#scholarshipamount').html(getScholarship().amount);
				}
			//the control for the Animation of the award
				function scholarshipTransition() {
					setScholarshipText();
					$('#scholarshiptransition').css({
						'width': '0%',
						'right': '0px'
					});
					$('.cta_block_blue_body').css('height', $('#scholarshipform').outerHeight() + 'px');
					$('#scholarshiptransition').animate({
						'width': '100%'
					}, {
						duration: 500,
						easing: "swing",
						complete: function () {
							$('#scholarshiptransition').css({
								'right': '',
								'left': '0px'
							});
							$('#scholarshipcongrats').css({'position': 'absolute', 'top': '0px', 'left': '0px'});
							$('#scholarshipcongrats').show();
							$('.cta_block_blue_body').animate({
								'height': $('#scholarshipcongrats').outerHeight() + 'px'
							}, {
								duration: 500,
								easing: "swing",
								complete: function () {
									console.log($(".cta_block_blue_form_wrap"));

									$('#scholarshipcongrats').css({'position': '', 'top': '', 'left': ''});
									$(".cta_block_blue_form_wrap, .cta_block_blue_body_img_wrap").hide();
									$('cta_block_blue_body').css({'height': ''})
								}
							});
							window.setTimeout(function () {
								$('#scholarshiptransition').animate({
									'width': '0%'
								}, {
									duration: 500,
									easing: "swing",
									complete: function () {
										$('#scholarshiptransition').css("display", "none");
										$('cta_block_blue_body').css({'height': ''});
									}
								})
							}, 2000);
						}
					});
				}
			})();

		</script>
	</body>
</html>
