<?php 
//Edit the following:
$config['page-title'] = "Alabaster";
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
		<img alt="edges"
			class="_header_image" 
			src="DVFA 982 Theatre Web Banner Graphics 3800x1340 - Alabaster.jpg" style="width:100%;">
		
		<h1 align="center"><strong>Alabaster</strong></h1>
	</header>
	
	<article>
		<h4 align="center"><strong>By Audrey Cefaly
		</strong><br>
		</h4> 
		
		<p align="center"><br>
		December 2-3 & 8-10 at 7:30pm<br />
December 4 at 2:00pm<br />
		  Purchase tickets at <a href="https://ndsu.showare.com/">ndsu.showare.com</a>
				  </p>
		
		<p>June and Weezy live on a small farm in the backwoods of Alabaster, Alabama. They lost nearly everything to a horrific tornado that buried June alive. Now Alice, an artist, is visiting from New York City to take photographs of June’s scars. Weezy has a lot to say about this, but Alice cannot understand her. Why? Well, because Weezy is a goat, of course! Join Theatre NDSU for this quirky new dramedy about how we persevere in the face of grief.</p>
		
		<!--<p><a href="https://ndsu.showare.com/" class="btn btn-warning"><b>PURCHASE TICKETS</b></a> Adults $20, Seniors $15, Non-NDSU Students $10, NDSU Student free with ID
		</p>-->
		
		<p><a href="NDSU-Alabaster-Program-for-KCACTF.pdf" class="btn btn-ridiculous btn-ndsu-green"><i class="fa-solid fa-book-open"></i> Program for KCACTF</a></p>

	

		<p>NDSU Students can get their FREE ticket by calling or visiting the Performing Arts Box Office</p>

	</article>
</section>
<!-- InstanceEndEditable --></div></section>
	<style>
	.btn-ridiculous {
    padding: 18px 28px;
    font-size: 32px; //change this to your desired size
    line-height: normal;
    -webkit-border-radius: 8px;
       -moz-border-radius: 8px;
            border-radius: 8px;
}
</style>
<?php include($config['path'].'resources/footer.php')?>