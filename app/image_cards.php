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
			.image_cards_block_outer_wrap{
				max-width: 1320px;
				cursor: pointer;
				margin-top:1.25rem;
				position: relative;
			}
			#image_card_screen{
				display:none;
				position: absolute;
				height: calc(100%);
				width: 100%;
				top: 0px;
				z-index: 10;
				place-content: center;
			}
			.image_card_focus_screen_open{
				position: absolute;
				height: calc(100%);
				width: 100%;
				background-color:#575757;
				opacity:.75;
			}
			.image_card_focus{
				position: absolute;
				z-index: 20;
				place-self: center;
				margin: auto;
				max-width: 600px!important;
				height: auto!important;

			}
			.image_card_screen_close{
				display:flex;
				padding:.5rem 1rem;
				border-radius: 5rem;
				background-color: #ffffff;
				width: fit-content;
				align-items: center;
				gap:.5rem;
				border: 1px solid #f5f5f5;
				position: absolute;
				bottom:105%;
				z-index: 40;
				place-self: center;

			}
			.image_cards_block_headline{
				font-family: Oswald, Arial, Helvetica, sans-serif;
				font-size:3rem;
				margin-top:1.25rem;
				color:#1a1a1a;
				font-weight:500;
				display: block;
				text-align: left;
				line-height: 3.2rem;
			}
			.image_cards_block_inner_wrap{
				display:grid;
				gap:1.875rem;
				place-content: center;
				margin-top:2rem;
				padding: .25rem;
			}
			.image_card{
				border: 1px solid #f5f5f5;
				box-shadow: 1px 2px 4px rgb(189 189 189 / 50%);
				border-radius: .875rem;
				padding : 1.25rem;
				width:100%;
				height: 100%;
				max-width: 455px;
				background-color: #ffffff;
			}
			.image_card_image_wrap{
				aspect-ratio: 7/5;
				border-radius: .875rem;

			}
			.image_card_image_wrap img{
				width: 100%;
				height: 100%;
				object-fit: contain;
				border-radius: .875rem;

			}
			.image_card_heading{
				font-family: Oswald, Arial, Helvetica, sans-serif;
				font-size:2rem;
				margin-top:1.25rem;
				color:#1a1a1a;
				line-height: 3rem;
			}
			.image_card_heading_text{
				display: none;
				margin-top:1.25rem;
			}

				/* sm	640px  */
				@media (min-width: 640px) {
					.image_cards_block_outer_wrap{}
					.image_cards_block_inner_wrap{
							grid-template-columns: 1fr 1fr;
							grid-template-rows: 1fr 1fr;
							place-items: center;
					}
					.image_card_focus{
						left: auto;
					}
					.image_card_screen_close{


					}
					.image_card{}
					.image_card_image_wrap{}
					.image_card_image_wrap img{}
					.image_card_heading{}
					.image_card_heading_text{}


				 }

				/*md	768px	*/
				@media (min-width: 768px) {
					.image_cards_block_outer_wrap{
						width:100%;
						margin:2rem auto 0rem;

					}

					.image_card{}
					.image_card_image_wrap{}
					.image_card_image_wrap img{}
					.image_card_heading{}
					.image_card_heading_text{}

				 }

				/* lg	1024px	*/
				@media (min-width: 1024px) {
					.image_cards_block_outer_wrap{}
					.image_cards_block_inner_wrap{}
					.image_card{}
					.image_card_image_wrap{}
					.image_card_image_wrap img{}
					.image_card_heading{}
					.image_card_heading_text{}

				}

				/*xl	1280px	*/
				@media (min-width: 1280px) {
				.image_cards_block_outer_wrap{}
				.image_cards_block_inner_wrap{}
				.image_card{}
				.image_card_image_wrap{}
				.image_card_image_wrap img{}
				.image_card_heading{}
				.image_card_heading_text{}

				}

			</style>
			<div class= "image_cards_block_outer_wrap">
				<h2 class="image_cards_block_headline">Pillars and Values</h2>
				<div class="image_cards_block_inner_wrap">
				<div class="image_card" tabindex="0">
					<div class="image_card_image_wrap">
						<img src="/images/Bruce-Benz_In-Action_450x300.png" alt="hands holding a heart">
					</div>
					<h3 class="image_card_heading">BIG SCHOLARSHIPS</h3>
					<p class="image_card_heading_text">YOLO green juice austin, four dollar toast veniam jawn vibecession. Farm-to-table DIY synth ut fam, biodiesel distillery quinoa health goth gatekeep intelligentsia pork belly mollit ugh. YOLO vexillologist in big mood dreamcatcher everyday carry pinterest jawn. Photo booth copper mug cloud bread est locavore fingerstache, bicycle rights fanny pack pork belly pitchfork offal esse dreamcatcher non fixie.</p>
				</div>

				<div class="image_card" tabindex="0">
					<div class="image_card_image_wrap">
						<img src="/images/ACS_News_Size.png" alt="person and ekg">
					</div>
					<h3 class="image_card_heading">CAREER PREPARATION</h3>
					<p class="image_card_heading_text">YOLO green juice austin, four dollar toast veniam jawn vibecession. Farm-to-table DIY synth ut fam, biodiesel distillery quinoa health goth gatekeep intelligentsia pork belly mollit ugh. YOLO vexillologist in big mood dreamcatcher everyday carry pinterest jawn. Photo booth copper mug cloud bread est locavore fingerstache, bicycle rights fanny pack pork belly pitchfork offal esse dreamcatcher non fixie.</p>
				</div>

				<div class="image_card" tabindex="0">
					<div class="image_card_image_wrap">
						<img src="/images/Resized-Flowers-Pic.png" alt="briefcase image">
					</div>
					<h3 class="image_card_heading">ACCELERATED CLASSES</h3>
					<p class="image_card_heading_text">YOLO green juice austin, four dollar toast veniam jawn vibecession. Farm-to-table DIY synth ut fam, biodiesel distillery quinoa health goth gatekeep intelligentsia pork belly mollit ugh. YOLO vexillologist in big mood dreamcatcher everyday carry pinterest jawn. Photo booth copper mug cloud bread est locavore fingerstache, bicycle rights fanny pack pork belly pitchfork offal esse dreamcatcher non fixie.</p>
				</div>

				<div class="image_card" tabindex="0">
					<div class="image_card_image_wrap">
						<img src="/images/montes_vu_photo.png" alt="hands holding a heart">
					</div>
					<h3 class="image_card_heading">ENGAGING EDUCATORS</h3>
					<p class="image_card_heading_text">YOLO green juice austin, four dollar toast veniam jawn vibecession. Farm-to-table DIY synth ut fam, biodiesel distillery quinoa health goth gatekeep intelligentsia pork belly mollit ugh. YOLO vexillologist in big mood dreamcatcher everyday carry pinterest jawn. Photo booth copper mug cloud bread est locavore fingerstache, bicycle rights fanny pack pork belly pitchfork offal esse dreamcatcher non fixie.</p>
				</div>

				</div>
				<div id="image_card_screen">
				<div  class="image_card_focus_screen_open"></div>
				</div>
			</div>

		</main>
		<footer></footer>
		<script>
	var fourcards07122023 = (function() {
		const close_button_html = `<button type="button" class="image_card_screen_close">
					 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1a1a1a" style="width:1.5rem;height:1.5rem;">
					   <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
					 </svg> <small>close</small>
				 </button>`;
		var cards = $(".image_card");
		var screen = $("#image_card_screen");

		let active_card, card_text, screen_width, card_index, close_button;

		$(document).ready(function() {
			cards.on("click", function(event) {
				event.stopPropagation();

				active_card = $(this);

				handle_card_interaction(active_card);

			})
			cards.on("keyup", function(event) {
				event.stopPropagation();

				active_card = $(this);
				if (event.which !== 13) {
					return false;
				}
				handle_card_interaction(active_card);

			})
			cards.on("keydown", function(e) {
				if (e.which === 13) {
					e.preventDefault();
				}
			})
		})

		function handle_card_interaction(active_card) {
			screen_width = window.innerWidth;
			card_text = active_card.find('.image_card_heading_text');

			active_card.prepend(close_button_html);
			close_button = $(".image_card_screen_close");

			screen.fadeIn("fast", function() {
				screen.css({ "display": "flex" })
			});
			active_card.addClass("image_card_focus");
			card_text.fadeIn("fast");
			active_card.scrollTop(600);
			create_close();
		}

		function create_close() {
			close_button[0].focus({ focusVisible: true });

			close_button.on("click", function(event) {
				event.stopPropagation();
				handle_close_card();
			});

			close_button.on("keyup", function(event) {
				event.stopPropagation();
				if (event.which == 13) {
					handle_close_card();
				}

			});
			close_button.on("keydown", function(e) {
				if (e.which == 9) {
					e.preventDefault();
					return false;
				}
			})

		}


		function handle_close_card() {
			screen.fadeOut("fast");
			card_text.hide();
			active_card.removeClass("image_card_focus");
			active_card[0].focus({ focusVisible: true });

			close_button.off();
			close_button.remove();
			close_button = undefined;
		}


	})();
		</script>
	</body>
</html>
