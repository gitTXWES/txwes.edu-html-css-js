document.addEventListener("DOMContentLoaded", (event) => {
	gsap.registerPlugin(ScrollTrigger)

	let slate_banner_mobile_button = document.querySelector(".slate_banner_mobile_button");
	let sticky_slate_banner_mobile_button = document.querySelector(".sticky_slate_banner_mobile_button");
	let form_close_button = document.querySelector(".icon_close_circle_wrap");

	let form_outer = document.querySelector(".pop_up_slate_outer");
	let apply_sticky_banner = document.querySelector(".apply_sticky_banner_outer");

	const slate_wrapper = document.getElementById("slate_form");
	const pop_up_div = document.getElementById("pop_up_slate");
	const banner_slate = document.getElementById("banner_slate");
	const txwes_slate_form = document.getElementsByTagName("form")
	console.log(txwes_slate_form);

	form_close_button.addEventListener("click", function() {
		closeFormAnimation()
		slate_banner_mobile_button.setAttribute("aria-expanded", "false")
		sticky_slate_banner_mobile_button.setAttribute("aria-expanded", "false")
	});

	slate_banner_mobile_button.addEventListener("click", function() {
		openFormAnimation();
		this.setAttribute("aria-expanded", "true")
	});


	sticky_slate_banner_mobile_button.addEventListener("click", function() {
		openFormAnimation()
		this.setAttribute("aria-expanded", "true")
	})

	//onload places the slate form in the appropriate div
	// default -> <div class="pop_up_slate_form">
	//desktop -> <div class="slate_form_wrap_inner_right">
	switch (mediaSize()) {
		case true:
			moveForm(banner_slate);
			break;
		default:
			false;
	}
	//moves the form around the dom
	function moveForm(div) {
		div.append(slate_wrapper)
	}

	//checks against media query for desptop window size
	function mediaSize() {
		let lg = window.matchMedia("(min-width: 1024px)");
		return lg.matches
	}

	// delays the call to resize event
	let debounce = (callback, delay) => {
		let myTimeout;
		return () => {
			clearTimeout(myTimeout);
			myTimeout = setTimeout(() => {
				callback()
			}, delay);
		};
	};

	function doDebounce() {
		mediaSize() ? debounce(moveForm(banner_slate), 200) : debounce(moveForm(pop_up_div), 200);
	}

	window.addEventListener('resize', () => doDebounce());

	//animation for form slate form pop-up closing
	function closeFormAnimation() {
		gsap.to(form_outer, {
			opacity: 0,
			duration: .3,
			ease: "power2.out",
			scale: 0,
			transformOrigin: "center 25%",
			id: "closeForm",
			clearProps: true,
		})
	}
	//animation for form slate form pop-up opening
	function openFormAnimation() {
		gsap.to(form_outer, {
				opacity: 1,
				duration: .3,
				scale: 1,
				transformOrigin: "center 25%",
				ease: "power2.in",
				onStart: function() { form_outer.setAttribute("style", "display:block") }
			}

		)
	}
	//Toggles the dom location of the slate form on screen sizes <= 1024px
	//Slate forms can only be on the page one time
	//plays the animation in reverse for sticky banner
	function screenFormLocationToggle() {
		if (mediaSize()) {
			moveForm(banner_slate);
			scrolling_sticky_banner.reverse();
		} else {
			scrolling_sticky_banner.reverse();
		}
	}
	//creates the scroll trigger for the sticky banner
	let scrolling_sticky_banner = gsap.timeline({
		scrollTrigger: {
			trigger: '.slate_banner_outer',
			start: 'bottom top',
			pin: apply_sticky_banner,
			endTrigger: "main",
			end: "bottom center",
			markers: true,
			pinSpacing: false,
			onEnter: () => moveForm(pop_up_div),
			onLeaveBack: screenFormLocationToggle,
		}
	});

	//sticky banner animation
	scrolling_sticky_banner.from(apply_sticky_banner, {
		scale: 0,
		transformOrigin: "center top",
		opacity: 0,
		duration: .3,
	})


});
