<?php
$url = "http://search.twitter.com/search.atom?q=urlencode(PHP+problem)";
$data = simplexml_load_file($url);
foreach ($data->entry as $value)
{
	$from_name = $value->author->uri;
	$from_name = str_replace ("http://twitter.com/", "", $from_name);
    	$message = "@$from_name Hey Buddy you can find solution to your problems at http://www.phpcollection.com #php";
		require_once( 'mytwitter.php' );
		$twitter =  new MyTwitter('phpcollection', '**********');
 		$result = $twitter->updateStatus($message);
}
?>