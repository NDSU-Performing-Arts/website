<?php 
//Edit the following:
$config['page-title'] = "Prospective Students | Challey School of Music";
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
	<h1>Prospective Student Landing Page</h1>
	<article>
		<a href="https://docs.google.com/forms/d/e/1FAIpQLSd91yI6ZJ-9s8Jji079epTHLvRZ9RW4Xnh7P6KeljeUDZ3AlA/viewform" class="btn btn-large btn-ndsu-green mb-3 btn-block">Sign up for more information!</a>
		<a href="../scholarships/" class="btn btn-large btn-ndsu-green mb-3 btn-block">Scholarships</a>
		<a href="../" class="btn btn-large btn-ndsu-green mb-3 btn-block btn-block">Prospective Student Page</a>
	</article>
</section>
<!--<section>
	<header>
		<h2>Faculty</h2>
	</header>
	
	<article>
		<p><a href="../faculty/" title="Music Faculty">Click here to view our faculty biographies</a>.</p>
	</article>
</section>-->
<!-- InstanceEndEditable --></div></section>

<?php 	include($config['path'].'resources/footer.php')?>