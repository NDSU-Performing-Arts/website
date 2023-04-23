<?php 
//Edit the following:
$config['page-title'] = "Academic Programs | Department of Theatre Arts";
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
		<h1>Academic Programs</h1>
	</header>
	
	<article>
		<h2>Degrees</h2>
        <p>There are three undergraduate degree programs in theatre. Each is flexible and can be designed to fit the individual student's career goals: </p>

        <div class="card"><div class="card-body"><p><strong>The Bachelor of Arts</strong> in theatre arts is a general baccalaureate degree built around a traditional liberal arts curriculum. Within the major field itself, courses are required in technical theatre, performing, and directing, as well as in literature and theatre history. The BA program requires two years' study of a modern language. </p></div></div>
		<br />

		<div class="card"><div class="card-body"><p><strong>The Bachelor of Science degree</strong> is an alternative to the Bachelor of Arts. The program for the BS is identical to that for the BA, except that the BS requires a minor in an approved field, in place of study of a modern language. </p></div></div>
		<br />
		
		<div class="card"><div class="card-body"><p><strong>The Bachelor of Fine Arts</strong> is a professionally-oriented undergraduate degree track which places primary emphasis on performance and studio activity, while also requiring a high level of involvement in the academic curriculum. It can be entered only by faculty permission. This degree track broadens the student's exposure to his/her field--Performance, Design &amp; Tech, Musical Theatre--and considerable study is made of related fine arts fields as well. Admission to the BFA degree program requires consistent involvement in Theatre NDSU productions and projects and demands a high level of commitment on the part of the student.</p></div></div>
		
		<br />
        <p>The Department of Theatre Arts is fully accredited by the National Association of Schools of Theatre (NAST).</p>
	
        <p><a href="https://catalog.ndsu.edu/undergraduate/program-curriculum/theatre-arts/#majorbaorbstext">B.A. / B.S. in Theatre Arts</a></p>
        <p><a href="https://catalog.ndsu.edu/undergraduate/program-curriculum/theatre-arts/#majorbfaperformancetext">B.F.A .in Theatre Arts</a> (Performance)</p>
        <p><a href="https://catalog.ndsu.edu/undergraduate/program-curriculum/theatre-arts/#majorbfadesigntechtheatretext">B.F.A. in Theatre Arts</a> (Design &amp; Tech)</p>
        <p><a href="https://catalog.ndsu.edu/undergraduate/program-curriculum/theatre-arts/#majorbfamusicaltheatretext">B.F.A. in Theatre Arts</a> (Musical Theatre)</p>
		<p><a href="https://catalog.ndsu.edu/undergraduate/program-curriculum/theatre-arts/#minortext">Theatre Arts Minor</a> </p>
        
	</article>
</section>
<!-- InstanceEndEditable --></div></section>
	
<?php include($config['path'].'resources/footer.php')?>