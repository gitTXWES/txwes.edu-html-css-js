  import MediaImage from './MediaImage.js'
  import MediaVideo from './MediaVideo.js'

export default {
	components: {
		MediaImage,
		MediaVideo
	},
	props: {
		sub_title: String,
		sub_category: Object,
		menu_media: Object
	},
	data() {
		return {
			//menu_list: this.sub_category,
			categories: Object.getOwnPropertyNames(this.sub_category)
		}
	},
	computed: {

		selected_category() {
			return this.categories[0];
		},

		other_categories() {
			return this.categories.slice(1)
		},

		link_list() {
			return this.sub_category[this.selected_category];
		}

	},
	watch: {
		// whenever question changes, this function will run
		sub_category() {
			this.update_menu()
		}
	},
	methods: {
		update_menu() {
			this.categories = Object.getOwnPropertyNames(this.sub_category)
		},

		change_order(name) {
			let name_index = this.categories.indexOf(name);
			this.categories.splice(name_index, 1);
			this.categories.unshift(name);
		}
	},
	template: `	
	<div class="menu_sub_category_wrap">
	<div class="menu_selected_category_wrap">
		<h2 class="menu_selected_category" @click='change_order(selected_category)'>{{selected_category}}</h2>
		<nav>
		<ul class="menu_selected_category_ul">
			<li class="menu_selected_category_link" v-for="(link) in link_list">
				<a :href="link.url">{{link.name}}</a>
			</li>
		</ul>
		</nav>
	</div>
	
	<div class="menu_non_selected_category_wrap">
		<ul class="menu_non_selected_category_wrap_ul">
			<li v-for="other in other_categories" @click='change_order(other)'><button>{{other}}</button></li>
		</ul>
	</div>
</div>
	`
}