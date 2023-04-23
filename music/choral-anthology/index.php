<?php 
//Edit the following:
$config['page-title'] = "Choral Anthology | Challey School of Music";
$config['page-description'] = "";
$config['page-realm'] = "CSOM"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
// include($config['path'].'resources/header.php');
?>
<!DOCTYPE html>
<html>
<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-32118160-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-32118160-1');
</script>
<meta charset="UTF-8">
<meta property="og:url" name="url" content="https://www.ndsu.edu/performingarts/<?php echo $config['page'];?>">
<meta name="author" content="NDSU Division of Performing Arts">
<meta property="og:title" name="title" content="<?php echo $config['page-title'];?>">
<?php
if(empty($config['page-desc'])){
	if($config['page-realm']=="DPA"){$config['page-desc']="The Division of Performing Arts at NDSU promotes the arts through its educational programs, its creative work, and its outreach activities. The Division of Performing Arts includes the Challey School of Music and the Department of Theatre Arts.";}
	if($config['page-realm']=="CSOM"){$config['page-desc']="The Challey School of Music at NDSU promotes the arts through its educational programs, its creative work, and its outreach activities. The Challey School of Music offers bachelor's, master's, and doctoral degrees—to prepare the next generation of music professionals.";}
	if($config['page-realm']=="DTA"){$config['page-desc']="The Department of Theatre Arts provides a comprehensive, rigorous, and innovative academic program consistent with the mission of NDSU. The department serves the pursuit of high-quality teaching, artistic performance, dedicated service, and professional and scholarly excellence through experiences of lasting value. Learn more about our program by exploring these pages and visit the Performing Arts Calendar for our production schedule.";}
}
?>
<meta property="og:description" name="description" content="<?php echo $config['page-desc'];?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?php echo $config['page-title'];?></title>
<link rel="icon" href="//static.ndsu.edu/favicon.ico" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="//ndsu.edu/performingarts/resources/languages/css/sitewide_body.css?v=<?php echo time();?>">
</head>
<body>
<?php //stupid stupid stupid
if(empty($config['page-realm'])){$config['page-realm'] = "DPA";}
if($config['page-realm']=="DPA"){$text = "";$link="/performingarts/";}
elseif($config['page-realm']=="CSOM"){$text = "<div class=\"d-none d-lg-inline\">Challey School of Music</div>";$link="/performingarts/music/";}
elseif($config['page-realm']=="DTA"){$text = "<div class=\"d-none d-lg-inline\">Department of </div>Theatre Arts";$link="/performingarts/theatre/";}
?>
<header class="bg-dkgreen">
	<div class="container" style="padding-left:0px;padding-right:0px;height:50px;">
		<div class="row header-row" style="padding-left:0px;padding-right:0px;">
			<div class="col-md-6 text-center text-md-left" style="padding-left:0px;">
					<a href="/music/" id="ndsu_logo"><img src="ChalleySchoolMusicYStacked.png" alt="NDSU Logo" title="NDSU Logo" style="margin-top:9px;margin-left:7px;width:275px;"/></a>
			</div>
			<div class="col-md-6 d-none d-sm-none d-md-block" style="padding-right:0px;">
				
			</div>
		</div>
	</div>
</header>
<br />

<section id=""><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<!--<img alt="Music Academy"
			class="_header_image"
			style="width:100%;"
			src="images/940px_musicacademy.png">-->
<section>
	<header>
		<h1>NDSU Choral Music Anthology</h1>
	</header>

	<article>
	<p>The choral anthology below is a compilation of 144 individual selections comprising seven volumes.  The volumes are:</p>

<p>1A.  Contemporary European Composers <br />
	1B. Canadian Composers <br />
	2A.  Music of Edwin Fissinger
<div  class="pl-4"><em>Edwin Fissinger was a noted composer and Director of Choral Activities at NDSU from 1967-1982.  His works are widely respected and available from a number of publishers.  His style is individual, challenging, but among the most approachable of modern composers. </em></div><br />
2B. Fissinger Composition Prize Winners <br />
 <br />
<div  class="pl-4"><em>Each year, the Challey School of Music holds a composition competition in honor of Edwin Fissinger.  This collection features the winning compositions from the years 2010-2019.</em></div> <br />
3. Early Music <br />
4. Romantic era Music <br />
5. Contemporary American composers <br />
6A. Contemporary Minnesota composers	 <br />
6B. NDSU Composers <br />
7. Spirituals, Folk Songs and Anthems</p>

<p>The music represents the best of 32 years of choral music at NDSU, from individual CDs from the years 1990 to 2019, compiled and edited by Jo Ann Miller, Director of Choral Activities.  The pieces are sung by the NDSU Concert Choir conducted by Jo Ann Miller.</p>

<p>We hope you will enjoy listening to some of our favorite works spanning over three decades of our choral tradition.</p>
</p>
<hr>
	
	<h2>Volume 1A: Contemporary European Composers</h2>
	<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1383210550&color=%23006633&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
	
	<hr>
	<h2>Volume 1B: Canadian Composers</h2>
	<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1385693005&color=%23006633&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
	
	<hr>
	<h2>Volume 2A: Music of Edwin Fissinger</h2>
	<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1385693689&color=%23006633&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>	
	
	<hr>
	<h2>Volume 2B: Fissinger Prize Winners</h2>
	<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1385694622&color=%23006633&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
	
	<hr>
	<h2>Volume 3: Early Music</h2>
	<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1385695990&color=%23006633&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
	
	<hr>
	<h2>Volume 4: Romantic Composers</h2>
	<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1385697118&color=%23006633&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
	
	<hr>
	<h2>Volume 5: Contemporary American Composers</h2>
	<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1385698447&color=%23006633&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
	
	<hr>
	<h2>Volume 6A: Contemporary Minnesota Composers</h2>
	<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1385730976&color=%23006633&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
	
	<hr>
	<h2>Volume 6B: NDSU Composers</h2>
	<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1385732173&color=%23006633&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
	
	<hr>
	<h2>Volume 7: Spirituals, Folk Songs, and Anthems</h2>
	<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1385734699&color=%23006633&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
	</article>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>