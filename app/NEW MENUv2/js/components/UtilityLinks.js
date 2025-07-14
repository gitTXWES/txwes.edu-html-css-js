export default {
	props:{
		utility_links:Array
	},
	computed:{
	
	},
	data(){
		return {
			//key : value
		}
	},
	watch:{
	//conditional logic to call a method
	},
	mounted (){
		this.getUtilityLinks();
	},
	methods:{
	getUtilityLinks(){
		let links = document.querySelectorAll('.utility_link>a');
		let last_link = links.length - 1;
		let link = links[last_link];
		link.addEventListener("focusout", this.menuFocus);
		
	},
	menuFocus(){
		let firstMenuButton = document.querySelector("button").focus();
	}
	},
	template:`
	<div class="utility_link_wrap">
	<nav>
		<ul class="utility_link_ul">
		<li class="utility_link" v-for="link in utility_links">
			<a :href="link.url">{{link.name}}</a>
		</li>
		</ul>
		</nav>
	</div>
	`
}