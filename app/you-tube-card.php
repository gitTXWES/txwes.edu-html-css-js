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
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>
		<script src="https://cdn.tailwindcss.com"></script>

		<style>
			*{
				font-family: Arial, Helvetica, sans-serif;
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
		<style>
			.vid_card{
				width: fit-content;
				margin: 0 auto;
				position: relative;
			}
			.vid_card__outer_wrap{
				border:1px solid #f5f5f5;
				box-shadow:1px 2px 4px rgb(189 189 189 / 50%);
				position: relative;
				display: flex;
				flex-direction: column;
				z-index:30;
				padding: 1.25rem;
				border-radius: .875rem;
				gap:2.5rem;
				background-color: #fefefe;
			}
			.vid_card__video_wrap{
				aspect-ratio:16/9;
				background-color: #BDBDBD;
				border-radius: .875rem;
				width:100%;
			}
			#player{
				border-radius: .875rem;
			}
			.vid_card__copy_wrap{
				background-color:#fefefe;
			}

			.vid_card__copy_wrap_inner {
				overflow: hidden;
				height: 100%;
				display: flex;
				flex-direction: column;
				place-content: space-between;
			}

			.vid_card__copy_wrap__heading{
				font-family: Oswald,Arial, Helvetica, sans-serif;
				font-size: 1.75rem;
				text-transform: uppercase;
				color: #1a1a1a;
				line-height: 1.5;
				font-weight: 500;
			}
			.vid_card__copy_wrap__text{
				margin-top:1.25rem;
			}
			/* sm	640px  */
			@media (min-width: 640px) {  }

			/*md	768px	*/
			@media (min-width: 768px) {
				.vid_card__outer_wrap{
					flex-direction: row;
				}
			    .vid_card__copy_wrap__text{
					margin-top: 0rem;
}

			 }

			/* lg	1024px	*/
			@media (min-width: 1024px) {
				.vid_card__copy_wrap__heading{
					font-size:3rem;
				}

			}

			/*xl	1280px	*/
			@media (min-width: 1280px) {  }
			/*2xl	1536px	*/

			@media (min-width: 1536px) {  }
		</style>


			<div class="vid_card ">
				<div class="vid_card__outer_wrap">
					<div  class="vid_card__video_wrap ">
						<div id="player"></div>
					</div>
					<div class="vid_card__copy_wrap">
						<div class="vid_card__copy_wrap_inner ">
						<h1 class="vid_card__copy_wrap__heading ">Video Title or something engaging</h1>
						<div  class="vid_card__copy_wrap__text"><a href="#">link</a></div>
						</div>
					</div>


						</div>

			</div>

		</main>
		<footer></footer>
		<script>
		  // 2. This code loads the IFrame Player API code asynchronously.
		  var tag = document.createElement('script');

		  tag.src = "https://www.youtube.com/iframe_api";
		  var firstScriptTag = document.getElementsByTagName('script')[0];
		  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

		  // 3. This function creates an <iframe> (and YouTube player)
		  //    after the API code downloads.
		  var player;
		  function onYouTubeIframeAPIReady() {
			player = new YT.Player('player', {
			  width: '100%',
			  height:'100%',
			  videoId: 'UhSd1tzW83k',
			  playerVars: {
				'playsinline': 1,
				'modestbranding':1,
			  },
			  events: {

			  }
			});
		  }

		</script>

	</body>
</html>
