<?php 
//Edit the following:
$config['page-title'] = "Ensembles | Challey School of Music";
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
		<h1>Ensembles</h1>
	</header>
	<article>
		<p>The Challey School of Music performance organizations provide a high-quality musical experiences for all NDSU students. By participating in one or more of the various performance groups on campus, a student's college career can be greatly enhanced and lifelong friendships formed.</p><h4><a href="/music/stream/"><strong> View past performances</strong></a> | <a href="https://www.ndsu.edu/performingarts/calendar/"><strong>Event Calendar</strong></a>
		</h4>
		<p>Auditions take place the first week of classes. Please contact the appropriate instructor for audition information.</p>
		
		<p>Music participation opportunities include:</p>
	</article>
	
	<style>
	.card{
		-webkit-box-shadow: 5px 5px 10px 0px rgba(56,56,56,1);
		-moz-box-shadow: 5px 5px 15px 0px rgba(56,56,56,1);
		box-shadow: 5px 5px 15px 0px rgba(56,56,56,1);
		border:1px solid #777;
	}
	</style>
	<div class="row mb-3">
			<div class="col-md-12">
			<h2>Filter</h2>
				<div id="filters" class="">
					<button class="btn btn-ndsu-green is-checked" id="all" data-bs-filter="*">All</button>
					<button class="btn btn-ndsu-green" id="Band" data-bs-filter=".Band">Band</button>
					<button class="btn btn-ndsu-green" id="Chamber-Music" data-bs-filter=".Chamber-Music">Chamber Music</button>
					<button class="btn btn-ndsu-green" id="Choral" data-bs-filter=".Choral">Choral</button>
					<button class="btn btn-ndsu-green" id="Instrumental" data-bs-filter=".Instrumental">Instrumental</button>
					<button class="btn btn-ndsu-green" id="Jazz" data-bs-filter=".Jazz">Jazz</button>
					<button class="btn btn-ndsu-green" id="Opera" data-bs-filter=".Opera">Opera</button>
					<button class="btn btn-ndsu-green" id="Strings" data-bs-filter=".Strings">Strings</button>
				</div>
			</div>
		</div>
	
<!--Leave this alone - This is the beginning tag of the Accordion Menu-->
	<div id="" aria-multiselectable="true">
		<div class="row isotope">
		<div class="col-lg-6 element-item Instrumental Chamber-Music">
		<div class="card mb-3">
			<!--<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
			<div class="carousel-item active">-->
			<img src="images/542x236_BrassChamber.jpg" class="card-img-top d-block w-100" alt="...">
			<!--</div>
			<div class="carousel-item">
			<img src="images/542x236_BrassChamber.jpg" class="card-img-top d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			<img src="images/542x236_BrassChamber.jpg" class="card-img-top d-block w-100" alt="...">
			</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>--
			</a>
			</div>-->
		
			
			<div class="card-header" role="tab" id="BrassChamberHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				Brass Chamber Ensembles
				</h5>
			</div><!--card-header-->
			<div id="BrassChamber" aria-labelledby="BrassChamberHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Dr. Jeremy Brekke, <a href="mailto:jeremy.brekke@ndsu.edu">jeremy.brekke@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> TTh 3:30-4:45<br />
						<i class="fa fa-university fa-fw"></i> MUSC 314<br />
					</div>
					
					<a class="btn btn-ndsu-green btn-more" data-bs-toggle="collapse" href="#brass-collapse" role="button" aria-expanded="false" aria-controls="brass-collapse"><i class="fas fa-plus"></i> More Information
					  </a> 
					 
				  <div class="collapse" id="brass-collapse">
					  <p>Brass groups are an integral and dynamic component of the instrumental program at North Dakota State University. The enhanced playing abilities, collaborative skills and musical awareness are developed in rehearsing and performing chamber music equips students to be more effective in large ensembles, and as professional performers and educators. Many groups are in a brass quintet setting of two trumpets, horn, trombone, and tuba or bass trombone. These quintets perform regularly on and off campus and have competed in regional competitions. Other ensembles include groups made up of like instruments, such as trumpet ensembles, trombone ensembles, horn quartets, or tuba quartets made up of two euphoniums and two tubas. NDSU also combines the various brass quintets for a large brass ensemble at the end of each semester</p>
					</div>
					
					
					
					
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
		<div class="col-lg-6 element-item Choral">
		<div class="card mb-3">
			<img src="images/542x236_Cantemus.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="CantemusHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				Cantemus
				</h5>
			</div><!--card-header-->
			<div id="Cantemus" aria-labelledby="CantemusHeading">
				<div class="card-body">
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Dr. Charlette Moe, <a href="mailto:charlette.moe@ndsu.edu">charlette.moe@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> TTh 3:30-4:45<br />
						<i class="fa fa-university fa-fw"></i> MUSC 116<br />
					</div>
					
					<a class="btn btn-ndsu-green" data-bs-toggle="collapse" href="#cantemus-collapse" role="button" aria-expanded="false" aria-controls="cantemus-collapse"><i class="fas fa-plus"></i> More Information</a> 
					  
				  <div class="collapse" id="cantemus-collapse">
					  <p>Under the direction of Dr. Charlette Moe, this soprano/alto choir of 55-65 members continually programs music which highlights female composers and music written specifically for the women’s voices. This non-auditioned choir includes students from many different majors, rehearses Tuesdays and Thursdays 4:45-6:00 pm. For the 2013 Choral Music of the Americas Symposium, they premiered a new choral work by Imant Raminsh. Cantemus hosts an Annual Women's Choral Festival and their first convention appearance was at the 2014 North Dakota American Choral Directors Conference. Registration is easy—just visit Campus Connection and register for MUSC 116. For more information, please contact charlette.moe@ndsu.edu.</p>
					</div>
				
					
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
		<div class="col-lg-6 element-item Choral">
		<div class="card mb-3">
			<img src="images/542x236_ConcertChoir.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="ConcertChoirHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				Concert Choir
				</h5>
			</div><!--card-header-->
			<div id="ConcertChoir" aria-labelledby="ConcertChoirHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Dr. Jo Ann Miller, <a href="mailto:jo.miller@ndsu.edu">jo.miller@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> MWF 12:00-12:50, TTh 2:30-1:45<br />
						<i class="fa fa-university fa-fw"></i> MUSC 306<br />
					</div>
					
					<a class="btn btn-ndsu-green" data-bs-toggle="collapse" href="#concertchoir-collapse" role="button" aria-expanded="false" aria-controls="concertchoir-collapse"><i class="fas fa-plus"></i> More Information</a> 										
					
					
				  <div class="collapse" id="concertchoir-collapse">
					  <p>The NDSU Concert Choir has a distinguished tradition of performing eminent choral literature at the highest level of artistry. Under Dr. Jo Ann Miller's direction, the choir has performed at state, regional and national music conferences, including seven North Central American Choral Directors Association conferences and the national ACDA conference in San Antonio, Texas. The choir performs regularly with the Fargo- Moorhead Symphony and tours overseas every three years. Most recently, the choir visited Eastern and Central Europe in 2009, toured Croatia and Italy in 2012, and Iceland and Scotland in 2015. The choir received the first place gold medal at the International Choral Competition in Zadar, Croatia, during the 2012 tour.</p>
					<a href="choirs/concert-choir/" class="btn btn-ndsu-green">Information and Auditions</a>
					</div>
				</div>
				<!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
		<div class="col-lg-6 element-item Instrumental Band">
		<div class="card mb-3">
			<img src="images/542x236_GSMB.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="GSMBHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				Gold Star Marching Band
				</h5>
			</div><!--card-header-->
			<div id="GSMB" aria-labelledby="GSMBHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Connor Challey, <a href="mailto:connor.challey@ndsu.edu">connor.challey@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> MWF 4:00-5:45<br />
						<i class="fa fa-university fa-fw"></i> MUSC 111<br />
					</div>
					
					<a class="btn btn-ndsu-green" href="//goldstarbands.org" target="_BLANK"><i class="fas fa-share-square"></i> More Information</a> 
					
					
					
				  <div class="collapse" id="gsmb-collapse">
					  <p>
					  <table class="table">
						<tr>
							<th>Ensemble</th>
							<th>Instructor</th>
							<th>Audition Required</th>
						</tr>
						
						<tr>
							<td><a href="http://www.goldstarband.org/">Gold Star Bands</a><br>
								&#8211; Gold Star Marching Band<br>
								&#8211; University #<br>
								&#8211; <a href="/wind-symphony/">Wind Symphony</a></td>
							<td>&nbsp;<br>
								<a href="../people/faculty/sigurd_johnson.php">Sigurd Johnson</a><br>
								<a href="../people/faculty/sigurd_johnson.php">Sigurd Johnson</a><br>
								<a href="../people/faculty/warren_olfert.php">Warren Olfert</a></td>
							<td>&nbsp;<br>
								No<br>
								No<br>
								Yes</td>
						</tr>
					</table>
					  </p>
					</div>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
		<div class="col-lg-6  element-item Instrumental Jazz">
		<div class="card mb-3">
			<img src="images/542x236_Jazz.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="JazzHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				Jazz Ensembles
				</h5>
			</div><!--card-header-->
			<div id="Jazz" aria-labelledby="JazzHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Dr. Matthew Patnode, <a href="mailto:matthew.patnode@ndsu.edu">matthew.patnode@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> Various<br />
						<i class="fa fa-university fa-fw"></i> Various<br />
					</div>
					
					<p><a class="btn btn-ndsu-green" data-bs-toggle="collapse" href="#jazz-collapse" role="button" aria-expanded="false" aria-controls="jazz-collapse"><i class="fas fa-plus"></i> More Information</a></p>
					<div class="collapse" id="jazz-collapse">
					<p><a href="https://www.ndsu.edu/performingarts/music/ensembles-and-performances/jazz/">Click here for audition information</a></p>
					</div>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
		<div class="col-lg-6 element-item Choral">
		<div class="card mb-3">
			<img src="images/542x236_Madrigals.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="MadrigalHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				Madrigal Singers
				</h5>
			</div><!--card-header-->
			<div id="Madrigal" aria-labelledby="MadrigalHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Dr. Michael Weber, <a href="mailto:m.weber@ndsu.edu">m.weber@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> MWF 1:00-1:50<br />
						<i class="fa fa-university fa-fw"></i> MUSC 317<br />
					</div>
					
					<a class="btn btn-ndsu-green" data-bs-toggle="collapse" href="#mads-collapse" role="button" aria-expanded="false" aria-controls="mads-collapse"><i class="fas fa-plus"></i> More Information</a> 
									
					
					
				  <div class="collapse" id="mads-collapse">
					  <p>The NDSU Madrigal Singers is a highly selective ensemble that performs vocal chamber music from the Renaissance through the 21st century. In addition to concert performances throughout the year, the annual Madrigal Dinners feature fully costumed productions of Renaissance revelry. Conducted by Dr. Michael Weber, the Madrigal Singers perform for numerous NDSU celebrations, tour each spring with the NDSU Concert Choir and also tour separately throughout the region. The Madrigal Singers were selected to appear at the North Central American Choral Directors Convention in 2008.</p>
					  
					  <a href="../madrigal/">Madrigal Singers</a>
					</div>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
		<div class="col-lg-6 element-item Opera">
		<div class="card mb-3">
			<img src="images/542x236_Opera.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="OperaHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				Opera and Opera Workshop
				</h5>
			</div><!--card-header-->
			<div id="Opera" aria-labelledby="OperaHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i>Dr. Kelly Burns, <a href="mailto:kelly.w.burns@ndsu.edu">kelly.w.burns@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> MWF 3:00-4:50<br />
						<i class="fa fa-university fa-fw"></i> MUSC 319<br />
					</div>
					
					<a class="btn btn-ndsu-green" data-bs-toggle="collapse" href="#opera-collapse" role="button" aria-expanded="false" aria-controls="opera-collapse"><i class="fas fa-plus"></i> More Information</a> 
					
					
					
				  <div class="collapse" id="opera-collapse">
					  <p>NDSU Opera presents fully staged and costumed operas and operettas with orchestra in Festival Concert Hall, as well as staged and costumed scenes from operas with piano accompaniment in Beckwith Recital Hall. The NDSU Opera program opened the 2019–2020 NDSU Baroque Festival with Handel’s masterpiece <i>Giulio Cesare</i> in November, 2019. Other recent productions include <i>Patience</i> (Gilbert & Sullivan),<i> L’enfant et les sortilèges</i> (Ravel), <i>The Impressario</i> (Mozart),<i> HMS Pinafore</i> (Gilbert & Sullivan), <i>A Midsummer Night's Dream</i> (Britten), <i>The Marriage of Figaro</i> (Mozart), and <i>Gianni Schicchi </i>(Puccini). NDSU Opera has also presented baroque operas such as <i>Dido and Aeneas </i>(Purcell) and <i>Venus and Adonis</i> (John Blow) at the NDSU Baroque Festival.</p>
					</div>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
		<div class="col-lg-6 element-item Instrumental Chamber-Music">
		<div class="card mb-3">
			<img src="images/542x236_Percussion.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="PercussionHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				Percussion Ensemble
				</h5>
			</div><!--card-header-->
			<div id="Percussion" aria-labelledby="PercussionHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Dr. Sigurd Johnson, <a href="mailto:sigurd.johnson@ndsu.edu">sigurd.johnson@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> TTh 3:30-4:45<br />
						<i class="fa fa-university fa-fw"></i> MUSC 312<br />
					</div>
					
					<a class="btn btn-ndsu-green" data-bs-toggle="collapse" href="#percussion-collapse" role="button" aria-expanded="false" aria-controls="percussion-collapse"><i class="fas fa-plus"></i> More Information</a> 
										
					
					
				  <div class="collapse" id="percussion-collapse">
					  <p>The NDSU Percussion Ensemble is comprised of both music majors and non-music majors, and includes members of the instrumental ensembles in the Challey School of Music as well as participants from across the campus. The ensemble is led by NDSU Director of Percussion Studies and Director of Athletic Bands, Dr. Sigurd Johnson. The ensemble rehearses two days a week—Tuesdays and Thursdays from 3:30-4:45.  The ensemble performs concerts in both fall and spring semesters. Its repertoire is dynamic and varied, consisting of traditional as well as contemporary percussion literature.</p>
					</div>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
		<div class="col-lg-6 element-item Choral">
		<div class="card mb-3">
			<img src="images/542x236_Statesmen.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="StatesmenHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				The Statesmen of NDSU
				</h5>
			</div><!--card-header-->
			<div id="Statesmen" aria-labelledby="StatesmenHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Dr. Michael Weber, <a href="mailto:m.weber@ndsu.edu">m.weber@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> TTh 3:30-4:45<br />
						<i class="fa fa-university fa-fw"></i> MUSC 117<br />
					</div>
					
					<a class="btn btn-ndsu-green" data-bs-toggle="collapse" href="#statesmen-collapse" role="button" aria-expanded="false" aria-controls="statesmen-collapse"><i class="fas fa-plus"></i> More Information</a> 
															
					
					
				  <div class="collapse" id="statesmen-collapse">
					<p>The NDSU tenor/bass choir is non-auditioned, has singers from many campus majors, and rehearses each Tuesday and Thursday, 3:30-4:45 pm. For the 2013 Choral Music of the Americas Symposium, The Statesmen premiered a new choral work by Jorge Cozatl. They also represented NDSU at the 2009 and 2015 North Dakota Music Educators Association convention in Bismarck, ND.To participate, visit Campus Connection to register for MUSC 117. For more information, please contact Dr. Michael Weber, Associate Director of Choral activities at m.weber@ndsu.edu.</p>
					</div>
					
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
				<div class="col-lg-6 element-item Instrumental Band">
		<div class="card mb-3">
			<img src="images/542x236_UBand.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="UBandHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				University Band
				</h5>
			</div><!--card-header-->
			<div id="UBand" aria-labelledby="UBandHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Dr. Sigurd Johnson, <a href="mailto:sigurd.johnson@ndsu.edu">sigurd.johnson@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> MWF 3:00-3:50<br />
						<i class="fa fa-university fa-fw"></i> MUSC 112<br />
					</div>
					
					<a class="btn btn-ndsu-green" data-bs-toggle="collapse" href="#uband-collapse" role="button" aria-expanded="false" aria-controls="uband-collapse"><i class="fas fa-plus"></i> More Information</a> 
					
					
					
				  <div class="collapse" id="uband-collapse">
					  <p>Our non-auditioned concert band includes students majoring in many subject areas on campus. The University Band performs twice each semester and is a great way to keep playing your instrument beyond high school.
					  
					  </p>
					</div>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
		<div class="col-lg-6 element-item Choral">
		<div class="card mb-3">
			<img src="images/542x236_UChamberSingers.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="UCSHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				University Chamber Singers
				</h5>
			</div><!--card-header-->
			<div id="UCS" aria-labelledby="UCSHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Dr. Charlette Moe, <a href="mailto:charlette.moe@ndsu.edu">charlette.moe@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> MWF 11:00-11:50<br />
						<i class="fa fa-university fa-fw"></i> MUSC 215<br />
					</div>
					
					<a class="btn btn-ndsu-green" data-bs-toggle="collapse" href="#ucs-collapse" role="button" aria-expanded="false" aria-controls="ucs-collapse"><i class="fas fa-plus"></i> More Information</a> 
										
					
					
				  <div class="collapse" id="ucs-collapse">
					<p>The University Chamber Singers is an auditioned, mixed choir of 35 freshmen through senior members who represent many different majors and disciplines across the NDSU campus. The ensemble recently performed at the ND ACDA convention and have performed at the Northern Plains Kodály Chapter Honor Choir festival in April of 2014. The ensemble performs two concerts each semester, and participates in the NDSU Madrigal Dinners each December. The University Chamber Singers (UCS) is conducted by Dr. Charlette Moe, Assistant Director of Choral activities.</p>
					<p>This auditioned choir rehearses from 1:00-1:50 pm on Mondays, Wednesdays, and Fridays. To schedule an audition, email
					<a href="mailto:charlette.moe@ndsu.edu">charlette.moe@ndsu.edu</a></p>
					
					<a href="choirs/">University Chamber Singers</a>
					</div>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
		<div class="col-lg-6 element-item Instrumental Strings">
		<div class="card mb-3">
			<img src="images/542x236_USO.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="USOHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				University Symphony Orchestra
				</h5>
			</div><!--card-header-->
			<div id="USO" aria-labelledby="USOHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Dr. Sigurd Johnson, <a href="mailto:sigurd.johnson@ndsu.edu">sigurd.johnson@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i>T 6:30-8:00<br />
						<i class="fa fa-university fa-fw"></i> MUSC 304<br />
					</div>
					
					<a class="btn btn-ndsu-green" data-bs-toggle="collapse" href="#uso-collapse" role="button" aria-expanded="false" aria-controls="uso-collapse"><i class="fas fa-plus"></i> More Information</a> 
						
					
					
				  <div class="collapse" id="uso-collapse">
					<p><strong>The University Symphony Orchestra</strong> rehearses and performs standard classical, traditional, contemporary orchestral and chamber music repertoire. This ensemble provides members the opportunity to rehearse and perform orchestral literature at a high and challenging level.</p>
					
					<p><strong>All String Students and *Community Members selected to play in the USO through audition are Strongly Encouraged <u>to participate in Both the USO AND the SCE.</u></strong></p>
					
					<p><strong>Participation in <strong>University Symphony Orchestra</strong> is through <strong>audition for all instruments</strong>. Players seeking to play in the <strong>USO</strong> are required to audition at a generally higher level. It should be understood that not all who audition will make it into the USO. </strong></p>
					
					<a href="https://www.ndsu.edu/performingarts/music/ensembles-and-performances/orchestra/" class="btn btn-ndsu-green">Click here for audition information</a> 
					</div>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
		<div class="col-lg-6 element-item Instrumental Strings">
		<div class="card mb-3">
			<img src="images/542x236_USO.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="SCEHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				String Chamber Ensemble
				</h5>
			</div><!--card-header-->
			<div id="SCE" aria-labelledby="SCEHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Dr. Sigurd Johnson, <a href="mailto:sigurd.johnson@ndsu.edu">sigurd.johnson@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> Th 6:30-8:00<br />
						<i class="fa fa-university fa-fw"></i> MUSC 316<br />
					</div>
					
					<a class="btn btn-ndsu-green" data-bs-toggle="collapse" href="#sce-collapse" role="button" aria-expanded="false" aria-controls="sce-collapse"><i class="fas fa-plus"></i> More Information</a> 
					
				  <div class="collapse" id="sce-collapse">
					<p><strong>The String Chamber Ensemble (Strings Only)</strong> focuses on developing technical skills and ensemble playing though string orchestra repertoire. Membership in this ensemble provides string players the opportunity to rehearse and perform in an ensemble setting which – while still be committed to excellence - is less arduous and less stressful than in the USO.</p>
					
					<p><strong>All String Students and *Community Members selected to play in the USO through audition are Strongly Encouraged <u>to participate in Both the USO AND the SCE.</u></strong></p>
										
					<a href="https://www.ndsu.edu/performingarts/music/ensembles-and-performances/orchestra/" class="btn btn-ndsu-green">Click here for audition information</a> 
					</div>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
				<div class="col-lg-6 element-item Instrumental Band">
		<div class="card mb-3">
			<img src="images/542x236_WindSymphony.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="BandHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				Wind Symphony
				</h5>
			</div><!--card-header-->
			<div id="WS" aria-labelledby="WSHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Dr. Warren Olfert, <a href="mailto:warren.olfert@ndsu.edu">warren.olfert@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> MWF 12:15-1:50<br />
						<i class="fa fa-university fa-fw"></i> MUSC 303<br />
					</div>
					
					<a class="btn btn-ndsu-green" data-bs-toggle="collapse" href="#ws-collapse" role="button" aria-expanded="false" aria-controls="ws-collapse"><i class="fas fa-plus"></i> More Information</a> 
					
					
					
				  <div class="collapse" id="ws-collapse">
					  <p>The <a href="https://www.ndsu.edu/performingarts/music/ensembles-and-performances/wind-symphony/">Wind Symphony</a> is our premiere concert band, with entrance through audition. Students in the Wind Symphony perform demanding repertoire in two formal concerts each semester. They have performed nationally through tours and convention appearances.<br>
					
						  <a href="https://www.ndsu.edu/performingarts/music/ensembles-and-performances/wind-symphony/">Click here for audition information</a> 
	

					    <br>
					  </p>
					</div>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		
		<div class="col-lg-6 element-item Instrumental Chamber-Music">
		<div class="card mb-3">
			<img src="images/542x236_Woodwind.jpg" class="card-img-top" alt="...">
			<div class="card-header" role="tab" id="WoodwindHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				Woodwind Chamber Ensembles
				</h5>
			</div><!--card-header-->
			<div id="Woodwind" aria-labelledby="WoodwindHeading">
				<div class="card-body">
				
					<div class="alert alert-success">
						<i class="fa fa-user-circle fa-fw"></i> Dr. Cassie Keogh, <a href="mailto:cassie.keogh@ndsu.edu">cassie.keogh@ndsu.edu</a>.<br />
						<i class="fa fa-calendar fa-fw"></i> Various<br />
						<i class="fa fa-university fa-fw"></i> MUSC 315<br />
					</div>
					
					<a class="btn btn-ndsu-green" data-bs-toggle="collapse" href="#ww-collapse" role="button" aria-expanded="false" aria-controls="ww-collapse"><i class="fas fa-plus"></i> More Information</a> 
					
					
					
				  <div class="collapse" id="ww-collapse">
					<p>Woodwind groups are a vital part of the music curriculum at NDSU. Participation is open to students of any major at NDSU. Instrumentation varies each semester depending on the composition of student participation, but includes both mixed- and like-instrument ensembles. Permanent ensembles include flute choir, clarinet quartets and clarinet choir, saxophone quartets and saxophone choir, and woodwind quintets.</p>

					<p>The woodwind ensembles perform each semester on Woodwind Chamber and Saxophone Quartet nights, regularly perform outreach concerts throughout North Dakota, Minnesota, and South Dakota, and participate in local, regional, and national chamber music competitions. For more information, please contact cassie.keogh@ndsu.edu.</p>
					</div>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		</div><!--Panel-->
		</div><!--Panel-->

	<!--Leave this alone - This is the ending tag of the accordion menu-->
	</div><!--Panel-group-->
<br />	
	<article>
		<div class="alert alert-warning">For a complete listing of upcoming concerts, productions, and exhibitions, please visit the <a href="https://www.ndsu.edu/performingarts/calendar/">Performing Arts Calendar of Events</a>.</div>
	</article>
</section>

<!-- InstanceEndEditable --></div></section>

<?php include($config['path'].'resources/footer.php');?>
<!--	document javascript -->

<script src="//cdn.ntfg.net/vendor/isotope/3.0.6/isotope.pkgd.min.js"></script>

<!-- JS for Isotope-->
<script>
$( function() {
	
		// init Isotope
			var $container = $('.isotope').isotope({
				resizable: true,
				itemSelector: '.element-item',
				layoutMode: 'fitRows',
				transitionDuration: '0.7s',
				getSortData: {
					name: '.name',
					category: '[data-bs-category]',
				}
			});

			// bind filter button click
			$('#filters').on( 'click', 'button', function() {
				var filterValue = $( this ).attr('data-bs-filter');
				// use filterFn if matches value
				// filterValue = filterFns[ filterValue ] || filterValue;
				$container.isotope({ filter: filterValue });
			});

			// bind sort button click
			$('#sorts').on( 'click', 'button', function() {
				var sortByValue = $(this).attr('data-bs-sort-by');
				$container.isotope({ sortBy: sortByValue });
			});

			// change is-checked class on buttons
			$('.button-group').each( function( i, buttonGroup ) {
				var $buttonGroup = $( buttonGroup );
				$buttonGroup.on( 'click', 'button', function() {
					$buttonGroup.find('.is-checked').removeClass('is-checked');
					$( this ).addClass('is-checked');
				});
			});
			$container.on('shown.bs.collapse hidden.bs.collapse', function() {
				$container.isotope('layout');
			});
		});

		</script>