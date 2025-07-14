import ShareBlog from './ShareBlog.js'

export default {
	components:{
		ShareBlog,
	},
	props:{
	latest:Object,
	},
	computed:{

	},
	data(){
		return {
			share:false,
		}
	},
	watch:{
	//conditional logic to call a method
	},
	methods:{
	closeShare(){
		 this.share = false;
	 },
	},
	template:`
	<div class="latest_blog_outer">{{latest.content_id}}
		<div class="latest_blog_inner">
			<div class="latest_blog_picture_wrap">
				<img :src="latest.blog_images.pentax" :alt="latest.blog_images.alt" />
			</div>
			<div class="latest_blog_title_wrap">
				<article>
					<p class="latest_blog_label">Latest Article</p>
					<h2 class="latest_blog_title"><a :href="latest.blog_url" target="_blank">{{latest.blog_title}}</a></h2>
					<p class="latest_blog_description">{{latest.blog_description}}</p>
					<div class="latest_blog_footer">
					<template v-if="!share">
						<a class="latest_blog_footer_read" :href="latest.blog_url" target="_blank">
							<p>Read More</p>
							<img src="images/icons/new-window.svg" alt="new window icon">
						</a>
						<button aria-label="Share the article to social media or copy link" @click="share = !share">
						<img class="share_icon" src="images/icons/share-icon.svg" alt="share icon" />
						</button>
						</template>
						<template v-else>
							<share-blog :blogUrl="latest.blog_url" @closeshare="closeShare"></share-blog>
						</template>
					</div>
				</article>
			</div>
		</div>
	</div>
	`
}
