var txwes_table_82923 = (function() {

	const txwes_table = document.querySelectorAll(".txwes_table_818_outer");
	const column_rows = document.querySelectorAll(".txwes_table_818_row");

	let t4_unique_id;

	$(document).ready(function() {
		//removes the row if the first column is blank
		column_rows.forEach((row) => { if (row.firstElementChild.innerHTML == "") { row.remove() } });

		//right justify the third column if a number is present or begins with a $ in any row of column 3
		txwes_table.forEach((table) => {
			table.querySelectorAll(".txwes_table_818_row").forEach((row) => {
				let t4_p = row.lastElementChild;
				if (t4_p.firstElementChild) {
					if (!isNaN(t4_p.firstElementChild.innerHTML) || t4_p.firstElementChild.innerHTML.startsWith("$")) {
						align_right(table);
					}
				}
			})
		})

		//  adds the button to the table if expandable is checked in content type
		//  adds the appropriate aria-labels if expandable is selected
		txwes_table.forEach((table) => {
			t4_unique_id = table.dataset.table_id;

			var button = `<button class="txwes_table_drop_down"
					  id="txwes_table_drop_down_${t4_unique_id}"
					  type="button"
					  aria-expanded="false"
					  aria-controls="txwes_table_drop_down_body_${t4_unique_id}">
					  <div class="txwes_table_818_button rotate_close">
						  <svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
					  </div>
					  </button>
					  `;

			let body_label = {
				id: "txwes_table_drop_down_body_" + t4_unique_id,
				role: "region",
				"aria-labelledby": "txwes_table_drop_down_" + t4_unique_id,
			}
			let table_title = table.querySelector(".txwes_table_818_heading") || false;
			if (table.dataset.dropdown == "true"  && table_title == true) {

				addDropdown_button(table, button);
				addLabel(table, body_label);
				//add the click event on the heading to expand and collapse table
				$(table).find(".txwes_table_818_heading").on("click", function(e) {
					e.stopPropagation();
					table_show_hide($(this));
				})
			}
		})

	});

	//handles the right alignment
	function align_right(table) {
		table.querySelectorAll(".txwes_table_818_row").forEach((row) => { row.lastElementChild.classList.add("txwes_table_818_column_right"); });
		table.querySelector(".txwes_table_818_columns_titles").lastElementChild.classList.add("txwes_table_818_column_right");
	}

	//handles the aria label addition
	function addLabel(table, body_label) {
		let labels = Object.keys(body_label);
		let body_content = table.querySelector(".txwes_table_818_columns_wrap");
		labels.forEach((key) => { body_content.setAttribute(key, body_label[key]) });
		body_content.classList.add("txwes_818_hidden");
	}

	//handles adding the button
	function addDropdown_button(table, button) {
		table.querySelector(".txwes_table_818_heading").insertAdjacentHTML("afterbegin", button);
	}

	//toggles open or closed based on presence of .rotate_close
	function table_show_hide(ele) {
		let drop_down_button = ele.find(".txwes_table_818_button");

		if (drop_down_button.hasClass("rotate_close")) {
			table_open(drop_down_button);
		} else {
			table_close(drop_down_button);
		}
	}

	//handles open table animation css class animation
	function table_open(ele) {

		ele.removeClass("rotate_close").addClass("rotate_open");
		ele.parent().parent().next().removeClass("txwes_818_hidden").addClass("txwes_818_show");
	}

	//handles close table animation css class animation
	function table_close(ele) {
		console.log()
		ele.removeClass("rotate_open").addClass("rotate_close");
		ele.parent().parent().next().removeClass("txwes_818_show").addClass("txwes_818_hidden");
	}
})();
