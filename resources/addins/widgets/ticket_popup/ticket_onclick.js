/*  -----------------------------------------------

	COPYRIGHT NOTICE:
		this file and all of its attached files are property of 
		North Dakota State University Division of Performing Arts
		unless otherwise stated 
	
	------------------------------------------------ */
function ticket_onclick(){
	"use strict";
	
	var open = false;
	
	document.getElementById("ticket_open_icon").onclick = function(){

		if (open === false){
			document.getElementById("ticket_stub").style.height = "256px";
			document.getElementById("ticket_open_icon").style.transform = "rotate(45deg)";
			
			open = true;
		}
		
		else if (open === true){
			document.getElementById("ticket_stub").style.height = "48px";
			document.getElementById("ticket_open_icon").style.transform = "rotate(0deg)";
			
			open = false;
		}
	};
}