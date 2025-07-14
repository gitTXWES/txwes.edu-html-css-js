export default {
	inject: ['gsap'],
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
	mounted() {
		let mm_blogs = this.gsap.matchMedia();

	    mm_blogs.add({
			isSm : "(max-width: 767px)",
			isMd : "(min-width: 768px)"
		},(context) => {
			let { isSm, isMd } = context.conditions;
			this.gsap.fromTo(".show_more_bogs_inner article",
				{
					opacity: 0 ,
					y: isMd ? 100 : 0
				},
				{
					opacity:1,
					y:0,
					stagger: {
							amount: isMd ? 1.5 : .8,
						},
				})
			})

	},
	watch:{
	//conditional logic to call a method
	},
	methods:{

	},
	template:`
<article>
	<div class="more_blog_article_outer">{{blog.content_id}}
		<div class="more_blog_article_inner">
		<a class="more_blog_article_link" :href="blog.blog_url" target="_blank">
			<picture>
				<source media="(min-width: 768px)" :srcset="blog.blog_images.pentax">
				<img :src="blog.blog_images.open_graph" :alt="blog.blog_images.alt">
			</picture>
			<h2 class="more_blog_article_title">{{blog.blog_title}}</h2>
			</a>
		</div>
	</div>
</article>
	`
}
