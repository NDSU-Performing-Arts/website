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
	
	<div class="alert alert-warning"><i class="fa-brands fa-safari"></i> Safari Users: If calendar fails to load, <a href="https://calendar.google.com/calendar/embed?src=ndsu.performing.arts%40gmail.com&ctz=America%2FChicago">Click Here</a>
	</div>
	<!--<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FChicago&showCalendars=0&src=bmRzdS5wZXJmb3JtaW5nLmFydHNAZ21haWwuY29t&src=Yms4b3NiZThvYnF1a2IydjNzbWpndXJkOHAyYjNkcjNAaW1wb3J0LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%237CB342&color=%23D81B60" style="border:solid 1px #777" width="100%" height="600"  frameborder="0" scrolling="no"></iframe>-->
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