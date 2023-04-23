<?php 
//Edit the following:
$config['page-title'] = "Graduate Handbook | Challey School of Music";
$config['page-description'] = "";
$config['page-realm'] = "CSOM"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<section id=""><div class="container"><!-- InstanceBeginEditable name="body" -->
<a href="Grad Handbook 2022-04-25 Revision.pdf" target="_BLANK" class="btn btn-ndsu-green btn-lg"><i class="fas fa-download"></i> Download the current Graduate Handbook</a><br /><br />
<iframe id="pdf-iframe" width="100%" height="1200" src="Grad Handbook 2022-04-25 Revision.pdf"></iframe>

</section>

<!-- InstanceEndEditable --></div></section>

<?php include($config['path'].'resources/footer.php')?>