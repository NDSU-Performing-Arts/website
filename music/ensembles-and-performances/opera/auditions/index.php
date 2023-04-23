<?php 
//Edit the following:
$config['page-title'] = "Opera Auditions | Challey School of Music";
$config['page-description'] = "";
$config['page-realm'] = "CSOM"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<section id=""><div class="container"><!-- InstanceBeginEditable name="body" -->

<h1>2022-2023 Auditions Call</h1>

		<div class="alert alert-warning">Opera auditions are open to all students on campus, Challey School of Music alumni, and community members.
Current voice students will be prioritized for role assignments.</div>

        <div class="alert alert-secondary"><h2><em>Die Zauberflöte</em></h2>
        <p><strong>Open Auditions:</strong> Monday, August 22, 2022 | 4:00PM-until (Beckwith Recital Hall)<br />
		<strong>Callbacks:</strong> Tuesday, August 23, 2022 | 5:00PM-until (Beckwith Recital Hall)<br>
        <strong>Production Dates:</strong> February 24 &amp; 26, 2023<br>
        <strong>Conductor:</strong> Kelly Burns<br>
		<strong>Stage Director:</strong> TBD</p>
		<strong>How to Sign-Up:</strong> You must complete both steps to confirm your audition.
		<ol>
		<li><a href="https://forms.gle/c8VNtzAt5Qgi7oea7">Click here</a> to complete the Audition Form (Must be signed into Google).</li>
		<li><a href="https://calendly.com/kelly-w-burns/ndsu-opera-audition">Click here</a> to sign-up for an Audition Time.</li>
		</ol>
		<a href="https://drive.google.com/file/d/1J-cM_5l6cs2_rH7bnyLToptc6fQdSKeE/view?usp=sharing" class="btn btn-ndsu-green">Repertoire Requirements</a>
		</p>
		</div>

<!--	body content -->


<!-- InstanceEndEditable --></div></section>

<?php include($config['path'].'resources/footer.php')?>