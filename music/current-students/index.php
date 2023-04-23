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
<div class="col-md-6 d-grid">
<a href="../undergraduate-students/" class="btn btn-ndsu-green btn-lg btn-block">Undergraduate Program Information</a>
</div>
<div class="col-md-6 d-grid">
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
		<div class="card-header"><h5>Spaces and Recitals</h5></div>
		<div class="card-body">
			<a href="https://docs.google.com/forms/d/e/1FAIpQLSe-bEHExvCG9sXXcPn5KKvIr0D_90AUv1U0xiboQvSkpPb9Cg/viewform">Reineke Room Reservation Form</a></p>
			<hr>
			<p><a href="guidelines/" title="Guidelines">Guidelines</a><br />
			  <a href="https://forms.gle/HTSA3yA7Tn1WACKm9">Reservation Request Form (pdf)</a><br />
			  <!--<a href="documents/recitals/recital_guidelines-2020.docx" title="Student Recital Template Instructions">Student Recital Template Instructions (Word)</a><br />-->
			  <a href="documents/ConcertTemplate.docx" title="Program Template">Program Template (Word)</a><br />
			  <a href="documents/recitals/notes_translations_template.docx" title="Notes / Translations Template">Notes / Translations Template (Word)</a><br />
		  <a href="https://www.ndsu.edu/fileadmin/news.ndsu.edu/Student_News/student.scholarship.pdf">Hometown News Release</a></p>
			<hr>
			<p><a href="https://www.ndsu.edu/performingarts/music/programs/">Digital Programs</a><br />
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
			<a href="https://docs.google.com/document/d/1z_0y2rm5i3Tgh6ejpjMhbrKmZNkKpolR/edit?usp=sharing&ouid=113951085338360111442&rtpof=true&sd=true" title="Vocal Accompaniment Policies">Vocal Accompaniment Contract Spring 2023</a>
		</div>
	</div>	<br />
	<div class="card">
		<div class="card-header"><h5>Instrumental Accompaniment Forms</h5></div>
		<div class="card-body">
			<a href="https://docs.google.com/document/d/1pVKrwKaVJ_TqkHWXk2mGPdCKSqvt_h0c/edit?usp=sharing&ouid=113951085338360111442&rtpof=true&sd=true" title="Instrumental Accompaniment Contract Fall 2022">Instrumental Accompaniment Contract Spring 2023</a><br />
			<a href="https://docs.google.com/document/d/1BzJLEZq7cDwJJCCyKHoz1SG-MCLsemw1_iNq7NriCGY/edit?usp=sharing" title="Community Pianists Contact List">Community Pianists Contact List</a>
		</div>
	</div>	<br />
	<div class="card">
		<div class="card-header"><h5>Jury Evaluation Forms</h5></div>
		<div class="card-body">
			<h6><a href="documents/HandbookExcerptsF19.pdf"> Jury Expectations</a></h6>
			<a href="documents/jury_forms/jury_rubric.pdf" title="Instrumental Jury Evaluation">Instrumental Jury Evaluation (pdf)</a><br />
			<a href="documents/jury_forms/jury_evaluation_musical_theatre.pdf" title="Musical Theatre Jury Evaluation">Musical Theatre Jury Evaluation (pdf)</a><br />
			<a href="documents/jury_forms/jury_evaluation_percussion.pdf" title="Percussion Jury Evaluation">Percussion Jury Evaluation (pdf)</a><br />
			<a href="documents/jury_forms/NDSU Voice Jury Form 2022-2023 fillable.pdf" title="Vocal Jury Evaluation">Vocal Jury Evaluation (pdf)</a><br />
			<a href="documents/jury_forms/jury_evaluation_summary_sheet.pdf" title="Jury Evaluation Summary Sheet">Jury Evaluation Summary Sheet (pdf)</a><br />
		</div>
	</div><br />
	<div class="card">
		<div class="card-header"><h5>Scholarships Forms</h5></div>
		<div class="card-body">
			<a href="https://www.ndsu.edu/onestop/scholarships/" title="Music Scholarships">Scholarship information at One Stop</a>
		</div>
	</div><br />
</div>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>