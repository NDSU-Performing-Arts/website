<?php 
//Edit the following:
$config['page-title'] = "Division of Performing Arts";
$config['page-description'] = "";
$config['page-realm'] = "DPA"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>
<section id="" class="bg-bggreen"><!-- InstanceBeginEditable name="body" -->

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
	<!--Hidden because Maggie says so-->
    <div class="carousel-inner">
      <!-- 1 --
	  <div class="carousel-item active">
        <a href="https://www.ndsu.edu/performingarts/music/graduate/schulwerk/" title="Orff Schulwerk">
          <img alt="Orff Schulwerk" src="/performingarts/resources/media/images/headers/_940px_2019_schulwerk2.jpg" style="width:100%;">
        </a>
        <div class="carousel-caption"></div>
      </div>
	  
	  <div class="carousel-item">
        <a href="https://www.ndsu.edu/performingarts/theatre/shows/2018-19/tuckeverlasting.php" title="Tuck Everlasting">
          <img alt="Tuck" src="/performingarts/theatre/shows/images/headers/Tuck_web-banner.jpg" style="width:100%;">
        </a>
        <div class="carousel-caption"></div>
      </div>-->
	  
		<!--
	  <div class="carousel-item">
        <a href="/music/festivals/jazz/index.php" title="Jazz Festival">
          <img alt="Jazz Festival" src="/resources/media/images/headers/940px_jazz-Festival_web940x331.jpg" style="width:100%;">
        </a>
        <div class="carousel-caption"></div>
      </div>
		-->

      <!-- 2 -->
      <div class="carousel-item active">
        <a href="https://www.ndsu.edu/performingarts/news/2019-20/0020.php" title="Protect the Herd">
    			<img alt="Protect the herd"	src="resources/media/images/headers/1900x670_ProtectTheHerd_CSOM.jpg" style="width:100%;">
    		</a>
        <div class="carousel-caption">
        </div>
      </div>

      <!-- 3 -->
      <div class="carousel-item">
        <a href="/performingarts/music/graduate-students/" title="Graduate Programs">
        <img alt="Graduate Programs" src="resources/media/images/headers/940px_gradschool.jpg" style="width:100%;">
    		</a>
        <div class="carousel-caption"></div>
      </div>

      <!-- 4 
      <div class="carousel-item">
        <a href="https://ndsu.showare.com/eventperformances.asp?evt=87" title="Junie B Jones">
          <img alt="Junie B Jones" src="theatre/shows/images/headers/940px_juniebjones.jpg" style="width:100%;">
        </a>
        <div class="carousel-caption"></div>
      </div>-->

      <!-- 5 
      <div class="carousel-item">
        <a href="/performingarts/music/fissinger/" title="2018 Raging Red">
          <img alt="2018 Fissinger Choral Composition Competition" src="/performingarts/resources/media/images/headers/940px_2017_fissinger.jpg" style="width:100%;">
        </a>
        <div class="carousel-caption"></div>
      </div>-->



    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#pa-carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#pa-carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><!--container-->
<!--	body content -->

<div class="container">&nbsp;</div>
<?php 	include('resources/parts/homepics.php')?>
<?php include($config['path'].'resources/footer.php')?>