<?php 
//Edit the following:
$config['page-title'] = "Gianni Schicchi | Challey School of Music";
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
		<img alt="Music Scholarships"
			class="_header_image" 
			src="images/940px_2014_gianni.jpg">
		
		<h1>Gianni Schicchi</h1>
	</header>
	
	<article>
		<h2>Friday, May 9 | 7:30 PM<br />
          Festival Concert Hall<br />
        </h2>
        
		<h2>Gianni Schicchi</h2>
        
		<p>By Giacomo Puccini<br />
        Chaos ensues in Puccini&rsquo;s <em>Gianni Schicchi</em> after an extremely wealthy man dies and the family searches frantically for the will.  After realizing he left his possessions to the local monastery, the family encourages Gianni Schicchi to impersonate the dead man long enough to change the will.  In the end, Schicchi agrees, but with consequences the greedy family had not foreseen.</p>
        
		<h2>Trial by Jury</h2>
        
		<p>By Gilbert and Sullivan<br />
        <em>Trial by Jury</em>, like other Gilbert and Sullivan operas, lampoons contemporary society. A jilted bride sues for breach of promise of marriage:  the young man has found a new love.  While the judge and jury are taken with the bride, the ladies in the gallery are enamored with the young man.  By behaving as if everything were perfectly reasonable, the characters in this satire of the legal system reveal truths about common foibles and follies of men, women, society, and universal situations. </p>
	</article>
</section>
<!-- InstanceEndEditable --></div></section>

<?php include($config['path'].'resources/footer.php')?>