<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Texas Wesleyan — </title>
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	
		<link rel="stylesheet" href="css/size_indicator.css" />
		<link rel="stylesheet" href="css/tailwind_preflight.css" />
	
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>

	<style>
		*, *::before, *::after{
			font-family: Arial, Helvetica, sans-serif;
		}
		.rotate_open{
			animation: rotate_open .3s forwards linear;
		}
		
		.rotate_close{
			animation: rotate_close .3s forwards linear;
				}
				
				
		@keyframes rotate_open{
			from {
				transform-origin:center;
				transform: rotate(180deg);
			  }
			  to {
				 transform-origin: center;
				transform: rotate(0deg);
			  }
			
		}
		
		@keyframes rotate_close{
			from {
				transform-origin: center;
				transform: rotate(0deg);
			  }
			  to {
				 transform-origin: center;
				transform: rotate(180deg);
			  }
			
		}
		@keyframes table_expand{
			from {
				transform-origin: top;
				transform: scaleY(0);
				
			  }
			  to {
				  transform-origin: top;
				  transform: scaleY(1);
			  }
		}
		@keyframes table_collapse{
			from {
				transform-origin: top;
				transform: scaleY(1);
			  }
			  to {
				transform-origin: top;
				transform: scaleY(0);
			  }
		}
		.txwes_table_818_outer{
			background: #FFF;
			box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, 0.10);
		}
		.txwes_table_818_inner{
			
		}
		.txwes_table_818_heading{
		background: var(--table-gradient, linear-gradient(315deg, rgba(234, 238, 244, 0.20) 0%, rgba(245, 245, 245, 0.20) 70.24%), #EAEEF4);
		padding: 12px 24px 16px 24px;	
		display: flex;
		}
		
		.txwes_table_818_button{
			width:16px;
			height:16px;
			margin-right:36px;
		}
		
		.txwes_table_818_heading > h4{
			font-family: Oswald, Helvetica, sans-serif;
			color: #1a1a1a;
			font-size: 24px;
			font-style: normal;
			font-weight: 500;
			line-height: normal;
			text-transform: capitalize;
		}
		
		.txwes_table_818_columns_wrap{
			display: grid;
		}
		
		.txwes_table_818_intro_paragraph{
			margin-bottom: 20px;
			color:#1a1a1a;
		}
		
		.txwes_table_818_columns_titles, .txwes_table_818_row{
		background: var(--table-gradient, linear-gradient(315deg, rgba(234, 238, 244, 0.20) 0%, rgba(245, 245, 245, 0.20) 70.24%), #EAEEF4);
		padding: 20px;
		border-radius: 6px;
		display: grid;
		gap: 10px;
		}
		
		
		.txwes_table_818_columns_titles {
			margin-bottom: 20px;
		}
		.txwes_table_818_columns{
			display: grid;
			grid-template-columns: 1fr;
			gap: 20px;
			
		}
		.txwes_table_818_row {
		/* background-color: hsl(200, 27%, 98%); */

		}
		.txwes_table_818_columns_titles > div {
			color: #1A1A1A;
			font-size: 16px;
			font-style: normal;
			font-weight: 600;
			line-height: normal;
			text-transform: capitalize;
			line-height:1.25;
		}
		.txwes_table_818_row > span {}
		
		.txwes_table_818_column_right{
		
		}
	.txwes_818_hidden{
		animation: table_collapse 0s forwards linear;
		height: 0;
		transition: height 0s;
	}
	.txwes_818_show{
		animation: table_expand .3s forwards linear;
		padding: 20px;
	}
	
		
		/* sm	640px  */  
		@media (min-width: 640px) {  }
		
		/*md	768px	*/
		@media (min-width: 768px) {
			
			.txwes_818_show{
				padding: 0px;
			}
			
			.txwes_table_818_outer{
				background: #FFF;
				box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, 0.10);
			}
			.txwes_table_818_inner{
			}
			.txwes_table_818_heading{
			background: var(--table-gradient, linear-gradient(315deg, rgba(234, 238, 244, 0.20) 0%, rgba(245, 245, 245, 0.20) 70.24%), #EAEEF4);
			padding: 12px 24px 16px 24px;	
			display: flex;
			}
			
			.txwes_table_818_button{
				width:16px;
				height:16px;
				margin-right:36px;
			}
			
			.txwes_table_818_heading > h4{
				font-family: Oswald, Helvetica, sans-serif;
				color: #1a1a1a;
				font-size: 24px;
				font-style: normal;
				font-weight: 500;
				line-height: normal;
				text-transform: capitalize;
			}
			
		.txwes_table_818_columns_wrap{
			display: block;
		
		}

			.txwes_table_818_intro_paragraph{
			margin-bottom: 0px;
			padding: 24px 24px 30px;
			border-bottom: 1px solid #eaeef4;
		}
		.txwes_table_818_intro_paragraph > p,
		 .txwes_table_818_intro_paragraph > a,
		  .txwes_table_818_intro_paragraph > p>  a {
		
		}
			.txwes_table_818_columns_titles, .txwes_table_818_row{
				display:grid;
				padding:24px ;
				gap:16px;
				grid-template-columns: 1fr 1fr 1fr ;
				word-break: break-all;
				hyphens: auto;
				background: #ffffff;;
			}
			.txwes_table_818_row:nth-child(even) {
				background-color: hsl(200, 27%, 98%);
			}
			.txwes_table_818_columns_titles {
				margin-bottom: 0px;
			}
		
			
			.txwes_table_818_columns{
				display: block;
			}
			.txwes_table_818_row{
				border-top: 1px solid #eaeef4;
			}
			.txwes_table_818_row > span {}
			
			.txwes_table_818_column_right{
				text-align: right;
			}
		
			
		  }
		
		/* lg	1024px	*/ 
		@media (min-width: 1024px) { }
		
		/*xl	1280px	*/
		@media (min-width: 1280px) {  }
		/*2xl	1536px	*/ 
		
		@media (min-width: 1536px) {  }
		</style>
	
	</head>

	<body>
	  <header>  
		<div class="">
			<span class="xs">xs</span>
			<span class="sm">sm </span>
			<span class="md">md</span>
			<span class="lg">lg</span>
			<span class="xl">xl</span>
			<span class="xl2">2xl</span>
		</div>
	</header>
		<main style="margin-left: auto; margin-right:auto; width:100%; padding-bottom: 10rem;" >
			<div class="txwes_table_818_outer" data-dropdown="true" data-table_id="hgft3">
				<div class="txwes_table_818_inner" role="table" aria-label="t4 table title">
					<div class="txwes_table_818_heading">
						<h4>Table three Column</h4>
					</div>
					<div class="txwes_table_818_columns_wrap" >
					<div role="rowgroup">
					<div class="txwes_table_818_columns_titles" role="row">
						<div role="columnheader">Year</div>
						<div role="columnheader">Speaker</div>
						<div role="columnheader">Topic</div>
					</div>
					</div>
					<div class="txwes_table_818_columns" role="rowgroup">
					   <div class="txwes_table_818_row" role="row">
						 <span role="cell">1982</span>
						 <span role="cell">Lila Cockrell</span>
						 <span role="cell">Women in Leadership Roles
							 
</span>
					 </div>
					   <div class="txwes_table_818_row" role="row">
							<span role="cell">1983</span>
							<span role="cell">Sarah Weddington</span>
							<span role="cell">Women in Leadership Roles</span>
						</div>
					   <div class="txwes_table_818_row" role="row">
							 <span role="cell">1984</span>
							 <span role="cell">Ann Richards</span>
							 <span role="cell">Politics Pervades a Woman's Life</span>
						 </div>
					   <div class="txwes_table_818_row" role="row">
							  <span role="cell">1985</span>
							  <span role="cell">Dr. Marilyn Stember</span>
							  <span role="cell"><p>Women's Health Issues</p></span>
						  </div>
					   <div class="txwes_table_818_row" role="row">
							   <span role="cell">fvx</span>
							   <span role="cell">table information spannig multiple lines</span>
							   <span role="cell">hgf</span>
						   </div>
					</div>
					</div>
				</div>
			</div>


			<div class="txwes_table_818_outer" data-dropdown="true" data-table_id="hgft3">
							<div class="txwes_table_818_inner" role="table" aria-label="t4 table title">
								<div class="txwes_table_818_heading">
									<h4>Undergarduate Majors</h4>
								</div>
								<div class="txwes_table_818_columns_wrap" >
									<div class="txwes_table_818_intro_paragraph" >
										<p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Rhoncus Urna Neque Viverra Justo Nec Ultrices Dui Sapien Eget. Velit Egestas Dui Id Ornare Arcu Odio Ut.Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Rhoncus Urna Neque Viverra Justo Nec Ultrices Dui Sapien Eget. Velit Egestas Dui Id Ornare Arcu Odio Ut.Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Rhoncus Urna Neque Viverra Justo Nec Ultrices Dui Sapien Eget. Velit Egestas Dui Id Ornare Arcu Odio Ut.</p>
									</div>
								<div role="rowgroup">
								<div class="txwes_table_818_columns_titles" role="row">
									<div role="columnheader">Tutor</div>
									<div role="columnheader">Courses</div>
									<div role="columnheader">Availability</div>
								</div>
								</div>
								<div class="txwes_table_818_columns" role="rowgroup">
								   <div class="txwes_table_818_row" role="row">
									 <span role="cell">Oscar</span>
									 <span role="cell">BUA-2310<br>Mat-1302<br>History</span>
									 <span role="cell"><a href="#">Mon., Weds. 10:00 a.m.-3:00 p.m.
										 <br>Tues, Thurs. 9:00-10:30 a.m.
										 <br>Tues., Thurs. 12:30-1:30 p.m.
									 </a></span>
								 </div>
								   <div class="txwes_table_818_row" role="row">
										<span role="cell">Ashley</span>
										<span role="cell">ACC-2303</span>
										<span role="cell">Mon. 11:30 a.m. - 3:00 p.m.
											<br>Tues., Thurs. 9:30-10:30 a.m.
											<br>Weds. 11:00 a.m.-2:00 p.m.
										</span>
									</div>
								   <div class="txwes_table_818_row" role="row">
										 <span role="cell">Thiago</span>
										 <span role="cell">BUA-2310</span>
										 <span role="cell">Mon., Weds., 4-:00-5:00p.m.
											 <br>Tues. 3:30-5:00 p.m.
											 <br>Thurs. 9:00-11:00 a.m.
											 <br>Thurs. 4:00-5:00 p.m.
											 <br> a 9:00 a.m. - 12:30 p.m.
										 </span>
									 </div>
								   <div class="txwes_table_818_row" role="row">
										  <span role="cell">Lucas</span>
										  <span role="cell">BUA-2321</span>
										  <span role="cell">Mon.-Fri. 8:30-10:30 a.m.</span>
									  </div>
								   <div class="txwes_table_818_row" role="row">
										   <span role="cell">Kieran</span>
										   <span role="cell">BUA-2310<br>ECO-2305</span>
										   <span role="cell"><p>8:00 am</p></span>
									   </div>
								</div>
								</div>
							</div>
						</div>

		

		</main>
		<footer></footer>
		
		
		
		
<script> 
			var txwes_table_82923 =  (function () { 
		
			const txwes_table = document.querySelectorAll(".txwes_table_818_outer");
			const column_rows = document.querySelectorAll(".txwes_table_818_row");
			
			let t4_unique_id ;
			//right aligns the last column if a row has a number in it or $
		
			  
			$( document ).ready(function() {
			  
			  //removes rows that have a blank first column
			  	column_rows.forEach((row)=>{ if (row.firstElementChild.innerHTML == "" ){row.remove()}  } );
				  
				txwes_table.forEach((table)=>{  
					  table.querySelectorAll(".txwes_table_818_row").forEach((row)=>{
						  let table_span = row.lastElementChild;
						  let t4_added =table_span.firstElementChild;
						  
						  if(t4_added){
							if(t4_added.innerHTML != "" &&  !isNaN(t4_added.innerHTML.substring(0, 1))|| t4_added.innerHTML.startsWith("$")){
								align_right(table);
							}	  
						  }
					
				  }) 
					  })
				
				  
				  txwes_table.forEach(table =>{
					  t4_unique_id = table.dataset.table_id;
					  
					  var button =`<button class="txwes_table_drop_down"
					  id="txwes_table_drop_down_${t4_unique_id}" 
					  type="button" 
					  aria-expanded="false"
					  aria-controls="txwes_table_drop_down_body_${t4_unique_id}">
					  <div class="txwes_table_818_button rotate_close">
						  <svg xmlns="http://www.w3.org/2000/svg"  viewbox="0 0 36 36"><path stroke="none" fill="#03599B" d="M16.535898384862 7.9785300299879a4 4 0 0 1 6.9282032302755 0l11.571796769724 20.042939940024a4 4 0 0 1 -3.4641016151378 6l-23.143593539449 0a4 4 0 0 1 -3.4641016151378 -6"></path></svg>
					  </div>
					  </button>
					  `;
					  
					  let body_label = {
						  id : "txwes_table_drop_down_body_" + t4_unique_id,
						  role : "region",
						  "aria-labelledby" : "txwes_table_drop_down_"+ t4_unique_id,
					  }
					  
					  if(table.dataset.dropdown == "true"){
				  
					  addDropdown_button(table, button);
					  addLabel(table, body_label);
					  
					  $(table).find(".txwes_table_818_heading").on("click", function(e){
										 e.stopPropagation();
										 table_show_hide($(this));
									 })
					  }
				  })
			  
			});
		
			
			function align_right(table){
				table.querySelectorAll(".txwes_table_818_row").forEach((row)=>{row.lastElementChild.classList.add("txwes_table_818_column_right");});
				table.querySelector(".txwes_table_818_columns_titles").lastElementChild.classList.add("txwes_table_818_column_right");
			}
			
			function addLabel(table, body_label){
				let labels = Object.keys(body_label);
				let body_content = table.querySelector(".txwes_table_818_columns_wrap"); 
				labels.forEach((key)=>{body_content.setAttribute(key, body_label[key] )});
				body_content.classList.add("txwes_818_hidden");
			}
			
			function addDropdown_button(table, button){
				table.querySelector(".txwes_table_818_heading").insertAdjacentHTML("afterbegin", button);
			}
			

			function table_show_hide(ele){
				let drop_down_button = ele.find(".txwes_table_818_button");
				
				if(drop_down_button.hasClass("rotate_close")){
					table_open(drop_down_button);					
				 } else {
					 table_close(drop_down_button);
				 }
			}
			function table_open(ele){
				
				ele.removeClass("rotate_close").addClass("rotate_open");
				ele.parent().parent().next().removeClass("txwes_818_hidden").addClass("txwes_818_show");
			}
			
			function table_close(ele){
				console.log()
				ele.removeClass("rotate_open").addClass("rotate_close");
				ele.parent().parent().next().removeClass("txwes_818_show").addClass("txwes_818_hidden");
			}
			})();
</script>
	</body>
</html>