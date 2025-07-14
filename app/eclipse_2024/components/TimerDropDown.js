import EclipseTimer from './EclipseTimer.js'

export default {
	components:{
	EclipseTimer
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
	<div class="drop_down_outer">
		 <div class="drop_down_inner">
			 <div class="drop_down_close" @click="$emit('closeDrop')">
			  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e9eef6" style="width:24px; height:24px;">
			   <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
			  </svg>
			 </div>
			 <div class="drop_title_wrap">
			 <div class="dropdown_img_wrap">
				   <img src="./assets/images/Eclipse_Logo.png" alt="The Sky's The Limit Logo" />
			   </div>
			   <div>
			 <h2>2024 Total Solar Eclipse</h2>
			 <eclipse-timer></eclipse-timer>
			 </div>
			 </div>
		 </div>
	 </div>
	`
}
