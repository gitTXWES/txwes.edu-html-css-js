
$breadcrumb = str_replace(array("/","-"),array(", "," "),$_SERVER['REQUEST_URI']);

if (strpos($_SERVER['REQUEST_URI'],"freshman") !== false) {
  $classification = "freshman";
}
elseif (strpos($_SERVER['REQUEST_URI'],"transfer") !== false) {
  $classification = "transfer";
}
elseif (strpos($_SERVER['REQUEST_URI'],"graduate") !== false) {
  if (strpos($_SERVER['REQUEST_URI'],"undergraduate") !== false) {
	$classification = "undergraduate";
  }
  else {
	$classification = "graduate";
  }
}
else {
  $classification = "freshman";
}
if (strpos($_SERVER['REQUEST_URI'],"international") !== false) {
  $classification = "international " . $classification;
}

function processVariables($intake) {
  global $SectionTitle, $classification, $breadcrumb;
  return str_replace(array("#Title#","#Classification#","#Breadcrumb#"),array($SectionTitle,$classification,$breadcrumb),$intake);
}

if (strpos($_SERVER['REQUEST_URI'],"<t4 type="content" name="Branch" output="linkurl" modifiers=""  />") !== false) {

	if (!empty($pageDescription){
	echo '<meta name="description" content="'. $pageDescription .'"/>';
	}else{
  echo '<meta name="description" content="' . processVariables("<t4 type="content" name="Description" output="normal" modifiers=""  />") . '"/>';
	 }

  echo '<meta name="keywords" content="' . processVariables("<t4 type="content" name="Keywords" output="normal" modifiers=""  />") . '"/>';
}





	<meta http-equiv="origin-trial" content="Az520Inasey3TAyqLyojQa8MnmCALSEU29yQFW8dePZ7xQTvSt73pHazLFTK5f7SyLUJSo2uKLesEtEa9aUYcgMAAACPeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IkRpc2FibGVUaGlyZFBhcnR5U3RvcmFnZVBhcnRpdGlvbmluZyIsImV4cGlyeSI6MTcyNTQwNzk5OSwiaXNTdWJkb21haW4iOnRydWUsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">

		<title>Online MBA - Texas Wesleyan University - Fort Worth, Texas</title>





		<meta name="description" content="Explore Online MBA at Texas Wesleyan. You will see how we make our smaller university, smarter in Ft Worth, Texas.">

		<meta name="keywords" content="Texas Wesleyan University, Texas Wesleyan, private universities, colleges in fort worth tx, Online MBA, , online mba, ?utm_campaign=GR_Admissions&amp;utm_medium=outdoor&amp;utm_source=ad&amp;utm_content=MBA_Kiosk_Poster">
