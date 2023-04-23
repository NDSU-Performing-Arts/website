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
		content="Department of Theatre Arts">

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
<title>Department of Theatre Arts</title>

<!-- 	document favicon -->
<?php 	include('../resources/languages/php/alpha_sitewide_favicon.php')?>

<!-- 	document stylesheets -->
<?php 	include('../resources/languages/php/delta_theatre_stylesheets.php')?>

<!-- 	additional stylesheets -->
<link 	rel="stylesheet" 
		href="../resources/addins/rotating_headers/rotating_headers_styles.css">
<link 	rel="stylesheet" 
		href="../resources/addins/calendar/calendar_styles.css">
</head>

<!--	document body -->
<body>

<!-- 	document navigation -->
<?php 	include('../resources/languages/php/delta_theatre_navigation.php')?>

<!-- 	rotating headers -->
<section id="_rotating_header_white_background"><section id="_rotating_header">
	<section id="_rh_01">
		<a href="" title="2017-18 Theatre NDSU">
			<img alt="2017-18 Theatre NDSU"
			class="_rh_image" 
			src="shows/images/headers/940px_2017_season.jpg">
		</a>
	</section>

	<section id="_rh_02">
		<a href="" title="Urinetown: The Musical">
			<img alt="Urinetown: The Musical"
			class="_rh_image" 
			src="shows/images/headers/940px_2017_urinetown.jpg">
		</a>
	</section>
	
	<section id="_rh_03">
		<a href="" title="How I Learned to Drive">
			<img alt="How I Learned to Drive"
			class="_rh_image" 
			src="shows/images/headers/940px_2017_hiltd.jpg">
		</a>
	</section>
	
	<section id="_rh_04">
		<a href="" title="Tartuffe">
			<img alt="Tartuffe"
			class="_rh_image" 
			src="shows/images/headers/940px_2017_tartuffe.jpg">
		</a>
	</section>
	
	<section id="_rh_05">
		<a href="" title="Junie B. Jones in Jingle Bells, Batman Smells!">
			<img alt="Junie B. Jones in Jingle Bells, Batman Smells!"
			class="_rh_image" 
			src="shows/images/headers/940px_2017_junieb.jpg">
		</a>
	</section>
</section></section>

<!--	body content -->
<section id="_body_content">
	<!--	section left -->
	<section id="_body_left">
		<!-- ------------------------------------------------
			document section

			INFORMATION:
				the section of the document
			------------------------------------------------ -->
		<section>
			<header>
				<h1>Department of Theatre Arts</h1>
			</header>

			<article>
				<p>NDSU Department of Theatre Arts</p>
			</article>
		</section>

		<section>
			<header>
				<h2>Common Ground Workshop</h2>
			</header>

			<article>
				<p>On Sept. 22-25, 2016, the NDSU Department of Theatre Arts offered a free workshop series called Common Ground: Understanding Spectacle and Imagining Civic Art," led by Frank Maugeri, a Chicago-based theater visionary and community builder.</p>
			</article>
		</section>

		<section>
			<header>
				<h2>Potential Students</h2>
			</header>

			<article>
				<ul>
					<li>Want to learn more about NDSU Theatre Arts? Click here for more information!</li>
					<li>All potential theatre majors are invited to audition for theatre scholarships. Click here for more information.</li>
					<li>Check out production photo selections on Flickr.</li>
				</ul>
			</article>
		</section>

		<section>
			<header>
				<h2>Current Students</h2>
			</header>

			<article>
				<ul>
					<li>2016 Audition Information</li>
					<li>Production Photo Selections on Flickr!</li>
					<li>Theatre Handbook</li>
					<li>Production Calendar</li>
					<li>Play Submission Form</li>
					<li>Returning Student Scholarship Form (PDF)</li>
					<li>NDSU Student Chapter of United States Institute of Theatre Technology</li>
					<li>Newfangled Theatre Company</li>
				</ul>
			
				<p>&nbsp;</p>
			</article>
		</section>
	</section>

	<!--	section right -->
	<section id="_body_right">
		<section>
			<header>
				<h2>View Us in Action</h2>

				&nbsp;

				<a href="https://www.facebook.com/pg/NDSUTheatreArts/videos/" title="View Us in Action">
					<img alt="View Us in Action"
						class="_gif" 
						src="../resources/media/images/gifs/480px_peterpan.gif"
						width="100%">
				</a>
			</header>
		</section>

		<section>
			<header>
				<h2>Calendar</h2>
			</header>

			<article id="_full_calendar">
				<script src="https://code.jquery.com/jquery-1.6.4.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
				<script src="../resources/addins/calendar/calendar_jquery_rss_01.js"></script>

				<script>
					var date = new Date();
					var month = date.getMonth() + 1;
					var day = date.getDate();
					var year = date.getFullYear();

					jQuery(function($) {
						// document.getElementById("todaysDate").innerHTML = "Today's Date: " + month + "/" + day + "/" + year;

						$("#rss-feeds").rss("https://apps.ndsu.edu/eventcalendar/performingarts-rss.php?type=rss&categoryid=2&sponsortype=specific&specificsponsor=Division+of+Performing+Arts&timebegin_month=" + month + "&timebegin_day=" + day + "&timebegin_year=" + year + "&timeend_month=" + month + "&timeend_day=" + day + "&timeend_year=" + year + 1 + "&startexport=%C2%A0%C2%A0%C2%A0%C2%A0OK", {
							ssl: true,
							layoutTemplate: '{entries}',
							entryTemplate: "<ul><li><strong>{bodyPlain}</strong></li><li><a href='{url}'>{title}</a></li></ul>",})
					})
				</script>

				<div id="rss-feeds"></div>
				
				<p>&nbsp;</p>
			</article>
		</section>
	</section>
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