<?php 
//Edit the following:
$config['page-title'] = "CMS | Challey School of Music";
$config['page-description'] = "";
$config['page-realm'] = "CSOM"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<section id=""><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<section>
	<header>
		<h1>CMS Information</h1>
	</header>
	
	<article>
		<h3><a href="https://docs.google.com/document/d/1IWHSMM3gNnsKxPa-_Oh2u469y4GirskIIDko2kbu0Ow/edit?usp=sharing">Draft Schedule</a></h3>
		<p><a href="https://docs.google.com/document/d/16nzYIMdqomEPsyMVlphgjQKq9SyabjPJl3lkPZYXXIo/edit">Hospitality List</a></p>
		<p><a href="https://drive.google.com/file/d/1F2unuk9lS3Sgy9cOu2fL6k-8HDbAPEJC/view">South Campus Map</a></p>
		<p><a href="https://www.google.com/maps/place/1511+12th+Ave+N,+Fargo,+ND+58102/@46.8910229,-96.806186,17z/data=!3m1!4b1!4m6!3m5!1s0x52c8cbd3ff9de2d3:0xd6ea3e6738f327fa!8m2!3d46.8910229!4d-96.8036111!16s%2Fg%2F11dztqkw3h?entry=ttu">Google Maps Directions to NDSU Challey School of Music</a></p>
		<p><a href="http://maps.apple.com/?q=1511+12th+ave+n+Fargo+ND+58102">Apple Maps Directions to NDSU Challey School of Music</a></p>
	</article>
</section>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>