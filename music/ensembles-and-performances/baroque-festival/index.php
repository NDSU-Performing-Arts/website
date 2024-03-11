<?php 
//Edit the following:
$config['page-title'] = "Baroque Festival | Challey School of Music";
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
		<img alt="Baroque Fest" src="/music/images/DVFA 1773 Baroque Fest Web Banner.jpg" style="width:100%;">
		<h1>Baroque Festival</h1>
	</header>
	
	<article>
		<p>NDSU Challey School of Music's Baroque Festival is returning January 2024! Come enjoy classical music from the Baroque period performed by our students at 7:30 PM Saturday, January 20 and by our faculty at 2 PM Sunday, January 21 at Peace Lutheran Church.</p>
		
		<p>Admission to both performances is free. Peace Lutheran Church is located at 1011 12th Ave N in Fargo. Concerts will also be streamed on our <a href="/music/stream">Livestream</a>.</p>

		<p>Join us for a weekend of baroque music!</p>
	</article>
</section>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>