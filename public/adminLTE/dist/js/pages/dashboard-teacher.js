/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

/* global moment:false, Chart:false, Sparkline:false */
function inisialisasiKalender() {
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        defaultView: "dayGridMonth", // Tampilkan dalam tampilan bulanan secara default
        headerToolbar: {
            left: "today",
            center: "title",
            right: "prev,next",
        },
        themeSystem: "bootstrap",
        events: listAcaraPaud,
        displayEventTime: false,
        eventColor: "var(--danger)", // Warna event
        eventTextColor: "white", // Warna teks pada event
    });
    calendar.render();
}
