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
		<h1>Become a Composer</h1>
	</header>

	<h2>I'm interested! How do I apply?</h2>
	<p>Applying for any music degree at NDSU is a multiple-stage process. In composition, students must apply to the University, the School of Music, and to the Program.</p>

	<p>Students who want to pursue composition lessons as enrichment (that is, not as a major) may do so if allowed by the instructor and if they have completed the prerequsities.</p>

	<p>Students who want to pursue composition as a major must complete a performance audition for acceptance into the Challey School of Music before their first semester as a music major. The application procedure is common to all incoming students and is as follows:
	<ul><li>Step 1: Apply for Admission to NDSU</li>
	<li>Step 2: Schedule a visit to meet with the Challey School of Music faculty (including the composer in residence).</li>
	<li>Step 3: Audition for admission into the Challey School of Music.</li>
	</ul>
	Up-to-date information on completing these steps is available at https://ndsu.edu/music</p>

	<p>You must audition for admission into the Challey School of Music prior to the start of your first semester of music major classes. Contact Dr. Mike Weber (m.weber@ndsu.edu) or the applied teacher of your instrument/voice to schedule an audition.</p>

	<p>Note: All composition students have a performance requirement as part of their degree plan and apply for admission on the basis of their performance ability. For more information on audition requirements, consult the NDSU Music website.</p>
	<br />


	</article>
</section>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>