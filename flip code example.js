gsap.registerPlugin(Flip);
gsap.config({ trialWarn: false });

let container = document.querySelector(".container");
let addButton = document.querySelector("#add-button");
let shuffleButton = document.querySelector("#shuffle-button");
let wrapColor = gsap.utils.wrap(["gradient-blue", "gradient-pink", "gradient-purple"]);
let count = 0;
let state;

function createBox() {
  let box = document.createElement("div");
  box.classList.add(wrapColor(++count));
  box.classList.add("box");
  box.textContent = "Click Me";
  
  function onClick() {
	box.removeEventListener("click", onClick);
	setState(() => box.classList.add("exiting"));
  }
  
  box.addEventListener("click", onClick);
  
  return box;  
}

// Create some initial boxes
container.prepend(createBox());
container.prepend(createBox());
container.prepend(createBox());
container.prepend(createBox());

addButton.addEventListener("click", () => {
  setState(() => container.prepend(createBox()));
});

shuffleButton.addEventListener("click", () => {
  setState(() => gsap.utils.shuffle(gsap.utils.toArray(".box")).forEach(box => container.append(box)));  
});

function setState(action) {
  state = Flip.getState(".box, .button");  
  action();
  animate();
}

function animate() {
	
  // get the items that are exiting in this batch
  let exiting = gsap.utils.toArray(".exiting");
  
  // Flip.from returns a timeline
  let timeline = Flip.from(state, {
	absolute: true, 
	ease: "power1.inOut",
	targets: ".box, .button",
	scale: true,
	simple: true,
	onEnter(elements) {
	  return gsap.fromTo(elements, { 
		opacity: 0,
		scale: 0
	  }, { 
		opacity: 1,
		scale: 1,
		delay: 0.2,
		duration: 0.3
	  });
	},
	onLeave(elements) {
	  return gsap.to(elements, { 
		opacity: 0, 
		scale: 0 
	  });
	}
  });
  
  // remove exited elements from the DOM
  timeline.add(() => removeExited(exiting));
}

function removeExited(exited) {
  
  gsap.utils.toArray(".box").forEach(box => {
	if (exited.includes(box)) {
	  box.remove();
	}
  });
}