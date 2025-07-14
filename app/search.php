<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title> TEMPLATE TITLE </title>

		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>
		<script src="https://cdn.tailwindcss.com"></script>

		<style>
			*{
				font-family: Arial, Helvetica, sans-serif;
			}
		</style>

	</head>
	<body>
		<header>  <div class="p-8 text-lime-600">
			<span class="sm:hidden">xs</span>
			<span class="hidden sm:block md:hidden">sm</span>
			<span class="hidden md:block lg:hidden">md</span>
			<span class="hidden lg:block xl:hidden">lg</span>
			<span class="hidden xl:block 2xl:hidden">xl</span>
			<span class="hidden 2xl:block">2xl</span>
		</div>
	</header>
		<main style="margin-left: auto; margin-right:auto; width:100%">
	<style type="text/css">
		#resultsTitle img { display: none; margin-left: 12px; }
		.directoryPagination { display: flex; justify-content: space-between; margin-top: 12px; text-transform: uppercase; font-size: 0.8em; }
		.directoryPagination .prev { }
		.directoryPagination .next { }
		.directoryPagination .pages { }
		.directoryPagination .pages>a { width: 1em; margin: 4px; display: inline-block; text-align: center; }
		.directoryPagination .pages>a.current { border-radius: 50%; background-color: #004b8d; color: #ffffff; }
		.directoryPagination .disabled { visibility: hidden; opacity: 0; cursor: normal; }
		#resultsDirectory .directoryPage { display: none; }
		#resultsDirectory .directoryPage:first-child { display: table; }
	</style>

	<div id="error404" style="display:none;padding-left:15px;"><h5>We're sorry; we were unable to find the page you were looking for.</h5><p>It may be possible the address or url was incorrect.</p></div>
	<script type="text/javascript">
		function getQuery() {
			var url = '' + window.location;
			var queryStart = url.indexOf('?') + 1;
			if (queryStart > 0) {
				var parts = url.substring(queryStart).split('&');
				for (var i = 0; i < parts.length; i++) {
					if (parts[i].length > 2 && parts[i].substr(0, 2) == 'q=') {
						return decodeURIComponent(parts[i].split('=')[1].replace(/\+/g, ' '));
					}
				}
			}
			return '';
		}

		function _trackQuery() {
			var fourohfour = '<?php echo $fourohfour; ?>';
			if (window.location.href.indexOf("q=") >= 0 && fourohfour == '') {
				ga('send', 'event', 'Search', getQuery(), '<?php echo $referer; ?>');
				gtag('event', 'Search', {
					query: getQuery()
				});
			}
			else if (fourohfour != '') {
				ga('send', 'event', 'Broken Link', window.location.href, '<?php echo $referer; ?>');
				gtag('event', 'Broken Link');
			}
		}

		function get404Page() {
			var fourohfour = '<?php echo $fourohfour; ?>';
			if (fourohfour != '') {
				return fourohfour;
			}
			return '';
		}

		function loadSearch() {
			var query = getQuery();
			var fourohfour = '<?php echo $fourohfour; ?>';
			if (query == '404' || query == 404 || fourohfour != '') {
				document.getElementById('error404').style.display = 'block';
				var url = get404Page();
				if (url.indexOf('.') > 0) {
					url = url.substr(0, url.indexOf('.'))
				}
				url = url.replace(/-/g, ' ');
				url = url.replace(/\//g, ' ');
				google.search.cse.element.getElement('two-column').execute(decodeURIComponent(url));
			}
			_trackQuery();
		}

		function autoDirectorySearch(gname, query) {
			searchDirectory(query);
			searchCampusDirectory(query);
								$("#directory").children().first().click();
		}

		window.__gcse = {
			parsetags: 'onload',
			callback: loadSearch,
			searchCallbacks: {
				web: {
					rendered: autoDirectorySearch
				}
			}
		};


	</script>

	<script type="text/javascript">
		function searchDirectory(terms) {
			console.log(terms);
			document.getElementById("directory").style.display = "block";
			document.getElementById("resultsTitle").style.display = "block";
			$('#resultsTitle img').css('display','inline-block');
			document.getElementById("resultsDirectory").style.display = "block";
			var response;
			var xmlhttp;
			if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			}
			else {// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function () {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					response = xmlhttp.responseText;
					response = JSON.parse(response);
					if (response.status === 'fail' || response.count < 1) {
						document.getElementById("resultsDirectory").innerHTML = "";
						/* document.getElementById("resultsTitle").style.display = "none"; */
						$('#resultsTitle img').css('display','none');
						document.getElementById("resultsDirectory").style.display = "none";
					}
					else {
						outputResults(response);
						recordHistory(terms);
					}
				}

			}
			xmlhttp.open("POST", "/scripts/people-search/index.php", true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.send("q=" + terms);
		}

		function outputResults(response) {
			document.getElementById("resultsDirectory").innerHTML = '';
			document.getElementById('directory').display = "block";
			if (response.count > 1) {
				listResults(response);
			}
			else if (response.count === 1) {
				cleanObject(response.results[0]);
			}
			else {
				document.getElementById('directory').display = "none";
			}
			$('#resultsTitle img').css('display','none');
		}

		function createResultsTable(response, index, numRows) {
			var resultsTable = '<div class="directoryPage table nohover evencells"><div class="row header"><div class="cell">Name</div><div class="cell">Title</div><div class="cell">Department</div><div class="cell">Email</div></div>';
			/*
				<div class="responsive-table nohover evencells">
					<div class="row header">
						<div class="cell">Name</div>
						<div class="cell">Title</dvi>
						<div class="cell">Department</div>
						<div class="cell">Email</div>
					</div>

			*/
			for (var x = index; x < index + numRows; x++) {
				if (x >= response.count) {
					break;
				}
				resultsTable += '<div class="row">';
				resultsTable += '<div class="cell" data-head="Name"><a href="javascript:searchDirectory(\'' + response.results[x].displayName + '\')">' + response.results[x].displayName + '</a></div>';
				resultsTable += '<div class="cell" data-head="Title">' + response.results[x].jobTitle + '</div>';
				resultsTable += '<div class="cell" data-head="Department"><a href="javascript:searchDirectory(\'' + response.results[x].department + '\')">' + response.results[x].department + '</a></div>';
				resultsTable += '<div class="cell" data-head="Email"><a href="mailto:' + response.results[x].mail + '">' + response.results[x].mail + '</a></div>';
				resultsTable += '</div>';
			}
			resultsTable += '</div>';
			return resultsTable;
		}

		function listResults(response) {
			var numRows = 3;
			var numPages = Math.ceil(response.count / numRows);
			var paginate = numPages - 1;
			var output = '';

			if (paginate) {
				for (var x = 0; x < numPages; x++) {
					output += createResultsTable(response, x*numRows, numRows);
				}

				/*
					<div class="directoryPagination">
						<a class="prev" href="javascript:previousDirectoryPage();">Previous</a>
						<div class="pages">
							<a href="javascript:goToDirectoryPage(this);">1</a>0
							<a href="javascript:goToDirectoryPage(this);">2</a>

	.						<a href="javascript:goToDirectoryPage(this);">3</a>
							...
						</div>
						<a class="next" href="javascript:nextDirectoryPage();">Next</a>
					</div>
				*/
				output += '<div class="directoryPagination" style="display:flex;justify-content:space-between;"><a class="prev disabled" href="javascript:prevDirectoryPage();">Previous</a><div class="pages">';
				output += '<a href="javascript:void(0);" class="current" onclick="goToDirectoryPage($(this).index());">' + 1 + '</a>';
				for (var x = 2; x <= numPages; x++) {
					output += '<a href="javascript:void(0);" onclick="goToDirectoryPage($(this).index());">' + x + '</a>';
				}
				output += '</div><a class="next" href="javascript:nextDirectoryPage();">Next</a></div>';
			}
			else {
				output += createResultsTable(response, 0, numRows);
			}

			$("#resultsDirectory").html(output);
		}

		function goToDirectoryPage(page) {
			$('#resultsDirectory .directoryPage').hide();
			$($('#resultsDirectory .directoryPage')[page]).css('display','table');
			$('.directoryPagination .next').removeClass('disabled');
			$('.directoryPagination .prev').removeClass('disabled');
			if (page === 0) {
				$('.directoryPagination .prev').addClass('disabled');
			}
			if (page === $('.directoryPagination .pages a').length - 1) {
				$('.directoryPagination .next').addClass('disabled');
			}
			$('.directoryPagination .pages a').removeClass('current');
			$($('.directoryPagination .pages a')[page]).addClass('current');
		}

		function prevDirectoryPage() {
			$('.directoryPagination .next').removeClass('disabled');
			var prev = ($('#resultsDirectory .directoryPage:visible').index() <= 0) ? 0 : $('#resultsDirectory .directoryPage:visible').index() - 1;
			if (prev <= 0) {
				$('.directoryPagination .prev').addClass('disabled');
			}
			else {
				$('.directoryPagination .prev').removeClass('disabled');
			}
			$('#resultsDirectory .directoryPage').hide();
			$($('#resultsDirectory .directoryPage')[prev]).css('display','table');
			$('.directoryPagination .pages a').removeClass('current');
			$($('.directoryPagination .pages a')[prev]).addClass('current');
		}

		function nextDirectoryPage() {
			$('.directoryPagination .prev').removeClass('disabled');
			var next = ($('#resultsDirectory .directoryPage:visible').index() < $('#resultsDirectory .directoryPage').length-1) ? $('#resultsDirectory .directoryPage:visible').index() + 1 : $('#resultsDirectory .directoryPage').length-1 ;
			if (next >= $('#resultsDirectory .directoryPage').length-1) {
				$('.directoryPagination .next').addClass('disabled');
			}
			else {
				$('.directoryPagination .next').removeClass('disabled');
			}
			$('#resultsDirectory .directoryPage').hide();
			$($('#resultsDirectory .directoryPage')[next]).css('display','table');
			$('.directoryPagination .pages a').removeClass('current');
			$($('.directoryPagination .pages a')[next]).addClass('current');
		}

		//cleans the object from query to remove null and undefined from displayed results
		function cleanObject(result){
			for( var property in  result){
				if(result[property] == null){
					result[property] = '&nbsp';
				}
				if(Array.isArray(result[property]) && result[property].length == 0){
					result[property] = ['&nbsp'];
				}

			}
			personDetails(result);

		}


		function personDetails(response) {

			var output = '<h4>' + response.displayName + '</h4><div class="dashedSpacer"></div>';
			output += '<div style="display:flex;width:100%;">';
			output += '<div style="padding:6px;font-weight:bold;text-align:right;width:20%;">Job Title:</div>';
			output += '<div style="padding:6px;width:80%;">' + response.jobTitle + '</div>';
			output += '</div>';
			output += '<div style="display:flex;width:100%;">';
			output += '<div style="padding:6px;font-weight:bold;text-align:right;width:20%;">Department:</div>';
			output += '<div style="padding:6px;width:80%;"><a href="javascript:searchDirectory(\'' + response.department + '\')">' + response.department + '</a></div>';
			output += '</div>';
			output += '<div style="display:flex;width:100%;">';
			output += '<div style="padding:6px;font-weight:bold;text-align:right;width:20%;">Office Location:</div>';
			output += '<div style="padding:6px;width:80%;">' + response.officeLocation + '</div>';
			output += '</div>';
			output += '<div style="display:flex;width:100%;">';
			output += '<div style="padding:6px;font-weight:bold;text-align:right;width:20%;">Phone:</div>';
			output += '<div style="padding:6px;width:80%;">' + response.businessPhones[0] + '</div>';
			output += '</div>';
			output += '<div style="display:flex;width:100%;">';
			output += '<div style="padding:6px;font-weight:bold;text-align:right;width:20%;">Email:</div>';
			output += '<div style="padding:6px;width:80%;"><a href="mailto:' + response.mail + '">' + response.mail + '</a></div>';
			output += '</div>';
			if (searchHistory.length >= 1) {
				output += '<div style="font-size:0.9em;padding:12px;"><a href="javascript:recallHistory();">Go Back</a></div>';
			}

			$("#resultsDirectory").html(output);
		}

		var searchHistory = [];

		function recordHistory(terms) {
			var record = true;
			for (var x = 0; x < searchHistory.length; x++) {
				if (searchHistory[x] == terms) {
					record = false;
				}
			}
			if (record) {
				searchHistory.push(terms);
			}
		}

		function recallHistory() {
			searchHistory.splice(searchHistory.length - 1, 1);
			var recall = searchHistory.length - 1;
			if (recall >= 0) {
				searchDirectory(searchHistory[recall]);
			}
			else {
				document.getElementById('resultsDirectory').innerHTML = '';
			}
		}

		function findEnter(event, enterTerms) {
			if (event.keyCode == 13) {
				searchDirectory(enterTerms);
			}
		}
	</script>

	<!-- Starting here is the Campus Directory inclusion -->

	<script type="text/javascript" src="https://txwes.edu/scripts/directory/index.js"></script>
	<script type="text/javascript">
		function searchCampusDirectory(terms) {
			document.getElementById('directory').style.display = "grid";
			var entries = directory.entry;
			window.tempresultsCD = [];
			window.resultsCD = [];
			entries.sort(compare);
			terms = terms.split(" ");
			var re = new RegExp ('[^a-z0-9]','gi');
			for (var x = 0; x < terms.length; x++) {
				terms[x] = terms[x].replace(re,'').toLowerCase();
			}
			window.termsCD = terms;
			for (var y = 0; y < terms.length; y++) {
				if (terms[y] != '' && terms[y].length > 2) {
					for (var z = 0; z < entries.length; z++) {
						if (entries[z].title.toLowerCase().indexOf(terms[y]) > -1 || entries[z].department.toLowerCase().indexOf(terms[y]) > -1 || entries[z].location.toLowerCase().indexOf(terms[y]) > -1) {
							tempresultsCD.push(entries[z]);
						}
					}
				}
			}
			for (var c = 0; c < tempresultsCD.length; c++) {
				if (c == 0) {
					resultsCD.push(tempresultsCD[c]);
				}
				else {
					var notfound = true;
					for (var i = 0; i < resultsCD.length; i++) {
						if (tempresultsCD[c].title == resultsCD[i].title) {
							notfound = false;
						}
					}
					if (notfound) {
						resultsCD.push(tempresultsCD[c]);
					}
				}
			}
			outputCDResults(resultsCD);
		}

		function compare(a,b) {
			var titleA = a.title.toLowerCase();
			var titleB = b.title.toLowerCase();
			if (titleA < titleB) {
				return -1;
			}
			if (titleA > titleB) {
				return 1;
			}
			return 0;
		}

		function outputCDResults(results) {
			document.getElementById("campusDirectory").innerHTML = '';
			document.getElementById("campusTitle").style.display = "block";
			document.getElementById("campusDirectory").style.display = "block";

			if (results.length > 0 && results.length <= 2) {
				tableCDResults(results);
			}
			else if (results.length > 2) {
				paginatedCDResults(results);
			}
			else {
				/* document.getElementById("campusTitle").style.display = "none"; */
				document.getElementById("campusDirectory").style.display = "none";
			}
			//document.getElementById("backdiv").style.display = 'block';
		}

		var campusDirectoryPageTotal = 0;

		function paginatedCDResults(resultsObj) {
			var c = 0;
			var p = 0;
			for (var x = 0; x < resultsObj.length; x++) {
				if (c == 0) {
					var page = document.createElement("div");
					document.getElementById("campusDirectory").appendChild(page);
					p++;
					page.id = "cdpage" + p;
					if (p > 1) {
						page.style.display = "none";
					}
					var listContainer = document.createElement("table");
					var list = document.createElement("tbody");
					page.appendChild(listContainer);
					listContainer.className = "responsive-table nohover evencells";
					listContainer.cellSpacing = 0;
					listContainer.cellPadding = 0;
					listContainer.border = 0;
					listContainer.appendChild(list);
				}
				var item = document.createElement("tr");
				list.appendChild(item);
				// Col 1
				var col1 = document.createElement("td");
				item.appendChild(col1);
				col1.style.padding = "5px 0px";
				col1.innerHTML = "<a href=\"" + resultsObj[x].link + "\">" + resultsObj[x].title + "</a>";
				// Col 2
				var col1 = document.createElement("td");
				item.appendChild(col1);
				col1.style.padding = "5px 0px";
				col1.innerHTML = resultsObj[x].phone;
				// Col 3
				var col1 = document.createElement("td");
				item.appendChild(col1);
				col1.style.padding = "5px 0px";
				col1.innerHTML = resultsObj[x].location;
				c++;
				if (c == 2) {
					c = 0;
				}
			}
			campusDirectoryPageTotal = p;
			var pageControls = document.createElement('div');
			document.getElementById("campusDirectory").appendChild(pageControls);
			pageControls.style.height = "3em";
			for (var i = 1; i <= p; i++) {
				var cDiv = document.createElement('div');
				pageControls.appendChild(cDiv);
				cDiv.style.float = "left";
				cDiv.style.padding = "10px 8px 0px 0px";
				cDiv.id = "campusDirectorydiv" + i;
				cDiv.style.textDecoration = "underline";
				if (i == 1) {
					cDiv.style.fontWeight = "bold";
					cDiv.style.textDecoration = "none";
				}
				cDiv.innerHTML = "<a href=\"javascript:goToCampusDirectoryPage(" + i + ");\">" + i + "</a> ";
			}
		}

		function goToCampusDirectoryPage(page) {
			for (var x = 1; x <= campusDirectoryPageTotal; x++) {
				document.getElementById('cdpage'+x).style.display = "none";
				document.getElementById('campusDirectorydiv'+x).style.fontWeight = "normal";
				document.getElementById('campusDirectorydiv'+x).style.textDecoration = "underline";
			}
			document.getElementById('cdpage'+page).style.display = "block";
			document.getElementById('campusDirectorydiv'+page).style.fontWeight = "bold";
			document.getElementById('campusDirectorydiv'+page).style.textDecoration = "none";
		}

		function tableCDResults(resultsObj) {
			var listContainer = document.createElement("table");
			var list = document.createElement("tbody");
			document.getElementById("campusDirectory").appendChild(listContainer);
			listContainer.cellSpacing = 0;
			listContainer.cellPadding = 0;
			listContainer.border = 0;
			listContainer.appendChild(list);
			listContainer.className = "responsive-table nohover evencells";
			for (var x = 0; x < resultsObj.length; x++) {
				var item = document.createElement("tr");
				list.appendChild(item);
				// Col 1
				var col1 = document.createElement("td");
				item.appendChild(col1);
				col1.style.padding = "5px 0px";
				col1.innerHTML = "<a href=\"" + resultsObj[x].link + "\">" + resultsObj[x].title + "</a>";
				// Col 2
				var col1 = document.createElement("td");
				item.appendChild(col1);
				col1.style.padding = "5px 0px";
				col1.innerHTML = resultsObj[x].phone;
				// Col 3
				var col1 = document.createElement("td");
				item.appendChild(col1);
				col1.style.padding = "5px 0px";
				col1.innerHTML = resultsObj[x].location;
			}
		}
	</script>
	 <style>
				#___gcse_0{

					padding:1rem 0rem;

				}


	.gsc-webResult.gsc-result.gsc-promotion{
	background-color:#ffffff;
	border-color:#fed000;
	border-width:2px;
	padding:1rem 0rem;
	min-height:4rem;
	}
	.gsc-webResult.gsc-result.gsc-promotion:hover{
	border-bottom:2px solid #fed000;
	}
	.gsc-webResult.gsc-result.gsc-promotion a{
	font-size:18px;
	font-weight:800;
	}
	.gsc-control-cse .gs-spelling, .gsc-control-cse .gs-result .gs-title, .gsc-control-cse .gs-result .gs-title * {
		font-size: 18px;
	}
	.gs-title {
		margin-bottom: .5rem;
	}
	.gsc-control-cse .gsc-table-result{
	font-size:14px;
	line-height:1.125rem;
	}
	.gsc-webResult.gsc-result{
	padding:1.25rem 0;
	}
	.gsc-webResult.gsc-result, .gsc-results .gsc-imageResult {

		border-bottom: 1px solid #002460;
	}

	.gsc-webResult.gsc-result:hover {
		border-bottom: 1px solid #fed000;
	}

				</style>
	<script async src="https://cse.google.com/cse.js?cx=b57b3fb5c55544902">
	</script>
	<div class="gcse-searchbox"></div>
	  <style>
				  .results_website, .results_people, .results_offices{

					  text-align: center;
					  padding:0rem .5rem;
					  z-index: 30;
					  cursor:pointer;


				  }
	  .results_website:hover, .results_people:hover, .results_offices:hover {
					  color:#1a1a1a;
				  }

	  .title_active{
					  color:#ffffff !important;
				  }
				  .title_inactive{
					  color: #666666 !important;
				  }
				  .title_inactive:hover{
					  color:#1a1a1a !important;
				  }
				  #directory{
					margin-top: 1rem;
									margin-bottom:1.5rem;
					grid-template-columns: repeat(3, minmax(0, 1fr));
					padding: 0rem !important;
					 position: relative;
					 z-index: 10;
				  }
				  .slide_indicator{
					  background-color: #0072BC;
					  width: 33%;
					  height: 100%;
					  position: absolute;
					  z-index: 0;
				  }
				  #results_content_wrap > div{
					  display: none;
				  }
				  .indicator{
					  left: calc(50% - 0.75rem);
					  background-color: #0072BC;
					  transform: rotate(45deg);
					  width: 1.5rem;
					  height: 1.5rem;
					  bottom: -0.5rem;
					  position: absolute;
				  }
	section#content main h3 {
	   font-size:1.025rem;
	   font-weight: 400;
	   letter-spacing: .025rem;
	}
	@media (min-width: 768px) {
	  section#content main h3 {
		  font-weight: 600;
	   }
	}
	</style>
			  <div id="directory" style="display:grid;">
				  <a style="display: contents;"><div class="results_website" >
					  <h3>Website</h3>
				  </div></a>
				  <a style="display: contents;"><div class="results_people">
					  <h3 id="resultsTitle">People</h3>
				  </div></a>
				  <a style="display: contents;"><div class="results_offices">
					   <h3 id="campusTitle">Offices</h3>
				  </div></a>
				  <div class="slide_indicator"><div class="indicator"></div></div>
			  </div>
				 <div tabindex="0" id="results_content_wrap">
					 <div id="webDirectory">
					 <div class="gcse-searchresults"></div>

					 </div>
					 <div id="resultsDirectory"></div>
					 <div id="campusDirectory"></div>
				 </div>
	<script>
				const results_content_wrap = $("#results_content_wrap");
				const selectable_tabs = $("#directory").children();
				const slide_indicator = $(".slide_indicator");
				const search_headings = $("#directory").children().find("h3");
							const results_content = results_content_wrap.children();

				$("#directory").children().on("click", function(){
					let index = $(this).index();


					switch (index){
						case 0:
						slide_indicator.animate({left:"1px"}, 200, function(){
							display_result(index);
							setTabFocus(index);

						});
						break;
						case 1:
						slide_indicator.animate({left:"33.33%"},200,function(){
							display_result(index);
							setTabFocus(index);

						});
						break;
						case 2:
						slide_indicator.animate({left: "67%"},200, function(){
							display_result(index);
							setTabFocus(index);

						});
						break;
							deault :
						console.log("??????");

					}
				})
							function display_result(index){
					results_content.attr("style","display:none;")
					$(results_content[index]).attr("style","display:block;");
					search_headings.addClass("title_inactive title_inactive:hover");
					$(search_headings[index]).removeClass("title_inactive title_inactive:hover").addClass("title_active");
				}

							function setTabFocus(index){
					results_content_wrap.focus()
			}

				slide_indicator.off();

			</script>
		</main>
	</body>
</html>
