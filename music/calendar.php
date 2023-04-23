
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <link href='//cdn.ntfg.net/vendor/fullcalendar/5.8.0/lib/main.css' rel='stylesheet' />
    <script src='//cdn.ntfg.net/vendor/fullcalendar/5.8.0/lib/main.min.js'></script>
	
	<script type="module">
import iCalendarPlugin from 'https://cdn.skypack.dev/@fullcalendar/icalendar';
import dayGridPlugin from 'https://cdn.skypack.dev/@fullcalendar/daygrid';
</script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
		  plugins: [dayGridPlugin, iCalendarPlugin],
		  events: {
			url: 'https://mywebsite/icalendar-feed.ics',
			format: 'ics'
		  }
        });
        calendar.render();
      });

    </script>
  </head>
  <body>
    <div id='calendar'></div>
  </body>
</html>