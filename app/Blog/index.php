<?php

$blog = [

	[   "blog_title" => "blog title Rhoncus Urna Neque",
		"blog_category" => ["dogs","cats","booze"],
		"blog_description"=> "Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Rhoncus Urna Neque Viverra Justo Nec Ultrices Dui Sapien Eget. Velit Egestas Dui Id Ornare Arcu Odio Ut.",
		"blog_url" => "https://txwes.edu/blog-1",
		"blog_image" => "https://txwes.edu/media"
	],
	[
	"blog_title" => "blog title Rhoncus Urna Neque #2",
	"blog_category" => ["dogs","booze"],
	"blog_description"=> "Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Rhoncus Urna Neque Viverra Justo Nec Ultrices Dui Sapien Eget. Velit Egestas Dui Id Ornare Arcu Odio Ut.",
	"blog_url" => "https://txwes.edu/blog-2",
	"blog_image" => "https://txwes.edu/media"]

];

print_r(json_encode($blog[1]))

?>
