<?php
$location = "<p>Omni Hotel Fort Worth<br />1300 Houston St.<br />Fort Worth, TX 76102</p>";
$formatted_location =str_replace("<br />", "&nbsp", $location);
?>

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

		<script src="https://cdn.jsdelivr.net/npm/add-to-calendar-button@2" async defer></script>
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>

		<style>
			.invite_outer{
				height:510px;
				width:350px;
				border-radius: 6px;
				background: linear-gradient(158deg, #002460 -4.76%, #000D23 129.49%);
				margin: auto;
				padding:0px 24px;
				position: relative;
				box-shadow: 2px 2px 2px 0px rgba(0,0,0,0.09),
				7px 7px 9px 0px rgba(0,0,0,0.15);
			}

			.invite_outer:hover, .invite_outer:focus-visible, .invite_outer:active {
				box-shadow: 2px 2px 2px 0px rgba(0,0,0,0.09),
				9px 9px 9px 0px rgba(0,0,0,0.20);
			}


			.invite_add_date{
				width: 44px;
				height: 44px;
				background:linear-gradient(318deg, #C49F52 -26.68%, #FAD77C 86.14%);
				border-radius: 500px;
				display: flex;
				align-items: center;
				justify-content: center;
				position: relative;
				margin: auto;
				bottom: 20px;
			}
			.invite_add_date:hover{
			filter: brightness(110%);
			}

			.invite_inner{
				display: grid;
				width: 100%;
				gap:24px;
			}
			.invite_row_one > h4{
				color: #ffffff!important;
				font-family: "Peridot-PE-Variable", Arial, Helvetica, sans-serif;
				font-size: 22px;
				font-style: normal;
				font-weight: 600;
				line-height: normal;
				font-variation-settings: 'wght' 600, 'ital' 0;
				margin-top:2px;
				margin-bottom: 12px;
			}

			.invite_row_two, .invite_row_three, .invite_row_four{
				color: #ffffff!important;
				font-family: "Peridot PE Variable";
				font-size: 16px;
				font-style: normal;
				line-height: normal;
				font-variation-settings: 'wght' 300, 'ital' 0;
			}
			.invite_image{
				position: absolute;
				bottom: 0;
				width:calc(100% - 48px);

			}
			.invite_image > img{
				width: 250px;
				margin:auto;
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
			  <span class="xl2">2xl</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#fed000" style="width:1rem;">
					  <path fillRule="evenodd" d="M2 8c0 .414.336.75.75.75h8.69l-1.22 1.22a.75.75 0 1 0 1.06 1.06l2.5-2.5a.75.75 0 0 0 0-1.06l-2.5-2.5a.75.75 0 1 0-1.06 1.06l1.22 1.22H2.75A.75.75 0 0 0 2 8Z" clipRule="evenodd" />
					</svg>
				</main>
		  </div>

		  <div class="invite_outer">  </div>
		  <div class="invite_outer">


			  <div class=invite_add_date>
				  <add-to-calendar-button
					name="Sample Event"
					description="Play with me!"
					startDate="2024-03-07"
					startTime="10:15"
					endTime="17:45"
					timeZone="America/Chicago"
					location="World Wide Web"
					options="'Apple','Google','Microsoft365'"
					listStyle="overlay"
					buttonStyle="round"
					trigger="click"
					hideTextLabelButton
				    hideTextLabelList
					hideBackground
					size="4"
					pastDateHandling="disable"
					styleLight="--btn-background: transparent ;--btn-hover-background:transparent;"
				  ></add-to-calendar-button>
			  </div>
			  <div class="invite_inner">
				 <div class=invite_row_one>
					 <h4>The President's Inauguration Brunch, Honoring The Class Of 1974</h4>
				 </div>
				 <div class=invite_row_two>
					 <p>Saturday, April 20, 2024 10:00 a.m.</p>
				 </div>
				 <div class=invite_row_three>
					 <p>
						 Andrew’s Hall<br>
						 Nick and Lou Martin University Center<br>
						 3165 E. Rosedale St.<br>
						 Second floor</p>
				 </div>
				 <div class=invite_row_four>
					 <p>Tickets may be purchased online
						 or by calling 817-531-6548</p>
				 </div>
			 </div>
			  <div class="invite_image">
				  <img src="images/gold_admin_building-01.svg" alt="admin building graphic" />
			  </div>
		  </div>

	  <footer></footer>
	  <script>
	  var event_card03052024 =  (function () {
		 $( document ).ready(function() {
		   if( $('.invite_outer') && $('.invite_outer').length === 1) {
			   $('.invite_outer').css({
				   "float":"none",
				   "margin-left":"auto",
				   "margin-right": "auto"
			   })
		   } else{
			   return;
		   }

		 });


	  })();
	  </script>
	</body>
</html>
