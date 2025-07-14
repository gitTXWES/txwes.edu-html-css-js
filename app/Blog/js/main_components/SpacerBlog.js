
export default {
	components:{
	//ComponentName
	},
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
	<div class="spacer_outer">
		  <div class="spacer_inner">
			  <svg xmlns="http://www.w3.org/2000/svg"><line x1="0" x2="500" stroke-width="5"></line></svg>
			  <p><slot></slot></p>
				  <svg xmlns="http://www.w3.org/2000/svg"><line x1="0" x2="500" stroke-width="5"></line></svg>
		  </div>
	  </div>
	`
}
