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
			.right_quote_block_outer{
				width:225px;
				border: 1px solid #f5f5f5;
				box-shadow: 1px 2px 4px rgb(189 189 189 / 50%);
				border-radius: .875rem;
			}
			.right_quote_block_inner{
				padding:2rem;
			}
			.right_quote_block_text q {
				font-family: Arial, Helvetica, sans-serif;
				font-weight: 400;
				font-size: 1.25rem;
				color: #1a1a1a;
				line-height: 1.5rem;
			}
				.right_quote_block_text em{
					font-size:1rem;
					color: #454545;
					text-align: right;
					display: block;
					margin-right:.5rem;
				}
				.right_quote_block_svg_wrap{
					width: 100%;
					padding: 1rem .5rem .5rem;
					display: flex;
					justify-content: flex-end;
				}

				/* sm	640px  */
				@media (min-width: 640px) {  }

				/*md	768px	*/
				@media (min-width: 768px) {

				 }

				/* lg	1024px	*/
				@media (min-width: 1024px) {
					.right_quote_block_outer{
						width:300px;
					}

				}

				/*xl	1280px	*/
				@media (min-width: 1280px) {

				}
				/*2xl	1536px	*/

				@media (min-width: 1536px) {  }
			</style>
			<div class="right_quote_block_outer">
				<div class="right_quote_block_inner">
					<div class="right_quote_block_text">
						<q>I hate eating vegetables. The only vegetables I eat are lettuce on a burger.</q>
						<div class="right_quote_block_svg_wrap">
						<svg style="height: 5px; width: 60px;" fill="#fed000" viewBox="0 0 60 5" xmlns="http://www.w3.org/2000/svg">
						  <rect width="60" height="5" rx="2.5"/>
						</svg>
						</div>
						<em>Chance the Rapper</em>
					</div>

				</div
			</div>




		</main>
		<footer></footer>
		<script></script>
	</body>
</html>
