

export default {
	
	props:{
	stewardshipBenefits:Object
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
	<div class="benefit_chart_outer" v-for="(value, key) in stewardshipBenefits.stewardship">
		<div class="dark_text" v-if="value"><div>{{key}}</div><img class="benefit_icon" src="gold_ram.png" alt="ram head icon" /></div>
		<div class="light_text" v-else><div>{{key}}</div><img class="benefit_icon" src="square.svg" alt="empty square"/></div>
	</div>
	`
}