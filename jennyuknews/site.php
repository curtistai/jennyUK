<?php
// If "siteName" isn't in the querystring, set the default site name to 'nettuts'
$siteName = empty($_GET['siteName']) ? 'Jenny@UK News' : $_GET['siteName'];

   // YQL query (SELECT * from feed ... ) // Split for readability
   $path = "http://query.yahooapis.com/v1/public/yql?q=";
   $path .= urlencode("SELECT * FROM feed WHERE url='http://jennyuknews.tumblr.com/rss'");
   $path .= "&format=json";
   
   // Call YQL, and if the query didn't fail, cache the returned data
   $feed = file_get_contents($path);
   
	// Decode that shizzle
	$feed = json_decode($feed);

	// Include the view
	include('views/site.tmpl.php');

?>