<?php 
//Edit the following:
$config['page-title'] = "Facilities | Division of Performing Arts";
$config['page-description'] = "";
$config['page-realm'] = "DPA"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<section id="" ><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<section>
	<header>
		<img alt="Facilities/Rental Info"
			class="" 
			src="../images/940px_2017_fch_seating.jpg"
			width="100%">
			
		<h1>Facilities</h1>
	</header>
	
	<article>
		<p> The Division of Performing Arts offers four 
          performance facilities: </p>
		
		<ul>
			<li> Festival Concert Hall and Beckwith Recital Hall in Reineke Fine Arts Center</li>
			<li>Askanase Auditorium and Walsh Studio Theatre in Askanase Hall</li>
			<li><a href="../images/Box-Office-Map.jpg">View a map of our locations</a></li>
        </ul>
		
		<p>*Both Festival Concert Hall and Beckwith Recital Hall are available for rental, along with other areas of Reineke Fine Arts Center. Please select the appropriate PDF form for additional information:</p>
		
		<div class="card-deck mb-3">
		<div class="card">
		  <h5 class="card-header"><a href="documents/reservation_request_form-ML2.pdf">Reservation Request Form</a></h5>
		</div>
		
		<div class="card">
		  <h5 class="card-header"><a href="documents/rate_sheet.pdf">Rate Sheet</a></h5> 
		</div>
		
		<div class="card">
		  <h5 class="card-header"><a href="documents/general_use_policy.pdf">General Use Policy</a></h5>
		</div>
		</div>
        <div class="alert alert-primary"><div class="media"><i class="fa fa-info-circle fa-2x mr-3"></i>
        <div class="media-body">Please complete the appropriate form(s) and deliver them to Margaret Latterell, Music Ed 107 (Festival Concert Hall box office) or at her mail box in Music Ed 115. Contact <a href="mailto:margaret.latterell@ndsu.edu">margaret.latterell@ndsu.edu</a> for more information.</div></div></div>
        
		<div class="card mb-2"><div class="card-body">
		<h2>Festival Concert Hall*</h2>
        
		<p>Festival Concert Hall is an acoustically excellent, 1,000-seat hall, opened in 1981.  FCH is the concert home for all NDSU music major ensembles, major Theatre NDSU musical productions, the F-M Symphony, the F-M Opera, and for special concert and performance appearances by groups such as the Vienna Boys Choir, The Second City, Arlo  Guthrie,  Preservation Hall Jazz Band, The  Smuin Ballet, The National Symphony Orchestra, Christopher O'Riley, the Harlem Gospel Choir, and other touring arts organizations. Festival Concert Hall is also available for rental. </p>
        
		<p>Festival Concert Hall is located in the southwest  corner of the North Dakota State University campus, at the intersection 
        of 12th Avenue North and Bolley Drive.</p>
        </div></div>
		
		<div class="card mb-2"><div class="card-body">
		<h2>Beckwith Recital Hall*</h2>
		
		<p>Beckwith Recital Hall has the same acoustical excellence as FCH but is a smaller setting with capacity being 200. It is used as a classroom and performance space for faculty, student and small group recitals. Beckwith is also available for outside rental.</p>
        
		<p>Beckwith Recital Hall is located in the southwest corner of the North Dakota State University campus, at the intersection of 12th Avenue North and Bolley Drive.</p>
		</div></div>
		
		<div class="card mb-2"><div class="card-body">
        <h2>Askanase Auditorium**</h2>
        
		<p>Askanase auditorium is a 380-seat proscenium theatre. </p>
        
		<p> Askanase auditorium is located at the intersection of 12th Avenue North and Albrecht Blvd. </p>
        </div></div>
		
		<div class="card mb-2"><div class="card-body">
		<h2>Walsh Studio Theatre**</h2>
        
		<p>Walsh Studio Theatre is a flexible studio-laboratory black box space. It is located in Askanase Hall, at the corner of 12th Avenue North and Albrecht Blvd.</p>
        
		<p>All production spaces are handicap accessible and assistive  listening devices are available upon request.		</p>
		</div>
		</div>
	</article>
</section>
		**Askanase Auditorium and Walsh Studio Theatre are not available for rental.

<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>