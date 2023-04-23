<?php 
//Edit the following:
$config['page-title'] = "Guest Composers | Composition | Challey School of Music";
$config['page-description'] = "";
$config['page-realm'] = "CSOM"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
// include($config['path'].'resources/header.php');
include($config['path'].'music/composition/zz-comp-header.php');
?>

<section id=""><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<section>
	<header>
		<h1>Handbook</h1>
	</header>

<a href="Composition Handbook 20220929.pdf" target="_BLANK" class="btn btn-ndsu-green btn-lg"><i class="fas fa-download"></i> Download the current Composition Handbook</a><br /><br />
<iframe id="pdf-iframe" width="100%" height="1200" src="Composition Handbook 20220929.pdf"></iframe>
<br />
	</article>
</section>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>