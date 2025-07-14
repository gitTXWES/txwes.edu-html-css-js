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
			.txwes_banner_outer{
				position: relative;
			}
			.txwes_banner_inner{
				position: relative;
			
			}
		.txwes_banner_controls {
			width:35px;
			height: 35px;
			background-color: #fed000;
			border: 2px solid #002460;
			border-radius: 9999px;
			display: flex;
			align-items: center;
			justify-content: center;
			position: absolute;
			bottom:12px;
			left:12px;
		}
	
		.txwes_banner_controls > svg {
			width:20px;
			height: 20px;
		}
		.txwes_banner_controls_show{
			display:block;
		}
		.txwes_banner_controls_hide{
			display:none;
		}

		.txwes_banner_img_wrap{
			position:relative;
			scroll-snap-type: x mandatory;
			  overflow-x: scroll;
			  overflow-y: hidden;
			  display: flex;
			  align-items: center;			
			  /* Enable Safari touch scrolling physics which is needed for scroll snap */
/* 			  -webkit-overflow-scrolling: touch; */
			}
		
		.txwes_banner_img_wrap > a {
			display:contents;
			
		}
		.txwes_banner_img_wrap > a > picture > img{
			object-fit: cover;
			width:100vw;
			object-position: bottom;
			max-height: 480px;
			aspect-ratio: 1024/460;
			scroll-snap-align: start;
			scroll-snap-stop: always;
			max-width: 100vw;
		}    

			/* sm	640px  */  
			@media (min-width: 640px) {  }
			
			/*md	768px	*/
			@media (min-width: 768px) {
				

			  }
			
			/* lg	1024px	*/ 
			@media (min-width: 1024px) {
	
			 }
			
			/*xl	1280px	*/
			@media (min-width: 1280px) {
	
				.txwes_banner_img_wrap > a> picture > img{
					max-height: 580px;
					object-position: center right;
				}    
			  }
			/*2xl	1536px	*/ 
			
			@media (min-width: 1536px) {
				.txwes_banner_img_wrap > a > picture > img{
					object-position: top right;
				}
			  }
		</style>
	</head>
	<body>
	  <header> 
			  <div class="txwes_banner_outer">
				  <div class="txwes_banner_inner">
				  <div class="txwes_banner_img_wrap" aria-roledescription="carousel">
					 <a href="#"> <picture aria-roledescription="slide">
						   <source media="(min-width: 1024px)" srcset="images/rotator/summer_homepage_desktop.png" />
						   <img src="images/rotator/welcomeback_homepage_mobile.png" alt="something" />
					  </picture></a>
					  <a href="#"><picture aria-roledescription="slide">
							 <source media="(min-width: 1024px)" srcset="images/rotator/stampedewk_homepage_desktop.png" />
							 <img src="images/rotator/stampedewk_homepage_mobile.png" alt="something" />
						</picture></a>
						<a href="#"><picture aria-roledescription="slide">
							   <source media="(min-width: 1024px)" srcset="images/rotator/ramcamp_homepage_desktop copy.png" />
							   <img src="images/rotator/ramcamp_homepage_mobile copy.png" alt="something" />
						  </picture></a>
						<a href="#">  <picture aria-roledescription="slide">
								 <source media="(min-width: 1024px)" srcset="images/rotator/prespicnic_homepage_desktop.png" />
								 <img src="images/rotator/prespicnic_homepage_mobile.png" alt="something" />
							</picture></a>
							<a href="#"><picture aria-roledescription="slide">
								   <source media="(min-width: 1024px)" srcset="images/rotator/fb_homepage_desktop.png" />
								   <img src="images/rotator/fb_homepage_mobile.png" alt="something" />
							  </picture></a>
							  <a href="#"><picture aria-roledescription="slide">
									 <source media="(min-width: 1024px)" srcset="images/rotator/fb_homepage_desktop.png" />
									 <img src="images/rotator/fb_homepage_mobile.png" alt="something" />
								</picture></a>
				  </div>
				  <button class="txwes_banner_controls" aria-label="Stop Carosel Slide Rotations">
					 <svg id="play_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"class="txwes_banner_controls_show" role="img">
						 <title>Play Icon</title>
					   <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" />
					 </svg>
					 <svg id="pause_icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="txwes_banner_controls_hide" role="img">
						 <title>Pause Icon</title>
					   <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25v13.5m-7.5-13.5v13.5" />
					 </svg>
				  </button>
				  </div>
			  </div>
	  </header>
	  <main>
		  <div class="size-indicator">
			  <span class="xs">xs</span>
			  <span class="sm">sm</span>
			  <span class="md">md</span>
			  <span class="lg">lg</span>
			  <span class="xl">xl</span>
			  <span class="xl2">2xl</span>
		  </div>
	  </main>
	  <footer></footer>
	  <script>
		  const container = document.querySelector(".txwes_banner_img_wrap");
		  let total_slide_count = container.querySelectorAll("picture").length;
		  let current_slide_count = 0;
		  let banner_timer;
		  let carosel_play = false;
  		  let picture_width = container.getBoundingClientRect();
		   
		   $( window ).on( "resize", function() {
			  picture_width =  container.getBoundingClientRect();
			   console.log(picture_width.width)		

		   })
		
				
			function play_pause(play){
				if(play){
				$(".txwes_banner_controls").attr("aria-label", "Stop Carosel Slide Rotations ");
				$("#play_icon").hide();
				$("#pause_icon").show();
				banner_timer = setInterval(
						 scroll_banner, 1500 
					  );
				} else if(!play) {
					$(".txwes_banner_controls").attr("aria-label", "Start Carosel Slide Rotations ");
					$("#play_icon").show();
					$("#pause_icon").hide();	
					clearInterval(banner_timer);
				}
				
			}
			
			  function scroll_banner() {
				  if(current_slide_count !== total_slide_count ){					  
				  container.scrollBy({
					  left: picture_width.width,
					  behavior: "smooth",
				  });
				  current_slide_count ++;
			  } else{
				container.scrollTo({
					 left: 0,
					 behavior: "instant"
				  });
				current_slide_count = 0;
			  }
			 }
			  
			 $(".txwes_banner_controls").on("click", function(){
				carosel_play = !carosel_play;
				play_pause(carosel_play); 			
			})
	  </script>
	</body>
</html>
