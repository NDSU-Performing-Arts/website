<?php 
//Edit the following:
$config['page-title'] = "Faculty | Challey School of Music";
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
		<img alt="Music Faculty"
			class="_header_image" style="width:100%;" 
			src="images/940px_music_faculty.jpg">
			
		<h1>Faculty</h1>
	</header>
	<?php
	//KV-Ughhhhhh fine this will be faster
	function writeTab($name,$active=0){
		echo "<a class=\"nav-link mr-3"; if(!empty($active)){echo " active";}echo "\" id=\"v-pills-".$name."-tab\" data-toggle=\"pill\" href=\"#".$name."\" role=\"tab\" aria-controls=\"".$name."\" aria-selected=\"false\">".$name."</a>";
	}
	
	function tabHeader($name,$active=0){
		echo "<div class=\"tab-pane "; if(!empty($active)){echo " active";}echo "\" id=\"".$name."\" role=\"tabpanel\" aria-labelledby=\"v-pills-".$name."-tab\">";
	}
	
	function tabFooter($name){echo "</div>";}
	?>
	
	<div class="nav nav-pills d-print-none" id="v-pills-tab" role="tablist">
      <?php writeTab("All Faculty",1);?>
      <?php writeTab("By Area");?>
    </div>
	<br />
    <div class="tab-content" id="v-pills-tabContent">
     

	<?php tabHeader("All Faculty",1);?>
	<table class="table table-hover">
	<thead><th>Name</th><th>Title</th><th>Speciality</th></thead>
	<tbody>
	<tr><td>Jeremy Brekke, D.A.</td><td>Associate Professor</td><td>High Brass</td></tr>
	<tr><td>Elise Buffat-Nelson, M.M.</td><td>Adjunct Faculty</td><td>Cello</td></tr>
	<tr><td>Kelly Burns, D.M.A.</td><td>Assistant Professor</td><td>Director of NDSU Opera; Voice</td></tr>
	<tr><td>Connor Challey, M.M.</td><td>Lecturer</td><td>Sports Bands; Low Brass</td></tr>
	<tr><td>Sigurd Johnson, D.M.A.</td><td>Associate Professor</td><td>Director of Athletic Bands; Percussion</td></tr>
	<tr><td>Adam Hollingsworth, D.M.A.</td><td>Adjunct Faculty</td><td>Music Education</td></tr>
	<tr><td>Cody Hunter, D.M.A.</td><td>Adjunct Faculty</td><td>Bassoon</td></tr>
	<tr><td>Kyle Mack, D.A.</td><td>Associate Professor</td><td>Director of Jazz Studies; Low Brass</td></tr>
	<tr><td>Laura Kellogg, D.M.A.</td><td>Adjunct Faculty</td><td>Flute; NDSU Music Academy</td></tr>
	<tr><td>Cassie Keogh, D.M.A.</td><td>Associate Professor</td><td>Clarinet; Theory</td></tr>
	<tr><td>Mariane Lemieux-Wottrich, D.M.A.</td><td>Adjunct Faculty</td><td>Voice</td></tr>
	<tr><td>Eric Martens, M.M.</td><td>Adjunct Faculty</td><td>Guitar</td></tr>
	<tr><td>Jo Ann Miller, D.M.A.</td><td>University Distinguished Professor</td><td>Director of Choral Activities</td></tr>
	<tr><td>John Miller, Ph.D.</td><td>Professor</td><td>Director of the Division of Performing Arts; Academic Studies</td></tr>
	<tr><td>Philip McKenzie, M.M.</td><td>Adjunct Faculty</td><td>Oboe</td></tr>
	<tr><td>Charlette Moe, D.M.A.</td><td>Associate Professor</td><td>Coordinator, M.M. Ed. Program</td></tr>
	<tr><td>Doug Neill, M.S.</td><td>Adjunct Faculty</td><td>Bass; Instrumental Methods</td></tr>
	<tr><td>Kayla Nelson, M.M.</td><td>Adjunct Faculty</td><td>Horn</td></tr>
	<tr><td>Tim Nelson, M.M.</td><td>Adjunct Faculty</td><td>Orchestra</td></tr>
	<tr><td>Warren Olfert, Ph.D.</td><td>Professor</td><td>Director of Bands</td></tr>
	<tr><td>Matthew Patnode, D.M.A.</td><td>Professor</td><td>Saxophone; Woodwinds</td></tr>
	<tr><td>Karisa Templeton, D.M.</td><td>Assistant Professor</td><td>Voice</td></tr>
	<tr><td>Kyle Vanderburg, D.M.A.</td><td>Assistant Professor of Practice</td><td>Composition; Theory</td></tr>
	<tr><td>Michael Weber, D.M.A.</td><td>Professor</td><td>Choral Activities</td></tr>
	<tr><td>Tyler Wottrich, D.M.A.</td><td>Associate Professor</td><td>Piano</td></tr>
	
	</tbody>
	</table>
	<?php tabFooter("All Faculty");
	tabHeader("By Area");?>
	
	<div class="nav nav-pills d-print-none" id="A-pills-tab" role="tablist">
      <?php writeTab("Instrumental");?>
      <?php writeTab("Vocal");?>
      <?php writeTab("Conducting");?>
      <?php writeTab("Composition");?>
      <?php writeTab("Theory");?>
      <?php writeTab("Musicology");?>
      <?php writeTab("Piano");?>
      <?php writeTab("Low Brass");?>
      <?php writeTab("Strings");?>
      <?php writeTab("Percussion");?>
      <?php writeTab("Piano");?>
    </div>
	<br />
    <div class="tab-content" id="A-pills-tabContent">
     

	<?php tabHeader("All Faculty",1);?>
	
	<?php tabFooter("By Area");?>
	</section>

<section>
	<header><h1>Adjunct Faculty</h1></header>
	
	
</section>

<section>
	<header><h1>Professors Emeriti</h1></header>
	
	<div class="card-deck">
	<div class="ndsu-column">
		<a href="#"><img class="d-none d-md-block" src="images/200px_faculty_froelich_andrew.jpg" alt="Andrew Froelich">
		<div class="ndsu-column-inner">
		<h5>Andrew Froelich, D.M.A.</h5>
		<p>Professor Emeritus (piano, theory)</p>
		</div></a>
	</div>
		<div class="ndsu-column">
		<a href="robert_groves.php"><img class="d-none d-md-block" src="images/200px_faculty_groves_robert.jpg" alt="Robert Groves">
		<div class="ndsu-column-inner">
		<h5>Robert Groves, Ph.D.</h5>
		<p>Professor Emeritus (piano, academic studies)</p>
		</div></a>
	</div>
		
	<div class="ndsu-column">
		<a href="robert_jones.php"><img class="d-none d-md-block" src="images/200px_faculty_jones_robert.jpg" alt="Robert Jones">
		<div class="ndsu-column-inner">
		<h5>Robert J. Jones, D.M.A.</h5>
		<p>Professor Emeritus (voice, opera)</p>
		</div></a>
	</div>
	
	<div class="ndsu-column">
		<a href="#"><img class="d-none d-md-block" src="images/200px_faculty_sublett_virginia.jpg" alt="Virginia Sublett">
		<div class="ndsu-column-inner">
		<h5>Virginia Sublett, D.M.A.</h5>
		<p>Professor Emerita (voice, opera)</p>
		</div></a>
	</div>
	</div>
</section>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>