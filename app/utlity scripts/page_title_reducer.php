	<?php
$page_title = ' – Texas Wesleyan University';
$section_title = 'something else';
$content_title = '<t4 type="navigation" name="Page Title" id="42" />';
if(empty($section_title)){
	echo ('<title>' .  $content_title . $page_title . '</title>');
} else {
	echo ('<title>' .  $section_title . $page_title . '</title>');
}

?>