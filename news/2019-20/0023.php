<?php 
//Edit the following:
$config['page-title'] = "Calendar | Division of Performing Arts";
$config['page-description'] = "";
$config['page-realm'] = "DPA"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<section id="" ><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<article>
	
<iframe src="https://calendar.google.com/calendar/embed?src=ndsu.performing.arts%40gmail.com&ctz=America%2FChicago" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
	
  </article>
</section> 
<!-- InstanceEndEditable --></div></section> 

<?php include($config['path'].'resources/footer.php')?>