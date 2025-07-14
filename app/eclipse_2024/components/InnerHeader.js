import TimerDropDown from './TimerDropDown.js'

export default {

	components:{
	TimerDropDown
	},
	props:{
	//key:value, or array
	},
	computed:{

	},
	data(){
		return {
			drop:false
		}
	},
	watch:{
	//conditional logic to call a method
	},
	methods:{
		close_drop(){
			this.drop = false;
			this.$emit('blur-back');

		},
		open_drop(){
			this.drop=true;
			this.$emit('blur-back');
		}
	},
	template:`
	<transition name="dropdown" >
	<timer-drop-down @closeDrop="close_drop"  v-if="drop"></timer-drop-down>
	</transition>
	<header class="eclipse_inner_header">
				  <div class="inner_header_wrap">
					<div class="inner_header_dropdown_closed" @click="open_drop" >
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e9eef6" style="width:24px; height:24px;">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
						</svg>
					</div>
					<div class="inner_header_nav">
						<router-link :to="{name : 'home'}" class="inner_header_back_icon">
						   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fed000" style="width:24px;height:24px;" >
							  <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
							</svg>
						</router-link>
						<h1 class="inner_header_title">
						<slot></slot>
						</h1>
					</div>
				  </div>
			  </header>
	`
}
