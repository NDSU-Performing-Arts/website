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
		<p>The Challey School of Music performance organizations provide a high-quality musical experiences for all NDSU students. By participating in one or more of the various performance groups on campus, a student's college career can be greatly enhanced and lifelong friendships formed.</p>
		
		<p>Auditions take place the first week of classes. Please contact the appropriate instructor for audition information.</p>
		
		<p>Music participation opportunities include:</p>
	</article>
	
<!--Leave this alone - This is the beginning tag of the Accordion Menu-->
	<div id="accordion" aria-multiselectable="true">
		
		<div class="card">
			<div class="card-header" role="tab" id="BrassChamberHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#BrassChamber" aria-expanded="true" aria-controls="BrassChamber">
				Brass Chamber Ensembles
				</a>
				</h5>
			</div><!--card-header-->
			<div id="BrassChamber" class="panel-collapse collapse" role="tabpanel" aria-labelledby="BrassChamberHeading">
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Ensemble</th>
							<th>Instructor</th>
							<th>Audition Required</th>
						</tr>
						
						<tr>
							<td>Brass Chamber Ensembles	</td>
							<td><a href="../about/people/faculty/jeremy_brekke.php">Jeremy Brekke</a></td>
							<td>Yes</td>
						</tr>
					</table>
					
					<p>Brass groups are an integral and dynamic component of the instrumental program at North Dakota State University. The enhanced playing abilities, collaborative skills and musical awareness are developed in rehearsing and performing chamber music equips students to be more effective in large ensembles, and as professional performers and educators. Many groups are in a brass quintet setting of two trumpets, horn, trombone, and tuba or bass trombone. These quintets perform regularly on and off campus and have competed in regional competitions. Other ensembles include groups made up of like instruments, such as trumpet ensembles, trombone ensembles, horn quartets, or tuba quartets made up of two euphoniums and two tubas. NDSU also combines the various brass quintets for a large brass ensemble at the end of each semester</p>
					
					<a href="<?php $terms = "brass"; echo "https://www.ndsu.edu/eventcalendar/main.php?view=searchresults&keyword=".$terms."&timebegin_month=".date(m)."&timebegin_day=".date('d')."&timebegin_year=".date('Y');?>" class="btn btn-success"><i class="fas fa-calendar-alt"></i> View Performances</a>
					
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="CantemusHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#Cantemus" aria-expanded="true" aria-controls="Cantemus">
				Cantemus
				</a>
				</h5>
			</div><!--card-header-->
			<div id="Cantemus" class="panel-collapse collapse" role="tabpanel" aria-labelledby="CantemusHeading">
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Ensemble</th>
							<th>Instructor</th>
							<th>Audition Required</th>
						</tr>
						
						<tr>
							<td><a href="choirs/">Cantemus (women's chorus)</a></td>
							<td><a href="../about/people/faculty/charlette_moe.php">Charlette Moe</a></td>
							<td>No</td>
						</tr>
					</table>
					<p>Under the direction of Dr. Charlette Moe, this women's chorus of 55-65 members continually programs music which highlights female composers and music written specifically for the women’s voices. This non-auditioned choir includes students from many different majors, rehearses Tuesdays and Thursdays 3:30-4:45 pm. For the 2013 Choral Music of the Americas Symposium, they premiered a new choral work by Imant Raminsh. Cantemus hosts an Annual Women's Choral Festival and their first convention appearance was at the 2014 North Dakota American Choral Directors Conference. Registration is easy—just visit Campus Connection and register for MUSC 116. For more information, please contact charlette.moe@ndsu.edu.</p>
					<p>Rehearsals: T/Th 3:30-4:45pm</p>
					
					<a href="<?php $terms = "cantemus"; echo "https://www.ndsu.edu/eventcalendar/main.php?view=searchresults&keyword=".$terms."&timebegin_month=".date(m)."&timebegin_day=".date('d')."&timebegin_year=".date('Y');?>" class="btn btn-success"><i class="fas fa-calendar-alt"></i> View Performances</a>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="ConcertChoirHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#ConcertChoir" aria-expanded="true" aria-controls="ConcertChoir">
				Concert Choir
				</a>
				</h5>
			</div><!--card-header-->
			<div id="ConcertChoir" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ConcertChoirHeading">
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Ensemble</th>
							<th>Instructor</th>
							<th>Audition Required</th>
						</tr>
						
						<tr>
							<td><a href="choirs/concert-choir/">Concert Choir</a></td>
							<td><a href="../about/people/faculty/jo_ann_miller.php">Jo Ann Miller</a></td>
							<td>Yes</td>
						</tr>
					</table>
					<p>The NDSU Concert Choir has a distinguished tradition of performing eminent choral literature at the highest level of artistry. Under Dr. Jo Ann Miller's direction, the choir has performed at state, regional and national music conferences, including seven North Central American Choral Directors Association conferences and the national ACDA conference in San Antonio, Texas. The choir performs regularly with the Fargo- Moorhead Symphony and tours overseas every three years. Most recently, the choir visited Eastern and Central Europe in 2009, toured Croatia and Italy in 2012, and Iceland and Scotland in 2015. The choir received the first place gold medal at the International Choral Competition in Zadar, Croatia, during the 2012 tour.</p>
					<p>Auditions take place the Sunday and Monday prior to the school year.</p>
					<p>Rehearsals: M/W/F 12:00-12:50 pm • T/Th 12:30-1:45pm</p>
					
					<a href="<?php $terms = "Concert Choir"; echo "https://www.ndsu.edu/eventcalendar/main.php?view=searchresults&keyword=".$terms."&timebegin_month=".date(m)."&timebegin_day=".date('d')."&timebegin_year=".date('Y');?>" class="btn btn-success"><i class="fas fa-calendar-alt"></i> View Performances</a>
				</div>
				<!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="BandHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#Band" aria-expanded="true" aria-controls="Band">
				Band
				</a>
				</h5>
			</div><!--card-header-->
			<div id="Band" class="panel-collapse collapse" role="tabpanel" aria-labelledby="BandHeading">
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Ensemble</th>
							<th>Instructor</th>
							<th>Audition Required</th>
						</tr>
						
						<tr>
							<td><a href="http://www.goldstarband.org/">Gold Star Bands</a><br>
								&#8211; Gold Star Marching Band<br>
								&#8211; University Band<br>
								&#8211; <a href="https://www.ndsu.edu/performingarts/music/ensembles-and-performances/wind-symphony/">Wind Symphony</a></td>
							<td>&nbsp;<br>
								<a href="../about/people/faculty/sigurd_johnson.php">Sigurd Johnson</a><br>
								<a href="../about/people/faculty/sigurd_johnson.php">Sigurd Johnson</a><br>
								<a href="../about/people/faculty/warren_olfert.php">Warren Olfert</a></td>
							<td>&nbsp;<br>
								No<br>
								No<br>
								Yes</td>
						</tr>
					</table>
					<a href="<?php $terms = "wind symphony"; echo "https://www.ndsu.edu/eventcalendar/main.php?view=searchresults&keyword=".$terms."&timebegin_month=".date(m)."&timebegin_day=".date('d')."&timebegin_year=".date('Y');?>" class="btn btn-success"><i class="fas fa-calendar-alt"></i> View Performances</a>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="MadrigalHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#Madrigal" aria-expanded="true" aria-controls="Madrigal">
				Madrigal Singers
				</a>
				</h5>
			</div><!--card-header-->
			<div id="Madrigal" class="panel-collapse collapse" role="tabpanel" aria-labelledby="MadrigalHeading">
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Ensemble</th>
							<th>Instructor</th>
							<th>Audition Required</th>
						</tr>
						
						<tr>
							<td><a href="choirs/madrigal/">Madrigal Singers</a></td>
							<td><a href="../about/people/faculty/michael_weber.php">Mike Weber</a></td>
							<td>Yes</td>
						</tr>
					</table>
					<p>The NDSU Madrigal Singers is a highly selective ensemble that performs vocal chamber music from the Renaissance through the 21st century. In addition to concert performances throughout the year, the annual Madrigal Dinners feature fully costumed productions of Renaissance revelry. Conducted by Dr. Michael Weber, the Madrigal Singers perform for numerous NDSU celebrations, tour each spring with the NDSU Concert Choir and also tour separately throughout the region. The Madrigal Singers were selected to appear at the North Central American Choral Directors Convention in 2008.</p>
					<p>Rehearsals: M/W/F 1:00-1:50 pm</p>
					
					<a href="<?php $terms = "Madrigal Singers"; echo "https://www.ndsu.edu/eventcalendar/main.php?view=searchresults&keyword=".$terms."&timebegin_month=".date(m)."&timebegin_day=".date('d')."&timebegin_year=".date('Y');?>" class="btn btn-success"><i class="fas fa-calendar-alt"></i> View Performances</a>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="JazzHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#Jazz" aria-expanded="true" aria-controls="Jazz">
				Jazz Ensembles
				</a>
				</h5>
			</div><!--card-header-->
			<div id="Jazz" class="panel-collapse collapse" role="tabpanel" aria-labelledby="JazzHeading">
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Ensemble</th>
							<th>Instructor</th>
							<th>Audition Required</th>
						</tr>
						
						<tr>
							<td><a href="jazz/">NDSU Jazz Ensembles</a></td>
							<td><a href="../about/people/faculty/kyle_mack.php">Kyle Mack</a> or <a href="../about/people/faculty/matthew_patnode.php">Matt Patnode</a></td>
							<td>Yes</td>
						</tr>
					</table>
					<p> </p>
					<a href="<?php $terms = "jazz"; echo "https://www.ndsu.edu/eventcalendar/main.php?view=searchresults&keyword=".$terms."&timebegin_month=".date(m)."&timebegin_day=".date('d')."&timebegin_year=".date('Y');?>" class="btn btn-success"><i class="fas fa-calendar-alt"></i> View Performances</a>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="OperaHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#Opera" aria-expanded="true" aria-controls="Opera">
				Opera and Opera Workshop
				</a>
				</h5>
			</div><!--card-header-->
			<div id="Opera" class="panel-collapse collapse" role="tabpanel" aria-labelledby="OperaHeading">
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Ensemble</th>
							<th>Instructor</th>
							<th>Audition Required</th>
						</tr>
						
						<tr>
						  <td><a href="opera/">NDSU Opera and Opera Workshop</a></td>
							<td><a href="../about/people/faculty/mariane_lemieux_wottrich.php">Mariane Lemieux-Wottrich</a></td>
						  <td>Yes</td>
						</tr>
					</table>
					<p>NDSU Opera presents fully staged and costumed performances of operas with orchestra in Festival Concert Hall every spring, as well as staged and costumed scenes from operas with piano accompaniment in Beckwith Recital Hall.  Recent productions have included <i>HMS Pinafore</i>(Gilbert and Sullivan), <i>A Midsummer Night's Dream (Britten)</i>, <i>The Marriage of Figaro </i>(Mozart), and<i>Gianni Schicchi</i> (Puccini). NDSU Opera also presents operas such as <i>Dido and Aeneas</i>(Purcell) and <i>Venus and Adonis</i>(Blow) at the NDSU Baroque Festival.</p>
					<p>Rehearsals: M/W/F 3:00-5:00pm</p>
					
					<a href="<?php $terms = "opera"; echo "https://www.ndsu.edu/eventcalendar/main.php?view=searchresults&keyword=".$terms."&timebegin_month=".date(m)."&timebegin_day=".date('d')."&timebegin_year=".date('Y');?>" class="btn btn-success"><i class="fas fa-calendar-alt"></i> View Performances</a>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="PercussionHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#Percussion" aria-expanded="true" aria-controls="Percussion">
				Percussion Ensemble
				</a>
				</h5>
			</div><!--card-header-->
			<div id="Percussion" class="panel-collapse collapse" role="tabpanel" aria-labelledby="PercussionHeading">
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Ensemble</th>
							<th>Instructor</th>
							<th>Audition Required</th>
						</tr>
						
						<tr>
							<td>Percussion Ensemble</td>
							<td><a href="../about/people/faculty/sigurd_johnson.php">Sigurd Johnson</a></td>
							<td>No</td>
						</tr>
					</table>
					<p>The NDSU Percussion Ensemble is comprised of both music majors and non-music majors, and includes members of the instrumental ensembles in the Challey School of Music as well as participants from across the campus. The ensemble is led by NDSU Director of Percussion Studies and Director of Athletic Bands, Dr. Sigurd Johnson. The ensemble rehearses two days a week—Tuesdays and Thursdays from 3:30-4:45.  The ensemble performs concerts in both fall and spring semesters. Its repertoire is dynamic and varied, consisting of traditional as well as contemporary percussion literature.</p>
					
					<a href="<?php $terms = "percussion"; echo "https://www.ndsu.edu/eventcalendar/main.php?view=searchresults&keyword=".$terms."&timebegin_month=".date(m)."&timebegin_day=".date('d')."&timebegin_year=".date('Y');?>" class="btn btn-success"><i class="fas fa-calendar-alt"></i> View Performances</a>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="StatesmenHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#Statesmen" aria-expanded="true" aria-controls="Statesmen">
				The Statesmen of NDSU
				</a>
				</h5>
			</div><!--card-header-->
			<div id="Statesmen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="StatesmenHeading">
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Ensemble</th>
							<th>Instructor</th>
							<th>Audition Required</th>
						</tr>
						
						<tr>
							<td><a href="choirs/statesmen/">The Statesmen (men's chorus)</a></td>
							<td><a href="../about/people/faculty/michael_weber.php">Mike Weber</a></td>
							<td>No</td>
						</tr>
					</table>
					<p>The NDSU mens’ choir is non-auditioned, has singers from many campus majors, and rehearses each Tuesday and Thursday, 3:30-4:45 pm. For the 2013 Choral Music of the Americas Symposium, The Statesmen premiered a new choral work by Jorge Cozatl. They also represented NDSU at the 2009 and 2015 North Dakota Music Educators Association convention in Bismarck, ND.To participate, visit Campus Connection to register for MUSC 117. For more information, please contact Dr. Michael Weber, Associate Director of Choral activities at m.weber@ndsu.edu.<br>
					</p>
					<p>Rehearsal: T/Th 3:30-4:45 pm</p>
					
					<a href="<?php $terms = "statesmen"; echo "https://www.ndsu.edu/eventcalendar/main.php?view=searchresults&keyword=".$terms."&timebegin_month=".date(m)."&timebegin_day=".date('d')."&timebegin_year=".date('Y');?>" class="btn btn-success"><i class="fas fa-calendar-alt"></i> View Performances</a>
					
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="UCSHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#UCS" aria-expanded="true" aria-controls="UCS">
				University Chamber Singers
				</a>
				</h5>
			</div><!--card-header-->
			<div id="UCS" class="panel-collapse collapse" role="tabpanel" aria-labelledby="UCSHeading">
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Ensemble</th>
							<th>Instructor</th>
							<th>Audition Required</th>
						</tr>
						
						<tr>
							<td><a href="choirs/">University Chamber Singers</a></td>
							<td><a href="../about/people/faculty/charlette_moe.php">Charlette Moe</a></td>
							<td>Yes</td>
						</tr>
					</table>
					<p>The University Chamber Singers is an auditioned, mixed choir of 35 freshmen through senior members who represent many different majors and disciplines across the NDSU campus. The ensemble recently performed at the ND ACDA convention and have performed at the Northern Plains Kodály Chapter Honor Choir festival in April of 2014. The ensemble performs two concerts each semester, and participates in the NDSU Madrigal Dinners each December. The University Chamber Singers (UCS) is conducted by Dr. Charlette Moe, Assistant Director of Choral activities.</p>
					<p>To schedule an audition, email <a href="mailto:charlette.moe@ndsu.edu">charlette.moe@ndsu.edu</a></p>
					<p>Rehearsals: M/W/F 11:00-11:50 am </p>
					
					<a href="<?php $terms = "University Chamber Singers"; echo "https://www.ndsu.edu/eventcalendar/main.php?view=searchresults&keyword=".$terms."&timebegin_month=".date(m)."&timebegin_day=".date('d')."&timebegin_year=".date('Y');?>" class="btn btn-success"><i class="fas fa-calendar-alt"></i> View Performances</a>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="USOHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#USO" aria-expanded="true" aria-controls="USO">
				University Symphony Orchestra
				</a>
				</h5>
			</div><!--card-header-->
			<div id="USO" class="panel-collapse collapse" role="tabpanel" aria-labelledby="USOHeading">
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Ensemble</th>
							<th>Instructor</th>
							<th>Audition Required</th>
						</tr>
						
						<tr>
							<td><a href="uso/">University Symphony Orchestra</a></td>
							<td><a href="../about/people/faculty/warren_olfert.php">Warren Olfert</a></td>
							<td>Yes</td>
						</tr>
					</table>
					<p>Members of the University Symphony Orchestra include students from throughout the University and selected community members. Membership is determined by audition each school year. Watch for campus announcements regarding rehearsal and audition schedules.  </p>
					
					<a href="<?php $terms = "University Symphony Orchestra"; echo "https://www.ndsu.edu/eventcalendar/main.php?view=searchresults&keyword=".$terms."&timebegin_month=".date(m)."&timebegin_day=".date('d')."&timebegin_year=".date('Y');?>" class="btn btn-success"><i class="fas fa-calendar-alt"></i> View Performances</a>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->
		
		<div class="card">
			<div class="card-header" role="tab" id="WoodwindHeading"><!--id here must match aria-labeledby below-->
				<h5 class="mb-0">
				<!--href here must match aria-controls, aria-labeledby, and div id below-->
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#Woodwind" aria-expanded="true" aria-controls="Woodwind">
				Woodwind Chamber Ensembles
				</a>
				</h5>
			</div><!--card-header-->
			<div id="Woodwind" class="panel-collapse collapse" role="tabpanel" aria-labelledby="WoodwindHeading">
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Ensemble</th>
							<th>Instructor</th>
							<th>Audition Required</th>
						</tr>
						
						<tr>
							<td>Woodwind Ensembles</td>
							<td><a href="../about/people/faculty/cassie_keogh.php">Cassie Keogh</a></td>
							<td>Yes</td>
						</tr>
					</table>
					<p>Woodwind groups are a vital part of the music curriculum at NDSU. Participation is open to students of any major at NDSU. Instrumentation varies each semester depending on the composition of student participation, but includes both mixed- and like-instrument ensembles. Permanent ensembles include flute choir, clarinet quartets and clarinet choir, saxophone quartets and saxophone choir, and woodwind quintets.</p>

					<p>The woodwind ensembles perform each semester on Woodwind Chamber and Saxophone Quartet nights, regularly perform outreach concerts throughout North Dakota, Minnesota, and South Dakota, and participate in local, regional, and national chamber music competitions. For more information, please contact cassie.keogh@ndsu.edu.</p>
					
					<a href="<?php $terms = "woodwind"; echo "https://www.ndsu.edu/eventcalendar/main.php?view=searchresults&keyword=".$terms."&timebegin_month=".date(m)."&timebegin_day=".date('d')."&timebegin_year=".date('Y');?>" class="btn btn-success"><i class="fas fa-calendar-alt"></i> View Performances</a>
				</div><!--card-body-->
			</div><!--panel-collapse-->
		</div><!--Panel-->

	<!--Leave this alone - This is the ending tag of the accordion menu-->
	</div><!--Panel-group-->
<br />	
	<article>
		<p>Auditions for Concert Choir, Madrigal Singers and University Chamber Singers require one prepared solo.  An accompanist will be provided. If a prepared vocal solo is unavailable, America (My Country Tis of Thee) could be performed. Auditions for these choirs are held throughout the summer. To schedule an audition this summer, contact <a href="mailto:jo.miller@ndsu.edu">Dr. Jo Ann Miller</a>. If you plan to audition in August, also contact <a href="mailto:jo.miller@ndsu.edu">Dr. Jo Ann Miller</a> or sign up for an audition time on her office door, located in the Reineke Performing Arts Center 2nd Floor, room 217.</p>
		
		<p>A number of smaller ensembles are also available for participation. Please call the music office at 701.231.7932 for additional information.</p>
		
		<p>The Concert Choir, Wind Symphony, and Jazz Ensemble each take an extended concert tour in the spring. Past trips have included concert tours to Europe and have spanned the United States.</p>
		
		<p>For a complete listing of upcoming concerts, productions, and exhibitions, please visit the <a href="https://www.ndsu.edu/performingarts/calendar/">Performing Arts Calendar of Events</a>.</p>
	</article>
</section>
<!-- InstanceEndEditable --></div></section>

<?php include($config['path'].'resources/footer.php')?>