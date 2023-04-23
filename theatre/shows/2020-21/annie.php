<?php 
//Edit the following:
$config['page-title'] = "Annie";
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
		<img alt="Velveteen Rabbit"
			class="_header_image" 
			src="../images/headers/1900x670-Web-Banner-Annie2.jpg" style="width:100%;">
		
		<h1 align="center"><strong>Annie</strong></h1>
	</header>
	
	<article>
		<h2 align="center"><strong>Book by Thomas Meehan<br>
			Music by Charles Strouse<br>
			Lyrics by Martin Charnin <br>
			Askanase Auditorium 
		</strong><br>
		</h2> 
		
		<p align="center">Streamed to your home!<br>
		  Fri 4/30 @ 7:30pm<br>
			Sat 5/1 @ 2pm & 7:30pm<br>
			Thurs-Sat 5/6-5/8 @ 7:30pm<br>
			Sun 5/9 @ 2pm<br>
			Purchase tickets at <a href="https://ndsu.showare.com/">ndsu.showare.com</a>
				  </p>
		<p align="center">
			<a href="../images/headers/DVFA E011 Annie Program_hr.pdf" class="btn btn-warning"><b>Performance Program</b></a>
		<p>With the help of her fellow savvy orphan friends, Annie escapes Miss Hannigan's orphanage to embark on an adventure bigger than her wildest dreams. Relive this family classic that features some of our greatest musical hits, including "Tomorrow".</p>
		<p><a href="https://ndsu.showare.com/" class="btn btn-warning"><b>PURCHASE TICKETS</b></a> Adults $5, Senior $5, Student $5, NDSU Student free with ID
		</p>

		<p><strong>Performance Details: </strong>Patrons who've purchased tickets before 5 PM will be emailed their streaming link at 5 PM on the day of the show. For tickets purchased after 5:00 PM the link will be emailed at 7:20 PM. Streaming links for matinees will be emailed out at 12 PM and 1:20 on the day of the show.</p>

		<p>NDSU Students can get their FREE ticket by calling or visiting the Performing Arts Box Office or filling out the<a href="https://docs.google.com/forms/d/e/1FAIpQLSeK2gixjQclIuUfEhpXeUVs5EX7jDtqAMxTyeo5AtVnr1V-TQ/viewform"> Student Ticket Form</a></p>
	</article>
</section>
<!-- InstanceEndEditable --></div></section>
	
<?php include($config['path'].'resources/footer.php')?>