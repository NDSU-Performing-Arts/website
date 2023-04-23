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
		content="https://www.ndsu.edu/performingarts/">

<meta 	name="author" 
		content="Web Developer">

<meta 	property="og:title" 
		name="title" 
		content="Document Title | Division of Performing Arts">

<meta 	property="og:description" 
		name="description" 
		content="The Division of Performing Arts at NDSU promotes the arts through its educational programs, its creative work, and its outreach activities. The Division of Performing Arts includes the Challey School of Music and the Department of Theatre Arts.">

<meta 	name="keywords" 
		content="North Dakota State University Division of Performing Arts,
				north dakota state university division of performing arts,
				North Dakota State University Performing Arts,
				north dakota state university performing arts,
				NDSU Division of Performing Arts, 
				NDSU division of performing arts,
				ndsu division of performing arts,
				NDSU Performing Arts, 
				NDSU performing arts, 
				ndsu performing arts,
				NDSU DPA, 
				NDSU dpa, 
				ndsu dpa">

<meta 	property="og:image" 
		name="image" 
		content="">

<meta 	name="viewport" 
		content="width=device-width, 
				initial-scale=1.0, 
				maximum-scale=1.0, 
				user-scalable=no">

<!--	document title -->
<title>Document Title | Division of Performing Arts</title>

<!-- 	document favicon -->
<?php 	include('../resources/languages/php/alpha_sitewide_favicon.php')?>

<!-- 	document stylesheets -->
<?php 	include('../resources/languages/php/alpha_sitewide_stylesheets.php')?>

<!-- 	additional stylesheets -->
<link 	rel="stylesheet" 
		href="../resources/addins/calendar/calendar_styles.css">		
</head>

<!--	document body -->
<body>

<!-- 	document navigation -->
<?php 	include('../resources/languages/php/beta_performingarts_navigation.php')?>

<!--	body content -->
<section id="_body_content">
	<header>
		<h1>Document Title</h1>
	</header>
	
	<article>
		<p>Document content</p>
	</article>
</section>

<!-- 	document footer -->
<?php 	include('../resources/languages/php/alpha_sitewide_footer.php')?>

</body>

<!--	document javascript -->
<?php 	include('../resources/languages/php/alpha_sitewide_javascript.php')?>

<?php

/*		isMobile function */
function isMobile() {
	return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
</html>