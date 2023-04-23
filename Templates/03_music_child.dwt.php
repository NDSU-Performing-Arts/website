<!DOCTYPE html>

<!--
-	COPYRIGHT NOTICE:
-		this file and all of its attached files are property of the
-		Division of Performing Arts
-		North Dakota State University
-		unless otherwise stated 
-->

<!--	html document -->
<html>
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

<!-- TemplateBeginEditable name="docmetatags" -->

<!--	document metatags -->
<meta charset="UTF-8">

<meta property="og:url" name="url" content="https://www.ndsu.edu/performingarts/music/">

<meta name="author" content="Web Developer">

<meta property="og:title" name="title" content="Document Title | Challey School of Music">

<meta property="og:description" name="description" content="The Challey School of Music at NDSU promotes the arts through its educational programs, its creative work, and its outreach activities. The Challey School of Music offers bachelor's, master's, and doctoral degrees—to prepare the next generation of music professionals.">

<meta name="keywords" 
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

<meta property="og:image" name="image" content="">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- TemplateEndEditable -->

<!-- TemplateBeginEditable name="doctitle" -->

<!--	document title -->
<title>Document Title | Challey School of Music</title>
<!-- TemplateEndEditable -->

<!-- 	document favicon -->
<link rel="icon" href="//static.ndsu.edu/favicon.ico" />

<!-- 	document stylesheets -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
<link rel="stylesheet" href="//ndsu.edu/performingarts/resources/languages/css/sitewide_body.css?v=<?php echo time();?>">
	
<!-- TemplateBeginEditable name="docstylesheets" -->

<!-- 	additional stylesheets -->

<!-- TemplateEndEditable -->
</head>

<!--	document body -->
<body>

<!-- 	document navigation -->
<?php 	//include('../resources/languages/php/beta_performingarts_navigation.php')?>
<?php 	$_GET['s']="csom";include($path.'resources/parts/header.php')?>
<?php 	include($path.'resources/parts/menu_csom.php')?>

<section id=""><div class="container"><!-- TemplateBeginEditable name="body" -->

<!--	body content -->
<section>
	<header>
		<h1>Document Title</h1>
	</header>
	
	<article>
		<p>Document content</p>
	</article>
</section>
	<!-- TemplateEndEditable --></div></section>

<!-- 	document footer notification -->
<?php 	//include('../resources/addins/footer_notification/footer_notification.php')?>
	
<!-- 	document footer -->
<?php 	//include('../resources/languages/php/alpha_sitewide_footer.php')?>
<?php 	include($path.'resources/parts/footer.php')?>

</body>

<!--	document javascript -->
<script type="text/javascript" src="//ndsu.edu/performingarts/resources/languages/jq/jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
	
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- TemplateBeginEditable name="docscripts" -->
<!-- 	additional scripts -->

<!-- TemplateEndEditable -->

</html>