<?php
if($config['page-realm']=="DPA"){
	$contact['dept']="2330";
	$contact['phone']="1 (701) 231-8338";
	$contact['phonelink']="17012318338";
	$contact['campus']="Reineke Fine Arts Center 115";
	$contact['fax']="1 (701) 231-1047";
	$name = "Division of Performing Arts";
}elseif($config['page-realm']=="CSOM"){
	$contact['dept']="2334";
	$contact['phone']="1 (701) 231-8338";
	$contact['phonelink']="17012318338";
	$contact['campus']="Reineke Fine Arts Center 115";
	$contact['fax']="1 (701) 231-1047";
	$name = "Challey School of Music";
}elseif($config['page-realm']=="DTA"){
	$contact['dept']="2336";
	$contact['phone']="1 (701) 231-8725";
	$contact['phonelink']="17012318725";
	$contact['campus']="Askanase 107";
	$contact['fax']="1 (701) 231-2085";
	$name = "Department of Theatre Arts";
}
?>
<footer class="footer-green footer-left">
<br />
	<div class="container">
		<div class="row">
		<div class="col-md-6">
			<section class="footer-address">
				<a href="https://www.ndsu.edu"><img src="/fileadmin/templates/images/NDSU_logo.svg" style="max-width: 8em;" alt="North Dakota State University" /></a>
				<br /><br />
				<div class="address" style="color:#fff;">
					<p><?php echo $name?><br />North Dakota State University<br />Telephone: <a href="tel:<?php echo $contact['phonelink'];?>"><?php echo $contact['phone'];?></a> - Fax: <?php echo $contact['fax'];?><br />Campus address: <?php echo $contact['campus'];?><br />Mailing address: Dept <?php echo $campus['dept'];?> PO Box 6050, Fargo, ND 58108-6050</p>
					
					<p><a href="https://www.ndsu.edu/privacy/" style="font-weight:bold;color:#fff;text-decoration:underline;">Privacy Statement</a></p>  
				</div>
			</section>
			<br />
		</div>
		<div class="col-md-3">RESOURCES<br /><br />
				<a href="/performingarts/calendar/" title="Calendar" class="btn btn-lg btn-ndsu-footer btn-block"><i class="fa fa-calendar fa-fw"></i> Calendar</a>
				<a href="/alphaindex/" title="Campus Directory" class="btn btn-lg btn-ndsu-footer btn-block"><i class="fa fa-address-book fa-fw"></i> Campus Directory</a>
				<a href="/performingarts/resources/documents/campus_map.pdf" title="Campus Map" class="btn btn-lg btn-ndsu-footer btn-block"><i class="fa fa-map fa-fw"></i> Campus Map</a>
				<a href="/performingarts/resources/documents/music_education_building.pdf" title="Location" class="btn btn-lg btn-ndsu-footer btn-block"><i class="fa fa-map-marker fa-fw"></i> Location</a>
				<br /><br />
			</div>
			<div class="col-md-3">FOLLOW US<br /><br />
				<a href="https://www.facebook.com/NDSUPerformingArts" title="Facebook" class="btn btn-lg btn-ndsu-footer btn-block"><i class="fab fa-facebook fa-fw"></i> Facebook</a>
				<a href="https://www.flickr.com/photos/ndsuperformingarts" title="Flickr" class="btn btn-lg btn-ndsu-footer btn-block"><i class="fab fa-flickr fa-fw"></i> Flickr</a>
				<a href="https://twitter.com/NDSUPerformArts" title="Twitter" class="btn btn-lg btn-block btn-ndsu-footer"><i class="fab fa-twitter fa-fw"></i> Twitter</a>
				<a href="https://www.youtube.com/c/NDSUPerformingArts" title="Youtube" class="btn btn-lg btn-block btn-ndsu-footer"><i class="fab fa-youtube fa-fw"></i> Youtube</a>
				<br /><br />
			</div>
		</div>
	</div>
</footer>