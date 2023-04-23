<?php 
//Edit the following:
$config['page-title'] = "Staff | Division of Performing Arts";
$config['page-description'] = "";
$config['page-realm'] = "DPA"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<section id="" ><div class="container"><!-- InstanceBeginEditable name="body" -->


	<header>
		<h1>Administrative</h1>
	</header>
	<div class="row row-cols-lg-auto">
		<div class="ndsu-column">
		  <a href="../music/about/people/faculty/john_miller.php"><img class="d-none d-md-block" src="images/200px_faculty_miller_john.jpg" alt="John Miller">
		  <div class="ndsu-column-inner">
			<h5>John Miller, Ph.D.</h5>
			<p>Director of the Division of Performing Arts</p>
		  </div>
		  </a>
		</div>
		
		<div class="ndsu-column">
		  <a href="law_bill.php"><img class="d-none d-md-block" src="images/200px_faculty_law_bill.jpg" alt="Bill Law">
		  <div class="ndsu-column-inner">
			<h5>Bill Law, M.A.</h5>
			<p>Assistant Director of the Division of Performing Arts,	Director of Development</p>
		  </div>
			</a>
		</div>
		
		
		
		
		</div>
		<br />

	<header>
		<h1>Performing Arts Office</h1>
	</header>
	
	<div class="row row-cols-lg-auto">
	
			<div class="ndsu-column">
			  <a href="dahl_tracey.php"><img class="d-none d-md-block" src="images/200px_faculty_dahl_tracey.jpg" alt="Tracey Dahl">
			  <div class="ndsu-column-inner">
				<h5>Tracey Dahl</h5>
				<p>Account Technician</p>
			  </div></a>
			</div>
		
			<div class="ndsu-column">
			  <a href=""><img class="d-none d-md-block" src="images/200px_faculty_headshot.gif" alt="Dave Huber">
			  <div class="ndsu-column-inner">
				<h5>Dave Huber</h5>
				<p>Technical Production Manager</p>
			  </div></a>
			</div>
			
			<div class="ndsu-column">
			  <a href="iverson_jacoba.php"><img class="d-none d-md-block" src="images/Woodard_Jacoba.jpg" alt="Jacoba Woodard">
			  <div class="ndsu-column-inner">
				<h5>Jacoba Iverson</h5>
				<p>Academic Assistant</p>
			  </div></a>
			</div>
			
			<?php /*
			<div class="ndsu-column">
			  <a href="latterell_margaret.php"><img class="d-none d-md-block" src="images/200px_faculty_latterell_maggie_2.jpg" alt="Margaret Latterell">
			  <div class="ndsu-column-inner">
				<h5>Margaret Latterell</h5>
				<p>Concert Facilities and Box Office Manager</p>
			  </div></a>
			</div> */ ?>
			
			<div class="ndsu-column">
			  <a href="scheerer_matt.php"><img class="d-none d-md-block" src="images/Scheerer_Matt.jpg" alt="Matt Scheerer">
			  <div class="ndsu-column-inner">
				<h5>Matt Scheerer</h5>
				<p>Promotions Director</p>
			  </div></a>
			</div>
						<!--<div class="w-100"><br /><!--Every 4!--</div>-->
	</div>
<br />
	<header>
		<h1>Theatre Arts Office</h1>
	</header>
	
	<div class="row row-cols-lg-auto">
	
			<div class="ndsu-column">
			  <a href="../theatre/faculty/engler_mark.php"><img class="d-none d-md-block" src="../theatre/faculty/images/200px_faculty_engler_mark.jpg" alt="Mark Engler">
			  <div class="ndsu-column-inner">
				<h5>Mark Engler, M.F.A.</h5>
				<p>Department Head</p>
			  </div></a>
			</div>
	
		<div class="ndsu-column">
			  <a href="#"><img class="d-none d-md-block" src="images/200px_faculty_headshot.gif" alt="Karen Dregseth">
			  <div class="ndsu-column-inner">
				<h5>Karen Dregseth</h5>
				<p>Administrative Assistant</p>
			  </div></a>
			</div>
		
			<div class="ndsu-column">
			  <a href="../theatre/faculty/jung_jess.php"><img class="d-none d-md-block" src="../theatre/faculty/images/200px_faculty_jung_jess.jpg" alt="Jess Jung">
			  <div class="ndsu-column-inner">
				<h5>Jess Jung, M.F.A.</h5>
				<p>Assistant Professor of Directing,<br />Artistic Director</p>
			  </div></a>
			</div>
		
	</div>
</section>
<br /><br />
<!-- InstanceEndEditable --></div></section> 

<!-- 	document footer notification -->
<?php 	//include('../resources/addins/footer_notification/footer_notification.php')?>
	
<!-- 	document footer -->
<?php 	//include('../resources/languages/php/alpha_sitewide_footer.php')?>
<?php include($config['path'].'resources/footer.php')?>
