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

			<div class="vid-card w-fit mx-auto relative">
				<div class="vid-card__outer-wrap shadow-gray-500 shadow-md flex flex-col md:flex-row relative z-30 ">
					<div id="vid-test" class="vid-card__video-wrap aspect-video bg-gray-300">

						<div id="player"></div>

					</div>


					<div class="vid-card__copy-wrap  w-[14rem] sm:h-[18rem]  lg:h-[27rem] py-4 px-6 bg-white hidden md:block">
						<div class="vid-card__copy-wrap--inner  h-full overflow-hidden flex flex-col place-content-between">
						<h1 class="vid-card__copy-wrap__heading  text-xl font-bold text-[#002460]">Title Title Title Tilde Title Title Title Tilde</h1>
						<div  class="vid-card__copy-wrap__text text-lg leading-relaxed text-center"><a class="text-[#0072BC]" href="#">transcript</a></div>
						</div>
					</div>

					<div class="vid-card__copy-wrap  w-[22rem] sm:w-[32rem] h-[9rem]  p-4 bg-white md:hidden ">
						<div class="vid-card__copy-wrap--inner  h-full overflow-hidden flex flex-col place-content-between">
						<h1 class="vid-card__copy-wrap__heading  text-xl font-bold text-[#002460]">Title Title Title Tilde Title Title Title Tilde</h1>
						<div  class="vid-card__copy-wrap__text text-lg leading-relaxed mx-auto" ><a class="text-[#0072BC]" href="#">transcript</a></div>
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
			  videoId: 'pGNlZx9l924',
			  playerVars: {
				'playsinline': 1,
				'modestbranding':1,
			  },
			  events: {
				'onReady': onPlayerReady,
				'onStateChange': onPlayerStateChange
			  }
			});
		  }

		  // 4. The API will call this function when the video player is ready.
		  function onPlayerReady(event) {
			event.target.playVideo();
		  }

		  // 5. The API calls this function when the player's state changes.
		  //    The function indicates that when playing a video (state=1),
		  //    the player should play for six seconds and then stop.



		  function onPlayerStateChange(event) {
			if (event.data == YT.PlayerState.PLAYING ) {
			  setTimeout(console.log(player.getCurrentTime()), 2000);
			}
		  }



		</script>

	</body>
</html>
