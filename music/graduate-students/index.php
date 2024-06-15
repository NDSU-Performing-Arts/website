<?php 
//Edit the following:
$config['page-title'] = "Graduate Programs | Challey School of Music";
$config['page-description'] = "";
$config['page-realm'] = "CSOM"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<section id=""><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<div class="row mb-1">
<div class="col-md-9" id="">
	<section>
		<img alt="Graduate Programs" class="_header_image" src="images/940_gradprograms.png" width="100%">
		<header>
			<h1>Graduate Programs</h1>
		</header>

		<article>
			<p>Welcome to the graduate programs in the Challey School of Music. We are dedicated to high-quality teaching, and our small class sizes provide excellent opportunities for you to grow as a serious performer, teacher, and scholar.</p>

			<p>We offer the following graduate degrees and tracks:
			<ul class="list-unstyled">
				<li><strong>Master of Music</strong>
					<ul>
						<li>Conducting (Choral, Instrumental)</li>
						<li><a href="programs/music-education/">Music Education</a></li>
						<!--<li>Music Theory Pedagogy</li>-->
						<li>Performance (Bassoon, Clarinet, Euphonium, Flute, Horn, Oboe, Percussion, Piano, Collaborative Piano, Saxophone, Trumpet, Trombone, Tuba, and Voice)</li>
					</ul>
				</li>
				<li><strong>Doctor of Musical Arts</strong>
					<ul>
						<li>Conducting (Choral, Instrumental)</li>
						<li>Performance (Clarinet, Percussion, Piano, Collaborative Piano, Saxophone, Trumpet, Voice)</li>
					</ul>
				</li>
			</ul>
			</p>
		</article>
		
						<!--Leave this alone - This is the beginning tag of the Accordion Menu-->
	<div id="accordion" aria-multiselectable="true">
		
		<div class="card">
			<div class="card-header" role="tab" id="ChoralConductingHeading"><!--id here must match aria-labeledby below-->
				<h4 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<button class="btn btn-link" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#ChoralConducting" aria-expanded="true" aria-controls="ChoralConducting">
				Conducting-Choral
				</button>
				</h4>
			</div><!--card-header-->
			<div id="ChoralConducting" class="collapse" role="tabpanel" aria-labelledby="ChoralConductingHeading">
				<div class="card-body">
					<p>You've reached that point where you desire in depth knowledge about the choral pieces you've sung and conducted. Our graduate degrees in choral conducting provide a comprehensive scholastic background and opportunities for hands-on experience with conducting techniques with our six choral ensembles. Our students also have the opportunity to learn from visiting artists, most recently, Dale Warland.<p>

					<ul>
						<li>Course requirements - <a href="masters/#choral">Master of Music</a> | <a href="doctoral/#conducting">Doctor of Musical Arts</a></li>
						<li>Degree professors - <a href="../about/people/faculty/dwight_jilek.php">Dr. Dwight Jilek</a> | <a href="../about/people/faculty/michael_weber.php">Dr. Michael Weber</a></li>
						<li><a href="handbook/">Graduate Handbook</a></li>
						<li><a href="../prospective-students/#graduate">Application process / What is the next step?</a></li>
					</ul>

					<p><strong>Audition requirements</strong></p>

					<ol>
						<li>Notify <a href="mailto:dwight.jilek@ndsu.edu">Dr. Dwight Jilek</a> of your intention to apply.</li>
						<li>Submit a recent video recording that includes both a rehearsal and a performance (10 – 15 minutes). A URL link is acceptable.</li>
						<li>Complete your <a href="https://ndsugrad.force.com/Application/TX_SiteLogin?startURL=%2FApplication%2FTargetX_Portal__PB">online application</a> with the Graduate School.
							<ol>
								<li>Preference will be given to applications completed by February 1.</li>
							</ol>
						</li>
						<li>After the choral faculty has reviewed your application you will be contacted by Dr. Dwight Jilek.</li>
						<li>If you are invited to campus for an audition/interview it will be scheduled at this point. Plan to be on campus for a full day.</li>
						<li>Your audition will be with the NDSU Concert Choir.
							<ol>
								<li>Warmup the choir</li>
								<li>Conduct one piece from the Concert Choirs current repertoire</li>
								<li>Rehearse a piece of your choosing</li>
								<li>Total time with the choir – 20 minutes</li>
							</ol>
						</li>
						<li>The interview will be with choral faculty – Drs. Jilek, Moe and Weber.
						<li>Other activities on the day of your audition will include:
							<ol>
								<li>Meeting with other graduate students</li>
								<li>Meeting with the Challey School of Music administration</li>
								<li>A one-hour history/theory entrance exam</li>
								<li>Demonstrating functional piano skills</li>
							</ol>
						</li>
					</ol>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="InstrumentalConductingHeading"><!--id here must match aria-labeledby below-->
				<h4 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<button class="btn btn-link" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#InstrumentalConducting" aria-expanded="true" aria-controls="InstrumentalConducting">
				Conducting-Instrumental
				</button>
				</h4>
			</div><!--card-header-->
			<div id="InstrumentalConducting" class="collapse" role="tabpanel" aria-labelledby="InstrumentalConductingHeading">
				<div class="card-body">
					<p>Our instrumental conducting degrees prepare you for all aspects of leading an ensemble. In addition to rigorous academic classes, our instrumental ensembles include Jazz bands, concert bands, a marching band and wind ensemble, providing you with ample time on the podium. Our instructors adhere to the philosophy that experience is the best teacher, and our graduate assistants share fully in the day to day responsibilities of our ensembles.<p>

					<ul>
						<li>Course requirements - <a href="masters/#instrumental">Master of Music</a> | <a href="doctoral/#conducting">Doctor of Musical Arts</a></li>
						<li>Degree professors - <a href="../about/people/faculty/sigurd_johnson.php">Dr. Sigurd Johnson</a> | <a href="../about/people/faculty/daniel_lee.php">Dr. Daniel Lee</a></li>
						<li><a href="handbook/">Graduate Handbook</a></li>
						<li><a href="../prospective-students/#graduate">Application process / What is the next step?</a></li>
					</ul>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="MusicEducationHeading"><!--id here must match aria-labeledby below-->
				<h4 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<button class="btn btn-link" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#MusicEducation" aria-expanded="true" aria-controls="MusicEducation">
				Music Education
				</button>
				</h4>
			</div><!--card-header-->
			<div id="MusicEducation" class="collapse" role="tabpanel" aria-labelledby="MusicEducationHeading">
				<div class="card-body">
					<p>You're a working professional. The NDSU Challey School of Music is an institution that's as passionate about music education as you are. When you're ready to update and augment your skills, our program fits into your schedule as a working professional through a combination of online and summer classes. The curriculum is designed to both increase your effectiveness in the classroom and enhance your personal growth as a musician. This combination of commitment, quality and flexibility have made NDSU's graduate programs in music the most popular in the region. </p>

					<ul>
						  <li>Course Requirements: <a href="programs/music-education">Master of Music</a></li>
						  <li>Faculty - <a href="../about/people/faculty/dwight_jilek.php">Dr. Dwight Jilek</a> | <a href="../about/people/faculty/charlette_moe.php">Dr. Charlette Moe</a> | <a href="../about/people/faculty/daniel_lee.php">Dr. Daniel Lee</a> | <a href="../about/people/faculty/michael_weber.php">Dr. Michael Weber</a></li>
						  <li><a href="handbook/">Graduate Handbook</a></li>
						  <li><a href="../prospective-students/#graduate">Application process / What's the next step?</a></li>
						  <!--<li><a href="../festivals-and-clinics/orff-schulwerk/" title="Schulwerk">Orff Schulwerk Levels I and II</a></li>-->
					</ul>

					<p>This degree is designed to be completed in three summers or in a combination of summers and the academic year. Students must register for at least six credits per calendar year until all degree requirements are completed. Classes are offered both online and on campus. Course-work can be focused in elementary, choral/vocal, or instrumental music education. No thesis is required -- rather, students complete a four-credit practicum, planned jointly by the student and his/her advisor. Comprehensive written and oral examinations are passed near the end of or after coursework.</p>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
			<?php /*
		<div class="card">
			<div class="card-header" role="tab" id="MusicEducationHeading"><!--id here must match aria-labeledby below-->
				<h4 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<button class="btn btn-link" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#TheoryPedagogy" aria-expanded="true" aria-controls="TheoryPedagogy">
				Music Theory Pedagogy
				</button>
				</h4>
			</div><!--card-header-->
		
			<div id="TheoryPedagogy" class="collapse" role="tabpanel" aria-labelledby="TheoryPedagogy">
				<div class="card-body">
				  <p>The Theory Pedagogy degree program is designed for students interested in developing their skills as teachers and scholars in Music Theory. Students may pursue the Theory Pedagogy MM jointly with another MM option, or as a second MM enrolled concurrently with a DMA in Performance or Conducting, though it has enough unique required courses to be granted as a single degree.</p>
				<ul>
						<li>Course requirements - <a href="masters/#theoryped">Master of Music</a></li>
						<li>Degree professors - <a href="../about/people/faculty/cassie_keogh.php">Dr. Cassie Keogh</a> | <a href="../about/people/faculty/john_miller.php">Dr. John Miller</a></li>
						<li><a href="handbook/">Graduate Handbook</a></li>
						<li><a href="../prospective-students/#graduate">Application process / What is the next step?</a></li>
				  </ul>
				<p><i>*Pending approval from NASM</i></p>
					<p>Possible overlap with other degrees: (up to 12 credits)</br>
					  <br>
					  74X History (700-level didactic)..................3
                      <br>
                      748 Research and Bibliography..................2
                      <br>
                  Electives </p>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		*/?>
		<div class="card">
			<div class="card-header" role="tab" id="InstrumentalPerformanceHeading"><!--id here must match aria-labeledby below-->
				<h4 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<button class="btn btn-link" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#InstrumentalPerformance" aria-expanded="true" aria-controls="InstrumentalPerformance">
				Performance-Instrumental
				</button>
				</h4>
			</div><!--card-header-->
			<div id="InstrumentalPerformance" class="collapse" role="tabpanel" aria-labelledby="InstrumentalPerformanceHeading">
				<div class="card-body">
					<p>When you're ready to take your playing to the next level, our faculty are dedicated to your development as both a performer and a pedagogue of your instrument.</p>

					<ul>
						<li>Course requirements - <a href="masters/#instperformance">Master of Music</a> | <a href="doctoral/#instperformance">Doctor of Musical Arts</a></li>
						<li>Degree professors - <a href="../about/people/faculty/jeremy_brekke.php">Dr. Jeremy Brekke</a> | <a href="../about/people/faculty/sigurd_johnson.php">Dr. Sigurd Johnson</a> | <a href="../about/people/faculty/cassie_keogh.php">Dr. Cassie Keogh</a> | <a href="../about/people/faculty/matthew_patnode.php">Dr. Matthew Patnode</a> | <a href="../about/people/faculty/challey_connor.php">Connor Challey</a> | <a href="../about/people/faculty/kellogg_laura.php">Dr. Laura Kellogg</a> | <a href="../about/people/faculty/martin_vanklompenberg.php">Dr. Martin Van Klompenberg</a></li>
						<li><a href="handbook/">Graduate Handbook</a></li>
						<li><a href="../prospective-students/#graduate">Application process / What is the next step?</a></li>
					</ul>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="PianoPerformanceHeading"><!--id here must match aria-labeledby below-->
				<h4 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<button class="btn btn-link" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#PianoPerformance" aria-expanded="true" aria-controls="PianoPerformance">
				Performance-Piano
				</button>
				</h4>
			</div><!--card-header-->
			<div id="PianoPerformance" class="collapse" role="tabpanel" aria-labelledby="PianoPerformanceHeading">
				<div class="card-body">
					<p><a href="https://www.youtube.com/watch?v=oxV1_PY0mJY">Learn about NDSU's Piano Programs in this video!</a></p>
					<p>Few instruments offer as individualized a medium for expression as the piano, and your success as a pianist depends on individualized instruction. Our piano faculty are at the top of their field as performers and teachers; and take into account each student's needs, aptitudes, background and goals to create a unique plan for success. Our curriculum includes a balance of applied lessons, academic courses and the study of pedagogy, in addition to opportunities for hands-on experience as a performer, teacher, and accompanist</p>

					<p>The NDSU Piano Performance Program will be facilitating live auditions as well as accepting video auditions for applicants wishing to audition for the 2024-2025 academic year.<br>

					For those wishing to travel to Fargo, ND for a live audition: please contact <a href="mailto:tyler.wottrich@ndsu.edu">Dr. Tyler Wottrich</a> to discuss potential dates for your audition. For those submitting a video audition: please contact <a href="mailto:tyler.wottrich@ndsu.edu">Dr. Tyler Wottrich</a> to discuss submission of your audition video as well as to arrange an interview by Zoom or comparable platform.</p>

					<p>Pianists in the M.M. and D.M.A. programs will also be invited to perform in the <a href="../ensembles-and-performances/chamber-music-festival/">NDSU Chamber Music Festival</a> upon recommendation from the faculty.</p>

					<ul>
						<li>Course requirements - <a href="masters/#pianoperformance">Master of Music</a> | <a href="doctoral/#pianoperformance">Doctor of Musical Arts</a></li>
						<li>Degree professors - <a href="../about/people/faculty/robert_groves.php">Dr. Robert Groves</a> | <a href="../about/people/faculty/tyler_wottrich.php">Dr. Tyler Wottrich</a></li>
						<li><a href="handbook/">Graduate Handbook</a></li>
						<li><a href="../prospective-students/#graduate">Application process / What is the next step?</a></li>
					</ul>				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="CollaborativePianoHeading"><!--id here must match aria-labeledby below-->
				<h4 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<button class="btn btn-link" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#CollaborativePiano" aria-expanded="true" aria-controls="CollaborativePiano">
				Performance-Collaborative Piano
				</button>
				</h4>
			</div><!--card-header-->
			<div id="CollaborativePiano" class="collapse" role="tabpanel" aria-labelledby="CollaborativePianoHeading">
				<div class="card-body">
					<p><a href="https://www.youtube.com/watch?v=oxV1_PY0mJY">Learn about NDSU's Piano Programs in this video!</a></p>
					<p>The NDSU Collaborative Piano Performance M.M. and D.M.A. programs are designed for  pianists who wish to specialize in collaborations with singers and instrumentalists. The M.M. program provides guidance in both instrumental and vocal collaborations, while the D.M.A offers the flexibility to focus on instrumental or vocal studies, or a combination thereof. &nbsp;The instrumental focus offers specialization in repertoire for woodwinds, brass, and/or strings, while the vocal specialty involves vocal coaching of art song and opera with specific training in language and diction. In addition to a thorough grounding in such areas as harpsichord, figured bass realization, orchestral reductions, and sight and score reading, the Collaborative Piano Performance degrees include a component of applied piano study.</p>

					<p>Collaborative pianists in  NDSU's M.M. and D.M.A. programs will be regularly partnered in performance with professional vocalists and instrumentalists, and will be invited to perform in the <a href="../ensembles-and-performances/chamber-music-festival/">NDSU Chamber Music Festival</a> upon recommendation from the faculty.</p>

					<ul>
						<li><a href="audition_information/collaborative_piano.php">Audition Information</a></li>
						<li>Course requirements - <a href="masters/#collabpiano">Master of Music</a> | <a href="doctoral/#collabpiano">Doctor of Musical Arts</a></li>
						<li>Degree Professors - <a href="../about/people/faculty/robert_groves.php">Dr. Robert Groves</a> | <a href="../about/people/faculty/tyler_wottrich.php">Dr. Tyler Wottrich</a></li>
						<li><a href="handbook/">Graduate Handbook</a></li>
						<li><a href="../prospective-students/#graduate">Application process / What is the next step?</a></li>
					</ul>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="OperaHeading"><!--id here must match aria-labeledby below-->
				<h4 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<button class="btn btn-link" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#VocalPerformance" aria-expanded="true" aria-controls="VocalPerformance">
				Performance-Voice
				</button>
				</h4>
			</div><!--card-header-->
			<div id="VocalPerformance" class="collapse" role="tabpanel" aria-labelledby="VocalPerformanceHeading">
				<div class="card-body">
					<p>Your voice and your technique are still growing and changing. In order to build a successful performing and teaching career you need personalized and careful instruction. Our faculty have extensive experience as both performers and voice teachers. Together we collaborate on creating an educational and performance plan to provide you with a lifelong foundation of vocal expertise. Our program is small enough to offer each student plentiful opportunities for performance. We produce one fully staged opera each year, in addition to opera scenes and concerts throughout the year. Students also find performance opportunities within the community, including professional experience with the Fargo-Moorhead Opera.</p>

					<ul>
						<li><a href="audition_information/voice.php">Audition Information</a></li>
						<li>Course requirements - <a href="masters/#vocalperformance">Master of Music</a> | <a href="doctoral/#vocalperformance">Doctor of Musical Arts</a></li>
						<li>Degree professors - <a href="https://www.ndsu.edu/performingarts/music/about/people/faculty/burns_kelly2.php">Dr. Kelly Burns</a> | <a href="https://www.ndsu.edu/performingarts/music/about/people/faculty/karisa_templeton.php">Dr. Karisa Templeton</a></li>
						<li><a href="handbook/">Graduate Handbook</a></li>
						<li><a href="../prospective-students/#graduate">Application process / What is the next step?</a></li>
					</ul>

				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
	<!--Leave this alone - This is the ending tag of the accordion menu-->
	</div><!--Panel-group-->

	
	</section>


</div>

	
<div class="col-md-3">
	<section>
		<header>
			<h1>Navigation</h1>
		</header>
		
		<article>
			<ul>
				<li><a href="../prospective-students/#graduate">Application Process</a></li>
				<li><a href="doctoral/">Doctoral</a> | <a href="masters/">Masters</a></li>
				<li><a href="forms/">Forms</a></li>
				<li><a href="handbook/">Handbook</a></li>
				<!--<li><a href="/music/festivals-and-clinics/orff-schulwerk/">Schulwerk</a></li>-->
				<li><a href="/music/festivals-and-clinics/music-ed-symposium/">Summer Symposium</a>
			</ul>
		</article>
	</section>
</div>
</div>
<!-- InstanceEndEditable --></div></section>
<br />
<?php include($config['path'].'resources/footer.php')?>