
export default {

	props:{
	blog:Object,
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
	<div class="general_article_outer">{{blog.content_id}}
		<div class="general_article_inner">
		<a class="general_article_img_wrap">
			<picture>
				<source media="(min-width: 768px)" :srcset="blog.blog_images.pentax">
				<img :src="blog.blog_images.open_graph" :alt="blog.blog_images.alt">
			</picture>
		</a>
		<article>
			<p class="general_article_label">Article</p>
			<h2 class="general_article_title"><a :href="blog.blog_url">{{blog.blog_title}}</a></h2>
			<a class="general_article_read" :href="blog.blog_url" target="_blank">
				<p>Read More</p>
				<img src="images/icons/new-window.svg" alt="new window icon">
			</a>
		</article>
		</div>
	</div>

	`
}
