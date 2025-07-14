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
		<main style="margin-left: auto; margin-right:auto; width:100%;padding:1.25rem">

			<style>
			.news_cards_block_outer_wrap{
				max-width: 1320px;
				cursor: pointer;
				margin-top:1.25rem;
				position: relative;
			}

			.news_cards_block_headline{
				font-family: Oswald, Arial, Helvetica, sans-serif;
				font-size:3rem;
				margin-top:1.25rem;
				color:#1a1a1a;
				font-weight:500;
				display: block;
				text-align: left;
				line-height: 3.2rem;
			}
			.news_cards_block_inner_wrap{
				display:grid;
				gap:1.875rem;
				place-content: center;
				margin-top:2rem;
				padding: .25rem;
			}
			.news_card{
				border: 1px solid #f5f5f5;
				box-shadow: 1px 2px 4px rgb(189 189 189 / 50%);
				border-radius: .875rem;
				padding : 1.25rem;
				width:100%;
				height: 100%;
				max-width: 455px;
				background-color: #ffffff;
				display:grid;
				grid-template-rows: auto 1fr;
			}
			.news_card_image_wrap{
				aspect-ratio: 7/5;
				border-radius: .875rem;

			}
			.news_card_image_wrap img{
				width: 100%;
				height: 100%;
				object-fit: contain;
				border-radius: .875rem;

			}

			.news_text_button{
				width: fit-content;
				border-radius: 999px;
				display: inline-flex;
				padding:.75rem 1.5rem;
				background-color: #fed000;
				color: #002460;
				gap:1rem;
				place-self: end;
				place-items: center;
			}
			.news_text_button:hover,	 .news_text_button:focus{
				filter:brightness(105%);
				box-shadow: 1px 2px 4px rgb(189 189 189 / 50%);

			}

			.news_text_button:active{
				filter:brightness(100%);
				box-shadow: 1px 2px 2px rgb(189 189 189 / 75%);

			}
			.news_text_button > span{
				font-weight: 500;
				font-family: Arial, Helvetica, sans-serif;
				text-transform: capitalize;
				font-size: 1rem;
			}

			.news_text_button > svg{
				width: 2rem;
				height: 2rem;


			}

			.news_card_text_wrap{
					display: grid;
					grid-auto-flow: row;
					place-content: space-between;
					gap: 1.25rem;
					margin-top: 1.25rem;
			}


			.news_card_heading{
				font-family: Oswald, Arial, Helvetica, sans-serif;
				font-size:2rem;
				color:#1a1a1a;
				line-height: 3rem;
			}
			.news_card_heading_text{
			}

				/* sm	640px  */
				@media (min-width: 640px) {
					.news_cards_block_outer_wrap{}
					.news_cards_block_inner_wrap{
							grid-template-columns: 1fr 1fr;
							grid-template-rows: 1fr 1fr;
							place-items: center;
					}


				/*md	768px	*/
				@media (min-width: 768px) {
					.news_cards_block_outer_wrap{
						width:100%;
						margin:2rem auto 0rem;

					}


				/* lg	1024px	*/
				@media (min-width: 1024px) {

				}

				/*xl	1280px	*/
				@media (min-width: 1280px) {
		}
			</style>

			<div class= "news_cards_block_outer_wrap">
				<div class="news_cards_block_inner_wrap">

				<div class="news_card" >
					<div class="news_card_image_wrap">
						<img loading="lazy" src="/images/Bruce-Benz_In-Action_450x300.png" alt="hands holding a heart">
					</div>
					<div class="news_card_text_wrap">
					<h3 class="news_card_heading">BIG SCHOLARSHIPS</h3>
					<p class="news_card_heading_text">YOLO green juice austin, four dollar toast veniam jawn vibecession. carry pinterest jawn. Photo booth copper mug cloud bread est locavore fingerstache, bicycle rights fanny pack pork belly pitchfork offal esse dreamcatcher non fixie.</p>
					<a href="#" class="news_text_button">
						<span>full article</span>
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
					  <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
					</svg>
					</a>
					</div>
				</div>

				<div class="news_card" >
					<div class="news_card_image_wrap">
						<img loading="lazy" src="/images/ACS_News_Size.png" alt="person and ekg">
					</div>
				<div class="news_card_text_wrap">
					<h3 class="news_card_heading">CAREER PREPARATION</h3>
					<p class="news_card_heading_text">YOLO green juice austin, four dollar toast veniam jawn vibecession. Farm-to-table DIY synth ut fam, biodiesel distillery quinoa health goth gatekeep intelligentsia pork belly mollit ugh. </p>

					<a href="#" class="news_text_button">
						<span>full article</span>
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
					  <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
					</svg>
					</a>
					</div>
				</div>


				<div class="news_card">
					<div class="news_card_image_wrap">
						<img loading="lazy" src="/images/Resized-Flowers-Pic.png" alt="briefcase news">
					</div>
					<div class="news_card_text_wrap">
					<h3 class="news_card_heading">ACCELERATED CLASSES</h3>
					<p class="news_card_heading_text">YOLO green juice austin, four dollar toast veniam jawn vibecession. </p>
					<a href="#" class="news_text_button">
						<span>full article</span>
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
					  <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
					</svg>
					</a>
					</div>
				</div>
			03599b
				<div class="news_card">
					<div class="news_card_image_wrap">
						<img loading="lazy" src="/images/montes_vu_photo.png" alt="hands holding a heart">
					</div>
					<div class="news_card_text_wrap">
					<h3 class="news_card_heading">ENGAGING EDUCATORS</h3>
					<p class="news_card_heading_text">YOLO green juice austin, four dollar toast veniam jawn vibecession. Farm-to-table DIY synth ut fam, biodiesel distillery quinoa health goth gatekeep intelligentsia pork belly mollit ugh. </p>
					<a href="#" class="news_text_button">
						<span>full article</span>
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
					  <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
					</svg>
					</a>
					</div>
				</div>

				</div>
			</div>

		</main>
		<footer></footer>
		<script>
		</script>
	</body>
</html>
