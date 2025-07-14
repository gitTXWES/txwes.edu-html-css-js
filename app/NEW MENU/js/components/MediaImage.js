export default {
	props:{
	media:Object
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
	<img :src="'./' + media.url" :alt="media.description" />
	`
}