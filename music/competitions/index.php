<?php 
//Edit the following:
$config['page-title'] = "Competitions | Challey School of Music";
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
<h1>Competitions</h1>
<div class="row">
<div class="col-md-6"><a href="#HS" class="btn btn-block btn-ndsu-green">Competitions for High School Students</a></div>
<div class="col-md-6"><a href="#Comp" class="btn btn-block btn-ndsu-green">Compositions for Composers</a></div>

</div>
</section>

<hr>

<section>
	<header>
		<h2 class="jumbotron"><a name="HS"></a>Competitions for High School Students</h2>
	</header>
	
	<article>
		<p>Through the competitions, the Challey School of Music hopes to identify and support the developing careers of promising young musicians.</p>
	</article>
</section>
<br /> 

<section>
<div class="card border-warning">
	<div class="card-header bg-warning">
		<h3>High School Music Performance Competition</h3>
		October 15, 2021
	</div>
	<div class="card-body">
		<p>The competition is for promising high-school age performers in piano, voice, and wind and percussion instruments.</p>
		
		<p><a href="../music-performance-competition/index.php" class="btn btn-ndsu-green">Learn More</a></p>
		<!-- <ul>
		<li><a href="documents/2017_invite_letter.pdf">Invite Letter to Directors</a></li>
		<li><a href="documents/2017_schedule_letter.pdf">Schedule Letter to Directors</a></li>
		<li><a href="documents/2017_women_schedule.pdf">Choral Festival Women's Schedule</a></li>
		<li><a href="documents/2017_men_schedule.pdf">Choral Festival Men's Schedule</a></li>
		<li><a href="documents/2017_mixed_schedule.pdf">Choral Festival Mixed Schedule</a></li>
		<li><a href="documents/2017_chamber_choir_schedule.pdf">Choral Festival Chamber Schedule</a></li>
		<li><a href="documents/choral_festival_registration.pdf">Registration</a></li>
		<li><a href="documents/2017_choral_fest_tracks.pdf">Rehearsal Tracks</a></li>
		</ul> -->
	</div>
</div>
</section>
<br />



<hr>

<section>
	<header>
		<h2 class="jumbotron"><a name="Comp"></a>Competitions for Composers</h2>
	</header>
	
	<article>
		<p><em></em></p>
	</article>
</section>
<br /> 

<!--THIS IS A REDIRECT TO ENSEMBLES-AND-PERFORMANCES-->
	<section>
<div class="card border-warning">
	<div class="card-header bg-warning">
		<h3>Edwin Fissinger Choral Competition</h3>
		 2021</div>
	<div class="card-body">
		<p>NDSU Challey School of Music honors the legacy and traditions of noted choral composer and long-time NDSU choral conductor Edwin Fissinger with its annual choral composition competition.</p>

		<!--<p><a href="summer-symposium/" class="btn btn-ndsu-green">Learn More</a></p>-->
		<p><a href="../fissinger/index.php" class="btn btn-ndsu-green">Learn More</a></p>
	</div>
</div>
</section>
<br />
	
<div class="card border-warning">
	<div class="card-header bg-warning">
		<h3>J. Samuel Pilafian Composition Contest</h3>
		 2021</div>
	<div class="card-body">
		<p>North Dakota State University is pleased to announce the formation of a composition contest in memory of the late Sam Pilafian. The winning composer will receive a commission to compose a new work as a memorial to the work of Sam Pilafian in his time as a guest faculty member at NDSU as well as his contributions to the music world.</p>

		<!--<p><a href="summer-symposium/" class="btn btn-ndsu-green">Learn More</a></p>-->
		<p><a href="../pilafian/" class="btn btn-ndsu-green">Learn More</a></p>
	</div>
</div>
</section>
<br />
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>