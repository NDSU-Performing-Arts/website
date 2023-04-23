<?php 
//Edit the following:
$config['page-title'] = "Music Day | Challey School of Music";
$config['page-description'] = "";
$config['page-realm'] = "CSOM"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<?php 
$directory = $path."resources/media/images/headers";
$images = glob($directory."/*.jpg");
$imgarr = array();
foreach($images as $image){$imgarr[]=str_replace($path,"",$image);}
// var_dump($imgarr);
$total = count($imgarr);
$rand = rand(0,$total);
?>
<div class="container-fluid csom-bigimage" style="padding:0px;">
<img src="/performingarts/<?php echo $imgarr[$rand];?>" width="100%" class="csom-bigimage">
</div>

<section id=""><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<section>
	<header>
		<h1>Music Day</h1>
	</header>
	
	<article>
		<h2>October 18, 2019 | 8:00 a.m. | <a href="2019 MUSIC DAY SCHEDULE .pdf">Music Day Schedule</a> </h2>

        <h3>Attention high school juniors and seniors!</h3>

        <p>You are invited to attend the NDSU Music Day, an opportunity for high school students to attend music classes, observe ensemble rehearsals, meet music faculty and students, learn how to prepare for scholarship auditions, attend performances, and learn about music scholarships and financial aid.</p>

        <p style="margin-top: 0; margin-bottom: 0;"><strong>This year we will be hosting NDSU Music Day in conjunction with one of the Discover Days sponsored by the NDSU Office of Admissions.</strong> You will begin your day with presentations and meetings about NDSU at the Memorial Union.  After a campus tour that ends at the Reineke Fine Arts Center, which is the home of the Challey School of Music, you will meet with faculty and students and learn about our music program at NDSU.</p>

        <p>NDSU Music offers students a top-notch faculty, individualized attention and an exceptional range of performance opportunities for students. Dozens of student ensembles make music every day, including our sizzling Jazz Ensemble, the historic Gold Star Band, the University Symphony Orchestra, and our acclaimed Concert Choir. We offer four different undergraduate degree programs: Bachelor of Arts in Music, Bachelor of Science in Music, Bachelor of Music in Music Education, and Bachelor of Music in Performance.</p>

        <p>Music Day is free and open to high school juniors and seniors. Parents and teachers are invited to attend!</p>
        <p><a href="https://drive.google.com/open?id=1jABUv9u6gTSjP4W5bYbkLWWwxOnpiuC2WIIcgnbH1pQ" class="btn btn-warning">Register Here</a> <!--<a href="2018_music_day_schedule.pdf" class="btn btn-warning">Schedule</a></p><br> !-->

        <p><strong>For further information, please contact:</strong><br />

          Dr. Michael Weber<br />

          NDSU Division of Performing Arts<br />

          Dept. 2330, PO Box 6050<br />

          Fargo, ND  58108-6050<br />

          701.231.8497 | <a href="mailto:m.weber@ndsu.edu">M.Weber@ndsu.edu</a><br />

	    <a href="mailto:ndsu.music@ndsu.edu">ndsu.music@ndsu.edu</a></p>

        <p>&nbsp;</p>

        <p align="center"><a href="2019 MUSIC DAY SCHEDULE .pdf">Music Day Schedule</a> | <a href="https://drive.google.com/open?id=1jABUv9u6gTSjP4W5bYbkLWWwxOnpiuC2WIIcgnbH1pQ" target="_blank" title="Online Registration Form">Online Registration Form</a> | <a href="https://www.ndsu.edu/admission/visit/discoverndsu/discover_directions/">Directions and Parking</a></p>
	</article>
</section>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>