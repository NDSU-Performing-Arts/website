<!DOCTYPE html>
<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-38W538D0DX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-38W538D0DX');
</script>
<meta charset="UTF-8">
<meta property="og:url" name="url" content="https://www.ndsu.edu/performingarts/<?php echo $config['page'];?>">
<meta name="author" content="NDSU Division of Performing Arts">
<meta property="og:title" name="title" content="<?php echo $config['page-title'];?>">
<?php
if(empty($config['page-desc'])){
	if($config['page-realm']=="CSOM"){$config['page-desc']="The Challey School of Music at NDSU promotes the arts through its educational programs, its creative work, and its outreach activities. The Challey School of Music offers bachelor's, master's, and doctoral degrees—to prepare the next generation of music professionals.";}
}
?>
<meta property="og:description" name="description" content="<?php echo $config['page-desc'];?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?php echo $config['page-title'];?></title>
<link rel="icon" href="//www.ndsu.edu/sites/default/files/favicon_0.ico" type="image/vnd.microsoft.icon" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="//ndsu.edu/performingarts/music/composition/ndsu-comp.css?v=<?php echo time();?>">
</head>
<body>

<?php 
	class ndsucomp
	{
		public $location;		//Current Page Location
		
		function UrlParse()
		{
			$url = $_SERVER['REQUEST_URI'];
			// $this->location2['fullurl']=$url;
			// $this->location2['get']=$_GET;
			//Test if Error is set
			if(strpos($url,'/e/') !== false) {
				$url = str_replace('/e/','/',$url);
				$this->debug();
			}
			$parts = explode('/',$url);
			// array_shift($parts);
			array_pop($parts);
			
			$this->location = $parts;
		}
		
		function CompBioBox($header,$imgurl,$bio,$alt){
			echo "<div class=\"card\">";
			echo "<h5 class=\"card-header\">".$header."</h5>";
			echo "<div class=\"card-body\">";
			echo "<div class=\"d-flex\">";
			echo "<div class=\"flex-shrink-0\">";
			echo "<img src=\"".$imgurl."\" alt=\"".$alt."\" style=\"width:100%;max-width:300px;\">";
			echo "</div>";
			echo "<div class=\"flex-grow-1 ms-3\">";
			echo $bio;
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
		}

	}
	
	$c = new ndsucomp;
	$c->UrlParse();

?>

<nav id="" class="navbar navbar-expand-lg navbar-dark ndsugreennav">
	<div class="container">
		<a class="navbar-brand d-md-inline" href="/performingarts/music/composition/">
			<img src="/performingarts/music/composition/MusicComposition_2.clr-white.svg" style="width:250px">
		</a>
		
	</div><!--Container-->
</nav>

<nav id="" class="navbar navbar-expand-lg navbar-dark ndsugreennav">
	<div class="container">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ndsunav-comp-collapse" aria-controls="ndsunav-comp-collapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse" id="ndsunav-comp-collapse">
		<ul class="navbar-nav mr-auto">
			<li class="dropdown"><a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="Button" aria-haspopup="true" aria-expanded="false" id="PDrop">The Studio</a>
				<div class="dropdown-menu" aria-labelledby="PDrop">
				<a class="dropdown-item" href="/performingarts/music/composition/studio/meet-the-studio/">Meet the Studio</a>
				<a class="dropdown-item" href="/performingarts/music/composition/studio/guest-composers/">Guest Composers</a>
				<a class="dropdown-item" href="/performingarts/music/composition/studio/calendar/">Studio Calendar</a>
				<a class="dropdown-item" href="/performingarts/music/composition/studio/library/">Studio Library</a>
				<a class="dropdown-item" href="/performingarts/music/composition/studio/handbook/">Handbook</a>
				
			</li>

			<li class="dropdown"><a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="Button" aria-haspopup="true" aria-expanded="false" id="PRDrop">The Program</a>
				<div class="dropdown-menu" aria-labelledby="PRDrop">
				<a class="dropdown-item" href="/performingarts/music/composition/the-program/">About NDSU Composition</a>
				<a class="dropdown-item" href="/performingarts/music/composition/the-program/become-a-composer">Become an NDSU Composer</a>
				<!--<a class="dropdown-item" href="/performingarts/music/composition/the-program/degrees-in-composition/">Composition Degrees</a>-->
				
			</li>
			<li class="nav-item"><a href="/music/" class="nav-link">Thundering Heard</a><li>
			<li class="nav-item"><a href="/music/" class="nav-link">Challey School of Music</a><li>
			<!--<li class="dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="Button" aria-haspopup="true" aria-expanded="false" id="SDrop">CURRENT STUDENTS</a>
				<div class="dropdown-menu" aria-labelledby="SDrop">
					<a class="dropdown-item" href="/performingarts/music/undergraduate-students/">Undergraduate Students</a>
					<a class="dropdown-item" href="/performingarts/music/graduate-students/">Graduate Students</a>
					<a class="dropdown-item" href="/performingarts/music/current-students/">Resources</a>
					<a class="dropdown-item" href="//www.ndsu.edu/onestop/financial-aid-and-scholarships">Scholarships</a>
					<a class="dropdown-item" href="/performingarts/music/academy/">NDSU Music Academy</a>
				</div>
			</li>-->
		</ul>
	</div><!--navbar-nav-->
	</div><!--Container-->
</nav>


<?php //stupid stupid stupid
if(empty($config['page-realm'])){$config['page-realm'] = "DPA";}
if($config['page-realm']=="DPA"){$text = "";$link="/performingarts/";}
elseif($config['page-realm']=="CSOM"){$text = "<div class=\"d-none d-lg-inline\">Challey School of Music</div>";$link="/performingarts/music/";}
elseif($config['page-realm']=="DTA"){$text = "<div class=\"d-none d-lg-inline\">Department of </div>Theatre Arts";$link="/performingarts/theatre/";}
?>
<header class="bg-dkgreen">

</header>
<?php 

// if($config['page-realm']=="DPA"){include($config['path'].'resources/parts/menu-pa-2022.php');}
// elseif($config['page-realm']=="CSOM"){include($config['path'].'resources/parts/menu-csom-2022.php');}
// elseif($config['page-realm']=="DTA"){include($config['path'].'resources/parts/menu-ta-2022.php');}
include($config['path'].'resources/ndsu-functions.php');
?>
<br />