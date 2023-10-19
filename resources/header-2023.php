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
<link rel="stylesheet" href="//www.ndsu.edu/fileadmin/templates/css/styles.min.css?<?php echo time();?>">
<link rel="stylesheet" href="//www.ndsu.edu/fileadmin/templates/css/ndsu-2018.css?<?php echo time();?>">
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
          <a href="/music/">Challey School of Music</a>
          
        </h2>
        <button style="position:absolute; right:1em;margin-bottom:0;z-index:500;" type="button" class="btn btn-yellow navbar-toggle" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Mobile menu</span></button>
      </div>
    </div>
    <div class="main-nav" role="navigation" id="mainNav">
      <div class="container">
        

<ul class="navbar navbar-dark navbar-left navbar-mobilize">
	<li class="nav-item"><a href="/artsandsciences/about/" class="nav-link">About</a>
		<ul class="navbar navbar-vertical child-navbar">
			<li class="nav-item"><div class="nav-link active" tabindex="0">Dean's Welcome</div></li>
			<li class="nav-item"><a href="/artsandsciences/about/vision_mission_and_values/" class="nav-link">Vision, Mission and Values</a></li>
			<li class="nav-item"><a href="/artsandsciences/about/departments_and_programs/" class="nav-link">Departments and Programs</a></li>
			<li class="nav-item"><a href="/artsandsciences/about/makeadonation/" class="nav-link">Give to the College</a></li>
			<li class="nav-item"><a href="https://www.ndsu.edu/news/all-news?combine=&amp;field_news_tags_target_id=201&amp;field_news_tags_target_id=216&amp;field_news_tags_target_id=226" class="nav-link">College News</a></li>
			<li class="nav-item"><a href="/artsandsciences/contact_us/" class="nav-link">Contact Us</a></li>
		</ul>
	</li>
	<li class="nav-item"><a href="/artsandsciences/people/" class="nav-link">People</a>
		<ul class="navbar navbar-vertical child-navbar">
			<li class="nav-item"><a href="/artsandsciences/people/deans_office_staff/" class="nav-link">Dean's Office Staff</a></li>
			<li class="nav-item"><a href="/artsandsciences/people/department_chairs_and_directors/" class="nav-link">Department Chairs and Directors</a></li>
			<li class="nav-item"><a href="/artsandsciences/people/department_directory/" class="nav-link">Department Directory</a></li>
			<li class="nav-item"><a href="https://www.ndsu.edu/accounting/business_centers/college_of_arts_sciences/" class="nav-link">CAS Business Center</a></li>
			<li class="nav-item"><a href="/artsandsciences/people/cas_ambassadors/" class="nav-link">CAS Ambassadors</a></li>
			<li class="nav-item"><a href="/artsandsciences/people/emeritus_faculty/" class="nav-link">Emeritus Faculty</a></li>
		</ul>
	</li>
	<li class="nav-item"><a href="/artsandsciences/currentstudents/" class="nav-link">Current Students</a>
		<ul class="navbar navbar-vertical child-navbar">
			<li class="nav-item"><a href="/artsandsciences/currentstudents/graduate_programs/" class="nav-link">Graduate Programs</a></li>
			<li class="nav-item"><a href="/artsandsciences/high_impact_practices/" class="nav-link">High-Impact Practices</a></li>
			<li class="nav-item"><a href="/artsandsciences/currentstudents/programoptions/" class="nav-link">Majors and Minors</a></li>
			<li class="nav-item"><a href="/artsandsciences/currentstudents/scholarships_1/" class="nav-link">Scholarships</a></li>
			<li class="nav-item"><a href="https://career-advising.ndsu.edu/" class="nav-link">Career and Advising Center</a></li>
		</ul>
	</li>
	<li class="nav-item"><a href="/artsandsciences/prospectivestudents/" class="nav-link">Future Students</a>
		<ul class="navbar navbar-vertical child-navbar"><li class="nav-item"><a href="/artsandsciences/currentstudents/programoptions/" class="nav-link">Majors and Minors</a></li>
		<li class="nav-item"><a href="/artsandsciences/currentstudents/graduate_programs/" class="nav-link">Graduate Programs</a></li>
		<li class="nav-item"><a href="https://www.ndsu.edu/apply" class="nav-link">Apply Now</a></li>
		<li class="nav-item"><a href="https://www.ndsu.edu/visit" class="nav-link">Schedule a Visit</a></li>
		<li class="nav-item"><a href="https://www.ndsu.edu/admission/how_to_apply/transfer" class="nav-link">Transfer to NDSU</a></li>
		<li class="nav-item"><a href="https://www.ndsu.edu/admission/request_information" class="nav-link">Request Information</a></li>
		<li class="nav-item"><a href="/artsandsciences/prospectivestudents/career_possibilities/" class="nav-link">Career Possibilities</a></li>
		</ul>
	</li>
	
	
	<nav id="ndsunav2" class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		<a class="navbar-brand d-md-inline d-lg-none" href="/performingarts/music/">
		MUSIC
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ndsunav-collapse" aria-controls="ndsunav-collapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse" id="ndsunav-collapse">
		<ul class="navbar-nav mr-auto">
			<li class="dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="Button" aria-haspopup="true" aria-expanded="false" id="PDrop">ABOUT</a>
				<div class="dropdown-menu" aria-labelledby="PDrop">
				<a class="dropdown-item" href="/performingarts/music/about/">About</a>
				<a class="dropdown-item" href="/performingarts/music/about/mission/">Mission</a>
				<a class="dropdown-item" href="/performingarts/music/faculty-resources/">Faculty Resources</a>
				<a class="dropdown-item" href="//www.ndsu.edu/about/inclusion">Inclusion</a>
				<a class="dropdown-item" href="/performingarts/music/about/contact/">Contact</a>
				<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">People</h6>
					<a class="dropdown-item" href="/performingarts/music/about/people/faculty/">Faculty</a>
					<a class="dropdown-item" href="/performingarts/staff/">Staff</a>
					<a class="dropdown-item" href="/performingarts/music/about/people/guest-artists/">Guest Artists</a>
				</div>
			</li>
			<li class="dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="Button" aria-haspopup="true" aria-expanded="false" id="PSDrop">PROSPECTIVE STUDENTS</a>
				<div class="dropdown-menu" aria-labelledby="PSDrop">
					<h6 class="dropdown-header">Undergraduate Programs</h6>
					<a class="dropdown-item" href="/performingarts/music/undergraduate-students/">Degree Programs</a>
					<a class="dropdown-item" href="/performingarts/music/prospective-students/">Apply | Visit</a>
					<a class="dropdown-item" href="/performingarts/music/ensembles-and-performances/">Performance Opportunities</a>
					<a class="dropdown-item" href="/performingarts/music/prospective-students/scholarships/">Scholarships</a>
					<a class="dropdown-item" href="/performingarts/music/about/contact/">Contact Us</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Graduate Programs</h6>
					<a class="dropdown-item" href="/performingarts/music/graduate-students/">Degree Programs</a>
					<a class="dropdown-item" href="/performingarts/music/prospective-students/#graduate">Application Process</a>
					
				</div>
			</li>
			<li class="dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="Button" aria-haspopup="true" aria-expanded="false" id="SDrop">CURRENT STUDENTS</a>
				<div class="dropdown-menu" aria-labelledby="SDrop">
					<a class="dropdown-item" href="/performingarts/music/undergraduate-students/">Undergraduate Students</a>
					<a class="dropdown-item" href="/performingarts/music/graduate-students/">Graduate Students</a>
					<a class="dropdown-item" href="/performingarts/music/current-students/">Resources</a>
					<a class="dropdown-item" href="//www.ndsu.edu/onestop/finaid/scholarships/">Scholarships</a>
					<a class="dropdown-item" href="/performingarts/music/academy/">NDSU Music Academy</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="Button" aria-haspopup="true" aria-expanded="false" id="OSDrop">EVENTS</a>
				<div class="dropdown-menu" aria-labelledby="OSDrop">
					<a class="dropdown-item" href="/performingarts/calendar/"><i class="fas fa-calendar fa-fw"></i> Calendar</a>
					<a class="dropdown-item" href="https://ndsu.showare.com"><i class="fas fa-ticket-alt fa-fw"></i> Tickets</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="/performingarts/music/ensembles-and-performances/">Ensembles</a>
					<a class="dropdown-item" href="/performingarts/music/ensembles-and-performances/messiah/">Messiah</a>
					<a class="dropdown-item" href="/performingarts/music/ensembles-and-performances/madrigal-dinners/">Madrigal Dinners</a>
					<a class="dropdown-item" href="/performingarts/music/ensembles-and-performances/opera/">NDSU Opera</a>
					<a class="dropdown-item" href="/performingarts/music/festivals-and-clinics/">Music Festivals</a>
					<a class="dropdown-item" href="/performingarts/music/competitions">Competitions</a>
					<a class="dropdown-item" href="/performingarts/music/festivals-and-clinics/#Sym">Symposia</a>
					<!--<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Our Venues</h6>
					<a class="dropdown-item" href="/performingarts/venues/boxoffice/">Box Office</a>
					<a class="dropdown-item" href="/performingarts/venues/facilities/">Venue Info</a>-->
					
					
					
					
				</div>
			</li>
			<li class="dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="Button" aria-haspopup="true" aria-expanded="false" id="NDDrop">NEWS</a>
				<div class="dropdown-menu" aria-labelledby="NEDrop">
					<a class="dropdown-item" href="/performingarts/news/">News Releases</a>
					<a class="dropdown-item" href="https://visitor.r20.constantcontact.com/manage/optin?v=001R17bMHtpg0OYt8j4sbNT21fbMBe4bcrHZv2VMEW91uXgsCgG3auAr8ft8-qwv0C-KdBVkcPapgIrZ98OycNlLGqYxV3G8PjuuyPsya_WP7w%3D">Sign Up for E-Blasts</a>
				</div>
			</li>
			<li><a href="//ndsu.showare.com" class="nav-link" id="tix">TICKETS</a></li>
			<a href="/performingarts/" class="d-lg-none nav-link">PERFORMING ARTS HOME</a>
		</ul>
	</div><!--navbar-nav-->
	</div><!--Container-->
</nav>

<?php include('menu_banner.php');?>
<?php include('../zz-music-dates.php');?>
	
	
      </div>
    </div>
  </div>
</header>

<?php 
if($config['page-realm']=="CSO2M"){?>
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
elseif($config['page-realm']=="CSOM"){include($config['path'].'resources/parts/menu_csom_2023.php');}
elseif($config['page-realm']=="DTA"){include($config['path'].'resources/parts/menu_ta.php');}
?>