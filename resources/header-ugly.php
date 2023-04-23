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
elseif($config['page-realm']=="CSOM"){$text = "Challey School of Music";$link="/performingarts/music/";}
elseif($config['page-realm']=="DTA"){$text = "<div class=\"d-none d-lg-inline\">Department of </div>Theatre Arts";$link="/performingarts/theatre/";}
?>
<header class="" style="background:#c0f; min-height:750px;">
	<div class="container" style="padding-left:0px;padding-right:0px;">
		<div class="row" style="padding-left:0px;padding-right:0px; min-height:75%;">
			<div class="col-md-6 text-center text-md-left" style="padding-left:0px; min-height:75%;">
					<a href="/" id="ndsu_logo"><img src="/performingarts/resources/media/images/logos/196px_ndsu_logo_stacked.png" alt="NDSU Logo" title="NDSU Logo" /></a>
			</div>
			<div class="col-md-6 d-none d-sm-none d-md-block" style="padding-right:0px;">
				<a href="/performingarts/" class="float-right" style="border-bottom:none;">
					<img src="/performingarts/resources/media/images/logos/196px_performingarts_monoline.png" alt="Performing Arts Logo" title="Performing Arts Logo" />
				</a>
			</div>
		</div>
		<div class="row header-row d-none d-sm-none d-md-flex">
			<div class="col-md-6" style="height:59px;padding-left:0px;display:flex;align-items:center;">
				   &nbsp;&nbsp;&nbsp;<a class="homename" href="<?php echo $link?>"><i class="fas fa-home"></i> <?php echo $text;?></a>
			</div>
			<div class="col-md-6" style="padding-right:0px;" style="background:#c0f;">
				<div id="google_search" style="background:#c0f;">
					<script>
						(function() {
							var cx = '006009426891661269625:w0dxf2ib_ha';
							var gcse = document.createElement('script');
								gcse.type = 'text/javascript';
								gcse.async = true;
								gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
							var s = document.getElementsByTagName('script')[0];
							s.parentNode.insertBefore(gcse, s);
						})();
					</script>
					<gcse:search></gcse:search>
				</div>
			</div>
		</div>
	</div>
</header>

<?php 
if($config['page-realm']=="CSOM"){?>
<!-- DATASYNC CODE SNIPPET BEGIN -->
<script type="text/javascript">
(function() {
var didLoad = false;
var script = document.createElement("script");
script.setAttribute("type", "text/javascript");
script.setAttribute("src", "//ndsudpa.shopwindow.io/siteintegrator/loadsitemodules/app.js");
script.async = true;
function loadSM() {
if (didLoad) {
  return;
}
didLoad = true;
document.body.appendChild(script);
};
if (window.addEventListener) window.addEventListener("load", loadSM, false);
else if (window.attachEvent) window.attachEvent("onload", loadSM);
})();
</script>
<!-- DATASYNC CODE SNIPPET END -->
<?php } ?>


<?php 
if($config['page-realm']=="DPA"){include($config['path'].'resources/parts/menu_pa.php');}
elseif($config['page-realm']=="CSOM"){include($config['path'].'resources/parts/menu_csom.php');}
elseif($config['page-realm']=="DTA"){include($config['path'].'resources/parts/menu_ta.php');}
?>