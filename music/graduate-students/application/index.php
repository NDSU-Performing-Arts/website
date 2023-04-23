<?php 
//Edit the following:
$config['page-title'] = "Graduate Application | Challey School of Music";
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
		<h1>Graduate Application</h1>
	</header>
	
	<article>
		<p>After reviewing these web pages and communicating with the <a href="/performingarts/music/people/faculty/">faculty</a> members associated with your graduate degree program, we encourage you to  complete the following:</p>
		
		<ol>
             <li>Notify the Director of Graduate Study, <a href="mailto:jo.miller@ndsu.edu">Dr. Jo Ann Miller</a>, of your intention to apply.</li>
             <li>Secure three recommendations from those familiar with your experiences as a musician.</li>
             <li>Secure official copies of all transcripts.</li>
             <li>Find a sample of your academic writing style, either from a paper or project.</li>
             <li>Complete your online application at the <a href="http://www.ndsu.edu/gradschool/">NDSU Graduate School.</a></li>
		</ol>
        
		<p>For applicants in performance and conducting, an on-campus visit and audition are required. Following acceptance into the  program, applicants will complete a diagnostic exam, which will be used by advisors to plan appropriate coursework.</p>
	</article>
</section>

<!-- InstanceEndEditable --></div></section>

<<?php include($config['path'].'resources/footer.php')?>