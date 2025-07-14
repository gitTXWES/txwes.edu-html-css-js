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
					<div id="vid-test" class="vid-card__video-wrap w-[22rem]  sm:h-[18rem] sm:w-[32rem] bg-gray-300">

					</div>
					<div class="vid-card__controls  inline-flex absolute z-40 top-[10rem] sm:top-[15.5rem] md:bottom-3  w-full max-w-[32rem]">
				<button class="vid-card__controls__play text-white relative z-50 ml-6"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
					  <path fill-rule="evenodd" d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z" clip-rule="evenodd" />
					</svg>
				</button>
               <button class="vid-card__controls__pause text-white relative z-50">
	               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
					  <path fill-rule="evenodd" d="M6.75 5.25a.75.75 0 01.75-.75H9a.75.75 0 01.75.75v13.5a.75.75 0 01-.75.75H7.5a.75.75 0 01-.75-.75V5.25zm7.5 0A.75.75 0 0115 4.5h1.5a.75.75 0 01.75.75v13.5a.75.75 0 01-.75.75H15a.75.75 0 01-.75-.75V5.25z" clip-rule="evenodd" />
					</svg>
			   </button>
			   <div class="vid-card__controls__full text-white relative z-50">
				     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					   <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
					 </svg>
			   </div>
		</div>

					<div class="vid-card__copy-wrap  w-[14rem] h-[18rem]  py-4 px-6 bg-white hidden md:block">
						<div class="vid-card__copy-wrap--inner  h-full overflow-hidden">
						<h1 class="vid-card__copy-wrap__heading  text-xl font-bold text-[#002460]">Title Title Title Tilde Title Title Title Tilde</h1>
						<p class="vid-card__copy-wrap__text text-lg leading-relaxed">Lorem ipsum dolor amet mustache knausgaard +1, blue bottle waistcoat tbh semiotics artisan synth stumptown gastropub cornhole celiac swag. Brunch raclette vexillologist post-ironic glossier ennui XOXO mlkshk godard pour-over blog tumblr humblebrag. Blue bottle put a bird on it twee prism biodiesel brooklyn. Blue bottle ennui tbh succulents.</p> -
						</div>
					</div>

					<div class="vid-card__copy-wrap  w-[22rem] sm:w-[32rem] h-[9rem]  p-4 bg-white md:hidden ">
						<div class="vid-card__copy-wrap--inner  h-full overflow-hidden">
						<h1 class="vid-card__copy-wrap__heading  text-xl font-bold text-[#002460]">Title Title Title Tilde Title Title Title Tilde</h1>
						<p class="vid-card__copy-wrap__text text-lg leading-relaxed">Lorem ipsum dolor amet mustache knausgaard +1, blue bottle waistcoat tbh semiotics artisan synth stumptown gastropub cornhole celiac swag. Brunch raclette vexillologist post-ironic glossier ennui XOXO mlkshk godard pour-over blog tumblr humblebrag. Blue bottle put a bird on it twee prism biodiesel brooklyn. Blue bottle ennui tbh succulents.</p>
						</div>
					</div>

				</div>
			</div>

<div id="form_7206c356-583e-48f1-83a4-37311c138aaa">Loading...</div><script async="async" src="https://apply.txwes.edu/register/?id=7206c356-583e-48f1-83a4-37311c138aaa&amp;output=embed&amp;div=form_7206c356-583e-48f1-83a4-37311c138aaa">/**/</script>

</main>
		<footer></footer>
		<script src="https://player.vimeo.com/api/player.js"></script>
		  <script>
		  var vid_test = document.querySelector("#vid-test");
		  var options = {
			  url: "https://player.vimeo.com/video/799519978?h=76a4639519&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479",
			  byline: false,
			  portrait:false,
			  responsive:true,
			  controls:true,
			  progress_bar:true,
			  vimeo_logo:false,

		  };
		  var vid_card_controls =$(".vid-card__controls");
		  var vid_card_play = $(".vid-card__controls__play");
		  var vid_card_pause = $(".vid-card__controls__pause");
		  var vid_card_full = $(".vid-card__controls__full");
		  var vid_card__copy= $(".vid-card__copy-wrap--inner");
		  var vid_card__outer_wrap = $(".vid-card__outer-wrap");
		  var fade_controls;
		  var player = new Vimeo.Player(vid_test, options);

		  vid_card_play.on('click', function () {
			  player.play();
			 switch_play_pause();
		  		  });

		  function switch_play_pause(){
			 player.getPaused().then(function(paused){
				 			  console.log(paused);

			 });
		  }
		 vid_card__outer_wrap.hover(function() {
		  vid_card_controls.stop(true,true).animate({opacity:1},750)
		 }, function() {
		  vid_card_controls.stop( true, true ).animate({opacity:0.01},750)
		 });


		  vid_card_pause.on("click", function(){
			  player.pause();
			  switch_play_pause();


		  });
		  vid_card_full.on('click', function(){
			  player.requestFullscreen();
		  })

		function cta (){
			vid_card__copy.html(cta_copy);
			$(".cta_copy").animate({opacity: 1},1000);
		  }
		  var cta_copy = `<div class="cta_copy flex flex-col place-content-center h-full pb-6" style="opacity:0;">
		  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FED000" class="w-8 h-8">
			<path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
			<path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
		  </svg>
		  <input class="mt-6 mb-8 border-gray-400 border-0 border-b-2  focus:border-[#fed000] focus-visible:outline-none" type="text" />
		  <button class="self-end w-10 h-8 bg-[#FED000] rounded-md text-center  pl-[.625rem]">
			  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ffffff" class="w-5 h-5">
				<path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z" clip-rule="evenodd" />
			  </svg>
			  </button>
		  </div>
		  `;
		  player.on('ended', function(){cta()});


</script>

	</body>
</html>
