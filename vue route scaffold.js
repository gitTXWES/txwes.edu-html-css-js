// 1. Define route components.
// These can be imported from other files
const Home = { template: '<div>Home</div>' }
const Events = { template: '<div>Events</div>' }
const News = { tempalte: '<div>News</div>'}
const Resources = { template: '<div>Resources</div>'}

// 2. Define some routes
// Each route should map to a component.
// We'll talk about nested routes later.
const routes = [
  { path: '/', component: Home },
  { path: '/events', component: Events },
  {path: '/news', component:News},
  {path: '/resourses', component:Resourses}
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = VueRouter.createRouter({
  // 4. Provide the history implementation to use. We are using the web history for seo.
  history: VueRouter.createWebHistory(),
  routes, // short for `routes: routes`
})

// 5. Create and mount the root instance.
const app = Vue.createApp({})
// Make sure to _use_ the router instance to make the
// whole app router-aware.
app.use(router)

app.mount('#app')

// Now the app has started!