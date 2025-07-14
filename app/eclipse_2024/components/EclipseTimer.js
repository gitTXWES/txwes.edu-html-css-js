export default {
	props:{
	//key:value
	},
	computed:{
		seconds() {
			return (this.eclipse_day - this.today) % 60;
		},

		minutes() {
			return Math.floor((this.eclipse_day - this.today) / 60) % 60;
		},

		hours() {
			return Math.floor((this.eclipse_day - this.today) / 60 / 60) % 24;
		},

		days() {
			return Math.floor((this.eclipse_day - this.today) / 60 / 60 / 24);
		}
	},
	data(){
		return {
			today : Math.trunc(new Date().getTime() / 1000),
			eclipse_day :Math.trunc(new Date('April 8, 2024 12:23 CDT ').getTime()/1000),

		}
	},

	methods:{


	},
	beforeMount(){
		window.setInterval(() => {
			this.today = Math.trunc(new Date().getTime() / 1000);
		},1000);
	},

	template:`
	<div id="timer_wrap">
		<div class="time_unit"><span>{{days}}</span></div>
		<div class="time_unit"><span>:</span><span>{{hours}}</span></div>
		<div class="time_unit"><span>:</span><span>{{minutes}}</span></div>
		<div class="time_unit"><span>:</span><span>{{seconds}}</span></div>
	</div>
	`
}
