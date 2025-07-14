<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title> inputs </title>

		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>
		<script src="https://cdn.tailwindcss.com"></script>
<style>
			*, *::before, *::after {
				font-family: Arial, Helvetica, sans-serif;
				box-sizing: border-box;
				border-width: 0;
				border-style:solid;
			}
		select {
		/* A reset of styles, including removing the default dropdown arrow */
		  appearance: none;
		  /* Additional resets for further consistency */
		  background-color: transparent;
		  border: none;
		  padding: 0 1em 0 0;
		  margin: 0;
		  width: 100%;
		  font-family: inherit;
		  font-size: inherit;
		  cursor: inherit;
		  line-height: inherit;
		}
		.cta_block_blue_form_wrap {
			display: contents;
		}

		.cta_block_blue_form_inner{
			display:flex;
			flex-direction: column;
		}

		.cta_block_blue_form_heading {
			font-weight: 500;
			font-family: Oswald, Arial, Helvetica, sans-serif;
			font-size: 3rem;
			text-transform: uppercase;
			color: #ffffff;
			line-height: 3.625rem;
			margin-bottom: 1.25rem;
		}

		.cta_block_blue_form_label {
			font-size: 1rem;
			font-family: Arial, Helvetica, sans-serif;
			font-weight: 400;
			color: #ffffff;
		}

		.cta_block_blue_form_select {
			color: #454545;
			font-size: 1rem;
			width: 100%;
			background: transparent;
			position: relative;
			z-index: 30;
		}

		.cta_block_blue_form_button {
			padding: 0.8rem 4.5rem;
			font-size: 1rem;
			color: #1a1a1a;
			text-align: center;
			font-weight: 400;
			border-radius: 3.125rem;
			background-color: #fed000;
			width: fit-content;
			align-self: center;
		}

		.cta_block_blue_form_select_wrap{
				display: inline-flex;
				width: 100%;
				position: relative;
				place-items: center;
				background-color: #fff;
				border: 1px solid #cccccc;
				padding: .625rem;
				border-radius: 0.375rem;
		}

		.cta_block_blue_form_select_wrap svg{
			position: absolute;
			right: 0.625rem;

		}

		/* sm	640px  */
		@media (min-width: 640px) {  }

		/*md	768px	*/
		@media (min-width: 768px) {
			.cta_block_blue_form_wrap {
				width: 18rem;
				display: block;
			}

			.cta_block_blue_form_inner{
				display:contents;
			}

			.cta_block_blue_form_button {
				width: 100%;
			}
		  }

		/* lg	1024px	*/
		@media (min-width: 1024px) { }

		/*xl	1280px	*/
		@media (min-width: 1280px) {



		 }
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



					<div class="cta_block_blue_form_wrap">
						<h2 class="cta_block_blue_form_heading">SEE YOUR BIG SCHOLARSHIP!</h2>
						<form>
						<div class="cta_block_blue_form_inner">
							<label class="cta_block_blue_form_label" for="student_type">What type of Student are you?</label>
							<div class="cta_block_blue_form_select_wrap">
							<select id="student_type" class="cta_block_blue_form_select">
								<option>Select One</option>
							</select>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-[.875rem] h-[.875rem]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
							</svg>

							</div>
							<label class="cta_block_blue_form_label" for="student_gpa">Your GPA</label>
							<div class="cta_block_blue_form_select_wrap">
							<select id="student_gpa" class="cta_block_blue_form_select">
								<option>4.0</option>
								<option>3.5</option>
								<option>3.25</option>
							</select>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-[.875rem] h-[.875rem]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
							</svg>
							</div>
							<button class="cta_block_blue_form_button">Get My Estimate</button>
						</div>
					</form>
					</div>




		</main>
		<footer></footer>
	</body>
</html>
