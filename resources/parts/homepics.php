<style>
.pa-homeimage {
  overflow: hidden;
  position:relative;
}
.pa-homeimage img {
  max-width: 100%; /*Needed to make square*/
  width:100%;
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.pa-homeimage:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

.pa-homeimage .pa-homeimage-inner .pa-homeimage-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
	overflow:hidden;
    height: 33%;
    display: inline;
    color: #FFF;
	background: rgba(0, 70, 50, .6);
	padding:5px;
}
.pa-homeimage:hover .pa-homeimage-overlay {
    display: block;
    background: rgba(0, 50, 30, .6);
	width:100%;
}
</style>
<!--Desktop-friendly cards-->
<div class="container d-none d-md-block">
<div class="row">
<div class="col-md-6">
	<a href="/performingarts/music/">
	<div class="pa-homeimage">
	  <div class="pa-homeimage-inner text-center">
	  <img src="NDSU Music-Homepage-2png.png" alt="Music">
	  <div class="pa-homeimage-overlay"><img src="resources/addins/dpa_cards/images/Music_CSOM_Homepage.png"></div>
	  </div>
	</div>
	</a>
</div>
<div class="col-md-6">
	<a href="/performingarts/theatre/">
	<div class="pa-homeimage">
	  <div class="pa-homeimage-inner text-center">
	  <img src="NDSU Theatre-Homepage 2.png" alt="Theatre">
	  <div class="pa-homeimage-overlay"><img src="resources/addins/dpa_cards/images/Theatre_CSOM_Homepage.png"></div>
	  </div>
	</div>
	</a>
</div>
<!--
<div class="col-md-4">
	<a href="/performingarts/venues/">
	<div class="pa-homeimage">
	  <div class="pa-homeimage-inner text-center">
	  <img src="resources/addins/dpa_cards/images/landscape/2560px_venues_card.png" alt="Venues">
	  <div class="pa-homeimage-overlay"><img src="resources/addins/dpa_cards/images/Venues_CSOM_Homepage.png"></div>
	  </div>
	</div>
	</a>
</div>-->
</div>
</div><br />
<!--Mobile-friendly cards-->
<div class="container d-block d-md-none text-center">
<a href="/performingarts/music/"><div class="pa-homeimage" style="width:100%;"><img src="resources/addins/dpa_cards/images/mobile-music-card.png" alt="Music"><br /><br /></div></a>
<a href="/performingarts/theatre/"><div class="pa-homeimage" style="width:100%;"><img src="resources/addins/dpa_cards/images/mobile-theatre-card.png" alt="Music"><br /><br /></div></a>
<!--<a href="/performingarts/venues/"><div class="pa-homeimage" style="width:100%;"><img src="resources/addins/dpa_cards/images/mobile-venues-card.png" alt="Music"><br /><br /></div></a>-->
</div>