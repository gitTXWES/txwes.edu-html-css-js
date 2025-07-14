import EclipseMenu from './EclipseMenu.js'
import EclipseTimer from './EclipseTimer.js'
export default {

	components: {
		EclipseMenu,
		EclipseTimer
	},
	props:{},

	computed:{

	},
	data(){
		return {

		}
	},
	watch:{
	//conditional logic to call a method
	},
	methods:{

	},
	template:`
	<header>
		  <div class="header_home_top">
			  <div class="header_home_top_logo_wrap">
				  <img src="./assets/images/Eclipse_Logo.png" alt="The Sky's The Limit Logo" />
			  </div>
		  </div>
		  <div class="header_home_bottom">
		  <h2>2024 Total Solar Eclipse</h2>
		  <eclipse-timer></eclipse-timer>
		  </div>
	  </header>
	  <main>
	  <div class="home_background_wrap">
	</div>

	</main>
	<eclipse-menu></eclipse-menu>
	`
}
