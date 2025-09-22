<?php
	$editlink = '<t4 type="edit-page" action="direct-edit" text="&copy;"/>';
?>
<!doctype html>
<html lang="en">
	<head>
		<title><t4 type="navigation" id="179"/> - Texas Wesleyan University</title>
        <!-- Description --><t4 type="meta" id="12"/>
        <!-- Keywords --><t4 type="meta" id="13"/>
        <!-- Date --><t4 type="meta" id="15"/>
        <!-- Author --><t4 type="meta" id="14"/>
        <!-- Metadata Content Type Layout --><t4 type="navigation" id="328"/>
        <?php
			$SectionTitle = "<t4 type="navigation" id="179"/>";
			<t4 type="navigation" id="335"/>
		?>
		<!-- Head Code Template -->
         meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta http-equiv="Cache-control" content="public, max-age=604800, min-age=86400">

<meta name="google-site-verification" content="8a_Fvav8DeVOhySaizQ3dJvHWEACAS1x0ybJXREzLdY">
<meta property="twitter:account_id" content="106774340">
<meta property="fb:app_id" content="932959790091629"/>

<meta name="theme-color" content="#5c8ab9">

<link rel="icon" href="/media/twu/style-assets/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/media/twu/style-assets/images/favicon.ico" type="image/x-icon">
<link rel="manifest" href="/manifest.json">

<!-- Conversion Pixel - TexasWesleyanOrgWide - DO NOT MODIFY -->
<script src="https://secure.adnxs.com/px?id=1472602&t=1" type="text/javascript"></script>
<!-- End of Conversion Pixel -->


<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T5WGKC');</script>
<!-- End Google Tag Manager -->

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "CollegeOrUniversity",
	"name": "Texas Wesleyan University",
	"alternateName": "TXWES",
	"url": "https://txwes.edu",
	"logo": "https://txwes.edu/media/twu/style-assets/images/logoColor.png",
	"slogan": "Smaller.Smarter.",
	"description":"Texas Wesleyan is a small, private, affordable university on a safe, small campus just minutes from downtown Fort Worth, TX. It focuses on intentionally small class sizes and engaging faculty.",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "1201 Wesleyan St.",
		"addressLocality": "Fort Worth",
		"addressRegion": "TX",
		"postalCode": "76105",
		"addressCountry": "US"
	},
	"foundingDate":"1890",
	"contactPoint": [
		{
			"@type": "ContactPoint",
			"telephone": "(817)-531-4444",
			"contactType": "Main Number",
			"availableLanguage": ["en"]
		},
		{
			"@type": "ContactPoint",
			"telephone": "817-531-4422",
			"contactType": "Undergraduate Admissions",
			"url": "https://txwes.edu/admissions/undergraduate/",
			"email": "admissions@txwes.edu",
			"availableLanguage": ["en", "es"]
		},
		{
			"@type": "ContactPoint",
			"telephone": "817-531-4930",
			"contactType": "Graduate Admissions",
			"url": "http://txwes.edu/admissions/apply-now/graduate/",
			"email": "graduate@txwes.edu"

		},
		{
			"@type": "ContactPoint",
			"telephone": "+1-817-531-4422",
			"contactType": "International Admissions",
			"url": "https://txwes.edu/admissions/international/",
			"email": "internationaladmissions@txwes.edu"	
		},
		{
			"@type": "ContactPoint",
			"telephone": "800-580-8980",
			"contactType": "Admissions TollFree",
			"contactOption": "TollFree"
		}

	],
	"sameAs": [
		"https://www.linkedin.com/school/texas-wesleyan-university/",
		"https://www.facebook.com/TexasWesleyan/",
		"https://www.instagram.com/texaswesleyan/",
		"https://www.youtube.com/texaswesleyan"
	]
}
</script>
<style type="text/css">
	@media screen and (min-width:2000px) {
		html { zoom: 1.3; -moz-transform: scale(1.3); -moz-transform-origin: 0 0;}
	}
</style>
  <link rel="stylesheet" href="https://catalog.txwes.edu/widget-api/widget-api.min.css">


		<!-- Stylesheet -->
    	<style type="text/css">
    		/* Universal Elements for Full Width */
        <t4 type="media" id="68585" formatter="inline/*"/>
        
        <t4 type="media" id="68684" formatter="inline/*"/>
    	</style>
    	
    	<link rel="stylesheet" href="https://use.typekit.net/dyt3onb.css"/>

    <!-- included 12-14-22 to include css from content types -->
    <?php

			//Grabs the content from txwes.2023.2C.css
			$styles = <<<cssstyle
<t4 type="navigation" name="CSS Include for txwes.2023.2C.css" id="473" />;
cssstyle;

	//adds the | character after closing style tag to make turning to array easier
			$txwes_styles_string = str_replace('</style>', '</style>|', $styles);
			
			//changes string to array
			$txwes_styles_array = explode('|' , $txwes_styles_string, -1);
			
			//returns unique array
			$style_array = array_unique($txwes_styles_array);
			
			//regular expression to remove style tag
			$style_regex = '/<.*>/';
			
			
			$new_style_array = preg_replace($style_regex, '', $style_array);
			//creates a new style tag and removes returns tabs and new lines
			echo('<style>');
			foreach($new_style_array as $style){
				echo(str_replace(array("\r", "\n","\t"), '', $style));
			}
			echo('</style>');
			
			
			?>
    
    
  <style>
    *,
			*::before,
			*::after {
				font-family: Arial, Helvetica, sans-serif;
				box-sizing: border-box;
				border-width: 0;
				border-style: solid;
				
			}
    body{ scroll-behavior: smooth;}
    
    footer{margin-top:5rem;}
    
    /* Fix for images that are coded as <img src=<t4 />/> and there isn't an image on the content type */
	.section_nav_outer{
			border-radius: .35rem;
			background-color: #03599B;
			padding: 1.25rem 0;
    	width:100%;
		}
    
    #txwes_portrait img {
    display: block;
    margin: auto;
	}
    
		.section_nav_inner{
    	display:flex;
    	place-content:start;
		}
		.section_nav_inner>nav{
			padding-left: 2rem;
    	padding-right: 2rem;
		}
		.section_nav_inner>nav>a, 
    .section_nav_inner>nav>a:visited,
    .section_nav_inner>nav .currentsection{
			margin: 1.25rem 0;
			font-size: 1rem;
			color:#ffffff;
			width: fit-content;
			margin-top:2.5rem;
			display: block;
			font-family: Arial, Helvetica, sans-serif;
    	position:relative;

		}
		.section_nav_inner>nav>a:first-child{
			margin-top:0;
			font-size: 2rem;
			font-family: Oswald, Arial, Helvetica, sans-serif;
		  
		}
    
   .section_nav_inner>nav>a::before {
			   content: '';
			   position: absolute;
			   width: 100%;
			   height: 2px;
			   border-radius: 4px;
			   background-color: #ffffff;
			   bottom: -.5rem;
			   left: 0;
			   transform-origin: right;
			   transform: scaleX(0);
			   transition: transform .2s cubic-bezier(0.45, 0, 0.55, 1);

			 }
			 
		.section_nav_inner>nav>a:hover::before,.section_nav_inner>nav>a:focus::before  {
			   transform-origin: left;
			   transform: scaleX(1);
			 }
	

img[src=""] {
	display: none;
}

img[src*="googleads"] {
	display: none;
}

/* fix chrome bug that displays tracking images as white box */
main img {
	max-width: 100% !important;
	height: auto !important;
}

aside img {
	max-width: 100% !important;
	height: auto !important;
}

#imageView_container img {
	max-width: none !important;
}

/* iFrame and other embedded objects quick fix */

main iframe,
main object,
main embed,
main video {
	width: 100% !important;
}


/* global UL style */

main ul {
	list-style-image: url('https://txwes.edu/media/twu/style-assets/images/bullets/First-Level.png');
	padding-left: 20px;
}

main ul li {
	padding-left: 8px;
	font-size: 1em;
	line-height: 1.5em;
	color: #333;
}

main ul ul {
	list-style-image: url('https://txwes.edu/media/twu/style-assets/images/bullets/Second-Level.png');
}

main ul ul ul {
	list-style-image: url('https://txwes.edu/media/twu/style-assets/images/bullets/Third-Level.png');
}

main ul ul ul ul {
	list-style-image: url('https://txwes.edu/media/twu/style-assets/images/bullets/Fourth-Level.png');
}

main ol {
	padding-left: 20px;
}

main ol li {
	padding-left: 8px;
	font-size: 1em;
	line-height: 1.5em;
	color: #333;
}

main sup {
	vertical-align: middle;
	position: relative;
	top: -.5em;
	font-size: 0.7em;
}

/* Base Layout Full Width Elements */


section#subheader {
	width: 100%;
	max-width: 1280px;
	margin: 0px auto;
}

section#subheader:empty {
	display: none;
}


section#content main {
	width: 100%;
	margin: 0px;
	display: block;
	grid-column-start: 1;
	grid-column-end: 2;
	grid-row-start: 1;
	grid-row-end: 2;
}

section#content.no-nav main {
	-ms-grid-column: 1;
	-ms-grid-row: 1;
	grid-column-start: 1;
	grid-column-end: 2;
	grid-row-start: 1;
	grid-row-end: 2;
}

@media screen and (max-width:950px) {
	section#content main {
		margin-bottom: 36px;
		/*overflow: auto;*/
	}
}

 main h2 {
	font-size: 2em;
	color: #000000;
}

 main h3 {
	font-size: 1.5em;
	color: #000000;
}

 main h4 {
	font-size: 1.25em;
	color: #000000;
}

section#content aside {
	width: 100%;
	display: grid;
 	grid-template-columns: 1fr;
  gap:1.25rem;
	grid-column-start: 2;
	grid-column-end: 3;
	grid-row-start: 1;
	grid-row-end: 2;
   /* background-image:url('<t4 type="media" id="112641" formatter="image/path" />')*/
}


section#content aside a#back-to-top {
	display: none;
	border: 1px solid #ccc;
	padding: 8px 18px;
	text-transform: uppercase;
	color: #666;
	font-size: 0.9em;
	width: 100px;
	text-align: center;
	margin: 0px auto;
	clear: both;
	margin-top: 36px;
}

@media screen and (max-width: 950px) {
	section#content aside a#back-to-top {
		display: block;
	}
}
    
section#content main>*:first-child{
    margin-top:0;
  }
      
section#content,
section#content.no-nav {
	display: block;
	margin: 1.25rem auto;
	max-width: 1320px;
    padding: 1.25rem;
  width: 100%;
}
    


/* sm	640px  */  
@media (min-width: 640px) { 

     section#content aside {
    grid-template-columns:1fr 1fr;
    }

    
}

/*md	768px	*/
@media (min-width: 768px) {
    section#content {
		display: grid;
		gap: 3.875rem;
		grid-template-columns: auto 225px;
		padding: 0 3.875rem;
    margin:2.5rem auto;
	}  
    
    .section_nav_outer{
    	max-width:100%;
    	
    }
    
    section#content aside {
    display:block;
    }
    
    
}

/* lg	1024px	*/ 
@media (min-width: 1024px) { 
	section#content {
		
		margin:  5rem auto 0;
		padding:0 5rem;
		grid-template-columns:  auto 225px;
		grid-template-rows: auto;
		gap: 5rem;
	}
}

/*xl	1280px	*/
@media (min-width: 1280px) { 
	section#content {
    	grid-template-columns:  auto 300px;

    }
    
 }
/*2xl	1536px	*/ 

@media (min-width: 1536px) {  }

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
			text-transform: none;
			}
			.breadcrumb_inner>a{
				text-transform: none;
				text-decoration: none;
			}
			.breadcrumb_inner>a:first-child{
				display: contents;
			}
			
			.breadcrumb_inner>a, 	.breadcrumb_inner>svg, 	.breadcrumb_inner>a>svg{
				margin-right:.5rem;
				color:#03599B;
			}
    
    /* sm	640px  */  
		@media (min-width: 640px) {  }

		/*md	768px	*/
		@media (min-width: 768px) {
    		.breadcrumb_outer{
					display:block;
					width: 100%;
					margin-top:1.25rem;
					
				}
				.breadcrumb_inner{
					padding:0 3.875rem;
    			margin-left: .125rem;
				}
    }

		/* lg	1024px	*/ 
		@media (min-width: 1024px) {
    	.breadcrumb_inner{
					padding:0 5rem;
				}
    }

		/*xl	1280px	*/
		@media (min-width: 1280px) {  }
    
	
</style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.typekit.net/dyt3onb.css"/>
		<!-- Page Head Scripting Output --><t4 type="navigation" id="251"/>
	</head>
	<body>
		<!-- Header Code Template --><t4 type="media" id="68587" formatter="inline/*"/>
        <t4 type="navigation" name="HP Banner" id="481" />

    <section id="subheader">
      <t4 type="navigation" name="Subheader Content" id="397" />
    </section>
     <t4 type="navigation" name="svg bread crumb" id="470" />
			<t4 type="navigation" name="Banner Injection" id="471" />
		<section id="content">
			<main>
			</main>
			<aside>
        <div class="section_nav_outer">
					<div class="section_nav_inner">
						<nav>
							<t4 type="navigation" id="180"/>
							<t4 type="navigation" id="472"/>
						</nav>
					</div>
				</div>
        <!-- Include contents into right side with txwes.2023.right -->
        <t4 type="navigation" name="Content Include right 2023" id="474" />
			</aside>
		</section>
		<!-- Footer Code Template --><t4 type="media" id="68586" formatter="inline/*"/>
		<!-- Body Bottom Code Template --><t4 type="media" id="68652" formatter="inline/*"/>

		<!-- includes js from content type layout txwes.2023.js -->
		<t4 type="navigation" name="JS include " id="469" />

	</body>
</html>