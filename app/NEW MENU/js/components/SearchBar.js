export default {
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
	watch:{
	//conditional logic to call a method
	},
	methods:{
	
	},
	template:`
	<div class="menu_search_bar">
		  <form class="menu_search_form" method="get" action="/search/">
			  <input class="menu_search_input" type="text" name="q" aria-label="Search field">
		  <button class="menu_search_button" type="submit">
		  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#ffffff"  aria-labelledby="menuSearchIconId" >
			  <title id="menuSearchIconId">magnifying glass icon</title>
			<path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
		  </svg>
		  </button>
	  </form>
	  </div>
	`
}