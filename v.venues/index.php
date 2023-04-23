<?php 
//Edit the following:
$config['page-title'] = "Venues | Division of Performing Arts";
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
	<header class="text-center">
		<img alt="Music Faculty"
			class="" 
			src="images/940px_venues.jpg"
			width="100%">
	</header><br />
</section>
<div class="row">
	<div class="col-md-6">
		<a href="/performingarts/venues/boxoffice/">
			<img alt=""
			 	src="/performingarts/resources/addins/venue_cards/images/672px_boxoffice.jpg"
			 	width="100%">
		</a>
	</div>
	
	<div class="col-md-6">
		<a href="/performingarts/venues/facilities/">
			<img alt=""
				 src="/performingarts/resources/addins/venue_cards/images/672px_facilities.jpg"
				 width="100%">
		</a><br /><br />
	</div>
</div>

<!-- InstanceEndEditable --></div></section>


<?php include($config['path'].'resources/footer.php')?>