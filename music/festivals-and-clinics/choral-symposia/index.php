<?php 
//Edit the following:
$config['page-title'] = "Choral Symposia | Challey School of Music";
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
		<h1>Choral Symposia</h1>
	</header>
	
	<article>
		<div class="card mb-2">
		<div class="row card-body text-center text-md-left">
			<div class="col-md-3"><img alt="Choral Symposium" src="images/400px_choralsymposium_copy.jpg" style="width:100%;max-width:200px;">
			</div>
			<div class="col-md-9">
				<h2><a href="relevance/">Relevance</a></h2>
				<p>Past event (2018)<br>
				  3rd NDSU Choral Symposium<br>
				  Relevance: Creating programming that fosters connections between singers, audience and the community with the purpose of exploring issues of social significance. 
				  <br>
				</p>
			</div>	
		</div>
		</div>
						
				
		<div class="card mb-2">
		<div class="row card-body text-center text-md-left">
					<div class="col-md-3">
						<img alt="Contemporary Composition in America"
							 src="images/200px_ccia.jpeg" 
							 style="width:100%;max-width:200px;">
					</div>
					<div class="col-md-9">
						<h2><a href="contemporary-composition/">Contemporary Composition in America</a></h2>
						<p>Past Event (2015)</p>
					</div>
				</div>
				</div>
				
		<div class="card mb-2">
		<div class="row card-body text-center text-md-left">
					<div class="col-md-3">
						<img alt="Choral Music of the Americas"
							 src="images/200px_cmota.jpg" 
							 style="width:100%;max-width:200px;">
					</div>
					<div class="col-md-9">
						<h2><a href="cmota/">Choral Music of the Americas</a></h2>
						<p>Past Event (2013)</p>
					</div>
				</div>
				</div>
	</article>
</section>
<!-- InstanceEndEditable --></div></section>

<?php include($config['path'].'resources/footer.php')?>