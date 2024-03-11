<?php 
//Edit the following:
$config['page-title'] = "About | Challey School of Music";
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
		<h1>About</h1>
	</header>
	
	<article>
		<p>The Challey School of Music at NDSU promotes the arts through its educational programs, its creative work, and its outreach activities. The Challey School of Music offers bachelor's, master's, and doctoral degrees—to prepare the next generation of music professionals.</p>
		<h2>Location</h2>
	  Reineke Fine Arts Center
	  12th Avenue North & Bolley Drive
	  Dept. 2540, P.O. Box 6050
	  Fargo, North Dakota 58108-6050

<p>Administration Office:(701)231-7932<br>
	Box Office: (701)231-7969</p>
		<p><a href="https://www.ndsu.edu/performingarts/staff/">Department Staff</a></p>
	</article>
</section>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>