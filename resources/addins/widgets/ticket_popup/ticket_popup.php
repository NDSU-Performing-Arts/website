<?php
/*
*	COPYRIGHT NOTICE:
*		this file and all of its attached files are property of the
*		Division of Performing Arts
*		North Dakota State University
*		unless otherwise stated 
*/
?>

<!--	ticket stylesheet -->
<link 	rel="stylesheet" 
		href="/performingarts/resources/addins/widgets/ticket_popup/ticket_popup.css">

<!--	ticket javascript -->
<script type="text/javascript"
		src="/performingarts/resources/addins/widgets/ticket_popup/ticket_onclick.js"></script>



<!--	ticket html -->		
<aside id="ticket_popup">
	<section id="ticket_stub">
		<header id="ticket_buttons">
			<img alt="Ticket Stub"
				id="ticket_stub_image"
				src="/performingarts/resources/addins/widgets/ticket_popup/ticket_popup.png">
				
			<div id="ticket_button">
				<p>TICKETS</p>
			</div>
			
			<img alt="Ticket Open Icon"
				id="ticket_open_icon"
				src="/performingarts/resources/addins/widgets/ticket_popup/ticket_open.png">
		</header>
		
		<article id="ticket_showare">
			<a	href="https://ndsu.showare.com/" title="Tickets">
				<img	alt="Ticket Stub"
						id="ticket_showare_image"
						src="/performingarts/theatre/shows/images/showare/200px_2017_junieb.jpg"
						width="180px">
			</a>
		</article>
	</section>
</aside>

<script>ticket_onclick();</script>