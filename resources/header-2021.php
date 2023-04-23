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
<header class="header-2021">
  <div class="navbar-mobile-container" role="navigation">
    <div class="green-bar">
      <div class="container flex-row flex-middle flex-wrap flex-right" style="justify-content: space-between;
-webkit-box-pack: justify;">
        <h1><a href="https://www.ndsu.edu"><img src="/fileadmin/templates/images/NDSU_logo_typebox_eps.svg" alt="North Dakota State University" title="" height="52" class="header-ndsu-logo" /></a></h1>
        
        <div class="sflgru-block d-none d-md-block">
		<a href="https://www.ndsu.edu/campuslife">Student&nbsp;Focused</a>
                <img style="height: 1.7em;padding-bottom: .2em;" src="/fileadmin/templates/images/sflgru-wheat.svg" alt="•" />
		<a href="https://www.ndsu.edu/agriculture/extension">Land&nbsp;Grant</a>
                <img style="height: 1.55em;padding-bottom: .3em;" src="/fileadmin/templates/images/sflgru-earth.svg" alt="•" />
		<a href="https://www.ndsu.edu/research/">Research&nbsp;University</a>
        </div>

        <div class="d-none d-sm-block">
	  <!-- hidden-only on xs -->
          <form class="search-form" id="globalSearchForm" action="https://www.ndsu.edu/search/" method="GET">
            <label for="globalSearchForm_input" class="sr-only">Search Term</label>
            <input id="globalSearchForm_input" name="q" type="text"  placeholder="Search NDSU" />
            <button type="submit" class="btn"><span class="sr-only">Submit</span><i class="fa fa-search" aria-hidden="true" title="Submit"></i></button>
          </form>
        </div>

        <div class="d-block d-sm-none">
          <!-- visible only on xs -->
          <!--<button type="button" class="btn btn-yellow navbar-toggle"><span class="sr-only">Mobile menu</span></button>-->
          <button id="show-search" style="margin-bottom:0; border:none; color:#fff; font-size:1.1em; padding:0.3em 0.5em 0.2em 0.5em; background-color:rgba(0,0,0,0.3)" type="button" class="btn btn-clear-yellow" aria-haspopup="true" aria-expanded="false" onclick="$('#globalSearchForm').parent('div').removeClass('d-none');$('#show-search').hide();$('#globalSearchForm_input').focus();"><i class="fa fa-search"></i><span style="font-weight:normal;font-size: 0.7rem;"><br/><span class="sr-only">Show </span>Search</span></button>
        </div>

      </div>
    </div>
    <ul class="navbar navbar-mobile navbar-vertical navbar-dark">
      <!-- really ought to retool the mobile menu to use the same as the desktop menu (so it doesn't get duplicated) -->
    </ul>
    
    <div class="page-title-bar">
      <div class="container flex-row flex-left flex-middle flex-wrap page-title-wrapper">
        <h2 class="page-title">
          <a href="/cms/">Content Management System</a>
          
        </h2>
        <button style="position:absolute; right:1em;" type="button" class="btn btn-yellow navbar-toggle" style="margin-bottom:0;" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Mobile menu</span></button>
      </div>
    </div>
    <div class="main-nav" role="navigation" id="mainNav">
      <div class="container">
        

<ul class="navbar navbar-dark navbar-left navbar-mobilize"><li class="nav-item"><a href="/cms/kb/" class="nav-link">Knowledge Base</a></li><li class="nav-item"><a href="/cms/t3ug/" class="nav-link">User group</a></li><li class="nav-item"><a href="/cms/faq/" class="nav-link">FAQ</a></li><li class="nav-item"><a href="/cms/help/" class="nav-link">Get help</a></li><li class="nav-item"><a href="/cms/requests/" class="nav-link">Requests</a><ul class="navbar navbar-vertical child-navbar"><li class="nav-item"><a href="https://kb.ndsu.edu/94569" class="nav-link">Request account</a></li><li class="nav-item"><a href="/cms/requests/site/" class="nav-link">Request site</a></li><li class="nav-item"><a href="/cms/requests/feature/" class="nav-link">Request feature</a></li><li class="nav-item"><a href="/cms/requests/ndsu_2018/" class="nav-link">Request NDSU 2018 template</a></li></ul></li><li class="nav-item"><a href="/cms/updates/" class="nav-link">Updates</a><ul class="navbar navbar-vertical child-navbar"><li class="nav-item"><a href="/cms/updates/ndsu_2018_template_updates_sep_2021/" class="nav-link">NDSU 2018 template updates Sep 2021</a></li><li class="nav-item"><a href="/cms/updates/upgrade_mar_2021/" class="nav-link">Upgrade Mar 2021</a></li></ul></li></ul>

      </div>
    </div>
  </div>
</header>

<header class="bg-dkgreen">
	<div class="container" style="padding-left:0px;padding-right:0px;">
		<div class="row header-row" style="padding-left:0px;padding-right:0px;">
			<div class="col-md-6 text-center text-md-left" style="padding-left:0px;">
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
			<div class="col-md-6" style="padding-right:0px;">
				<div id="google_search">
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