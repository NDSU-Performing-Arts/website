<?php 
//Edit the following:
$config['page-title'] = "News | Division of Performing Arts";
$config['page-description'] = "";
$config['page-realm'] = "DPA"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<section id="" ><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<section>
	<header>
		<img alt="Music Scholarships"
			style="width:100%;"
			src="../images/940px_news.jpg">
			
		<h1>News</h1>
	</header>
	<article>
		<h3><a href="https://www.ndsu.edu/performingarts/news/2020-21/0001.php">
Theatre NDSU announces 2020-21 Season</a></h3>
		
		<p><em>August 1, 2020</em></p>
		
		<p><em>Fargo, N.D.</em>-Announcing Theatre NDSU's dynamic line-up for our 2020-2021 season. </p>
		
	</article>
</section>
<!--<a href="../2018-19" class="btn btn-ndsu-green">2018-2019</a><br /><br />-->
<!-- InstanceEndEditable --></div></section> 

<?php include($config['path'].'resources/footer.php')?>