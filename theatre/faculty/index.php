<?php 
//Edit the following:
$config['page-title'] = "Faculty | Department of Theatre Arts";
$config['page-description'] = "";
$config['page-realm'] = "DTA"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<!--	body content -->
<section id=""><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<section>
	<header>
		<!--<img alt="Theatre Faculty"
			class="_header_image" 
			src="https://www.ndsu.edu/performingarts/re-design/theatre/faculty/images/940px_theatre_faculty.jpg">-->
			
		<h1>Faculty</h1>
	</header>
	
	<div class="card-deck">
	
	<div class="ndsu-column">
		<a href="devine_marc.php"><img class="d-none d-md-block" src="images/200px_faculty_devine_marc.jpg" alt="Marc Devine">
		<div class="ndsu-column-inner">
		<h5>Marc Devine, M.F.A.</h5>
		<p>Assistant Professor <br />
		  movement, acting<br /></p>
		</div></a>
		</div>
		
	<div class="ndsu-column">
		<a href="engler_mark.php"><img class="d-none d-md-block" src="images/200px_faculty_engler_mark.jpg" alt="Mark Engler">
		<div class="ndsu-column-inner">
		<h5>Mark Engler, M.F.A.</h5>
		<p>Department Head<br>
		  Associate Professor<br />Technical Director<br />stagecraft, lighting and sound design, and technical director</p>
		</div></a>
	</div>
	
	
	
	
	<div class="ndsu-column">
		<a href="fier_tiffany.php"><img class="d-none d-md-block" src="images/200px_faculty_fier_tiffany.jpg" alt="Tiffany Fier">
		<div class="ndsu-column-inner">
		<h5>Tiffany Fier, M.F.A.</h5>
		<p>Associate Professor<br />Scenic Design<br />scenic design, painting and props</p>
		</div></a>
	</div>
	
	
	
	<div class="ndsu-column">
		<a href="jung_jess.php"><img class="d-none d-md-block" src="images/200px_faculty_jung_jess.jpg" alt="Jess Jung">
		<div class="ndsu-column-inner">
		<h5>Jess Jung, M.F.A.</h5>
		<p>Assistant Professor<br />directing/TYA Theatre for Young Audiences/acting</p>
		</div></a>
	</div>
	<div class="ndsu-column">
		<a href="scoble_ryan.php"><img class="d-none d-md-block" src="images/200x300_RyanScoble.jpg" alt="Ryan Scoble">
		<div class="ndsu-column-inner">
		<h5>Ryan Scoble, M.F.A.</h5>
		<p>Assistant Professor<br />Musical Theatre<br /></p>
		</div></a>
	</div>
	
	<div class="ndsu-column">
		<a href="varland_rooth.php"><img class="d-none d-md-block" src="images/200px_faculty_varland_rooth.jpg" alt="Rooth Varland">
		<div class="ndsu-column-inner">
		<h5>Rooth Varland, M.F.A.</h5>
		<p>Professor<br />Costume Designer<br />costume design, makeup design</p>
		</div></a>
	</div>
	
	<div class="ndsu-column">
		<a href="larew_donald.php"><img class="d-none d-md-block" src="images/200px_faculty_headshot.gif" alt="Donald E. Larew">
		<div class="ndsu-column-inner">
		<h5>Donald E. Larew, M.F.A.</h5>
		<p>Little County Theatre Historian<br />Professor Emeritus<br />(directing)</p>
		</div></a>
	</div>
	</div>
</section>
	
<section>
	<header>
		<h1>Adjunct Faculty</h1>
	</header>
	
	<div class="card-deck">
	<div class="ndsu-column">
		<a href=""><img class="d-none d-md-block" src="images/200px_faculty_headshot.gif" alt="Matt Gasper">
		<div class="ndsu-column-inner">
		<h5>Matt Gasper</h5>
		<p>Dance - Jazz</p>
		</div></a>
	</div>
	
	<!--<div class="ndsu-column">
		<a href=""><img class="d-none d-md-block" src="images/200px_faculty_headshot.gif" alt="Lory Koenig">
		<div class="ndsu-column-inner">
		<h5>Lori Koenig</h5>
		<p>World Film</p>
		</div></a>
	</div>-->
	
	<div class="ndsu-column">
		<a href=""><img class="d-none d-md-block" src="images/200px_faculty_headshot.gif" alt="Cindy Roholt">
		<div class="ndsu-column-inner">
		<h5>Sarah Aldridge</h5>
		<p>Costume Craft</p>
		</div></a>
	</div>
	</div>
</section>

<section>
	<header>
		<h1>Staff</h1>
	</header>

	<div class="card-deck">
	<!--<div class="ndsu-column">
		<a href=""><img class="d-none d-md-block" src="images/200px_faculty_headshot.gif" alt="Cindy Roholt">
		<div class="ndsu-column-inner">
		<h5>Cindy Roholt</h5>
		<p>701.231.8829<br />cynthia.roholt@ndsu.edu<br />119 Askanase Hall</p>
		</div></a>
	</div>-->
	
	<div class="ndsu-column">
		<a href=""><img class="d-none d-md-block" src="images/200px_faculty_headshot.gif" alt="Karen Dregseth">
		<div class="ndsu-column-inner">
		<h5>Karen (Samm) Dregseth</h5>
		<p>701.231.8725<br />karen.dregseth@ndsu.edu<br />107 Askanase Hall</p>
		</div></a>
	</div>
	</div>
</section>
<!-- InstanceEndEditable --></div></section>
	
<?php include($config['path'].'resources/footer.php')?>