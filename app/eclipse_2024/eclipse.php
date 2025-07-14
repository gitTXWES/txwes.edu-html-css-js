<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<meta name="description" content="at 12:23 CDT, on April 8, 2024  the Total Solar Eclipse will begin and be visible from Texas Wesleyan University " />

		<!-- robot text to follow and index for search engines -->
		<meta name="robots" content="index,follow"><!-- All Search Engines -->
		<meta name="googlebot" content="index,follow"><!-- Google Specific -->

		<!-- Geo Location for local searches -->
		<meta name="geo.region" content="US-TX" />
		<meta name="geo.placename" content="Fort Worth" />
		<meta name="geo.position" content="32.732391;-97.279504" /> <!-- WEST LIBRARY -->
		<meta name="ICBM" content="32.732391, -97.279504" />

		<title>Texas Wesleyan — Solar Eclipse</title>

		<link rel="icon" href="https://txwes.edu/media/twu/style-assets/images/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="https://txwes.edu/media/twu/style-assets/images/favicon.ico" type="image/x-icon">

		<link rel="stylesheet" href="https://use.typekit.net/dyt3onb.css"/>
		<link rel="stylesheet" href="../css/size_indicator.css" />
		<link rel="stylesheet" href="../css/tailwind_preflight.css" />
		<link rel="stylesheet" href="assets/css/eclipse.css">

		<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
		<script src="https://unpkg.com/vue-router@4" defer></script>
		<script src="https://cdn.jsdelivr.net/npm/add-to-calendar-button@2"  defer></script>

	</head>
	<body>
	 <div id="eclipse">
		 <div :class="[{ active: isActive }, eclipse_background]">
						<router-view v-slot="{Component}">
						  <transition :name="$route.meta.transition || 'fade'" mode="out-in">
							  <div  :key="$route.path" style="width:100%;">
							<component :is="Component"></component>
							  </div>
						  </transition>
						</router-view>
					<footer>
						<a href="https://txwes.edu"><img src="assets/images/Primary Logo 1C Solid reverse-01 (1).png" alt="Texas Wesleyan Logo"/></a>
					</footer>
		 </div>
	</div>
	  <script type="module">
		  import Home from './components/EclipseHome.js'
		  import Events from './components/EclipseEvents.js'
		  import News from'./components/EclipseNews.js'
		  import Resources from './components/EclipseResources.js'
		  import Info from './components/EclipseInfo.js'

		  const routes = [

			{ path: '/eclipse_2024/eclipse.php', component: Home, name:'home', meta: { transition: 'fade' },
 },
			{ path: '/eclipse_2024/eclipse.php/events', component: Events, name:'events', meta: { transition: 'fade' },
 },
			{ path: '/eclipse_2024/eclipse.php/news', component: News, name:'news', meta: { transition: 'fade' },
 },
			{path:'/eclipse_2024/eclipse.php/resources', component:Resources, name:'resources', meta: { transition: 'fade' },
},
			{path:'/eclipse_2024/eclipse.php/info', component:Info, name:'info', meta: { transition: 'fade' },
},
			{path:'/eclipse_2024/eclipse.php/:notFound', component:Home, name:'notFound', meta: { transition: 'fade' },
},

		  ]

		  const router = VueRouter.createRouter({
			//  Provide the history implementation to use. We are using the web history for seo.
			history: VueRouter.createWebHistory(),
			routes, // short for `routes: routes`
		  })


		   const app = Vue.createApp({
			 components: {
					Home,
					Events,
					News,
					Resources,
					Info
			},
			 data(){
				  return {
				  isActive:true,
				  eclipse_background:'eclipse_background',
				  path: this.$router.currentRoute
				  }
		     },

			created() {
				this.$watch(
				  () => this.$route.params,
				  (toParams, previousParams) => {
					this.path.name == "home" ? this.isActive = true : this.isActive = false
				  }
				)
			  },


		 })
		 app.use(router)
		 app.mount('#eclipse');

	  </script>
	</body>
</html>
