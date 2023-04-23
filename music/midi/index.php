<?php 
//Edit the following:
$config['page-title'] = "NDSU MIDI | Challey School of Music";
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
		<h1>NDSU MIDI</h1>
	</header>
	
	<a href="NDSU-MIDI.zip" class="btn btn-lg btn-ndsu-green"><i class="fas fa-download"></i> Download</a>
	<br /><br />
	<strong>Instructions:</strong><br />
	Download ZIP file to desktop<br />
	Unzip<br />
	Run NDSU MIDI.exe

</section>

<!-- InstanceEndEditable --></div></section>
<?php 	include($config['path'].'resources/footer.php')?>