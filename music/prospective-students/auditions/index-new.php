<?php 
//Edit the following:
$config['page-title'] = "Auditions | Challey School of Music";
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
		<h1>Auditions</h1>
	</header>
	<?php
	//KV-Ughhhhhh fine this will be faster
	function writeTab($name,$active=0){
		echo "<a class=\"nav-link\" id=\"v-pills-".$name."-tab\" data-toggle=\"pill\" href=\"#".$name."\" role=\"tab\" aria-controls=\"".$name."\" aria-selected=\"false\">".$name."</a>";
	}
	
	function tabHeader($name){
		echo "<div class=\"tab-pane fade\" id=\"".$name."\" role=\"tabpanel\" aria-labelledby=\"v-pills-".$name."-tab\">";
	}
	
	function tabFooter($name){echo "</div>";}
	?>
	
   <div class="nav nav-pills d-print-none" id="v-pills-tab" role="tablist">
      <?php writeTab("Flute");?>
      <?php writeTab("Oboe");?>
      <?php writeTab("Clarinet");?>
      <?php writeTab("Saxophone");?>
      <?php writeTab("Bassoon");?>
      <?php writeTab("Trumpet");?>
      <?php writeTab("Horn");?>
      <?php writeTab("Low Brass");?>
      <?php writeTab("Strings");?>
      <?php writeTab("Percussion");?>
      <?php writeTab("Piano");?>
    </div>
	<br />
    <div class="tab-content" id="v-pills-tabContent">
     

	<?php tabHeader("Flute");?>
		<h2 class="jumbotron">Flute</h2>
		<div class="alert alert-warning"><strong>Please contact Professor Jenny Poehls at <a href="mailto:jenny.poehls@ndsu.edu">jenny.poehls@ndsu.edu</a> for any questions pertaining to the audition requirements, and/or to schedule an audition.</strong></div>
		
		<h3>Undergraduate Students (Incoming Freshmen &amp; Transfer Students)</h3>
		1.  Scales:
		<ul>
			<li>All Major scales up to two sharps/two flats (At least two octaves)</li><li> Chromatic scale (Full Range)</li>
		</ul>
		2. Two contrasting works, preferably from the standard repertoire.
		<br /><br />
		3. Sight reading may be included.
		<br /><br />
		<h3>Graduate Students</h3>
		1.  Scales (Taffanel &amp; Gaubert and/or Moyse patterns are suggested):
		<ul>
			<li>All Major &amp; Minor scales (harmonic &amp; melodic) (Full Range) </li>
			<li>Chromatic scale (Full Range) </li>
		</ul>
		2. Two contrasting works, preferably from the standard repertoire.
		<ul>
			<li>Excerpts: 3-4 Standard Orchestral Excerpts</li>
		</ul>
		3. Sight-reading may be included.
      <?php tabFooter("Flute");?>
	  
	  
	  <?php tabHeader("Oboe");?>
		<h2 class="jumbotron">Oboe</h2>
		<div class="alert alert-warning"><strong>Please contact Philip McKenzie at <a href="mailto:philip.mckenzie@ndsu.edu">philip.mckenzie@ndsu.edu</a> for any questions pertaining to the audition requirements, and/or to schedule an audition.</strong></div>
		<h3>Undergraduate Students (Incoming Freshmen &amp; Transfer Students):</h3>
		1. Scales:
		<ul>
			<li>All Major Scales (Two or more octaves)</li>
			<li>Chromatic Scale (Low B-flat to high D above staff)</li>
		</ul>

		2. Two contrasting works (ONE technical &amp; ONE lyrical)		
		<ul>
			<li>Works may be chosen from studies and or contrasting movements of oboe sonatas/concerti.</li>
		</ul>
		
		Suggested Repertoire- Selections may be chosen from but not limited to:		
		<em>Studies</em>
		<ul>
			<li> W. Ferling: Studies (No.1-48)</li>
			<li>Barret: Studies (forty progressive melodies)</li>
		</ul>
		<em>Solos</em>		
		<ul>
			<li>R. Schumann: 3 Romances</li>
			<li>D. Cimarosa: Concerto</li>
			<li>C. Saint Saens: Sonata for oboe and piano</li>
		</ul>
		3. Sight Reading
		<br /><br />
		<h3>Graduate Students (MM &amp; DMA)</h3>
		1. Scales:		
		<ul>
			<li>All Major Scales (Two or more octaves)</li>
			<li>Any two Minor Scales: (Two or more octaves)</li>
			<li>Chromatic Scale (Low B-flat to 3rd octave G above staff)</li>
		</ul>
		
		2. Two contrasting complete works (ONE technical &amp; ONE lyrical).		
		<ul>
			<li>Works may be chosen from contrasting movements of clarinet sonatas/concerti.</li>
		</ul>
		
		Suggested Repertoire- Selections may be chosen from but not limited to:<br />
		<em>Solos</em>	
		<ul>
			<li>C. Saint Saens: Sonata</li>
			<li>P. Hindemith: Sonata</li>
			<li>F. Poulenc: Sonata</li>
			<li>W.A. Mozart: Concerto or Quartet</li>
			<li>B. Britten: Six Metamorphoses</li>
			<li>Marcello: Concerto</li>
		</ul>
		3. Sight Reading
		<?php tabFooter("Oboe");?>
		
		
		<?php tabHeader("Clarinet");?>
		<h2 class="jumbotron">Clarinet</h2>
		<div class="alert alert-warning">
        <strong>Please contact Dr. Cassie Keogh at <a href="mailto:cassie.keogh@ndsu.edu">Cassie.Keogh@ndsu.edu</a> for any questions pertaining to the audition requirements, and/or to schedule an audition.</strong></div>

        <h3>Undergraduate Students (Incoming Freshmen &amp; Transfer Students):</h3>
		
		1. Scales
        <ul>
			<li>All Major scales up to two sharps/two flats</li>
			<li>Chromatic scale (full comfortable range)</li>
			<li>Please prepare all slurred and all articulated patterns for all of the scales. </li>

        </ul>

		2. Two contrasting works (ONE technical &amp; ONE lyrical).
        <ul>
			<li>These works may be chosen from studies and or contrasting movements of standard clarinet studies/sonatas/concerti.</li>
        </ul>

		Suggested Repertoire- Selections may be chosen from but not limited to:
		<br /><em>Studies</em>
		<ul>
			<li>C. Rose: Studies (Set of 40)</li>
			<li>C. Rose: Studies (Set of 32)</li>
			<li>D. Hite: Melodious and Progressive Studies</li>
			<li>D. Hite: Melodious and Progressive Studies</li>
		</ul>
		
        <em>Solos</em>
		<ul>
			<li>G. Tartini: Concertino (Arr. Gordon Jacobs)</li>
			<li>G. Finzi:  Five Bagatelles </li>
			<li>C. Saint Saens: Sonata</li>
			<li>C. Stamitz: Concerti</li>
			<li>C.M. Weber: Concertino and Concerti</li>
			<li>Other approved work by Dr. Keogh</li>
		</ul>

        <h3>Graduate Students (MM &amp; DMA):</h3>

		1. Scales:
        <ul>
			<li>All Major Scales (Full Range)</li>
			<li>All Minor Scales: (Harmonic &amp; Melodic in full range) </li>
			<li>Chromatic Scale (Full Range)&nbsp; </li>
			<li>Please prepare all slurred and various articulation patterns for all major and minor scales.</li>
		</ul>

		2. Two contrasting works (ONE technical &amp; ONE lyrical).
        <ul>
			<li>These works may be chosen from studies and or contrasting movements of clarinet studies/sonatas/concerti. </li>
		</ul>

        Suggested Repertoire- Selections may be chosen from but not limited to:

        <br /><em>Studies</em>
		<ul>
			<li>C. Rose: Studies (Set of 32 or 40)</li>
			<li>Polatschek: Advanced Studies for Clarinet </li>
			<li>Cavallini: 30 Caprices </li>
			<li>Baermann: Complete Method for Clarinet </li>
			<li>J.S. Bach: Partitas &amp; Suites</li>
		</ul>
        
		<em>Solos</em>
		<ul>
			<li>C. M. von Weber: Concertino</li>
			<li>R. Schumann: Fantasy Pieces (I or II)</li>
			<li>W.A. Mozart: Concerto (I or II)</li>
			<li>I. Stravinsky: Three Pieces</li>
			<li>Other approved work by the instructor.</li>
		</ul>
	
		3. Two Contrasting Orchestral Excerpts
		<br /><br />
		4. Sight Reading
		<?php tabFooter("Clarinet");?>
	  
	  
		<?php tabHeader("Saxophone");?>
		<h2 class="jumbotron">Saxophone</h2>		
		<div class="alert alert-warning"><strong>Please contact Dr. Matthew Patnode at <a href="mailto:Matthew.Patnode@ndsu.edu">Matthew.Patnode@ndsu.edu</a> for any questions pertaining to the audition requirements, and/or to schedule an audition.</strong></div>
	
		<h3>Undergraduate Students (Incoming Freshmen &amp; Transfer Students):</h3>
	
		1. Scales:
		<ul>
			<li>Chromatic scale (low Bb to high F or F#.)</li>
		</ul>

		2. Two contrasting works (ONE technical &amp; ONE lyrical).
		<ul>
			<li>s.</li>
		</ul>These works may be chosen from studies and or contrasting movements of original saxophone works or etude
		
		<br>
		Suggested Repertoire- Selections may be chosen from but not limited to: <br />
		<em>Studies</em>
		
		<ul>
			<li>Ferling: 48 Famous Studies </li>
			<li>Voxman: Selected Studies for Saxophone</li>
			<li>Rubank Advanced Method Volume 1 and/or Volume 2</li>
			<li>Mule: 18 Exercises after Berbiguer</li>
		</ul>
		<br />
		<em>Solos</em>
	
		<ul>
			<li>Paul Creston: Sonata</li>
			<li>Bernhard Heiden: Sonata</li>
			<li>Lawson Lunde: Sonata</li>
			<li>Glazounov: Concerto</li>
			<li>Gurewich: Concerto</li>
			<li>Other approved work by Dr. Patnode.</li>
			<li>(Optional) Jazz standard or blues approved by Dr. Patnode</li>
		</ul>
		<br /><br>
		<h3>Graduate Students (MM &amp; DMA):</h3>

		1. Scales:
		<ul>
			<li>All majors and harmonic minors (Full Range &amp; Various Articulation Patterns)  </li>
			<li>Broken Thirds</li>
		</ul>
		
		2. Two contrasting works (ONE technical &amp; ONE lyrical).
		<ul>
			<li>The works may be chosen from studies and or contrasting movements of saxophone sonatas/concerti. </li>
		</ul>
		
		Suggested Repertoire:  Please contact Dr. Patnode
		<br />3. Sight Reading
		<?php tabFooter("Saxophone");?>
	  
	  
		<?php tabHeader("Bassoon");?>
		<h2 class="jumbotron">Bassoon</h2>
		<div class="alert alert-warning"><strong>Please contact Dr. Cody Hunter at <a href="mailto:cody.hunter@ndsu.edu">cody.hunter@ndsu.edu</a> for any questions pertaining to the audition requirements, and/or to schedule an audition.</strong></div>
		
		<h3>Undergraduate Students (Incoming Freshmen &amp; Transfer Students)</h3>

		1. Scales
		<ul>
			<li>F major 2 octaves</li>
			<li>E major 2 octaves</li>
			<li>Bb chromatic 2 octaves</li>
		</ul>

		2. Two contrasting works (ONE technical &amp; ONE lyrical).		
		<ul>
			<li>The works may be chosen from studies and or contrasting movements of bassoon sonatas/concerti. </li>
		</ul>
		
		Suggested Repertoire- Selections may be chosen from but not limited to:
		<br />
		<em>Studies</em>
		<ul>
			<li>Weissenborn Studies for Bassoon</li>
			<li>Rubank Advanced Method for Bassoon</li>
			<li>Ozi Caprices</li>
		</ul>
		
		<em>Solos</em>
		<ul>
			<li>Mozart: Concerto in Bb</li>
			<li>Concert and Contest Collection (Rubank)</li>
			<li>Schoenbach: Solos for the Bassoon Player</li>
			<li>Weissenborn: Any solo</li>
			<li>Telemann: Sonata in f minor</li>
			<li>Vivaldi: Any concerti</li>
		</ul>
		
		3. Sight Reading
		<br /><br />		
		<h3>Graduate Students</h3>

		1. Scales:
		<ul>
			<li>All 12 major scales in 2 octaves</li>
			<li>F harmonic and melodic minor 2 octaves</li>
			<li>Bb harmonic and melodic minor 2 octaves</li>
			<li>Bb chromatic 3 octaves</li>
		</ul>
		
		2. Two contrasting works (ONE technical &amp; ONE lyrical).		
		<ul>
			<li>The works may be chosen from studies and or contrasting movements of clarinet sonatas/concerti. </li>
		</ul>
		
		Suggested Repertoire:<br />	
		<em>Studies</em>		
		<ul>
			<li>Milde</li>
			<li>Ozi</li>
			<li>Weissenborn</li>
			<li>Jancourt</li>
		</ul>
		
		<em>Solos</em>
		<ul>
			<li>Hindemith: Sonata</li>
			<li>Saint-Saens: Sonata</li>
			<li>Mozart: Concerto in Bb</li>
			<li>Weber: Concerto in F</li>
			<li>Bourdeau: Premiere Solo</li>
			<li>Hummel: Concerto in F</li>
			<li>Weber: Andante and Hungarian Rondo</li>
		</ul>
		
		3. Sight Reading
		<?php tabFooter("Bassoon");?>
	  
	  
		<?php tabHeader("Trumpet");?>
		<h2 class="jumbotron">Trumpet</h2>
		<div class="alert alert-warning"><strong>Please contact Dr. Jeremy Brekke at <a href="mailto:jeremy.brekke@ndsu.edu">jeremy.brekke@ndsu.edu</a> for any questions pertaining to the audition requirements, and/or to schedule an audition.</strong></div>
		
		<h3>Undergraduate Students (Incoming Freshmen &amp; Transfer Students)</h3>
		
		1. Scales
		<ul>
			<li>Major Scales (slurred, one octave) three will be asked</li>
			<li>Chromatic scale (playable range)</li>
		</ul>
		
		2. Two contrasting musical selections (ONE lyrical &amp; ONE technical) 2-5 minutes each in length, accompaniment is optional.
		
		Suggested Repertoire- Selections may be chosen from but not limited to:<br />
		<em>Studies</em>
		<ul>
			<li>J. L. Small: Twenty Seven Melodious and Rhythmical Studies</li>
			<li>H. L. Clarke: Technical Studies (etudes) </li>
			<li>J. B. Arban: Characteristic Studies</li>
		</ul>
		
		<em>Solos</em>
		<ul>
			<li>Haydn, Hummel or Neruda Trumpet Concerti</li>
			<li>Balay: Andante and Allegro</li>
			<li>Ropartz: Andante and Allegro</li>
			<li>Clarke: Maid of the Mist&nbsp;&nbsp;&nbsp;&nbsp; </li>
			<li>Barat: Andante and Scherzo</li>
			<li>Goedicke: Concert Etude</li>
		</ul>

		<h3>Graduate Students (MM &amp; DMA)</h3>
			Please contact Dr. Brekke for audition repertoire.</p>
		<?php tabFooter("Trumpet");?>
	  
	  
		<?php tabHeader("Horn");?>
		<h2 class="jumbotron">Horn</h2>
		<div class="alert alert-warning"><strong>Please contact Professor Kayla Nelson at <a href="mailto:"kayla.l.nelson@ndsu.edu">kayla.l.nelson@ndsu.edu</a> for any questions pertaining to the audition requirements, and/or to schedule an audition.</strong></div>
		
		<h3>Undergraduate Students (Incoming Freshmen &amp; Transfer Students)</h3>
		
		1. Scales:		
		<ul>
			<li>Any scales in full range - minimum of two</li>
		</ul>
		
		2. Solos:
		<ul>
			<li>One work from the following or any other piece approved by the instructor</li>
		</ul>

		Suggested Repertoire:
		<ul>
			<li>Mozart: Concerto (Any Movement)</li>
			<li>Strauss: Concerto No.1 (Movement I)</li>
			<li>Strauss: Nocturno</li>
			<li>Saint Saens: Moreau de Concert (Movement I)</li>
			<li>Any other piece approved by the instructor</li>
		</ul>
		<?php tabFooter("Horn");?>
	  
	  
		<?php tabHeader("Low Brass");?>
		<h2 class="jumbotron">Low Brass</h2>
		<div class="alert alert-warning"><strong>Please contact Dr. Kyle Mack at <a href="mailto:Kyle.Mack@ndsu.edu">Kyle.Mack@ndsu.edu</a> for any questions pertaining to the audition requirements, and/or to schedule an audition.</strong></div>
		
		<h3>Undergraduate Students (Incoming Freshmen &amp; Transfer Students)</h3>
		
		<h4>Tenor Trombone and Euphonium:</h4>
		
		1. Scales:
		<ul>
			<li>Major Scales: Bb, C &amp; F (Two octaves)</li>
		</ul>
		
		2. Solos:
		<ul>
			<li>Two Contrasting Works</li>
		</ul>
		
		Suggested Repertoire:
		<br />
		<em>Studies</em>:		
		<ul>
			<li>Bordogni/Rochut: Melodious Etudes, Vol. 1</li>
			<li>Arban: Complete Method</li>
		</ul>
		
		<em>Solos</em>:
		<ul>
			<li>Galliard: Sonata No. 1</li>
			<li>Guilmant: Morceau Symphonique</li>
			<li>Hasse: Hasse Suite</li>
			<li>Ropartz: Andante et Allegro</li>
			<li>Saint-Saens: Cavatine</li>
			<li>Telemann: Sonata in F minor</li>
			<li>David: Concertino (Tenor Trombone only) </li>
			<li>Jacob: Fantasia (Euphonium only)</li>
		</ul>
		
		<h4>Bass Trombone:</h4>

		1. Scales: 
		<ul>
			<li>Same with Bb Major down to pedal Bb</li>
		</ul>

		2. Solos: 
				<ul>
			<li>Two Contrasting Works</li>
		</ul>
		
		Suggested Repertoire- Selections may be chosen from but not limited to:<br />
		<em>Studies</em>:
		<ul>
			<li>Bordogni/Rochut: Melodious Etudes, Vol. 1 (8ba/Loco)</li>
			<li>Arban Complete Method</li>
			<li>Bordogni/Ostrander: Melodious Etudes for Bass Trombone</li>
			<li>Gillis: 20 Studies</li>
			<li>Grigoriev: 24 Studies</li>
		</ul>
		
		<em>Solos:</em>			
		<ul>
			<li>Hoffman: The Big Horn</li>
			<li>Koetsier: Allegro Maestoso</li>
			<li>Lebedev: Concerto in One Movement</li>
			<li>Lieb: Concertino Basso</li>
			<li>Tcherepnin: Andante</li>
			<li>Telemann: Sonata in F minor</li>
		</ul>
		
		<h3>Undergraduate Students (Transfer Upper Class)</h3>

		<em>Solos:</em><br />
		Same as Incoming Freshmen with more focus on (depending on level of experience):
		<ul>
			<li>Tenor Trombone: Guilmant and David</li>
			<li>Euphonium: Guilmant and Jacob</li>
			<li>Bass Trombone: Lebedev and Telemann</li>
		</ul>
		
		<h3>Graduate Students</h3>
		
		1. Scales:
		<ul>
			<li>C, D &amp; F Major (2 octaves), Bb Major (3 octaves)</li>
		</ul>

		<em>Studies</em>: Same as above
		<br /><br />
		<em>Solos</em>: Contact Dr. Mack
		<?php tabFooter("Low Brass");?>
	  
	  
		<?php tabHeader("Strings");?>
		<h2 class="jumbotron">Strings</h2>
		<div class="alert alert-warning"><strong>If you have any questions pertaining to the audition process, and/or to schedule an audition, please contact Tim Nelson at <a href="mailto:timothy.h.nelson@ndsu.edu">timothy.h.nelson@ndsu.edu</a> for upper strings and Elise Buffat Nelson at <a href="mailto:elise.buffatnelson@ndsu.edu">elise.buffatnelson@ndsu.edu</a> for lower strings.</strong></div>
		
		<h3>Undergraduate Students (Incoming Freshmen &amp; Transfer Students)</h3>
		
		<ul>
			<li>Two selections or movements that contrast in tempo and style, one of which may be an etude</li>
		</ul>
		
		<h3>Graduate Students</h3>
		
		<ul>
			<li>A first or last movement of a major violin concerto</li>
			<li>A movement of an unaccompanied composition, preferably solo Bach</li>
			<li>A work of the candidate's choice from a musical period not represented by the other two selections</li>
		</ul>
		<?php tabFooter("Strings");?>
	  
	  
		<?php tabHeader("Percussion");?>
	  	<h2 class="jumbotron">Percussion</h2>
		<div class="alert alert-warning"><strong>Please contact Dr. Sigurd Johnson at <a href="mailto:Sigurd.Johnson@ndsu.edu"> Sigurd.Johnson@ndsu.edu</a> for any questions pertaining to the audition requirements, and/or to schedule an audition.</strong></div>
		
		<h3>Undergraduate Students (Incoming Freshmen &amp; Transfer Students)</h3>
		
		<h4><em>Snare Drum</em></h4>

		Concerto Solo:
		<ul>
			<li> Cirone: Portraits in Rhythm (Any Etude)</li>
		</ul>
		
		Rudimental Solo (Optional)		
		<ul>
			<li> Contact Dr. Johnson for suggestions</li>
		</ul>
		
		<h4><em>Mallet Instruments</em></h4>
		Scales: C Chromatic, Bb Major, D Harmonic Minor- (3 Octaves, Ascending &amp; Descending)
		<br /><br />
		
		&ldquo;2&rdquo; Mallet Solo
		Suggested Repertoire- from the following books:
		<ul>
			<li>McMillan: Masterpieces for Marimba</li>
			<li>Goldenberg: Modern School for Xylophone, Marimba, Vibraphone (Any Etude)</li>
		</ul>

		&ldquo;4&rdquo; Mallet Solo (Optional)
		<ul>
			<li>Contact Dr. Johnson for suggestions</li>
		</ul>
		
		<h4><em>Timpani</em></h4>
		Firth: The Solo Timpanist<br /><br />

		<h4><em>Drum Set (Optional)</em></h4>
		Contact Dr. Johnson for suggestions<br /><br />

		<h3>Graduate Students (BM, MM, DMA):</H3>
		Please contact Dr. Johnson for suggestions.
		<?php tabFooter("Percussion");?>
		
		
		<?php tabHeader("Piano");?>
		<h2 class="jumbotron">Piano</h2>
		<h3>Collaborative Piano Audition Information and Requirements (Graduate)</h3>
        <div class="alert alert-secondary">NDSU Collaborative Piano auditions will be held on Saturday, January 25, 2020 in Beckwith Recital Hall at NDSU. Instrumental and vocal partners will be provided for collaborative piano auditions. If you wish to bring your own partner, that is  acceptable. </span>Alternate audition dates are sometimes possible: please contact <a href="mailto:tyler.wottrich@ndsu.edu">Dr. Tyler Wottrich</a> if you wish to audition in person and are unavailable on January 25, 2020. Videorecorded auditions are also accepted, but a live audition is recommended for strongest consideration.</p>
		</div>
        <p>There is no official deadline for application to the NDSU Graduate School; however, since we will be unable to schedule your audition until you are officially accepted into the NDSU Graduate School, we recommend applying to the Graduate School as soon as possible.</span></p>
        
		<div class="alert alert-warning">
		<p>For your audition to the NDSU Collaborative Piano programs, please prepare an audition program that includes the following repertoire (comparable repertoire substitutions may be permitted on a case-by-base basis):</p>
        <ul>
          <li>An outer movement of a Sonata by Beethoven or Brahms for violin or clarinet; or the  2nd movement of the Franck Violin Sonata.</li>
          <li>A set of three or more  contrasting art songs selected from the vocal repertoire list below, or if you wish to provide your own vocal partner you may prepare a set of at least three comparable art songs </li>
        </ul>
        <p>And, for D.M.A. applicants only, either:</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One of the following arias:
		<ul>
			<li>"Deh vieni, non tardar" from Mozart's <em>Le nozze di Figaro</em></li>
			<li>Any of the Elgar Sea Pictures</li>

        </ul>
        <p>OR</p>
        <ul>
          <li>The first movement of the Fauré A Major Violin Sonata</li>
        </ul>
		</div>
        <div class="alert alert-warning">If you have any questions regarding the audition requirements, please contact Dr. Tyler Wottrich at <a href="mailto:Tyler.Wottrich@ndsu.edu">Tyler.Wottrich@ndsu.edu</a> or 701.231.7884.</div>
        <h2>2020 NDSU Collaborative Piano Vocal Audition Repertoire</h2>
        <p>Please prepare selections in the listed keys if you wish to use provided vocal partners
          </p>
        
          <br>
          Samuel Barber, "Nuvoletta" (original key)<br>
          Ludwig van Beethoven, "Adelaide" (original key)<br>
          Johannes Brahms, "Dein blaues Auge" (Eb major)<br>
          Johannes Brahms, "Die Mainacht" (Eb major)<br>
          Johannes Brahms, "Von ewiger Liebe" (B minor)<br>
          Tom Cipullo, "Another Reason Why I Don't Keep a Gun in the House" (original key)<br>
          Claude Debussy, <em>Chansons de Bilitis</em> (original keys)<br>
          Claude Debussy, "Noël des enfants qui n’ont plus de maisons" (original key)<br>
          Henri Duparc, "Chanson triste" (C major)<br>
          Henri Duparc, "Le manoir de Rosemonde" (B minor)<br>
          Henri Duparc, "Testament" (Bb minor)<br>
          Gabriel Fauré, "Les berceaux" (C minor)<br>
          Gerald Finzi, "Come Away, Death" (B minor)<br>
          Gerald Finzi, "It was a lover and his lass" (G major)<br>
          Reynaldo Hahn, "Fêtes galantes" (E major)<br>
          Francis Poulenc, "C." from <em>Deux poemes de Louis Aragon</em> (original key)<br>
          Francis Poulenc, Fiançailles pour rire nos. 4-6 (original keys)<br>
          Franz Schubert, "Mein!" from <em>Die Schöne Müllerin</em> (D major)<br>
          Franz Schubert, "Nacht und Träume" (B major)<br>
          Franz Schubert, "Seligkeit" (E major)<br>
          Robert Schumann,<em> Frauenliebe und -leben</em>, nos. 1, 2, and 4 (original keys) </p>
        </br>
		<?php tabFooter("Piano");?>
    </div>
<br />

</section>

<!-- InstanceEndEditable --></div></section>

	<script>
	//Needed for Tabs
	$(function(){
	  var hash = window.location.hash;
	  hash && $('.nav-pills a[href="' + hash + '"]').tab('show'); 
	  $('.nav-pills a').click(function (e) {
		 $(this).tab('show');
		 var scrollmem = $('body').scrollTop();
		 window.location.hash = this.hash;
  });
});
</script>
<?php 	include($config['path'].'resources/footer.php')?>