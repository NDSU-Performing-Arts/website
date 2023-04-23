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
		<h1>Guest Composers</h1>
	</header>

<h2>2021-2022</h2>
<h3><a href="https://music.mercer.edu/faculty/christopher-schmitz.cfm">Christopher Schmitz</a></h3>Winner, 2021 Pilafian Composition Contest
<br />
<br />
<h3><a href="https://composerjim.com">Jim Stephenson</a></h3>
<br />
	</article>
</section>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>