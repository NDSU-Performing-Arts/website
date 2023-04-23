<?php //stupid stupid stupid
if(isset($_GET['s'])){$site = $_GET['s'];}else{$site = "dpa";}
if($site=="dpa"){$text = "";$link="/performingarts/";}
if($site=="csom"){$text = "Challey School of Music";$link="/performingarts/music/";}
if($site=="dta"){$text = "<div class=\"d-none d-lg-inline\">Department of </div>Theatre Arts";$link="/performingarts/theatre/";}
?>
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
			
				   &nbsp;&nbsp;&nbsp;<a class="homename" href="<?php echo $link?>"><?php echo $text;?></a>
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
if($site=="csom"){?>
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