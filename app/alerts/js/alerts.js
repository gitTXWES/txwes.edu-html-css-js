var AlertScripts12123 = (function() {
	$(document).ready(function() {

		// controls the opening functionality of the menu
		$(".alert-menu-open").on("click", function() {
			$(this).hide();
			$(this).nextAll().show();
		})

		// controls the closing functionality of the menu
		$(".alert-menu-close").on("click", function() {
			$(this).hide();
			$(this).next().hide();
			$(this).prev().show();
		})

		//  ********************************* begin edit page scripts

		var queryString = window.location.search;
		var urlParams = new URLSearchParams(queryString);
		var alert_id = urlParams.get('alert_id');
		var input_alert_id = $("#alert_id");
		var input_alert_name = $("#alert_name");
		var input_alert_instructions = $("#alert_instructions");
		var input_alert_description = $("#alert_description");
		var info_message = $("#message") || false;

		var banner = $("alert-banner");
		var close_banner = $("#close-alert");
		var banner_title = $("#banner_title");
		var banner_instructions = $("#banner_instructions");
		var alert_date = new Date();


		if (alert_id) {
			get_alert(alert_id);
		}

		/*  gets the alert that needs to be edited  and calls the form to be prefilled */
		function get_alert(alert_id) {
			$.ajax({
				url: "http://localhost/alerts/php/get-alert.php",
				type: "GET",
				data: {
					"get_alert": 1,
					"alert_id": alert_id,
				},
				success: function(response) {
					var alert_by_id = JSON.parse(response);
					if (!banner.length) {
						prefill_form(alert_by_id);
					} else {
						fill_banner(alert_by_id);
					}

				}
			})
		}

		/*  pre-fills the form data with information relieved from database*/
		function prefill_form(data) {
			if (data.message) {
				display_messages(data.message);
			};
			input_alert_id.val(alert_id);
			input_alert_name.val(data.alert_name);
			input_alert_instructions.text(data.instructions);
			input_alert_description.text(data.description);
			switchButton(data.active);
		}

		/*	 displays and hides activate and deactivate buttons */
		function switchButton(potato) {
			if (potato) {
				$("#activate").hide();
				$("#deactivate").show();
			} else {
				$("#activate").show();
				$("#deactivate").hide();
			}
		}


		/* sets the location header to redirect to the preview page with alert_id */
		if ($("#preview_alert").length) {
			$("#preview_alert").on("click", function() {
				window.location.href = "http://localhost/alerts/preview.php?alert_id=" + alert_id;
			})
		}


		/*  listens for the submit event on the form and sends the form data  */
		if ($("#updateAlertForm").length) {
			$("#updateAlertForm").on("submit", function(event) {
				event.preventDefault();
				var form_data = $(this).serialize();
				$.ajax({
					url: "http://localhost/alerts/php/update-alert.php",
					type: "POST",
					data: form_data,
					success: function(response) {
						var message = JSON.parse(response);
						display_messages(message.message);
					}
				})
			});
		}
		/* removes the alert from the database and redirects back to the index */
		if ($("#delete_alert").length) {
			$("#delete_alert").on("submit", function(event) {
				event.preventDefault();

				$.ajax({
					url: "http://localhost/alerts/php/delete-alert.php",
					type: "POST",
					data: { "alert_id": alert_id },
					success: function(response) {
						var message = JSON.parse(response);
						if (message == true) {
							window.location.replace("http://localhost/alerts/index.php");
						}
					}
				})
			})
		}

		/* event listener for acivate_alert form listens for submit and sends the alert_id to be activated */
		if ($("#activate_alert").length) {
			$("#activate_alert").on("submit", function(event) {
				event.preventDefault();
				var answer = confirm("Activate Alert for Campus?");
				switch (answer) {
					case true:
						$.ajax({
							url: "http://localhost/alerts/php/activate-alert.php",
							type: "POST",
							data: { "alert_id": alert_id },
							success: function(response) {
								var message = JSON.parse(response);
								display_messages(message.message);
								get_alert(alert_id);
							}
						});
						break;
					case false:
						return;
						break;
				}
			})
		}
		/* event listener for deacivate_alert form listens for submit and sends the alert_id to be deactivated */
		if ($("#deactivate_alert").length) {
			$("#deactivate_alert").on("submit", function(event) {
				event.preventDefault();
				var answer = confirm("End Alert for Campus?");
				switch (answer) {
					case true:
						$.ajax({
							url: "http://localhost/alerts/php/deactivate-alert.php",
							type: "POST",
							data: { "alert_id": alert_id },
							success: function(response) {
								var message = JSON.parse(response);
								display_messages(message.message);

								get_alert(alert_id);
							}
						})
						break;
					case false:
						return;
						break;

				}
			})
		}

		// displays any messages for the user if an alert is missing etc..
		function display_messages(info) {
			info_message.text(info);
			info_message.parent().show();
		}


		if($("#message-close").length){
		$("#message-close").on("click", function() {
			$(this).next().html('');
			$(this).parent().hide();
		})
}
		//  ********************************* begin preview scripts
		if (close_banner.length) {
			close_banner.on("click", function() {
				banner.hide();
			})
		}

		function fill_banner(alert_info) {
			if (alert_info.message) {
				display_messages(alert_info.message);
			};
			banner_title.text(alert_info.alert_name);
			banner_instructions.text(alert_info.instructions);
			const options = {
				weekday: "short",
				year: "numeric",
				month: "long",
				day: "numeric",
			};
			$("#alert_date").text(alert_date.toLocaleString('en-US', options));
		}

        //  ********************************* begin create scripts

		//captures the submit function and send ajax request to server to create a new alert
		if ($("#newAlertForm").length) {
			$("#newAlertForm").on("submit", function (event) {
						event.preventDefault();
						$("#message-close").click();

						var form_data = $(this).serialize();

						$.ajax({
						url: "http://localhost/alerts/php/create-alert.php",
						type:"POST",
						data: form_data,
						success:function(response){
								var message = JSON.parse(response);
								if(message.hasOwnProperty("success")){
									display_succcess_message(message.success, message.name);
								} else {
									display_error_messages(message.errors);
								}
						}

					});
			})

		}

		// handles successful result from create new alert
		function display_succcess_message(row, name){
			let success_message = `<span class="text-[#002460]">The New Alert ${name} is Available</span><br />
					<div class="inline-grid place-content-between text-[#002460] mt-4 grid-flow-col w-full"> <a href="#">Home <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
					  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
					</svg>

</a> <a href="/edit.php?alert_id=${row}">Edit <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
</svg>

</a></div>
			 ` ;
			 info_message.append(success_message);
			 info_message.parent().show();

		}

		//displays error messages for create alert page
			function display_error_messages(errors){
				if (Array.isArray(errors)) {
					info_message.html('');
					errors.forEach((element) => {
						switch (element) {
							case "alert_name":
							info_message.append("Please add a Name for this Alert" + '<br>');
							change_label_color(element);
							break;
							case "alert_description":
							info_message.append("Please describe the reason for this Alert" + '<br>');
							change_label_color(element);
							break;
							case "alert_instructions":
							info_message.append("Please give instructions if this Alert is Active" + '<br>');
							change_label_color(element);
							break;
							default:
							break;

						}

				}	)
				info_message.parent().show();
			}
		}

		//restes all messages in error or success
		if($("#create_reset").length){
			$("#create_reset").on('click', function(){
				$("label").css("color", "#5c98ff");
				$("#message-close").click();
			})
		}

		//changes the label color to red and back
			function change_label_color (label){
				var label=$("#" + label);
				label.prev().css("color", "#E00F00");
				label.one("input", function(){
					label.prev().css("color", "#5c98ff");
					$("#message-close").click();
				})

			}


		//*********************************
	})
})(); //end namespace
