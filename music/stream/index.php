<?php 
//Edit the following:
$config['page-title'] = "Livestream | Challey School of Music";
$config['page-description'] = "";
$config['page-realm'] = "CSOM"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<section id=""><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<section>
	<header>
		<h1>Livestream</h1>
	</header>
	
	<ul class="nav nav-tabs" id="StreamTabs" role="tablist">
		<li class="nav-item" role="presentation">
			<button class="nav-link active" id="festival-tab" data-bs-toggle="tab" data-bs-target="#festival-tab-pane" type="button" role="tab" aria-controls="festival-tab-pane" aria-selected="true">Festival Concert Hall</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="beckwith-tab" data-bs-toggle="tab" data-bs-target="#beckwith-tab-pane" type="button" role="tab" aria-controls="beckwith-tab-pane" aria-selected="false">Beckwith Recital Hall</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="offsite-tab" data-bs-toggle="tab" data-bs-target="#offsite-tab-pane" type="button" role="tab" aria-controls="offsite-tab-pane" aria-selected="false">Offsite Concerts</button>
		</li>		
	</ul>
<div class="tab-content" id="StreamTabContent">
	<div class="tab-pane fade show active" id="festival-tab-pane" role="tabpanel" aria-labelledby="festival-tab" tabindex="0">
		<br />
		<h2>Festival Concert Hall</h2>
		<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://vimeo.com/event/3959666/embed" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe></div>
		<br />
		<a href="//vimeo.com/ndsuperformingarts/" class="btn btn-lg btn-ndsu-green me-3" target="_BLANK"><i class="fab fa-vimeo"></i> View past performances</a> <a href="/music/programs/" class="btn btn-lg btn-ndsu-green" target="_BLANK">Programs</a>
	</div>
	<div class="tab-pane fade" id="beckwith-tab-pane" role="tabpanel" aria-labelledby="beckwith-tab" tabindex="0">
		<br />
		<h2>Beckwith Recital Hall</h2>
		<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://vimeo.com/event/1322456/embed" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe></div>
		<br />
		<a href="//vimeo.com/ndsuperformingarts/" class="btn btn-lg btn-ndsu-green me-3" target="_BLANK"><i class="fab fa-vimeo"></i> View past performances</a> <a href="/music/programs/" class="btn btn-lg btn-ndsu-green" target="_BLANK">Programs</a>
	</div>
	<div class="tab-pane fade" id="offsite-tab-pane" role="tabpanel" aria-labelledby="offsite-tab" tabindex="0">
		<br />
		<h2>Offsite Concerts</h2>
		<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://vimeo.com/event/1266888/embed" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe></div>
		<br />
		<a href="//vimeo.com/ndsuperformingarts/" class="btn btn-lg btn-ndsu-green me-3" target="_BLANK"><i class="fab fa-vimeo"></i> View past performances</a> <a href="/music/programs/" class="btn btn-lg btn-ndsu-green" target="_BLANK">Programs</a>
	</div>
</div>
	
	<!--<div class="mb-5">
	<a href="https://boxcast.tv/view/ndsu-concert-choir-and-madrigal-singers-ylbfdy1bmokefxqxyxm2" class="btn btn-lg btn-ndsu-green btn-block" style="padding: 18px 28px;
    font-size: 22px;"><i class="fa-solid fa-arrow-up-right-from-square"></i> Concert Choir at St. Mark's Episcopal Cathedral, March 19</a>
	</div>-->
	
	
	
<br />

<br /><br /></section>

<!-- InstanceEndEditable --></div></section>
<?php 	include($config['path'].'resources/footer.php')?>
