<?php

//t4 content type layout html.main.css
$colors =  '#03599b|#ffffff';

//changes string to array
$colors_array = explode('|' , $colors);

$background = 'background:' . $colors_array[0] . ';';
$text_color = 'color:' . $colors_array[1] . ';';

?>
<div style="<?php echo $background . $text_color ?> min-width:50px; min-height:50px;">
	this is my test
	<p> this is how t4 does it</p>
</div>
	