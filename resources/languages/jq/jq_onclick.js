/*
*	COPYRIGHT NOTICE:
*		this file and all of its attached files are property of the
*		Division of Performing Arts
*		North Dakota State University
*		unless otherwise stated  
*/

var accordian_open = false;

$( ".accordian_title" ).click( function() {
	"use strict";
	
	if ( accordian_open === false ) {
		$( this ).parent( ".accordian" ).css( "height", "auto" );
		accordian_open = true;
	} else {
		$( this ).parent( ".accordian" ).css( "height", "36px" );
		accordian_open = false;
	}
});