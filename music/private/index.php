<?php 
//Edit the following:
$config['page-title'] = "Livestream | Challey School of Music";
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
		<h1>Private Livestream</h1>
	</header>
	<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://vimeo.com/event/1360052/embed/eae5e3d140" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe></div>
<br />
<a href="//vimeo.com/ndsuperformingarts/" class="btn btn-lg btn-ndsu-green mr-3" target="_BLANK"><i class="fab fa-vimeo"></i> View past performances</a><a href="/music/programs/" class="btn btn-lg btn-ndsu-green" target="_BLANK">Programs</a>
<br /><br /></section>

<!-- InstanceEndEditable --></div></section>
<?php 	include($config['path'].'resources/footer.php')?>
