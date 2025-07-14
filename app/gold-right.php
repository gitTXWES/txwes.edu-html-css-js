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
				.right_icon_block_outer{
					width: 225px;
					border-radius:0.875rem;
					background: hsla(49, 100%, 64%, 1);
					background: linear-gradient(35deg, hsla(49, 100%, 64%, 1) 0%, hsla(49, 100%, 50%, 1) 51%);
					background: -moz-linear-gradient(35deg, hsla(49, 100%, 64%, 1) 0%, hsla(49, 100%, 50%, 1) 51%);
					background: -webkit-linear-gradient(35deg, hsla(49, 100%, 64%, 1) 0%, hsla(49, 100%, 50%, 1) 51%);
					margin:auto;
				}
				.right_icon_block_inner{
					display:grid;
					padding: 1.25rem;
					grid-template-columns: 50px auto;
					gap:1.25rem;
					place-items: center;
				}
				.right_icon_block_icon{
					width:50px;
					height: 50px;
				}
				.right_icon_block_icon img{
					height: 100%;
					width: 100%;
					object-fit:contain;
				}
				.right_icon_block_text{}
				.right_icon_block_text h4{
					font-family: Oswald, Arial, Helvetica, sans-serif;
					color:#FFFFFF;
					font-size: 1.5rem;
					text-transform:capitalize;
					font-weight: 400;
					line-height: 1.85rem;
				}

				/* lg	1024px	*/
				@media (min-width: 1024px) {
					.right_icon_block_outer{
						width:300px;
					}
				}


				@media (min-width: 1536px) {  }
			</style>
			<div class="right_icon_block_outer">
				<div class="right_icon_block_inner">
					<div class="right_icon_block_icon">
						<img src="images/Icon-1 copy.png"/>
					</div>
					<div class="right_icon_block_text">
						<h4>positive leadership is great</h4>
					</div>
				</div>
			</div>




		</main>
		<footer></footer>
		<script></script>
	</body>
</html>

