var CALENDAR = null;
document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    CALENDAR = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            start: 'title', // will normally be on the left. if RTL, will be on the right
            end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
        },
        locale: 'es',
        editable: true,
        draggable: true,
        initialView: 'dayGridMonth',
        events: "/events"
    });
    CALENDAR.render();
});
