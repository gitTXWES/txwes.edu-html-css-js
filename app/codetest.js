<script>
		var the_tab_content_02172023;
		var tab_three = <t4 type="content" name="TAB 3 Title" output="selective-output" modifiers="striptags,htmlentities" format="true" /> || false;

					if (Array.isArray(the_tab_content_02172023) ){
						console.log(the_tab_content_02172023)
					}else{
						the_tab_content_02172023 =[];
					};

			const content_open = `<div class="the-tab--content mx-auto rounded-xl p-4 overflow-auto "><div class="px-4 py-2 text-center w-full"><h3 class="font-bold text-lg">`;

			const content_heading_close = `</h3></div><div class="">`;

			const content_close = `	</div></div>`;


			the_tab_content_02172023.push(content_open + <t4 type="content" name="Tab 1 Content Heading" output="normal" modifiers="striptags,htmlentities" /> + content_heading_close + <t4 type="content" name="Tab 1 Content" output="normal" modifiers="medialibrary,nav_sections" /> + content_close);

			  the_tab_content_02172023.push(content_open + <t4 type="content" name="Tab 2 Content Heading" output="normal" modifiers="striptags,htmlentities" /> + content_heading_close + <t4 type="content" name="Tab 2 Content" output="normal" modifiers="medialibrary,nav_sections" /> + content_close);

  if(tab_three){
	the_tab_content_02172023.push(content_open + <t4 type="content" name="Tab 3 Content Heading" output="normal" modifiers="striptags,htmlentities" /> + content_heading_close + <t4 type="content" name="Tab 3 Content" output="normal" modifiers="medialibrary,nav_sections" /> + content_close)
			   };


	</script>
