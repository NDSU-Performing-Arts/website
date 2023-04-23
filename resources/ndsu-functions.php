<?php
function bioBox($imgurl,$bio,$alt){
	echo "<div class=\"d-flex\">";
	echo "<div class=\"flex-shrink-0\">";
	echo "<img src=\"".$imgurl."\" alt=\"".$alt."\" style=\"width:100%;max-width:300px;\">";
	echo "</div>";
	echo "<div class=\"flex-grow-1 ms-3\">";
	echo $bio;
	echo "</div>";
	echo "</div>";
}
?>