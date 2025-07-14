export default {
	props: ['routeName'],
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


	template:`
	<router-link :to="{name : routeName}" class="nav_button_wrap" >
	<span class="button-effect"></span>
	<span><slot></slot></span>
	</router-link>

	`
}
