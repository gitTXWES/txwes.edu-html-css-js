<script>
	var betterTabs02172023 =  (function () {
	   $(document).ready(function(){
		  const tabs= $(".the-tab");
		  const tab_indicators = $(".the-tab_indicator");

			  if(tabs){
			 tabs.on("click", function(){
				 let index = tabs.index($(this));
				 let the_tab_content_wrap = $(this).parent().next();
				 $(this).siblings().css("background-color","#CCCCCC");
				 $(this).css("background-color","#0072BC");
				 $(this).siblings().children().next().css("opacity", 0);
				  $(this).children().last().css("opacity", 1);
				  the_tab_content_wrap.html(the_tab_content_02172023[index]);
			  })
		  }
	   })
	})(); //EOF
</script>

document.addEventListener('DOMContentLoaded', function () {
		const vtabs= document.querySelectorAll(".the-tab");
		var tabs_array = [];
		vtabs.forEach((ele) => tabs_array.push(ele));
		if(tabs_array.length){
			tabs_array.forEach((ele)=>ele.addEventListener("click", handleClick(ele)))

		} else
		function handleClick(ele){
			console.log(ele)
		};





}, false);
