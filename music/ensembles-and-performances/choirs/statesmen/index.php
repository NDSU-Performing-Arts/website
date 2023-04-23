<?php 
//Edit the following:
$config['page-title'] = "Statesmen | Challey School of Music";
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
	<div class="row">
<!-- 	rotating headers -->

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
    <div class="carousel-inner">
     
      <!-- 2 -->
      <div class="carousel-item active">
       <!-- <a href="academy/" title="Music Academy"> -->
    			<img alt="NDSU Statemen"	src="../images/940px_331_statemen1.jpg" style="width:100%;">
    	<!--	</a> -->
        <div class="carousel-caption">
        </div>
      </div>

      <!-- 3 -->
      <div class="carousel-item">
       <!-- <a href="/performingarts/music/chamber_music_festival/" title="Chamber Music Festival"> -->
        <img alt="NDSU Statemen" src="../images/940px_331_statemen2.jpg" style="width:100%;">
    		<!--</a> -->
        <div class="carousel-caption"></div>
      </div>

      <!-- 4 -->
      <div class="carousel-item">
          <img alt="NDSU Statesmen" src="../images/940px_331_statemen3.jpg" style="width:100%;">
        </a>
        <div class="carousel-caption"></div>
      </div>
 <div class="carousel-item">
          <img alt="NDSU Statesmen" src="../images/940px_331_statemen4.jpg" style="width:100%;">
        </a>
        <div class="carousel-caption"></div>
      </div>

  

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

</div>

	<header>
		<h1>The Statesmen of NDSU</h1>
	</header>
	
	<article>
		<div id="fullframe_video">
		  <p> This non-auditioned choir, with campus-wide participation, rehearses each Tuesday and Thursday at 4:45 pm-6:00 pm. For the 2013 Choral Music of the Americas Symposium, The Statesmen of NDSU premiered a new choral work by Jorge Cozatl. They also represented NDSU at the 2009 North Dakota Music Educators Association convention in Bismarck, ND and will be making another appearance at NDMEA in 2015. To participate,  visit Campus Connection to register for MUSC 117. For more information, please contact <a href="mailto:m.weber@ndsu.edu">m.weber@ndsu.edu</a>.</p>

          <p>The Statesmen of NDSU is  conducted by Dr. Michael Weber, Associate Director of Choral activities. </p>

          <h2>&nbsp;</h2>
	    </div>
	</article>
</section>
<!-- InstanceEndEditable --></div></section>

<?php include($config['path'].'resources/footer.php')?>