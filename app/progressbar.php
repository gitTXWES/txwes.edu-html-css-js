<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title> TEMPLATE TITLE </title>

		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>
		<script src="https://cdn.tailwindcss.com"></script>

		<style>
			*{
				font-family: Arial, Helvetica, sans-serif;
			}
			.tw{
				box-sizing: border-box;
				border-width: 0;
				border-style:solid;
			}

				.progress_bar{
					display: grid;
					place-items: center;
					margin-top: 5rem;
				}


			.progress_bar_gauge{
				height: 2rem;
				z-index: 10;
				position: relative;
				background: hsla(210, 30%, 96%, 1);
				background: linear-gradient(to bottom, hsla(210, 30%, 96%, 1) 0%, hsla(0, 0%, 100%, 1) 42%, hsla(214, 32%, 91%, 1) 100%);
				background: -moz-linear-gradient(to bottom, hsla(210, 30%, 96%, 1) 0%, hsla(0, 0%, 100%, 1) 42%, hsla(214, 32%, 91%, 1) 100%);
				background: -webkit-linear-gradient(to bottom, hsla(210, 30%, 96%, 1) 0%, hsla(0, 0%, 100%, 1) 42%, hsla(214, 32%, 91%, 1) 100%);
				min-width:300px;
				box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
			}

			.progress_bar_stripes{
			background: linear-gradient(to bottom,  #002460 0%, #0072bc 42%, #002460 100%);
			background: -moz-linear-gradient(to bottom,  #002460 0%, #0072bc 42%, #002460 100%);
			background: -webkit-linear-gradient(to bottom,  #002460 0%, #0072bc 42%, #002460 100%);
			height:2rem;
		}

		.progress_bar_text{
			letter-spacing: .025rem;
			margin-top:1.5rem;
			font-weight: 600;
			color:#004B8D;
			font-size: 1.125rem;
			line-height: 1.75rem;
		}

		</style>
	</head>
	<body>
		<header>  <div class="p-8 text-lime-600">
			<span class="sm:hidden">xs</span>
			<span class="hidden sm:block md:hidden">sm</span>
			<span class="hidden md:block lg:hidden">md</span>
			<span class="hidden lg:block xl:hidden">lg</span>
			<span class="hidden xl:block 2xl:hidden">xl</span>
			<span class="hidden 2xl:block">2xl</span>
		</div>
	</header>
		<main style="margin-left: auto; margin-right:auto; width:100%">

		<div class="tw progress_bar grid place-items-center mt-20">
				<div class="tw progress_bar_gauge ">
					<div class="tw progress_bar_stripes " style="width:25%"></div>
				</div>
			<h3 class="tw progress_bar_text">25% Complete</h3>
		</div>
			  <div class="tw progress_bar">
					  <div class="tw progress_bar_gauge">
						  <div class="tw progress_bar_stripes" style="width:50%"></div>
					  </div>
				  <h3 class="tw progress_bar_text">50% Complete</h3>
			  </div>
			<div class="tw progress_bar">
					<div class="tw progress_bar_gauge ">
						<div class="tw progress_bar_stripes" style="width:75%;"></div>
					</div>
				<h3 class="tw progress_bar_text">75% Complete</h3>
			</div>
		</main>
		<footer></footer>
	</body>
</html>
