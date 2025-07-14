<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="creation" content="2023">		
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>
		<script src="https://cdn.tailwindcss.com"></script>

		<style>
			* {
				font-family: Arial, Helvetica, sans-serif;
			}
			.tw{
				box-sizing: border-box;
				border-width: 0;
				border-style:solid;
				
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
			<?php 
		
			$meta_tag = '<meta name="creation" content="2021">';
			preg_match_all('!\d+!', $meta_tag, $created, );
			$today = getdate();
			$creation_year = $created[0][0]; 
			
			$time_difference = $today["year"] - $creation_year;
			if($time_difference > 2){
				echo ('no index');
			}else{
				echo ('index');
			}
			?>
		
		</main>
		<footer></footer>
		
	</body>
</html>