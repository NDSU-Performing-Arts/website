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
				NDSU DPA, NDSU dpa, ndsu dpa">

<meta 	property="og:image" 
		name="image" 
		content="">

<meta 	name="viewport" 
		content="width=device-width, 
				initial-scale=1.0, 
				maximum-scale=1.0, 
				user-scalable=no">

<!--	document title -->
<title>Division of Performing Arts</title>

<!-- 	document favicon -->
<?php 	include('resources/languages/php/favicon.php')?>

<!-- 	document stylesheets -->
<?php 	include('resources/languages/php/stylesheets.php')?>

<!-- 	additional stylesheets -->
<link 	rel="stylesheet" 
		href="resources/addins/rotating_headers/rotating_headers_styles.css">
		
<link 	rel="stylesheet" 
		href="resources/addins/dpa_cards/dpa_cards_styles.css">
			
</head>

<!--	document body -->
<body style="background-color: rgba(0,30,10,1);">

<!-- 	document navigation -->
<?php 	include('resources/languages/php/navigation.php')?>

<!-- 	rotating headers -->
<section id="_rotating_header_green_background"><section id="_rotating_header">
	<section id="_rh_01">
		<a href="music/fissinger/" title="Fissinger">
			<img alt="Fissinger"
			class="_rh_image" 
			src="music/fissinger/images/_940px_2017_fissinger.jpg">
		</a>
	</section>

	<section id="_rh_02">
		<a href="music/chamber_music_festival/" title="Chamber Music Festival">
			<img alt="Chamber Music Festival"
			class="_rh_image" 
			src="music/chamber_music_festival/images/_940px_2017_chambermusicfestival.jpg">
		</a>
	</section>
	
	<section id="_rh_03">
		<a href="online_classes/" title="Online Classes">
			<img alt="Online Classes"
			class="_rh_image" 
			src="online_classes/images/_940px_2017_onlineclasses.jpg">
		</a>
	</section>
	
	<section id="_rh_04">
		<a href="membership/" title="Sustaining Member">
			<img alt="Sustaining Member"
			class="_rh_image" 
			src="membership/images/_940px_2017_sustainingmember.jpg">
		</a>
	</section>
	
	<section id="_rh_05">
		<a href="music/graduate/schulwerk/" title="Orff Schulwerk">
			<img alt="Orff Schulwerk"
			class="_rh_image" 
			src="music/graduate/schulwerk/images/_940px_2017_schulwerk.jpg">
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
			<a href="production/" title="Production">
				<img alt="Production"
				class="_dpa_card_image_landscape" 
				src="resources/addins/dpa_cards/images/landscape/2560px_production_card.png">

				<img alt="Production"
				class="_dpa_card_image_landscape_overlay_01" 
				src="resources/addins/dpa_cards/images/landscape/2560px_production_card_overlay_01.png">

				<img alt="Production"
				class="_dpa_card_image_landscape_overlay_02" 
				src="resources/addins/dpa_cards/images/landscape/2560px_production_card_overlay_02.png">
				
				<img alt="Production"
				class="_dpa_card_image_portrait" 
				src="resources/addins/dpa_cards/images/portrait/2560px_production_card.png">

				<img alt="Production"
				class="_dpa_card_image_portrait_overlay_02" 
				src="resources/addins/dpa_cards/images/portrait/2560px_production_card_overlay_02.png">
			</a>
		</article>
	</section>
</section>
	
<!-- 	document footer -->
<?php 	include('resources/languages/php/footer.php')?>

</body>

<!--	document javascript -->
<?php 	include('resources/languages/php/javascript.php')?>

<?php

/*		isMobile function */
function isMobile() {
	return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
</html>