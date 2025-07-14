<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="creation" content="2023">
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>
		<script src="https://cdn.tailwindcss.com"></script>

		<style>
			* , *::after, *::before{
				font-family: Arial, Helvetica, sans-serif;
				box-sizing: border-box;
				border-width: 0;
				border-style:solid;
			}
			.chat_outer{

			}

			.chat_round{
			background-color:#fed000;
			width:6rem;
			height:6rem;
			border-radius: 100rem;
			background-image: url('images/timmy.jpg');
			background-size: contain;
			display: none;
			}

			.chat_speech_bubble{
				width: 20rem;
			}


		</style>

	</head>
	<body>
	 <header>
		 <div class="p-8 text-lime-600 fixed z-50">
			<span class="sm:hidden">xs</span>
			<span class="hidden sm:block md:hidden">sm</span>
			<span class="hidden md:block lg:hidden">md</span>
			<span class="hidden lg:block xl:hidden">lg</span>
			<span class="hidden xl:block 2xl:hidden">xl</span>
			<span class="hidden 2xl:block">2xl</span>
		 </div>
	 </header>
		<main style="margin-left: auto; margin-right:auto; width:100%">
		<div class="chat_outer">
			<div class="chat_speech_bubble">
				<svg   version="1.1" viewBox="0 0 1024 1024"  xml:space="preserve" xmlns="http://www.w3.org/2000/svg" >
				<g id="Layer-1">
				<path d="M510.031 177.344C245.899 177.344 31.7813 300.856 31.7812 453.219C31.7812 605.581 245.899 729.094 510.031 729.094C590.148 729.094 665.603 717.648 731.938 697.562L791.625 733.094L873.688 781.938L873.75 684.312L873.781 632.219C945.13 584.029 988.312 521.56 988.312 453.219C988.313 300.856 774.164 177.344 510.031 177.344Z" fill="#cccccc"  opacity="1" stroke="none"/>
				</g>
				</svg>
			</div>
			<div class="chat_round">

			</div>
			</div>

		</div>
		</main>
		<footer></footer>

	</body>
</html>
