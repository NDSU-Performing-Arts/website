<?php 
header("Location: https://ndsucomposition.com");
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
		<h1>Composition at NDSU </h1>
	</header>

	<p>North Dakota State University offers the first and only <strong>Bachelor of Music in Composition</strong> program in the Dakotas, and one of the few in the region. NDSU Music Composition combines the robust educational opportunities available at a large research university (13,000 students) with the personal attention available through the Challey School of Music.</p>
    
    <p>NDSU's Music Composition curriculum focuses on the entire composition workflow. Students write music, seek commissions, produce professional scores, market their sheet music, and produce concerts. Composition majors have the opportunity to pursue additional topics, such as publishing, computer science, and entrepreneurship as part of their degree plan.</p>
	
	<p>Some of our current and upcoming new music initiatives include:</p>
		<ul><li>A student-run music press, for real-world work in self-publishing music.</li>
		<li>A student composer-in-residence program for NDSU ensembles.</li>
		<li><em>Thundering Heard</em>, a new music series.</li>
		</ul>
		
	
	</article>
</section>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>