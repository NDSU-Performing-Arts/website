<?php 
//Edit the following:
$config['page-title'] = "NDSU Honors Flute Choir | Challey School of Music";
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
		<h1>NDSU Honors Flute Choir</h1>
	</header>
	
	<article>
		<p>An auditioned flute choir for high school students.</p>
		
Starting September 13, 2022<br />
Auditions In-person and recorded auditions accepted<br />
Tuesdays 6:00-7:30PM at NDSU<br /><br />
<a href="https://forms.gle/ZxDyPmp5JKTeV29a6" class="btn btn-lg btn-ndsu-green">Sign up to Audition</a><br /><br />
<a href="Audition Music for NDSU Honors Flute Choir.pdf" class="btn btn-lg btn-ndsu-green">Audition Music</a><br /><br />
	</article>
</section>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>