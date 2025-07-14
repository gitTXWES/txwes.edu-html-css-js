<?php
 $url = "https://txwes.edu/sitemap-en.xml";

 $xml_loaded = simplexml_load_file($url);

 $json_sitemap = json_encode($xml_loaded);

 echo($json_sitemap);
?>
