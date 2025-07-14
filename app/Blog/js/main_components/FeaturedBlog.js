
export default {

	props:{
	featured:Object,
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
	methods:{

	},
	template:`
	<div class="featured_article_outer">{{featured.content_id}}
		<div class="featured_article_inner">
		<a :href="featured.blog_url" target="_blank" class="featured_article_img_wrap">
			<picture>
				<source media="(min-width: 768px)" :srcset="featured.blog_images.pentax">
				<img :src="featured.blog_images.open_graph" :alt="featured.blog_images.alt">
			</picture>
		</a>
		<article>
			<p class="featured_article_label">Featured Article</p>
			<h2 class="featured_article_title"><a :href="featured.blog_url">{{featured.blog_title}}</a></h2>
			<p class="featured_blog_description">{{featured.blog_description}}</p>
			<a class="featured_article_read" :href="featured.blog_url" target="_blank">
				<p>Read More</p>
				<img src="images/icons/new-window.svg" alt="new window icon">
			</a>
		</article>
		</div>
	</div>

	`
}
