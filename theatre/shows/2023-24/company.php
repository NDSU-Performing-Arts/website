<?php 
//Edit the following:
$config['page-title'] = "Company";
$config['page-description'] = "";
$config['page-realm'] = "DTA"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<!--	body content -->
<section id=""><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<section>
	<header>
		<img alt="Company"
			class="_header_image" 
			src="DVFA 982 Theatre Web Banner Graphics 3800x1340 - 12th Night.jpg" style="width:100%;">
		
		<h1 align="center"><strong>Company</strong></h1>
	</header>
	
	<article>
		<h4 align="center"><strong>Music &amp; Lyrics by Stephen Sondheim<br /> 
		Book by George Furth<br />
		Festival Concert Hall
		</strong>
		</h4> 
		
		<p align="center"><br>
		February 22-24 at 7:30pm, February 25 at 2:00pm <br />
		  Purchase tickets at <a href="https://ndsu.showare.com/">ndsu.showare.com</a>
				  </p>
		
		<p>Robert is 35. And unmarried. Robert’s friends are the same age. Yet, they are all married or engaged. What’s a confirmed bachelor to do? Join Theatre NDSU and the Challey School of Music for some of Stephen Sondheim’s best-known songs including “Getting Married Today” and “Being Alive.” This funny, yet dark, award-winning musical explores love, commitment, and finding fulfillment with, or without, a spouse. </p>
		
		<p><a href="https://ndsu.showare.com/" class="btn btn-warning"><b>PURCHASE TICKETS</b></a> Adults $20, Seniors $15, Non-NDSU Students $10, NDSU Student free with ID
		</p>

	

		<p>NDSU Students can get their FREE ticket by calling or visiting the Performing Arts Box Office</p>

	</article>
</section>
<!-- InstanceEndEditable --></div></section>
	
<?php include($config['path'].'resources/footer.php')?>