var mm,tl;

export default {
	inject: ['gsap'],
	props:{
	//key:value
	},
	computed:{

	},
	data(){
		return {
			//key : value
		}
	},
	mounted() {
			mm = this.gsap.matchMedia();

			tl = this.gsap.timeline();

			mm.add("(prefers-reduced-motion: reduce)",() => {
				tl.set(this.$refs.menu,{xPercent:0,})
			},this.$refs.menu)

			mm.add("(max-width: 1023px)",() => {
				tl.fromTo(this.$refs.menu,
				{xPercent:100},
				{xPercent:0,
				 ease:"power1.in",
				 duration:.5
				})
				tl.fromTo('.menu_nav_item',
						{
						xPercent:+70,
						opacity:0
						},{
						xPercent:0,
						duration:.25,
						opacity:1,
						ease:"power1.in",
						stagger:.2
						},">-.1")

			},this.$refs.menu);


			mm.add("(min-width: 1024px)",() => {
				tl.fromTo(this.$refs.menu,
				{xPercent:200},
				{xPercent:100,
				 ease:"power1.in",
				 duration:.5
				})
				tl.fromTo('.menu_nav_item',
						{
						xPercent:+70,
						opacity:0
						},{
						xPercent:0,
						duration:.25,
						opacity:1,
						ease:"power1.in",
						stagger:.2
						},">-.1")


			},this.$refs.menu);




	 },

	watch:{
	//conditional logic to call a method
	},
	methods:{
		reverseTl(){
				tl.timeScale(2).reverse().then(this.revertTl)

		},
		revertTl(){
			tl.revert();
			this.$emit("close")
		},
	},
	template:`
	<div ref="menu" class="menu_outer">
		<div class="menu_inner">
			<nav>
			<ul>
			<li class="menu_nav_item"><a href="#">Blog Home</a></li>
			<li class="menu_nav_item"><a href="#">Featured</a></li>
			<li class="menu_nav_item"><a href="#">TXWES.EDU</a></li>
			<li class="menu_nav_item"><a href="#">Admissions</a></li>
			<li class="menu_nav_item"><a href="#">Academics</a></li>
			</ul>
			</nav>
		</div>
		<button class="header_menu_close" @click="reverseTl">
			<img src="images/icons/close-x.svg" alt="close icon" />
		</button>
	</div>
	`
}
