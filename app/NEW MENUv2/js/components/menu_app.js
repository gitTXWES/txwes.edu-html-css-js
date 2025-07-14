	  import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
	  import { navigation } from '../objects/mainnav_objects.js'		
	  import { utility_links } from '../objects/utility_links_object.js'
	  import{ menu_media } from '../objects/menu_media_object.js'
	  import SubCategory from './SubCategory.js'
	  import UtilityLinks from './UtilityLinks.js'
	  import SearchBar from './SearchBar.js'
	  import MediaImage from './MediaImage.js'
	  import MediaVideo from './MediaVideo.js'
		
	  
	const menu = createApp({
		components: {
			SubCategory,
			UtilityLinks,
			SearchBar,
			
		  },
		data(){
		return {
			navigation: navigation,				
			utility_links:utility_links,
			menu_media:menu_media,
			sub: false,
			menuClose: true,
			title:'',
			category_link:'',
			bg_size: 0,
			menu_size:0
		}
	},
	computed:{
		headingClass() {
			return (this.sub ? 'heading_sub' : 'heading_nosub')	;
		}

	},
	methods:{
		edit_sub_nav(item){
			let {category_url, ...category_obj} = this. navigation[item];
			return category_obj;
		},
		choose_sub(item){
			this.sub = this.edit_sub_nav(item);
			this.title=item;
			this.category_link=this.navigation[item].category_url;
				},
		menu_engage(){
			this.menuClose = !this.menuClose
			this.changeMenuWidth();
			this.addMenuKeys();
		},
		menu_close(){
			this.menuClose = true;
			this.sub = false;
			this.changeMenuWidth();

		},
		get_bg_sizes(){
			if(document.querySelector(".background_white")){
			let menu = document.querySelector("#menu").offsetWidth;
			let menu_width = menu >= 768 ? 102 : 54;
			let bg_white = document.querySelector(".background_white").offsetHeight;
			let bg_blue = document.querySelector(".utility_link_wrap").offsetHeight;
			this.bg_size = (bg_blue + bg_white + menu_width);
		}
	},
	changeMenuWidth(){
		let menu_element =document.querySelector("#menu");
		menu_element.style.width = this.menuClose ? 'fit-content' : '100%';
		
	},
	addMenuKeys(){
		document.addEventListener("keyup", function(event){
			if(event.key == "Escape"){
				document.querySelector(".menu_close").click();
			}
		})
	}

}
	
	});
	  menu.mount('#menu');