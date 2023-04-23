<?php 
//Edit the following:
$config['page-title'] = "Composition | Challey School of Music";
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
		<h1>Studio Calendar</h1>
	</header>

<iframe src="https://outlook.office365.com/owa/calendar/426a5525c4d540e89f101292ce04362c@ndsu.edu/522c501a700b431699091ce37a5cfff91439465908244299322/calendar.html" width="100%" height="100%" style="height:100%;min-height:1000px;"></iframe>



	</article>
</section>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>