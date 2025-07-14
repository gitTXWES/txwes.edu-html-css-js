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
				.right_contact_outer{
					width: 225px;
					border-radius:0.875rem;
					margin:auto;
					background:linear-gradient(274.62deg, #002460 0%, #00417A 98.45%);
				}
				.right_contact_inner{
					padding: 1.875rem 1.25rem;
				}
				.contact_inner_heading{
					color:#ffffff;
					font-size:1.5rem;
					font-family:Oswald, Arial, Helvetica, sans-serif;
					text-transform: uppercase;
				}
				
			.contact_inner_sub{
				color:#ffffff;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 1rem;
				font-style: normal;
				font-weight: 400;
				margin:.5rem 0rem;
				}
			
			.contact_inner_info{
				margin-top:1.25rem;
				display: grid;
				gap:1.25rem;
				place-items: flex-start;
			}
			.contact_inner_info_location, .contact_inner_info_building{
				display: inline-grid;
				gap:.75rem;
				grid-auto-flow: column;
				place-items: center;
			}
			.location_icon_wrap, .building_icon_wrap{
				background-color: #03599B;
				border-radius: 100rem;
				width: 2.25rem;
				height: 2.25rem;
				display: flex;
				place-content: center;
			}
			
			
			.contact_inner_info_location p, .contact_inner_info_building p{
				font-style: normal;
				font-size: 1rem;
				color:#ffffff;
				
			}
			
			.contact_inner_info_phone a, .contact_inner_info_mail a{
				display: inline-grid;
				gap:.75rem;
				grid-auto-flow: column;
				place-items: center;
			}
			
			.phone_icon_wrap, .mail_icon_wrap{
				background-color: #03599B;
				border-radius: 100rem;
				width: 2.25rem;
				height: 2.25rem;
				display: flex;
				place-content: center;
			}
			
			.phone_icon_wrap img, 	.location_icon_wrap img{
				object-fit: scale-down;
				width: 100%;
				height: 100%;
				
			}
			
			.contact_inner_info_phone:hover , .contact_inner_info_location:hover, .contact_inner_info_mail:hover, .contact_inner_info_building:hover {
				filter: brightness(125%);
			}	
			
			.contact_inner_info_phone a, .contact_inner_info_mail a{
				font-style: normal;
				font-size: 1rem;
				color:#ffffff;
				word-break: break-all;
				
			}
			.mail_icon_wrap svg, .building_icon_wrap svg{
				width: 1.125rem;
			}
			
				/* lg	1024px	*/ 
				@media (min-width: 1024px) { 
					.right_contact_outer{
						width:300px;
					}
				}
				
			
			</style>
			<div class="right_contact_outer">
				<div class="right_contact_inner">
					<h4 class="contact_inner_heading">Contact Us</h4>
					<address>
					<h5 class="contact_inner_sub">Office or Department</h5>
					<div class="contact_inner_info">
						<div class=contact_inner_info_building>
							<div class="building_icon_wrap">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" >
							  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
							</svg>
							</div>
							<p>building name</p>
						</div>
						<div class=contact_inner_info_location>
							<div class="location_icon_wrap">
							<img src="/designByJoe/images/location.png" alt="icon "/>
							</div>
							<p>123 physical Address</p>
						</div>
						<div class="contact_inner_info_phone">
							<a href="tel:555-555-5555"  title="phone">
							<div class="phone_icon_wrap">
								<img src="/designByJoe/images/phone.png">
							</div>
							<p>555-555-5555</p>
						</a>
						</div>
						<div class="contact_inner_info_mail">
							<a href="mailto:communications@txwes.edu" >
							<div class="mail_icon_wrap">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ffffff" >
								  <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
								  <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
								</svg>
							</div>
							<p>communications@txwes.edu</p>
							</a>
						</div>
						</div>
						</address>
				</div>
			</div>
			
		  
			  
			
		</main>
		<footer></footer>
		<script></script>
	</body>
</html>

