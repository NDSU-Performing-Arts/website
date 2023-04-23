<?php 
//Edit the following:
$config['page-title'] = "Liminal | Department of Theatre Arts";
$config['page-description'] = "";
$config['page-realm'] = "DTA"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<!--	body content -->
<section id=""><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<section>
	<header>
		<img alt="Liminal"
			class="_header_image" 
			src="../images/headers/DVFA-1513-Liminal-Web-Banner.jpg" style="width:100%">
		
		<h1 align="center"><strong>Liminal:</strong> a (re-imagined) folktale</h1>
	</header>
	
	<article>
	  <h2 align="center"><strong>Devised by Theatre NDSU</strong><br></h2>
			 <p align="center">February 14 - 16 • 7:30pm <br>
			February 20 - 23 • 7:30pm<br>
				 Walsh Studio Theatre</p>
		
		<p>The ensemble at Theatre NDSU is proud to devise a new play for our audiences. This visually engaging new work mixes multi-media, folksong, fairytale, dance, and theatre to inventively tell the story of <i>LIMINAL: a (re-imagined) folktale</i>.</p>
		<p><a href="https://ndsu.showare.com/liminal" class="btn btn-warning"><b>PURCHASE TICKETS</b></a></p>

	</article>
</section>
<!-- InstanceEndEditable --></div></section>
	
<?php include($config['path'].'resources/footer.php')?>