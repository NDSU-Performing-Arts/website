<?php 
//Edit the following:
$config['page-title'] = "Mozart Vespers and Pärt Berliner Messe | Challey School of Music";
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
	<article>
		<!--<img src="AJ.PNG" style="max-width:100%;" />-->
		<div class="row">
		<div class="col-md-6"><img src="AJPoster.PNG" style="max-width:100%;" /></div>
		<div class="col-md-6">
			<h1>NDSU Concert Choir presents Mozart's <em>Vesperae Solennes de Confessore</em> and P&auml;rt's <em>Berliner Messe</em>.</h1>
		</div>
		
		</div>
		<br />
	</article>
</section>
<!-- InstanceEndEditable --></div></section>

<?php include($config['path'].'resources/footer.php')?>