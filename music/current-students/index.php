<?php 
//Edit the following:
$config['page-title'] = "Current Students | Challey School of Music";
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
		<h1>Current Students</h1>
	</header>
</section>

<div class="row">
<div class="col-md-6">
<a href="../undergraduate-students/" class="btn btn-ndsu-green btn-lg btn-block">Undergraduate Program Information</a>
</div>
<div class="col-md-6">
<a href="../graduate-students/" class="btn btn-ndsu-green btn-lg btn-block">Graduate Program Information</a>
</div>
</div>
<br />
	<div class="card">
		<div class="card-header"><h5>Undergraduate Course Information</h5></div>
		<div class="card-body">
			<a href="curriculum/" title="Course Rotation and Schedules">Course Rotation and Schedules, Curriculum Guides, Plans of Study</a>
		</div>
	</div><br />
	<div class="card">
		<div class="card-header"><h5>Student Recitals</h5></div>
		<div class="card-body">
			<p><a href="guidelines/" title="Guidelines">Guidelines</a><br />
			  <a href="/performingarts/v.venues/facilities/documents/reservation_request_form-ML2.pdf">Reservation Request Form (pdf)</a><br />
			  <!--<a href="documents/recitals/recital_guidelines-2020.docx" title="Student Recital Template Instructions">Student Recital Template Instructions (Word)</a><br />-->
			  <a href="documents/ConcertTemplate.docx" title="Program Template">Program Template (Word)</a><br />
			  <a href="documents/recitals/notes_translations_template.docx" title="Notes / Translations Template">Notes / Translations Template (Word)</a><br />
		  <a href="https://www.ndsu.edu/fileadmin/news.ndsu.edu/Student_News/student.scholarship.pdf">Hometown News Release</a></p>
			<hr>
			<p><a href="https://www.ndsu.edu/performingarts/music/current-students/programs-archive/">Digital Programs</a><br />
		  </p>
		</div>
	</div><br />
	<div class="card">
		<div class="card-header"><h5>Sharepoint Resources</h5></div>
		<div class="card-body">
			<a href="https://ndusbpos.sharepoint.com/sites/NDSU_Production_Facilities/CSoMResources/SitePages/Home.aspx">CSOM Resources</a>
		</div>
	</div>	<br />
	<div class="card">
		<div class="card-header"><h5>Vocal Accompaniment Forms</h5></div>
		<div class="card-body">
			<a href="https://docs.google.com/document/d/1iUrTAL2fGkv4qGj2mYItVzM5uiwH3K9D0Ytw4X8-evc/edit#" title="Vocal Accompaniment Policies">Vocal Accompaniment Policies</a>
		</div>
	</div>	<br />
	<div class="card">
		<div class="card-header"><h5>Outside Accompanist List for Instrumentalists</h5></div>
		<div class="card-body">
			<a href="https://docs.google.com/document/d/1BzJLEZq7cDwJJCCyKHoz1SG-MCLsemw1_iNq7NriCGY/edit?usp=sharing" title="2019-20 Accompanist List">NDSU Outside Accompanist 2019-20</a>
		</div>
	</div>	<br />
	<div class="card">
		<div class="card-header"><h5>Jury Evaluation Forms</h5></div>
		<div class="card-body">
			<h6><a href="documents/HandbookExcerptsF19.pdf"> Jury Expectations</a></h6>
			<a href="documents/jury_forms/jury_rubric.pdf" title="Instrumental Jury Evaluation">Instrumental Jury Evaluation (pdf)</a><br />
			<a href="documents/jury_forms/jury_evaluation_musical_theatre.pdf" title="Musical Theatre Jury Evaluation">Musical Theatre Jury Evaluation (pdf)</a><br />
			<a href="documents/jury_forms/jury_evaluation_percussion.pdf" title="Percussion Jury Evaluation">Percussion Jury Evaluation (pdf)</a><br />
			<a href="documents/jury_forms/jury_evaluation_vocal-2021.pdf" title="Vocal Jury Evaluation">Vocal Jury Evaluation (pdf)</a><br />
			<a href="documents/jury_forms/jury_evaluation_summary_sheet.pdf" title="Jury Evaluation Summary Sheet">Jury Evaluation Summary Sheet (pdf)</a><br />
		</div>
	</div><br />
	<div class="card">
		<div class="card-header"><h5>Scholarships Forms</h5></div>
		<div class="card-body">
			<a href="../scholarships" title="Music Scholarships">Returning and Transfer Student Scholarship Forms</a>
		</div>
	</div><br />
	<div class="card">
		<div class="card-header"><h5>Miscellaneous</h5></div>
		<div class="card-body">
			<a href="https://acda.org/membership-central">Student Membership for ACDA</a>
		</div>
		<div class="card-body">
			<a href="documents/Voice-Choral Handbook 2020-2021.pdf">Voice-Choral Handbook 2020-2021</a>
		</div>
	</div>	<br />
</div>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>