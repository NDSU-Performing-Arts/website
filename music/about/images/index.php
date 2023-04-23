<!DOCTYPE html>

<!--
-	COPYRIGHT NOTICE:
-		this file and all of its attached files are property of the
-		Division of Performing Arts
-		North Dakota State University
-		unless otherwise stated 
-->

<!--	html document -->
<html><!-- InstanceBegin template="/Templates/00_performingarts_parent.dwt.php" codeOutsideHTMLIsLocked="false" -->
	
<?php

/*		define root directory */
define("ROOT", __DIR__ ."/");
define("HTTP", ($_SERVER["SERVER_NAME"] == "localhost")
	   ? "http://localhost:8888/performingarts/"
	   : "https://ndsu.edu/performingarts/"
);
?>
	
<!--	document head -->
<head>

<!-- InstanceBeginEditable name="docmetatags" -->

<!--	document metatags -->
<meta 	charset="UTF-8">

<meta 	property="og:url" 
		name="url" 
		content="https://www.ndsu.edu/performingarts/">

<meta 	name="author" 
		content="Web Developer">

<meta 	property="og:title" 
		name="title" 
		content="Division of Performing Arts">

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
<!-- InstanceEndEditable -->

<!-- InstanceBeginEditable name="doctitle" -->

<!--	document title -->
<title>Division of Performing Arts</title>
<!-- InstanceEndEditable -->

<!-- 	document favicon -->
<?php 	include('resources/languages/php/alpha_sitewide_favicon.php')?>

<!-- 	document stylesheets -->
<link 	rel="stylesheet" 
		href="resources/languages/css/sitewide_body.css">
		
<link 	rel="stylesheet" 
		href="resources/languages/css/sitewide_computer_navigation.css">
	
<link 	rel="stylesheet" 
		href="resources/languages/css/sitewide_footer.css">
	
<link 	rel="stylesheet" 
		href="resources/languages/css/sitewide_icons.css">
	
<link 	rel="stylesheet" 
		href="resources/languages/css/sitewide_mobile_navigation.css">

<link 	rel="stylesheet" 
		href="resources/languages/css/sitewide_section.css">

<!-- InstanceBeginEditable name="docstylesheets" -->
<!-- 	additional stylesheets -->
<link 	rel="stylesheet" 
		href="resources/addins/rotating_headers/rotating_headers_styles.css">
		
<link 	rel="stylesheet" 
		href="resources/addins/dpa_cards/dpa_cards_styles.css">
<!-- InstanceEndEditable -->
</head>

<!--	document body -->
<body style="background-color: rgba(0,30,10,1)">

<!-- 	document navigation -->
<?php 	include('resources/languages/php/beta_performingarts_navigation.php')?>

<section id="_body_content"><!-- InstanceBeginEditable name="body" -->

<!-- 	rotating headers -->
<section id="_rotating_header_green_background"><section id="_rotating_header">
	<section id="_rh_01">
		<a href="https://youtu.be/RmWyyf1U--Q" title="Sing at NDSU">
			<img alt="Sing at NDSU"
			class="_rh_image" 
			src="resources/media/images/headers/940px_singatndsu.jpg">
		</a>
	</section>

	<section id="_rh_02">
		<a href="online_classes/" title="Online Classes">
			<img alt="Online Classes"
			class="_rh_image" 
			src="online_classes/images/940px_2017_onlineclasses.jpg">
		</a>
	</section>
	
	<section id="_rh_03">
		<a href="music/opera/operawars/" title="2018 Opera Wars">
			<img alt="2018 Opera Wars"
			class="_rh_image" 
			src="music/opera/operawars/images/940px_2018_operawars.jpg">
		</a>
	</section>
	
	<section id="_rh_04">
		<a href="https://tickets.ndsu.nodak.edu/eventperformances.asp?evt=87" title="Tartuffe">
			<img alt="Tartuffe"
			class="_rh_image" 
			src="theatre/shows/images/headers/940px_2017_tartuffe.jpg">
		</a>
	</section>
	
	<section id="_rh_05">
		<a href="music/festivals/jazz/" title="2018 Jazz Festival">
			<img alt="2018 Jazz Festival"
			class="_rh_image" 
			src="music/festivals/jazz/images/940px_2018_jazz_festival.jpg">
		</a>
	</section>
</section></section>

<!-- 	dpa cards -->
<section id="_dpa_cards">
	<section class="_dpa_card">
		<article class="_dpa_card_images">
			<a href="music/" title="Challey School of Music">
				<img alt="Challey School of Music"
				class="_dpa_card_image_landscape" 
				src="resources/addins/dpa_cards/images/landscape/2560px_music_card.png">

				<img alt="Challey School of Music"
				class="_dpa_card_image_landscape_overlay_01" 
				src="resources/addins/dpa_cards/images/landscape/2560px_music_card_overlay_01.png">

				<img alt="Challey School of Music"
				class="_dpa_card_image_landscape_overlay_02" 
				src="resources/addins/dpa_cards/images/landscape/2560px_music_card_overlay_02.png">
				
				<img alt="Challey School of Music"
				class="_dpa_card_image_portrait" 
				src="resources/addins/dpa_cards/images/portrait/2560px_music_card.png">

				<img alt="Challey School of Music"
				class="_dpa_card_image_portrait_overlay_02" 
				src="resources/addins/dpa_cards/images/portrait/2560px_music_card_overlay_02.png">
			</a>
		</article>
	</section>
	
	<section class="_dpa_card">
		<article class="_dpa_card_images">
			<a href="theatre/" title="Department of Theatre Arts">
				<img alt="Department of Theatre Arts"
				class="_dpa_card_image_landscape" 
				src="resources/addins/dpa_cards/images/landscape/2560px_theatre_card.png">

				<img alt="Department of Theatre Arts"
				class="_dpa_card_image_landscape_overlay_01" 
				src="resources/addins/dpa_cards/images/landscape/2560px_theatre_card_overlay_01.png">

				<img alt="Department of Theatre Arts"
				class="_dpa_card_image_landscape_overlay_02" 
				src="resources/addins/dpa_cards/images/landscape/2560px_theatre_card_overlay_02.png">
				
				<img alt="Department of Theatre Arts"
				class="_dpa_card_image_portrait" 
				src="resources/addins/dpa_cards/images/portrait/2560px_theatre_card.png">

				<img alt="Department of Theatre Arts"
				class="_dpa_card_image_portrait_overlay_02" 
				src="resources/addins/dpa_cards/images/portrait/2560px_theatre_card_overlay_02.png">
			</a>
		</article>
	</section>
	
	<section class="_dpa_card">
		<article class="_dpa_card_images">
			<a href="venues/" title="Venues">
				<img alt="Production"
				class="_dpa_card_image_landscape" 
				src="resources/addins/dpa_cards/images/landscape/2560px_venues_card.png">

				<img alt="Production"
				class="_dpa_card_image_landscape_overlay_01" 
				src="resources/addins/dpa_cards/images/landscape/2560px_venues_card_overlay_01.png">

				<img alt="Production"
				class="_dpa_card_image_landscape_overlay_02" 
				src="resources/addins/dpa_cards/images/landscape/2560px_venues_card_overlay_02.png">
				
				<img alt="Production"
				class="_dpa_card_image_portrait" 
				src="resources/addins/dpa_cards/images/portrait/2560px_venues_card.png">

				<img alt="Production"
				class="_dpa_card_image_portrait_overlay_02" 
				src="resources/addins/dpa_cards/images/portrait/2560px_venues_card_overlay_02.png">
			</a>
		</article>
	</section>
</section>

<!-- ticket widget -->
<?php 	include('resources/addins/widgets/ticket_popup/ticket_popup.php')?>
<!-- InstanceEndEditable --></section>

<!-- 	document footer notification -->
<?php 	include('resources/addins/footer_notification/footer_notification.php')?>
	
<!-- 	document footer -->
<?php 	include('resources/languages/php/alpha_sitewide_footer.php')?>

</body>

<!--	document javascript -->
<script type="text/javascript"
		src="resources/languages/jq/jquery-3.2.1.min.js"></script>
		
<script type="text/javascript"
		src="resources/languages/jq/jq_onclick.js"></script>
		
<script type="text/javascript"
		src="resources/languages/js/device_detect.js"></script>

<script type="text/javascript"
		src="resources/languages/js/device_load.js"></script>
	
<script type="text/javascript"
		src="resources/languages/js/device_resize.js"></script>
	
<script type="text/javascript"
		src="resources/languages/js/device_scroll.js"></script>

<script type="text/javascript"
		src="resources/languages/js/device_width.js"></script>
		
<script type="text/javascript"
		src="resources/languages/js/navigation_onclick.js"></script>

<!-- InstanceBeginEditable name="docscripts" -->
<!-- 	additional scripts -->

<!-- InstanceEndEditable -->

<?php

/*		isMobile function */
function isMobile() {
	return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
<!-- InstanceEnd --></html>