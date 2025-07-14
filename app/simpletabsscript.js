function showTab(tab,button) {
	$('.simple-tabs-tab').hide();
	$('#'+tab).show();
	$('.simple-tabs-button').removeClass('active');
	$(button).addClass('active');
}

var checkTabsButtonsWidth = 0;
var currPageWidth = 0;

function window_resized(){
	if (currPageWidth != $(window).width()) {
		$('.simple-tabs-buttons').each(function() {

			if (checkTabsButtonsWidth > $(this).innerWidth()) {
				$(('.simple-tabs-buttons')).hide();
				$('.simple-tabs-select').show();
			}
			else {
				$('.simple-tabs-buttons').show();
				$('.simple-tabs-select').hide();
			}
		});
	}
}

function tab_width_check(){
	console.log("tab width checked");
	let tab_button_container = $(".simple-tabs-buttons");
	tab_button_container.each(function(){
		let tab_button_container_width = $(this).innerWidth();
		if(checkTabsButtonsWidth > tab_button_container_width){
			$(this).hide();
			$('.simple-tabs-select').show();
		}
	})
}

$(document).ready(function(){
	$($('.simple-tabs-button')[0]).addClass('active');

	$('.simple-tabs-button').each(function() {
		checkTabsButtonsWidth += $(this).outerWidth(true);
	});

	currPageWidth = $(window).width();

	if (window.location.hash) {
		if ($(window.location.hash + '.simple-tabs-tab').length > 0) {
			$('.simple-tabs-tab').hide();
			$(window.location.hash).show();
			$('.simple-tabs-button').removeClass('active');
			$('.simple-tabs-button[onclick*="'+window.location.hash.substring(1)+'"').addClass('active');
		}
	}
	tab_width_check();
});

$(window).on("resize", function(){
	window_resized();
});

