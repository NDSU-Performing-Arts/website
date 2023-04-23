<!DOCTYPE html>

<!--
-	COPYRIGHT NOTICE:
-		this file and all of its attached files are property of the
-		Division of Performing Arts
-		North Dakota State University
-		unless otherwise stated 
-->

<!--	html document -->
<html>

<?php

/*		define root directory */
define("ROOT", __DIR__ ."/");
define("HTTP", ($_SERVER["SERVER_NAME"] == "localhost")
	   ? "http://localhost:8888/redesign/"
	   : "https://ndsu.edu/performingarts/re-design/"
);
?>

<!--	document head -->
<head>

<!--	document metatags -->
<meta 	charset="UTF-8">

<meta 	property="og:url" 
		name="url" 
		content="https://www.ndsu.edu/performingarts/music/">

<meta 	name="author" 
		content="Web Developer">

<meta 	property="og:title" 
		name="title" 
		content="Document Title | Challey School of Music">

<meta 	property="og:description" 
		name="description" 
		content="The Challey School of Music at NDSU promotes the arts through its educational programs, its creative work, and its outreach activities. The Challey School of Music offers bachelor's, master's, and doctoral degrees—to prepare the next generation of music professionals.">

<meta 	name="keywords" 
		content="North Dakota State University Challey School of Music,
				north dakota state university challey school of music,
				North Dakota State University School of Music,
				north dakota state university school of music,
				NDSU Challey School of Music, 
				NDSU challey school of music,
				ndsu challey school of music,
				NDSU School of Music, 
				NDSU school of music, 
				ndsu school of music,
				NDSU Music, NDSU music, ndsu music">

<meta 	property="og:image" 
		name="image" 
		content="">

<meta 	name="viewport" 
		content="width=device-width, 
				initial-scale=1.0, 
				maximum-scale=1.0, 
				user-scalable=no">

<!--	document title -->
<title>Document Title | Challey School of Music</title>

<!-- 	document favicon -->
<?php 	include('../resources/languages/php/alpha_sitewide_favicon.php')?>

<!-- 	document stylesheets -->
<?php 	include('../resources/languages/php/charlie_music_stylesheets.php')?>

<!-- 	additional stylesheets -->
<link 	rel="stylesheet" 
		href="../resources/addins/calendar/calendar_styles.css">
</head>

<!--	document body -->
<body>

<!-- 	document navigation -->
<?php 	include('../resources/languages/php/charlie_music_navigation.php')?>

<section id="_body_content">

<!--	body content -->
<section>
	<header>
		<h1>Document Title</h1>
	</header>
	
	<article>
		<p>Document content</p>
	</article>
</section>
	
</section>
	
<!-- 	document footer -->
<?php 	include('../resources/languages/php/alpha_sitewide_footer.php')?>

</body>

<!--	document javascript -->
<?php 	include('../resources/languages/php/alpha_sitewide_javascript.php')?>

<!-- 	additional scripts -->

<?php

/*		isMobile function */
function isMobile() {
	return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
</html>