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
<meta 	charset="UTF-8">

<meta 	property="og:url" 
		name="url" 
		content="https://www.ndsu.edu/performingarts/">

<meta 	name="author" 
		content="Web Developer">

<meta 	property="og:title" 
		name="title" 
		content="Calendar | Division of Performing Arts">

<meta 	property="og:description" 
		name="description" 
		content="The Division of Performing Arts at NDSU promotes the arts through its educational programs, its creative work, and its outreach activities. The Division of Performing Arts includes the Challey School of Music and the Department of Theatre Arts.">

<meta 	name="keywords" 
		content="North Dakota State University Division of Performing Arts,
				north dakota state university division of performing arts,
				North Dakota State University Performing Arts,
				north dakota state university performing arts,
				NDSU Division of Performing Arts, 
				NDSU division of performing arts,
				ndsu division of performing arts,
				NDSU Performing Arts, 
				NDSU performing arts, 
				ndsu performing arts,
				NDSU DPA, 
				NDSU dpa, 
				ndsu dpa">

<meta 	property="og:image" 
		name="image" 
		content="">

<meta 	name="viewport" 
		content="width=device-width, 
				initial-scale=1.0, 
				maximum-scale=1.0, 
				user-scalable=no">
<!-- TemplateEndEditable -->

<!-- TemplateBeginEditable name="doctitle" -->

<!--	document title -->
<title>Document Title | Division of Performing Arts</title>
<!-- TemplateEndEditable -->

<!-- 	document favicon -->
<link	rel="icon" href="https://static.ndsu.edu/favicon.ico" />

<!-- 	document stylesheets -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link 	rel="stylesheet" 
		href="/performingarts/resources/languages/css/sitewide_body.css?v=<?php echo time();?>">
		
<!-- TemplateBeginEditable name="docstylesheets" -->

<!-- TemplateEndEditable -->
</head>

<!--	document body -->
<body style="background-color: rgba(0,30,10,1)">

<!-- 	document navigation -->
<?php 	//include('../resources/languages/php/beta_performingarts_navigation.php')?>
<?php 	include($path.'resources/parts/header.php')?>
<?php 	include($path.'resources/parts/menu_pa.php')?>
<section id="" class="bggreen"><!-- TemplateBeginEditable name="body" -->
<div class="container">

  <div id="pa-carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators 
    <ol class="carousel-indicators">
      <li data-target="#pa-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#pa-carousel" data-slide-to="1"></li>
      <li data-target="#pa-carousel" data-slide-to="2"></li>
      <li data-target="#pa-carousel" data-slide-to="3"></li>
      <li data-target="#pa-carousel" data-slide-to="4"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <!-- 1 -->
	  <div class="item active">
        <a href="https://ndsu.showare.com/eventperformances.asp?evt=91" title="Children of Eden">
    			<img alt="Sing at NDSU" src="resources/media/images/headers/940px_childrenofeden.jpg" style="width:100%;">
    		</a>
        <div class="carousel-caption">
          ...
        </div>
      </div>
      <!-- 2 -->
      <div class="item">
        <a href="online_classes/" title="Online Classes">
    			<img alt="Online Classes"	src="online_classes/images/940px_2017_onlineclasses.jpg" style="width:100%;">
    		</a>
        <div class="carousel-caption">
        </div>
      </div>

      <!-- 3 -->
      <div class="item">
        <a href="/music/chamber_music_festival/" title="Chamber Music Festival">
        <img alt="Chamber Music Festival" src="resources/media/images/headers/940px_2018_chambermusicfestival.jpg" style="width:100%;">
    		</a>
        <div class="carousel-caption">
          ...
        </div>
      </div>

      <!-- 4 -->
      <div class="item">
        <a href="https://ndsu.showare.com/eventperformances.asp?evt=87" title="Junie B Jones">
          <img alt="Junie B Jones" src="theatre/shows/images/headers/940px_juniebjones.jpg" style="width:100%;">
        </a>
        <div class="carousel-caption">
          ...
        </div>
      </div>

      <!-- 5 -->
      <div class="item">
        <a href="/performingarts/music/fissinger/" title="2018 Raging Red">
          <img alt="2018 Fissinger Choral Composition Competition" src="/performingarts/resources/media/images/headers/940px_2017_fissinger.jpg" style="width:100%;">
        </a>
        <div class="carousel-caption">
          ...
        </div>
      </div>



    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#pa-carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#pa-carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><!--container-->
<!--	body content -->

<div class="row">&nbsp;</div>
<?php 	include($path.'resources/parts/homepics.php')?>


<!-- TemplateEndEditable --></section>

<!-- 	document footer notification -->
<?php 	//include('../resources/addins/footer_notification/footer_notification.php')?>
	
<!-- 	document footer -->
<?php 	//include('../resources/languages/php/alpha_sitewide_footer.php')?>
<?php 	include($path.'/resources/parts/footer.php')?>
</body>

<!--	document javascript -->
<script type="text/javascript"
		src="/performingarts/resources/languages/jq/jquery-3.2.1.min.js?v=<?php echo time();?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
<script type="text/javascript"
		src="/performingarts/resources/languages/jq/jq_onclick.js?v=<?php echo time();?>"></script>

<!-- TemplateBeginEditable name="docscripts" -->
<!-- 	additional scripts -->

<!-- TemplateEndEditable -->

</html>