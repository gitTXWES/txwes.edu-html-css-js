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
				.the-tabs-wrap{
					display: inline-grid;
					width: 100%;
					text-align: center;
					padding: 0 1rem;
					gap: .5rem;
					place-content: space-evenly;
					grid-auto-flow: column;
					grid-template-columns: repeat(3, minmax(0, 1fr));
				}
				.the-tab{
					padding: 1rem 1.5rem;
					background-color: #0072BC;
					border-radius: .75rem;
					width: 100%;
					position: relative;
				}
				.the-tab:hover{
					cursor: pointer;
				}
				.the-tab_heading{
					color: #ffffff;
				}
				.the-tab_indicator{
					left: (calc(50% - 0.75rem));
					opacity:0;
					transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) ;
					transition-duration: 150ms;
					transition-delay: 150ms;
					transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;;
					background-color: #0072BC;
					transform: rotate(45deg);
					width: 1.5rem;
					height: 1.5rem;
					bottom: -0.5rem;
					position: absolute;
				}

				.the-tab--content-wrap{
					padding: 1rem;
					width: 100%;
				}

				.the-tab--content{
					margin: 0 auto;
					overflow: auto;
					padding: 1rem;
				}
				.the-tab--content_heading{
					text-align: center;
					padding: .5rem 1rem;
					width: 100%;
				}
				.the-tab--content_heading h3{
					font-weight: 700;
					font-size: 1.125rem;
				}
				/* sm	640px  */
				@media (min-width: 640px) {  }

				/*md	768px	*/
				@media (min-width: 768px) {
					.the-tabs-wrap{
						gap:1.5rem;
						padding:0 2rem;

					}

				 }

				/* lg	1024px	*/
				@media (min-width: 1024px) { }

				/*xl	1280px	*/
				@media (min-width: 1280px) {  }
				/*2xl	1536px	*/

				@media (min-width: 1536px) {  }

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

		<div class="the-tabs-wrap">
		<div class="the-tab">
			<div class="the-tab_heading">TAB 3 OF 3 TAB 3 OF 3</div>
			<div class="the-tab_indicator " style="left:calc(50% - .75rem);"></div>
		</div>
		<div class="the-tab">
			<div class="the-tab_heading">TAB 3 OF 3</div>
			<div class="the-tab_indicator" style="left:calc(50% - .75rem);"></div>
		</div>
		<div class="the-tab">
			<div class="the-tab_heading">TAB 3 OF 3</div>
			<div class="the-tab_indicator" style="left:calc(50% - .75rem);"></div>
		</div>
	</div>
	<div class="the-tab--content-wrap" >

	</div>
	<div class="the-tabs-wrap">
		<div class="the-tab">
			<div class="the-tab_heading">TAB 3 OF 3 TAB 3 OF 3</div>
			<div class="the-tab_indicator " style="left:calc(50% - .75rem);"></div>
		</div>
		<div class="the-tab">
			<div class="the-tab_heading">TAB 3 OF 3</div>
			<div class="the-tab_indicator" style="left:calc(50% - .75rem);"></div>
		</div>
		<div class="the-tab">
			<div class="the-tab_heading">TAB 3 OF 3</div>
			<div class="the-tab_indicator" style="left:calc(50% - .75rem);"></div>
		</div>
	</div>
	<div class="the-tab--content-wrap" >

	</div>





		</main>
		<footer></footer>
		<script>
			var the_tab_content_02172023;

						if (Array.isArray(the_tab_content_02172023) ){
							console.log(the_tab_content_02172023)
						}else{
							the_tab_content_02172023 =[];
						};

				const content_open = `<div class="the-tab--content mx-auto rounded-xl p-4 overflow-auto "><div class="px-4 py-2 text-center w-full"><h3 class="font-bold text-lg">`;

				const content_heading_close = `</h3></div><div class="">`;

				const content_close = `	</div></div>`;


				the_tab_content_02172023.push(content_open +"t4Heading" + content_heading_close+"content" + content_close);
		</script>
		<script>
			var the_tab_content_02172023;

						if (Array.isArray(the_tab_content_02172023) ){
						}else{
							the_tab_content_02172023 =[];
						};

				var content_tab_2 = `<div class="the-tab--content mx-auto rounded-xl p-4 overflow-auto ">
					<div class="px-4 py-2 text-center w-full">
					<h3 class="font-bold text-lg">Heading Title</h3>
					</div>
					<div class="">
					<p class="indent-4 ">SQUAKKKKKKK </p>
					</div>
				</div>` ;
				var content_tab_3 =  `<div class="the-tab--content mx-auto rounded-xl p-4 overflow-auto ">
					<div class="px-4 py-2 text-center w-full">
					<h3 class="font-bold text-lg">Heading Title</h3>
					</div>
					<div class="">
					<p class="indent-4 ">TAB #3 </p>
					</div>
				</div>` ;
				the_tab_content_02172023.push(content_tab_2,content_tab_3 );
		</script>
		<script>
			var betterTabs02172023 =  (function () {
			document.addEventListener('DOMContentLoaded', function () {


				  const tabs= document.querySelectorAll(".the-tab");
				  var tabs_array = [];
				  tabs.forEach((ele) => tabs_array.push(ele));

			  if(tabs_array.length){
				  tabs_array.forEach((ele, indx)=> ele.addEventListener('click', event=>{ handleClick(ele, indx)}));
			  }
			  function handleClick(ele, indx){
				 let the_tab_content_wrap = ele.parentElement.nextElementSibling;
				let ele_parent = ele.parentElement;
				Array.from(ele_parent.children).forEach((ele)=>{
					ele.style.backgroundColor="#CCCCCC";
					ele.lastElementChild.style.opacity ="0";
				});
				ele.style.backgroundColor = "#0072BC";
				ele.lastElementChild.style.opacity = "1";
				the_tab_content_wrap.replaceChildren();
				the_tab_content_wrap.insertAdjacentHTML('afterbegin', the_tab_content_02172023[indx]);
			  };

			   },false)
			})(); //EOF
		</script>

	</body>
</html>
