<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Texas Wesleyan</title>
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.typekit.net/dyt3onb.css"/>
		<link rel="stylesheet" href="../css/size_indicator.css" />
		<link rel="stylesheet" href="style/tailwind_preflight.css" />
		<link rel="stylesheet" href="style/header.css"/>
		
		<script src="https://player.vimeo.com/api/player.js"></script>


	</head>
	<body>
	  <header>
		  <a href="#txwes_main" class="skip_link">skip to content</a>
		  <div id="menu">
				  <Transition mode="out-in" @enter="get_bg_sizes" >
					  <button id="menuClosed" v-if="menuClose" @click="menu_engage">
							  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" class="icon-menu" aria-labelledby="menuOpenId">
								  <title id="menuOpenId">Three Horizontal Bars</title>
								  <path class="secondary" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/></svg>
					  </button>
					  <div v-else v-cloak>
							  <div class="background_dk"  :style="{'height' : bg_size +'px' }"></div>
						   <div class="background_white">
								   <div class="heading_wrap" :class="headingClass">
									   <button  v-if="sub" @click="sub=!sub" class="menu_back">
									   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-labelledby="menuBackId" role="img">
										   <title id="menuBackId">left pointing arrow</title>
										 <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
									   </svg>
								  </button>
							<a v-if="sub" :href="category_link"><h1  class="menu_sub_category_title">{{title}}</h1></a>
						  <button   @click="menu_close" class="menu_close">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-close-circle" aria-labelledby="menuCloseId" role="img">
									<title id="menuCloseId">circle with x mark in center</title>
									<circle cx="12" cy="12" r="10" class="primary"/><path fill="#ffffff" class="secondary" d="M13.41 12l2.83 2.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 1 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12z"/>
									</svg>
						  </button>
						  <search-bar></search-bar>
						  </div>
						  <div v-if="!sub" class="menu_main_category_wrap">
							  <nav>
							<ul >
							  <li class="menu_main_category" v-for="(value, key) in navigation"
								  @click="choose_sub(key)"><button>{{key}}</button></li> 
							</ul>
							  </nav>
							  <div class="menu_sub_category_media_wrap">
								  <media-video v-if="menu_media.main_categories.is_video" :media="menu_media.main_categories"></media-video>
								  <media-image v-else :media="menu_media.main_categories"></media-image>
							  </div>
							  <div class="menu_logo_wrap">
								  <a href="https://txwes.edu" >
								  <img class="menu_logo" src="assets/TxWesPrimaryLogo_onWhite.png" alt="Texas Wesleyan Logo" />
								  </a>
							  </div>
						  </div>
						  <sub-category v-if="sub" :sub_category="sub"  :sub_title="title" :menu_media="menu_media"></sub-category>
						  
					</div>
						   <utility-links :utility_links="utility_links"></utility-links> 
				</div>
				  </Transition>
			</div>
		
<div class="txwes_header_outer">
			  <div class="txwes_header_inner">
				 <div class="txwes_header_logo_wrap"><a href="https://txwes.edu"><img src="assets/logo_blue_bg.png" alt="Texas Wesleyan Logo" /></a>
			     </div>
				  <div class="txwes_header_search_wrap">
					  <form class="txwes_header_search_form" method="get" action="/search/">
						  <input class="txwes_header_search_input" type="text" name="q" aria-label="Search field">
					  <button class="txwes_header_search_button" type="submit">
					  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#1a1a1a"  aria-labelledby="searchIconId" >
						  <title id="searchIconId">magnifying glass icon</title>
						<path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
					  </svg>
					  </button>
				  </form>
				  </div>
				  <div class="txwes_header_cta_wrap">
					  <ul class="txwes_header_cta_ul">
						  <li class="txwes_header_cta_li">
							  <a class="txwes_header_cta" href="#"> <img src="assets/icon-frame.svg" alt="application icon" />Apply</a>
						  </li>
					  	  <li class="txwes_header_cta_li">
								<a class="txwes_header_cta" href="#"><img src="assets/icon-location-pin.svg" alt="location pin icon" />Visit</a>
							</li>
						  <li class="txwes_header_cta_li">
							  <a class="txwes_header_cta" href="#"><img src="assets/icon-book-open.svg" alt="book icon" />Get Info</a>
						  </li>
						  <li class="txwes_header_cta_li">
							  <a class="txwes_header_cta" href="#"><img src="assets/icon-trophy.svg" alt="trophy icon" />Give</a>
						  </li>
					  </ul>
				  </div>
			  </div>
		  </div>
		
	</header>
		<main id="txwes_main" class="" style="margin-left: auto; margin-right:auto; width:100%">
		<div class="">
			<span class="xs">xs</span>
			<span class="sm">sm </span>
			<span class="md">md</span>
			<span class="lg">lg</span>
			<span class="xl">xl</span>
			<span class="xl2">2xl</span>
		</div>
		<div style="width:100%; display:flex; place-content: center; gap:2rem; padding:2.5rem;" >
			<div>
			<h1 style="font-family: Arial, Helvetica, sans-serif; font-size:1.5rem; font-weight: bold;">Arial  - current website font</h1>
			<p style="font-family: Arial, Helvetica, sans-serif; margin-top:2rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Velit laoreet id donec ultrices tincidunt. Sed turpis tincidunt id aliquet risus. Sagittis id consectetur purus ut. Eleifend donec pretium vulputate sapien nec. Ultricies leo integer malesuada nunc vel risus. Velit scelerisque in dictum non consectetur. Cras adipiscing enim eu turpis egestas pretium aenean pharetra. Orci a scelerisque purus semper eget. In metus vulputate eu scelerisque felis. Aliquet porttitor lacus luctus accumsan. Amet facilisis magna etiam tempor orci. Semper viverra nam libero justo laoreet. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla. Nam aliquam sem et tortor consequat id porta nibh venenatis. Sed id semper risus in hendrerit gravida rutrum quisque. Purus in mollis nunc sed.
		</p>
			</div>
		<div>
			<h1 style="font-size:1.5rem; font-weight: bold;">Peridot - proposed website font</h1>
			
		<p style="margin-top:2rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Velit laoreet id donec ultrices tincidunt. Sed turpis tincidunt id aliquet risus. Sagittis id consectetur purus ut. Eleifend donec pretium vulputate sapien nec. Ultricies leo integer malesuada nunc vel risus. Velit scelerisque in dictum non consectetur. Cras adipiscing enim eu turpis egestas pretium aenean pharetra. Orci a scelerisque purus semper eget. In metus vulputate eu scelerisque felis. Aliquet porttitor lacus luctus accumsan. Amet facilisis magna etiam tempor orci. Semper viverra nam libero justo laoreet. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla. Nam aliquam sem et tortor consequat id porta nibh venenatis. Sed id semper risus in hendrerit gravida rutrum quisque. Purus in mollis nunc sed.
		</p>
		</div>
		</div>
		</main>
		<footer></footer>
		
		<script type="module" src="js/components/menu_app.js" ></script>

		
			</body>
</html>

