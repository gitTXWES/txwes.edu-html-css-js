export default {
	props:{
	media:Object
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
	mounted(){
			this.addVideo()
	},
	methods:{
	addVideo() {
		var menu_video = document.querySelector("#menu_video");
		var options = {
			  id: this.media.url,
			  portrait:false,
			  responsive:true,
			  controls:false,
			  autoplay:true,
			  loop:true,
			  background:true
		  };
		 
		var player = new Vimeo.Player(menu_video, options);	
		
	}
	},
	template:`
	<div id="menu_video" style="aspect-ratio:16/9;"></div>		
	`
}