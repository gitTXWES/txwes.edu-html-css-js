import NavButton from './NavButton.js'


export default {
	components:{
		NavButton
	},
	props:{
	//key:value
	},
	computed:{

	},
	data(){
		return {
			menuClose: true,

		}
	},
	watch:{
	//conditional logic to call a method
	},
	methods:{

	},
	template:`
	<div class="eclipse-menu-wrap">
		<Transition mode="out-in">
			<div v-if="menuClose" class="">
				<button @click="menuClose = !menuClose">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" class="icon-menu" aria-labelledby="menuOpenId">
						<title id="menuOpenId">Three Horizontal Bars</title>
						<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
					</svg>
				</button>
			</div>
			<div v-else v-cloak>
				<div class="menu_open_wrap">
					<button @click="menuClose = true">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-menu" aria-labelledby="menuCloseId" role="img">
							<title id="menuCloseId">circle with x mark in center</title>
							<circle cx="12" cy="12" r="10" class="primary" />
							<path fill="#000D23" d="M13.41 12l2.83 2.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 1 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12z" />
						</svg>
					</button>
					<nav>
						<div class=menu_nav_wrap>
							<nav-button route-name="events">Events</nav-button>
							<nav-button route-name="resources">Resources</nav-button>
							<nav-button route-name="news">News</nav-button>
							<nav-button route-name="info">Info</nav-button>
						</div>
					</nav>
				</div>
			</div>
		</Transition>
	</div>
	`
}

