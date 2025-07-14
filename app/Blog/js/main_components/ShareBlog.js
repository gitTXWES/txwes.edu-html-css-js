
var tl;
export default {
	inject: ['gsap'],
	props:{
	blogUrl:String,
	},
	computed:{
		faceBook(){
			let url = "https://www.facebook.com/sharer/sharer.php?u="
			return url + this.blogUrl;
		},
		linkedIn(){
			let url = "https://www.linkedin.com/shareArticle?mini=true&url="
			return url + this.blogUrl;

		},
		twitter(){
			let url = "https://twitter.com/intent/tweet?text="
			return url + this.blogUrl;
		},
		eMail(){
			let url = "mailto:?subject=I%20found%20this%20article%20to%20share%20with%20you&body="
			return url + this.blogUrl;
		},
	},
	data(){
		return {
			//key : value
		}
	},
	mounted() {


	tl = this.gsap.timeline();

	tl.fromTo(this.$refs.share_able,{
		opacity:.5,
		yPercent:100,
	},{
		opacity:1,
		yPercent:0,
		duration:.6,
	})

},
	methods:{
	 async copyLink(){
		  try {
			await navigator.clipboard.writeText(this.blogUrl);
		  } catch (error) {
			console.error(error.message);
		  }
	},
		noShare(){
	    	tl.timeScale(1.5).reverse().then(this.close);
	   },
	   close(){
		   tl.revert();
		   this.$emit("closeshare");
	   }
	},
	template:`
	<div ref="share_able" class="share_blog_outer">
		<div class="share_blog_inner">
			<a :href="linkedIn" aria-label="Share to LinkedIn" class="share_icon"><img src="images/icons/linkedIn_logo.svg" alt="LinkedIn logo"/></a>

			<a :href="faceBook" aria-label="Share to Facebook" class="share_icon"><img src="images/icons/facebook_logo.svg" alt=""/></a>

			<a :href="twitter" aria-label="Share to X" class="share_icon"><img src="images/icons/x_twitter_logo.svg" alt=""/></a>
			<a @click="copyLink" aria-label="Copy Link" class="share_icon"><img src="images/icons/link copy.svg" alt=""/></a>

			<a
			:href="eMail"
			aria-label="Email the Article" class="share_icon"><img src="images/icons/envelope copy.svg" alt=""/></a>

			<button class="close_share" aria-label="close modal" @click="noShare">
				<img src="images/icons/close-x.svg" alt="close icon">
			</button>
		</div>
	</div>
	`
}
