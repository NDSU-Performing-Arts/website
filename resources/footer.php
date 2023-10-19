<?php
if($config['page-realm']=="DPA"){
	$contact['dept']="2540";
	$contact['phone']="(701) 231-7932";
	$contact['phonelink']="7012317932";
	$contact['campus']="Reineke Fine Arts Center 115";
	$contact['fax']="(701) 231-2085";
	$name = "Division of Performing Arts";
}elseif($config['page-realm']=="CSOM"){
	$contact['dept']="2540";
	$contact['phone']="(701) 231-7932";
	$contact['phonelink']="7012317932";
	$contact['campus']="Reineke Fine Arts Center 115";
	$contact['fax']="(701) 231-2085";
	$name = "Challey School of Music";
}elseif($config['page-realm']=="DTA"){
	$contact['dept']="2540";
	$contact['phone']="(701) 231-8725";
	$contact['phonelink']="7012318725";
	$contact['campus']="Askanase 107";
	$contact['fax']="(701) 231-2085";
	$name = "Department of Theatre Arts";
}
?>

<footer class="footer-dept footer-left pt-4">
	<div class="container">
		<div class="row">
		<div class="col-md-6">
			<section class="footer-address">
				<br /><br />
				<div class="address" style="color:#fff;">
					<p><?php echo $name; ?><br />North Dakota State University<br />Telephone: <a href="tel:<?php echo $contact['phonelink'];?>"><?php echo $contact['phone'];?></a> - Fax: <?php echo $contact['fax'];?><br />Physical address: <?php echo $contact['campus'];?><br />Mailing address: Dept <?php echo $contact['dept'];?> / PO Box 6050 / Fargo, ND 58108-6050</p>
				</div>
			</section>
			<br />
		</div>
		<div class="col-md-3 d-grid">RESOURCES<br /><br />
				<a href="/performingarts/calendar/" title="Calendar" class="btn btn-lg btn-ndsu-footer "><i class="fa fa-calendar fa-fw"></i> Calendar</a>
				<a href="/alphaindex/" title="Campus Directory" class="btn btn-lg btn-ndsu-footer "><i class="fa fa-address-book fa-fw"></i> Campus Directory</a>
				<a href="/performingarts/resources/documents/campus_map.pdf" title="Campus Map" class="btn btn-lg btn-ndsu-footer "><i class="fa fa-map fa-fw"></i> Campus Map</a>
				<a href="/performingarts/resources/documents/music_education_building.pdf" title="Location" class="btn btn-lg btn-ndsu-footer "><i class="fa fa-map-marker fa-fw"></i> Location</a>
				<br /><br />
			</div>
			<div class="col-md-3 d-grid">FOLLOW US<br /><br />
				<a href="https://www.facebook.com/NDSUPerformingArts" title="Facebook" class="btn btn-lg btn-ndsu-footer "><i class="fab fa-facebook fa-fw"></i> Facebook</a>
				<!--<a href="https://www.flickr.com/photos/ndsuperformingarts" title="Flickr" class="btn btn-lg btn-ndsu-footer "><i class="fab fa-flickr fa-fw"></i> Flickr</a>
				<a href="https://twitter.com/NDSUPerformArts" title="Twitter" class="btn btn-lg  btn-ndsu-footer"><i class="fab fa-twitter fa-fw"></i> Twitter</a>-->
				<a href="https://vimeo.com/ndsuperformingarts" title="Vimeo" class="btn btn-lg  btn-ndsu-footer"><i class="fab fa-vimeo fa-fw"></i> Vimeo</a>
				<a href="https://www.youtube.com/c/NDSUPerformingArts" title="Youtube" class="btn btn-lg  btn-ndsu-footer"><i class="fab fa-youtube fa-fw"></i> Youtube</a>
				<br /><br />
			</div>
		</div>
	</div>
</footer>
<footer class="footer-green footer-left mb-0">
  <div class="container">
    <section class="footer-address pt-4 pb-4">
      <a href="https://www.ndsu.edu" class="home-link"><img src="/fileadmin/templates/images/NDSU_logo.svg" alt="North Dakota State University" class=" mb-4" width="400" /></a><!-- Add this too, once it's updated for 2021-2026. <br/>
      <a href="/president/mission_and_vision/" style="font-family: serif;text-decoration: none;font-weight: normal;font-size: 1rem;padding-top: 1em;display: inline-block;color: #fc0;
">OUR FUTURE: Innovation, Outreach and Education</a>-->
      <div class="address row">
        <div class="col-md-5">
          <address>
            <p>1340 Administration Ave., Fargo, ND 58102<br>
              Mailing address: PO Box 6050, Fargo, ND 58108-6050</p>
          </address>
          <a href="https://www.ndsu.edu/about">About NDSU</a>
        </div>
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-6">
          <nav aria-label="University-wide resources">
            <ul class="footer-links">
              <li><a href="https://www.ndsu.edu/alphaindex/">A-Z Index</a></li>
              <li><a href="https://www.ndsu.edu/apply">Apply for admission</a></li>
              <li><a href="https://www.ndsu.edu/academics/">Academic programs</a></li>
              <li><a href="https://www.ndsu.edu/accreditation/">Accreditation</a></li>
              <li><a href="https://gobison.com">Bison Athletics</a></li>
              <li><a href="https://www.ndsu.edu/alphaindex/buildings">Campus Map</a></li>
              <li><a href="https://www.ndsu.edu/onestop/finaid/consumerinfo/">Consumer Information</a></li>
              <li><a href="https://www.ndsu.edu/employment/">Employment</a></li>
              <li><a href="https://www.ndsu.edu/equity/">Equity</a></li>
              <li><a href="https://www.ndsu.edu/about/inclusion">Inclusion</a></li>
              <li><a href="https://www.ndsu.edu/onestop/finaid/netpricecalculator/">Net Price Calculator</a></li>
              <li><a href="https://www.ndsu.edu/onestop/">One Stop</a></li>
              <li><a href="https://www.ndsu.edu/agriculture/extension">Outreach<span class="sr-only"> (University-wide)</span></a></li>
              <li><a href="https://www.ndsu.edu/research/">Research and Creative Activity</a></li>
              <li><a href="https://www.ndsu.edu/policy/">University Policies</a></li>
              <li><a href="https://www.ndsu.edu/visit">Visit NDSU</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <hr/>
      <p>North Dakota State University is an equal opportunity, affirmative action institution.<br>
      Contact NDSU at <a href="tel:7012318011" aria-label="7 0 1. 2 3 1. 8 0 1 1" class="phone-link">(701) 231-8011</a><br>
	<a class="d-print-none" href="https://www.ndsu.edu/privacy/">Privacy Statement</a>
      </p>
	<!-- link to Privacy Statement https://www.ndsu.edu/privacy/ included earlier in document -->    
    </section>
  </div>
</footer>
<script type="text/javascript" src="//ndsu.edu/performingarts/resources/languages/jq/jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="/fileadmin/templates/js/ndsu-2018.js?1579644437"></script>
</body>
</html>