<?php 
//Edit the following:
$config['page-title'] = "Contact | Division of Performing Arts";
$config['page-description'] = "";
$config['page-realm'] = "CSOM"; //Choose DPA, DTA, CSOM

//Leave the following alone because it's magic:
$config['page'] = $_SERVER['REQUEST_URI'];
$config['path'] = $_SERVER['DOCUMENT_ROOT']."/";
include($config['path'].'resources/header.php');
?>
	<script src="//cdn.ntfg.net/vendor/fullcalendar/5.7.0/lib/main.min.js"></script>
	<script src="https://unpkg.com/@fullcalendar/icalendar@5.8.0/main.js"></script>
	<link rel="stylesheet" href='//cdn.ntfg.net/vendor/fullcalendar/5.7.0/lib/main.css' />
		<!--4.2-->
		<script>
		document.addEventListener('DOMContentLoaded', function() {
				
			var calendarEl = document.getElementById('calendar');
// import dayGridPlugin from '@fullcalendar/daygrid'
import iCalendarPlugin from '@fullcalendar/icalendar'
			var calendar = new FullCalendar.Calendar(calendarEl, {
				plugins: [iCalendarPlugin],
				// plugins: [ 'timeGrid','dayGrid','list','interaction' ],
				initialView: 'timeGridWeek',
				headerToolbar: {
					left: 'prev,next today',
					center: 'title',
					right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
				},
				nowIndicator: true,
				editable: true,
				selectable: true,
				eventSources: [
					{
						url: 'https://outlook.office365.com/owa/calendar/417330358ded469c968833cb7ed69eeb@ndus.edu/07db4f8656284556b5ce580566d7170315863531318238072804/calendar.ics',
						format: 'ics'
					},
				],
			});
			calendar.render();
		});

		</script>

		<div id='calendar'></div>

<?php include($config['path'].'resources/footer.php')?>