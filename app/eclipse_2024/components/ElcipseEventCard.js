
export default {

	props:{
	//key:value
	},
	computed:{

	},
	data(){
		return {
			//key : value
		}
	},

	methods:{

	},
	template:`
	<div class="event_card_outer">
		  <div class="event_card_inner">
			  <div class="event_card_header">
				  <div class="event_card_header_date">
				  	<slot name="date"></slot>
				  </div>
				  <h2 class="event_card_header_title">
				  	<slot name="title"></slot>
				  </h2>
			  </div>
			  <div class="event_card_body">
				  <p class="event_card_body_text">
					<slot name="body"></slot>
				  </p>
			  </div>
			  <div class="event_card_footer">
				  <slot name="calendar"></slot>
			  </div>
		</div>
	  </div>
	`
}
