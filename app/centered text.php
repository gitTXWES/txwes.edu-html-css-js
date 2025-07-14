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
				
				.centered_text_block_outer{
					max-width: 1320px;
				}
				.centered_text_block_inner{
					text-align: center;
					font-weight: 400;
					display: flex;
					place-items: center;
					flex-wrap: nowrap;
					flex-direction: column;
				}
				
				.centered_text_block_title{
					color: #002460;
					font-weight: 500;
					font-family: Oswald, Arial, Helvetica, sans-serif;
					font-size: 1.75rem;
					text-transform: uppercase;
					margin-bottom: 1.25rem;
				}
				.centered_text_block_body{
						color: #454545;
						font-size: 1rem;
						line-height: 1.5rem;
						font-family:  Arial, Helvetica, sans-serif;

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
			<div class="centered_text_block_outer">
				<div class="centered_text_block_inner">
				<h2 class=" centered_text_block_title">100% Online. 100% Convenient. 100% Smaller. Smarter.</h2>
				<div class=" centered_text_block_body">
					<p>Our 100% online Bachelor's in Business Administration is designed to help you launch your career faster. With accelerated classes, you can get your bachelor's degree in as little as 3 years — or, if you already have college credits, you can finish your degree in as little as 15 months! Plus, with our big scholarships, you'll be able to get your degree without breaking the bank.</p>
				</div>
				</div>
			</div>
			
			
			
			
		  
			  
			
		</main>
		<footer></footer>
		<script></script>
	</body>
</html>