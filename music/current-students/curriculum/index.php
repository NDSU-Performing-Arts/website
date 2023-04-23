<?php 
//Edit the following:
$config['page-title'] = "Undergraduate Course Information | Challey School of Music";
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
		<h1>Undergraduate Course Information</h1>
	</header>
</section>

<section>
	<header>
		<h2>Course Rotation and Schedule<br>
			(effective fall 2017 for graduate and undergraduate students)</h2>
	</header>
	
	<article>
		<ul>
			<li><a href="../documents/course_rotation/Complete Course Schedule Jan. 2022.pdf">Complete Schedule</a></li>	
			<!--<li><a href="../documents/course_rotation/even_fall_schedule.pdf">Even Fall Schedule</a></li>
			<li><a href="../documents/course_rotation/even_spring_schedule.pdf">Even Spring Schedule</a></li>
			<li><a href="../documents/course_rotation/odd_fall_schedule.pdf">Odd Fall Schedule</a></li>
			<li><a href="../documents/course_rotation/odd_spring_schedule.pdf">Odd Spring Schedule</a></li>-->
		</ul>
	</article>
</section>

<section>
	<header>
		<h2>Curriculum Guides</h2>
	</header>
	
	<article>
		<ul>
			<li><a href="https://catalog.ndsu.edu/undergraduate/program-curriculum/music/">Bachelor of Arts/Bachelor of Science</a></li>
         	<li><a href="https://catalog.ndsu.edu/undergraduate/program-curriculum/music/#majorbmuscompositiontext">Bachelor of Music - Composition</a></li>
         	<li><a href="https://catalog.ndsu.edu/undergraduate/program-curriculum/music-education/">Bachelor of Music - Instrumental Music Education</a></li>
         	<li><a href="https://catalog.ndsu.edu/undergraduate/program-curriculum/music/#majorbmusinstrumentaltext">Bachelor of Music - Instrumental Performance</a></li>
         	<li><a href="https://catalog.ndsu.edu/undergraduate/program-curriculum/music/#majorbmuspianotext">Bachelor of Music - Piano Performance</a></li>
         	<li><a href="https://catalog.ndsu.edu/undergraduate/program-curriculum/music-education/#majorbmusvocaleducationtext">Bachelor of Music - Vocal Music Education
         	</a></li>
         	<li><a href="https://catalog.ndsu.edu/undergraduate/program-curriculum/music/#majorbmusvocaltext">Bachelor of Music - Vocal Performance</a></li>
		</ul>
	</article>
</section>

<section>

	<header>
		<h2>Four-Year Plan of Study</h2>
	</header>
	
	<article>
	<!--<div class="alert alert-danger">The below may not be accurate. Please contact your advisor for an updated plan of study.</div>-->
		<ul>
			<li><a href="../documents/plan_of_study/ba_music.pdf">Bachelor of Arts - Music</a></li>
         	
			<li><a href="../documents/plan_of_study/bs_music.pdf">Bachelor of Science - Music</a></li>
         	
          	<li><a href="../documents/plan_of_study/2017 4 year Instrument Ed EF horizontal.pdf">Bachelor of Music - Instrumental Education</a> (Even Fall)</li>
          	
          	<li><a href="../documents/plan_of_study/2017 4 year Instrumental Ed OF horizontal.pdf">Bachelor of Music - Instrumental Education</a> (Odd Fall)</li>
          	
			<li><a href="../documents/plan_of_study/bm_instrumental_even.pdf">Bachelor of Music - Instrumental Performance</a> (Even Fall)</li>
			
			<li><a href="../documents/plan_of_study/bm_instrumental_odd.pdf">Bachelor of Music - Instrumental Performance</a> (Odd Fall)</li>
			
			<li><a href="../documents/plan_of_study/bm_piano_even.pdf">Bachelor of Music - Piano Performance</a> (Even Fall)</li>
			
			<li><a href="../documents/plan_of_study/bm_piano_odd.pdf">Bachelor of Music - Piano Performance</a> (Odd Fall)</li>
			
			<li><a href="../documents/plan_of_study/2017 4 year Choral Ed EF (003).pdf">Bachelor of Music - Vocal Music Education</a> (Even Fall)</li>
         	
          	<li><a href="../documents/plan_of_study/2017 4 year Choral Ed OF.PDF">Bachelor of Music - Vocal Music Education</a> (Odd Fall)</li>
          	
			<li><a href="../documents/plan_of_study/bm_voice_even.pdf">Bachelor of Music - Voice Performance</a> (Even Fall)</li>
			
			<li><a href="../documents/plan_of_study/bm_voice_odd.pdf">Bachelor of Music - Voice Performance</a> (Odd Fall)</li>
		</ul>
	</article>
</section>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>