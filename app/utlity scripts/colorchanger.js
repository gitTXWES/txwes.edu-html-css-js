document.addEventListener("DOMContentLoaded", (event) => {

	const champblue_text = ['.program_text_title', '.donation_level', '.benefits_outer>h3', '.headline_block_headline', '.headline_body_headline'];

	const faded_blue = "color:#475078;";
	(() => {
		const faq = document.querySelector(".faq_block_outer");
		faq.setAttribute("style", "background-color:#475078;");
	})();

	let yellowlines = document.querySelectorAll("svg");
	[yellowlines[2], yellowlines[3], yellowlines[4]].forEach((line) => line.style.fill = "#D3C9B8");

	document.querySelector(".yellow_block_grid_inner").setAttribute("style", "background-color:#D3C9B8;");

	const addBlue = (collection) => {
		let elements = document.querySelectorAll(collection);
		elements.forEach((element) => element.setAttribute("style", faded_blue));
	};

	champblue_text.forEach((ele) => addBlue(ele));



});