<?php 
//Edit the following:
$config['page-title'] = "William Comita | Challey School of Music";
$config['page-description'] = "";
$config['page-realm'] = "CSOM"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>
<!DOCTYPE html>

<!--
-	COPYRIGHT NOTICE:
-		this file and all of its attached files are property of the
-		Division of Performing Arts
-		North Dakota State University
-		unless otherwise stated 
-->

<!--	html document -->
<html><!-- InstanceBegin template="/Templates/03_music_child.dwt.php" codeOutsideHTMLIsLocked="false" -->
<?php $path = $_SERVER['DOCUMENT_ROOT']."/"; ?>
<!-- 	Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-32118160-1"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-32118160-1');
</script>


<!--	document head -->
<head>

<!-- InstanceBeginEditable name="docmetatags" -->

<!--	document metatags -->
<meta 	charset="UTF-8">

<meta 	property="og:url" 
		name="url" 
		content="https://www.ndsu.edu/performingarts/music/guest_artists/">

<meta 	name="author" 
		content="Web Developer">

<meta 	property="og:title" 
		name="title" 
		content="William Comita | Challey School of Music">

<meta 	property="og:description" 
		name="description" 
		content="The Challey School of Music at NDSU promotes the arts through its educational programs, its creative work, and its outreach activities. The Challey School of Music offers bachelor's, master's, and doctoral degrees—to prepare the next generation of music professionals.">

<meta 	name="keywords" 
		content="North Dakota State University Challey School of Music,
				north dakota state university challey school of music,
				North Dakota State University School of Music,
				north dakota state university school of music,
				NDSU Challey School of Music, 
				NDSU challey school of music,
				ndsu challey school of music,
				NDSU School of Music, 
				NDSU school of music, 
				ndsu school of music,
				NDSU Music, NDSU music, ndsu music">

<meta 	property="og:image" 
		name="image" 
		content="">

<meta 	name="viewport" 
		content="width=device-width, 
				initial-scale=1.0, 
				maximum-scale=1.0, 
				user-scalable=no">
<!-- InstanceEndEditable -->

<!-- InstanceBeginEditable name="doctitle" -->

<!--	document title -->
<title>Guest Artists | Challey School of Music</title>
<!-- InstanceEndEditable -->

<!-- 	document favicon -->
<link rel="icon" href="//static.ndsu.edu/favicon.ico" />

<!-- 	document stylesheets -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
<link rel="stylesheet" href="//ndsu.edu/performingarts/resources/languages/css/sitewide_body.css?v=<?php echo time();?>">
	
<!-- InstanceBeginEditable name="docstylesheets" -->

<!-- InstanceEndEditable -->
</head>

<!--	document body -->
<body>

<!-- 	document navigation -->
<?php 	//include('../../resources/languages/php/beta_performingarts_navigation.php')?>
<?php 	$_GET['s']="csom";include($path.'resources/parts/header.php')?>
<?php 	include($path.'resources/parts/menu_csom.php')?>

<section id=""><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->

<div class="row">
<div class="col-md-9">
	<header>
		<h1>William Comita</h1>
	</header>
	
	<article>
	  <p>WILLIAM J. COMITA, cellist, performed with the Richmond (VA) Symphony Orchestra for 38 years, including 19 years as Assistant Principal Cellist.  Concurrently in 1995, he was appointed Director of the Strings program at St. Catherine’s and St. Christopher’s Schools in Richmond, where each year he directed five ensembles in a program comprised of over 100 string students.</p>

		<p>While in Virginia, he was cellist in numerous chamber ensembles, most notably the Oberon String Quartet.  Recordings have been on Bruce Hornsby’s <i>Harbor Lights</i> album as well as the Opus One, Coastline Music (BMI), Albany Records, and BMG labels. Mr. Comita also appeared as a cellist/movie extra for CBS and HBO productions.</p>

		<p>He received his BM at Lawrence University (WI) and his MM at the Cleveland Institute of Music (OH), where he studied with Stephen Geber, former principal cellist of the Cleveland Orchestra.  Since 2013, Mr. Comita has been playing in the cello section of the Fargo-Moorhead Symphony Orchestra. He teaches cello lessons in the F-M area and has performed locally in recitals at Concordia College, North Dakota State University, the University of North Dakota, South Dakota State University, and the Plains Art Museum.</p>

		<p>Mr. Comita’s cello was made by Saquin in 1842 in Paris, France.</p>
	</article>
</div>
	
<div class="col-md-3">
	<img alt="music_faculty"
		 src="../guest-artists/images/200px_william.jpg"
		 style="margin: 16px 0px 0px 0px;
				width: 100%;">
</div>
</div>

<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>