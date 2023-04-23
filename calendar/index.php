<?php 
//Edit the following:
$config['page-title'] = "Calendar | Division of Performing Arts";
$config['page-description'] = "";
$config['page-realm'] = "DPA"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<section id="" ><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<section id="">
	<header>
		<img alt="Calendar" class="" src="images/940px_news.jpg" style="width:100%;">
			
		<h1>Calendar</h1>
	</header>
	
	<article id="">
	<iframe src="https://calendar.google.com/calendar/embed?src=ndsu.performing.arts%40gmail.com&ctz=America%2FChicago" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
		<!--<script src="https://code.jquery.com/jquery-1.6.4.min.js"></script>-->
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>-->
		<!--<script src="../resources/addins/calendar/calendar_jquery_rss_02.js"></script>-->
       
        <script>
			// var date = new Date();
			// var month = date.getMonth() + 1;
			// var day = date.getDate();
			// var year = date.getFullYear();
    		// jQuery(function($) {
				// document.getElementById("todaysDate").innerHTML = "Today's Date: " + month + "/" + day + "/" + year;
				
      			// $("#rss-feeds").rss("https://apps.ndsu.edu/eventcalendar/performingarts-rss.php?type=rss&categoryid=2&sponsortype=specific&specificsponsor=Division+of+Performing+Arts&timebegin_month=" + month + "&timebegin_day=" + day + "&timebegin_year=" + year + "&timeend_month=" + month + "&timeend_day=" + day + "&timeend_year=" + (year + 1) + "&startexport=%C2%A0%C2%A0%C2%A0%C2%A0OK", {
					// ssl: true,
					// layoutTemplate: '{entries}',
					// entryTemplate: "<ul><li><strong>{bodyPlain}</strong></li><li><a href='{url}'>{title}</a></li></ul>",})
			// })
		</script>
  
  		<div id="rss-feeds"></div>
	</article>
</section>
<!-- InstanceEndEditable --></div></section> 

<?php include($config['path'].'resources/footer.php')?>