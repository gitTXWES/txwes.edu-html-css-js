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
			.ceSoloContainer{
			  padding-top: 1rem;
			  padding-bottom: 0rem;
			  font-family: Arial, Helvetica, sans-serif;

			}
			.ceSoloIconTitle{
			  display: inline-flex;
			  align-items: ceSolonter;
			  cursor : pointer;

			}
			.ceSoloIconPlus, .ceSoloIconMinus{
			  color:#ffffff;
			}

			.ceSoloIconPlus svg, .ceSoloIconMinus svg{
			  height: 1.5rem;
			  width: 1.5rem;
			}
			.ceSoloTitle{
			  font-weight: 600;
			  font-size: 1.125rem;
			  line-height: 1.75rem;
			  padding-left: 1rem;
			  color:#002460;
			}

			.ceSoloBody{
			  padding-left: 2.6rem;
			  padding-right: 2.6rem;
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
			<div class="ceSoloContainer ">
				<div class="ceSoloIconTitle">
				<button class='ceSoloIconPlus' style="display:block;">
				  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" >
					<circle cx="12" cy="12" r='12' fill="#004B8D" stroke="none" ></circle>
					<path stroke-width="1.5" stroke="#f1f1f1" stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
				</svg>
				</button>
				<button class="ceSoloIconMinus" style="display: none;">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"  stroke="currentColor" >
					  <circle cx="12" cy="12" r='12' fill="#004B8D" stroke="none" ></circle>
					  <path stroke-width="1.5" stroke="#f1f1f1" stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
					</svg>
				</button>
				<div class="ceSoloTitle"><a href="#">This is the heading for the cross expander</a></div>
				</div>
				<div class="ceSoloBody" style="display:none">

			  <p>this is the content</p>
			  <a href="#" >This is a link</a>
			  <ul>
				  <li>1</li>
				  <li>2</li>
				  <li>3</li>
				  <li>4</li>
				  <li>5</li>
			  </ul>

			</div>




		</main>
		<footer></footer>
		<script>
		var crossExpanderSolo03092023 = ( function () {

		function setClickonSoloCrossexpanders(){

		var $ceSoloIconTitle = $('.ceSoloIconTitle');

			$ceSoloIconTitle.on('click', function(){
			$(this).next().slideToggle();
		});
		}

		  //Hides all empty crossexpanders by empty ceTitle
		  function hideBlankExpanders(){
				var $ceSoloContainers = $(".ceSoloContainer");


				$ceSoloContainers.each(function(){
				  if($.trim(this.lastElementChild.innerHTML) !== ""){
						 $(this).css("display","block");
					 }
					 });

		   }

		  $.when($.ready).then(
			function(){
				hideBlankExpanders();
				setClickonSoloCrossexpanders();
			}
		);
		  }) ();
		</script>

	</body>
</html>
