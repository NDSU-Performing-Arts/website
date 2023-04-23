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
		content="https://www.ndsu.edu/performingarts/theatre/">

<meta 	name="author" 
		content="Web Developer">

<meta 	property="og:title" 
		name="title" 
		content="Document Title | Department of Theatre Arts">

<meta 	property="og:description" 
		name="description" 
		content="The Department of Theatre Arts provides a comprehensive, rigorous, and innovative academic program consistent with the mission of NDSU. The department serves the pursuit of high-quality teaching, artistic performance, dedicated service, and professional and scholarly excellence through experiences of lasting value. Learn more about our program by exploring these pages and visit the Performing Arts Calendar for our production schedule.">

<meta 	name="keywords" 
		content="North Dakota State University Department of Theatre Arts,
				north dakota state university department of theatre arts,
				North Dakota State University Theatre Arts,
				north dakota state university theatre arts,
				North Dakota State University Theatre,
				north dakota state university theatre,
				NDSU Department of Theatre Arts, 
				NDSU department of theatre arts,
				ndsu department of theatre arts,
				NDSU Theatre Arts, 
				NDSU theatre arts, 
				ndsu theatre arts,
				NDSU Theatre, NDSU theatre, ndsu theatre">

<meta 	property="og:image" 
		name="image" 
		content="">

<meta 	name="viewport" 
		content="width=device-width, 
				initial-scale=1.0, 
				maximum-scale=1.0, 
				user-scalable=no">

<!--	document title -->
<title>Document Title | Department of Theatre Arts</title>

<!-- 	document favicon -->
<?php 	include('../resources/languages/php/alpha_sitewide_favicon.php')?>

<!-- 	document stylesheets -->
<?php 	include('../resources/languages/php/delta_theatre_stylesheets.php')?>

<!-- 	additional stylesheets -->

</head>
<!--	document body -->
<body>

<!-- 	document navigation -->
<?php 	include('../resources/languages/php/delta_theatre_navigation.php')?>

<!--	body content -->
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