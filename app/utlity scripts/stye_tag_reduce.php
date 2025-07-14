<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title> TEMPLATE TITLE </title>
		
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
			
			<?php
			//t4 content type layout html.main.css
			$styles =  '<style>.header_top_block {
				flex-direction: row;
				place-content: space-between;
				align-items: center;
				width: 100%;
				height: 90px;
				background-color: #00417A;
				display: none;
				padding: 20px 50px;
			}</style><style>.header_top_block_phone_icon {
				width: 1.75rem;
				height: 1.25rem;
			}</style>';
			
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
		  
			  
			
		</main>
		<footer></footer>
		<script></script>
	</body>
</html>