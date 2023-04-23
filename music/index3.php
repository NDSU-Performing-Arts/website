<?php 
//Edit the following:
$config['page-title'] = "Challey School of Music";
$config['page-description'] = "";
$config['page-realm'] = "CSOM"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<style>
.example-marquee {
                position: relative;
				display:block;
            }
			
            .content {
                display: table;
                width: 100%;
                min-height: 100vh;

                position: relative;
            }

            .content .inner {
                display: table-cell;
                vertical-align: middle;
                text-align: center;
                padding-left: 16px;
                padding-right: 16px;
            }
</style>
<!-- 	body content -->

<section id="">
<div class="container">
The following widgets would appear on an event page (Theatre shows, Mads, Messiah, etc.)
<div class="card border-warning" style="border-left:10px solid">
<div class="card-body">
<h3 class="card-title">Ticket Information</h3>

<div class="row">
<div class="col-md-2 text-center"><i class="fas fa-ticket-alt fa-5x text-warning"></i></div>
<div class="col-md-10">Adults $15, Senior $10, Student $10, NDSU Student free with ID<br /><br />
<a href="//ndsu.showare.com/" class="btn btn-warning"><strong>Purchase Tickets</strong></a>
</div>
</div>
</div>
</div>
<br />

<div class="card border-success" style="border-left:10px solid">
<div class="card-body">
<h3 class="card-title">Ticket Information</h3>

<div class="row">
<div class="col-md-2 text-center"><i class="fas fa-ticket-alt fa-5x text-success"></i></div>
<div class="col-md-10">This event is provided free of charge.<br />
</div>
</div>
</div>
</div>
<br />


<div class="card border-danger" style="border-left:10px solid">
<div class="card-body">
<h3 class="card-title">Ticket Information</h3>

<div class="row">
<div class="col-md-2 text-center"><i class="fas fa-dragon fa-5x text-danger"></i></div>
<div class="col-md-10">This event has been eaten by a dragon and tickets are no longer available.<br />
</div>
</div>
</div>
</div>
<br />

</div>

</div>
<div class="container-fluid"><!-- InstanceBeginEditable name="body" -->


<div class="row" style="height:500px">
      <iframe frameborder="0" height="100%" width="100%" 
        src="https://youtube.com/embed/bbOiEm5eteg?autoplay=1&controls=0&showinfo=0&autohide=1">
      </iframe>
</div>
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
	
	  <!-- 5 -->
		<div class="carousel-item">
        <a href="https://www.facebook.com/pg/NDSUPerformingArts/photos/?tab=albums&ref=page_internal" title="NDSU PA Facebook">
          <img alt="Photos on Facebook" src="../resources/media/images/headers/1900x670_PhotosFB_1.jpg" style="width:100%;">
        </a>
        <div class="carousel-caption"></div>
      </div>
      
     
      <!-- 2 -->
      <div class="carousel-item active">
        <a href="https://ndsu.showare.com/eventperformances.asp?evt=98" title="Calendar">
    			<img alt="Into The Woods"	src="../resources/media/images/headers/1900x670_IntoTheWoods.jpg" style="width:100%;">
    		</a>
        <div class="carousel-caption">
        </div>
      </div>

      <!-- 3 --
      <div class="carousel-item">
        <a href="ensembles-and-performances/chamber-music-festival/" title="Chamber Music Festival">
        <img alt="Chamber Music Festival" src="../resources/media/images/headers/940px_2018_chambermusicfestival.jpg" style="width:100%;">
    		</a>
        <div class="carousel-caption"></div>
      </div>


      <!-- 5 -->
      <div class="carousel-item">
        <a href="https://www.ndsu.edu/performingarts/music/festivals-and-clinics/jazz/" title="NDSU Jazz Festival">
          <img alt="NDSU Jazz Festival" src="../resources/media/images/headers/1900x670-JazzFestival_2020.jpg" style="width:100%;">
        </a>
        <div class="carousel-caption"></div>
      </div>
      <!-- 6 -->
      <div class="carousel-item">
        <a href="https://www.ndsu.edu/performingarts/music/prospective-students/scholarships/" title="Scholarships at NDSU">
    			<img alt="Scholarships"	src="../resources/media/images/headers/Scholarships-940x331.jpg" style="width:100%;">
    		</a>
        <div class="carousel-caption">
        </div>
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
</div>
<div class="container mt-3">
<div class="row">
<!-- 	section left -->
<div class="col-md-9">
	<section>
		<header><h1>Challey School of Music</h1></header>
			<blockquote class="blockquote" style="border-left:7px solid #050;padding-left:15px;">The Challey School of Music offers bachelor's, master's, and doctoral degrees—to prepare the next generation of music professionals.  <footer class="blockquote-footer">Learn More: <a href="about/mission/">Mission and Goals</a><footer></blockquote>
				
			<div class="row">
			<div class="col-md-4">
				<a href="https://www.ndsu.edu/performingarts/music/prospective-students/scholarships/" class="btn btn-warning btn-lg btn-block"><h3><i class="fas fa-graduation-cap"></i><br />Scholarships<br /></h3></a>
			</div>
			<div class="col-md-4">
				<a href="https://www.ndsu.edu/performingarts/music/ensembles-and-performances/" class="btn btn-warning btn-lg btn-block"><h3><i class="fas fa-users"></i><br />Ensembles</h3></a>
			</div>
			<div class="col-md-4">
				<a href="https://www.ndsu.edu/admission/apply" class="btn btn-warning btn-lg btn-block">
				<h3><i class="fas fa-file-signature"></i><br />Apply</h3></a>
				</div>
			</div>
		<p><br>
        </p>
	</section>
	
	<div class="card">
	<img src="https://www.ndsu.edu/performingarts/music/undergraduate/images/undergrad_programs_940x.png" class="card-img-top">
	<div class="card-body">
			
				<h4>2019 Undergraduate Scholarship Auditions</h4>
				<h4><a href="undergraduate-students/">Undergraduate Programs</a></h4>
				    <a href="prospective-students/scholarships/">Scholarship Information</a>
				      <ul>
				        <li>Scholarship auditions may also take place by appointment.</li>
				        <li>Want us to contact you? Please complete this <a href="https://docs.google.com/forms/d/e/1FAIpQLSfdcmKFQSNFVWxTLTKl9HAUtk_zZGK-FBllKSjmUuzfI4Hm7Q/viewform?usp=sf_link">online student contact form</a>.</li>
			          </ul>
			        </li>
			      </ul>
			    </li>
				</ul>
				<h4><a href="graduate-students/">Graduate Programs</a></h4>
				<h4>Upcoming Events for Interested Prospective Students</h4>
				  <ul>
				    <li><a href="https://www.ndsu.edu/performingarts/music/festivals-and-clinics/">Honors Jazz Ensemble: November 26, 2019</a></li>
				    <li><a href="https://www.ndsu.edu/performingarts/music/festivals-and-clinics/all-state/">All-State Clinic: December 18, 2019</a></li>
				    <li><a href="https://www.ndsu.edu/performingarts/music/festivals-and-clinics/jazz/">High School Jazz Festival: Febraury 6-7, 2020</a></li>
					  <li><a href="https://www.ndsu.edu/performingarts/music/festivals-and-clinics/raging-red/">Raging Red: March 10-11, 2020</a></li>
			      </ul>
				Contact <a href="mailto:m.weber@ndsu.edu">Dr. Michael Weber</a> at <a href="tel:701-231-8497">701-231-8497</a> for additional information.
				</ul>
				<!--<li><a href="https://www.ndsu.edu/performingarts/music/ensembles-and-performances/wind-symphony/">Wind Symphony Audition Information</a></li>
				<li><a href="https://www.ndsu.edu/performingarts/music/ensembles-and-performances/uso/">University Symphony Orchestra Audition Information</a></li>-->
			  
			  </div>
			  </div>

	<section><header><h2>Guest Artists</h2></header>
		<article>
			<p>The Challey School of Music offers students ongoing opportunities to interact with nationally and internationally acclaimed guest artists, who share their talents and experiences through workshops and in performances.</p>
			
			<p><a href="about/people/guest-artists/">View our current and prior guest artist roster here.</a>
		</article>
	</section>

	<!--<section><header><h2>Symposia</h2></header>
		<article>
			<div class="card">
			<div class="row card-body">
				<div class="col-md-4">
					<a href="ensembles-and-performances/chamber-music-festival/"><img alt="Chamber Music Festival" src="../resources/media/images/showare/200px_chambermusicfestival.jpg" style="width:100%"></a>
				</div>
				<div class="col-md-8">
					<strong><a href="chamber_music_festival/">NDSU Chamber Music Festival — May 30 - June 4, 2019</a></strong><br>
					The NDSU Chamber Music Festival partners NDSU student pianists with world-class string players to bring the Fargo-Moorhead community an intimate encounter with this exhilarating music.
				</div>
			</div>
			</div>
			<br />
			<div class="card">
			<div class="row card-body">
				<div class="col-md-8">
					<strong><a href="festivals-and-clinics/choral-symposia/">NDSU Choral Symposia</a></strong><br>In partnership with the American Choral Directors Association, the Challey School of Music presents symposia on contemporary choral topics featuring internationally-known presenters and special concerts.</td>
				</div>
				<div class="col-md-4">
					<a href="festivals-and-clinics/choral-symposia/"><img alt="Choral Symposium" src="../resources/media/images/showare/400px_choralsymposium_copy.jpg" style="width:100%"></a>
				</div>
				
			</div>
			</div>
			<br />
			<div class="card">
			<div class="row card-body">
				<div class="col-md-4">
					<a href="graduate/symposium/"><img alt="Summer Music Symposium" src="../resources/media/images/showare/200px_summersymposium2020.jpg" style="width:100%"></a>
				</div>
				<div class="col-md-8">
					<strong><a href="graduate/symposium/">Summer Music Ed Symposium</a></strong><br>
				Offered every two years in July, NDSU music education faculty and guest music educators provide a unique symposium designed to develop effective teaching in music education. </div>
			</div>
			</div>
		</article>
	</section>-->

<!--	<section>
		<header>
			<h2>News</h2>
		</header>

		<article>
		
			<div class="row well">
				<div class="col-md-4">
					<a href="fissinger/"><img alt="Fissinger" src="../resources/media/images/showare/200px_fissinger.jpg"></a>
				</div>
				<div class="col-md-8">
					<strong><a href="fissinger/">Fissinger Choral Composition Prizes</a></strong><br>

						The NDSU Challey School of Music is proud to offer the annual Fissinger Choral Composition Prizes, established several years ago to honor choral composer Edwin Fissinger.
				</div>
			</div>
			<br />
			<div class="row well">
				<div class="col-md-4">
					<a href="../news/">	<img alt="Fissinger" src="../resources/media/images/showare/200px_news.jpg"></a>
				</div>
				<div class="col-md-8">
					<p><strong><a href="../news/">Challey School of Music News</a></strong><br>
					From upcoming music events featuring internationally acclaimed musicians, composers and conductors, to performances across the region and nation by our faculty and students, the NDSU Challey School of Music is on the go and in the news.
				    </p>
					<p>&nbsp;</p>
				</div>
			</div>

			<p>The NDSU Challey School of Music provides academic programs and artistic performances that serve our students through professional preparation and fine arts enrichment, that serve our faculty and staff through professional career achievement and satisfaction, and that serve the greater university community through the excellence of our widespread endeavors.</p>

			<p>&nbsp;</p>
		</article>
	</section>-->
	</div>


<div class="col-md-3">
	<section>
		<article>
			<div  style="margin: 0px auto; padding: 16px 0px 0px 0px;">
				<div id="fb-root" style="margin: 0px auto;"></div>
		
				<script>(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
						js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
						fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>

				<div class="fb-page" 
					 data-href="https://www.facebook.com/NDSUPerformingArts/" 
					 data-tabs="timeline" 
					 data-small-header="false" 
					 data-adapt-container-width="true" 
					 data-hide-cover="false" 
					 data-show-facepile="true"
					 data-width="500">
						<blockquote cite="https://www.facebook.com/NDSUPerformingArts/" 
									class="fb-xfbml-parse-ignore">
							<a href="https://www.facebook.com/NDSUPerformingArts/">NDSU Performing Arts</a>
						</blockquote>
				</div>
			</div>
		</article>
	</section>
	
	<section>
		<header>
			<h4>View Us in Action</h4>

	
			<a href="https://www.youtube.com/watch?v=RmWyyf1U--Q" title="Sing at NDSU">
				<img alt="Sing at NDSU"
					class="_gif" 
					src="../resources/media/images/gifs/480px_singatndsu.gif"
					width="100%">
			</a>
		</header>
	</section>

	<section>
		<header>
			<h4 class="mt-2"><a href="../calendar">Performing Arts Calendar</a></h4>
		</header>
		
		<section>
		<header>
			<a href="https://northdakotastate-ndus.nbsstore.net/music-at-ndsu">
			<h4>Music at NDSU</h4>
			<title="Music at NDSU">
				
				<img alt="Music at NDSU Book Cover"
					class="_gif" 
					src="../resources/media/images/headers/MusicNDSUcover_cr_reducedX.25.jpg"
					width="100%">
			</a>
		</header>
	</section>

		<article id="">
			<script src="https://code.jquery.com/jquery-1.6.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
			<script src="../resources/addins/calendar/calendar_jquery_rss_01.js"></script>

			<script>
			Date.prototype.addDays = function(days) {
				var date = new Date(this.valueOf());
				date.setDate(date.getDate() + days);
				return date;
			}
			
				var date = new Date();
				var month = date.getMonth()+1;
				var day = date.getDate();
				var year = date.getFullYear();
				// alert(date);

				edate = date.addDays(7)
				var emonth = edate.getMonth()+1;
				var eday = edate.getDate();
				var eyear = edate.getFullYear();
				
				// alert(emonth);
			
				

				jQuery(function($) {
					// document.getElementById("todaysDate").innerHTML = "Today's Date: " + month + "/" + day + "/" + year;

					$("#rss-feeds").rss("https://apps.ndsu.edu/eventcalendar/performingarts-rss.php?type=rss&categoryid=2&sponsortype=specific&specificsponsor=Division+of+Performing+Arts&timebegin_month=" + month + "&timebegin_day=" + day + "&timebegin_year=" + eyear + "&timeend_month=" + emonth + "&timeend_day=" + eday + "&timeend_year=" + eyear + "&startexport=%C2%A0%C2%A0%C2%A0%C2%A0OK", {
						ssl: true,
						layoutTemplate: '{entries}',
						entryTemplate: "<ul><li><strong>{bodyPlain}</strong></li><li><a href='{url}'>{title}</a></li></ul>",})
				})
				
				function addDays(date, days) {
				var result = new Date(date);
				result.setDate(result.getDate() + days);
				return result;
				}
			</script>

			<div id="rss-feeds"></div>
		</article>
	</section>

	<!--<section>
		<header>
			<a href="academy/" title="Music Academy">
				<img alt="Music Academy"
					class="_card_image" 
					src="../resources/media/images/cards/360px_card_musicacademy.png"
					width="100%">
			</a>
		</header>

		<article>
			<p>The NDSU Music Academy is a non-degree organization that provides a high quality music education to students from age four years through adult.</p>

			<p>&nbsp;</p>
		</article>
	</section>-->
	</div>
</div><!--row-->
<!-- ticket widget -->
<?php 	//include('../resources/addins/widgets/ticket_popup/ticket_popup.php')?>
<!-- InstanceEndEditable --></div></section>
<?php include($config['path'].'resources/footer.php')?>