<?php 
//Edit the following:
$config['page-title'] = "'Twas the Night Before Christmas";
$config['page-description'] = "";
$config['page-realm'] = "DTA"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>

<!--	body content -->
<section id=""><div class="container"><!-- InstanceBeginEditable name="body" -->

<!--	body content -->
<section>
	<header>
		<img alt="'Twas the Night Before Christmas"
			class="_header_image" 
			src="TwasWebBanner.jpeg" style="width:100%;">
		
		<h1 align="center"><strong>'Twas the Night Before Christmas</strong></h1>
	</header>
	
	<article>
		<h4 align="center"><strong>By Ken Ludwig<br />
		Askanase Auditorium
		</strong><br>
		</h4> 
		
		<p align="center"><br>
		December 1-2 & 8-9 at 7:00pm, December 2 & 9 at 2:00pm<br />
		December 7 at 10:00am (student matinee)<br />
		Purchase tickets at <a href="https://ndsu.showare.com/">ndsu.showare.com</a>
		</p>
		
		<p>Emily and her best friend Amos (a mouse, of course!) are worried because Santa missed their house last year. When an adorable elf shows up in their window, Emily and Amos learn that they were removed from Santa’s naughty and nice list, and that Santa’s list is in great danger! ‘Twas the night before Christmas—and a girl, an elf, and a mouse journey to the North Pole to save Christmas before it’s too late.</p>
		
		<p><a href="https://ndsu.showare.com/" class="btn btn-warning"><b>PURCHASE TICKETS</b></a> Adults $20, Seniors $15, Non-NDSU Students $10, NDSU Student free with ID
		</p>
		
		<p>NDSU Students can get their FREE ticket by calling or visiting the Performing Arts Box Office<br />
		<em>Please note – the student matinee on December 7th is sold out. If you’d like to be added to the waitlist, please contact Marc Devine, <a href="marc.devine@ndsu.edu">marc.devine@ndsu.edu</a>.</em></p>

	</article>
</section>
<!-- InstanceEndEditable --></div></section>
	<style>
	.btn-ridiculous {
    padding: 18px 28px;
    font-size: 32px; //change this to your desired size
    line-height: normal;
    -webkit-border-radius: 8px;
       -moz-border-radius: 8px;
            border-radius: 8px;
}
</style>
<?php include($config['path'].'resources/footer.php')?>
