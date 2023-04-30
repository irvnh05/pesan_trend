
var today = new Date();
year = today.getFullYear();
month = today.getMonth();
day = today.getDate();
var calendar = $('#myEvent').fullCalendar({
  height: 'auto',
  defaultView: 'month',
  editable: true,
  selectable: true,
  header: {
    left: 'prev,next',
    // left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay,listMonth'
  },
  events: '/events.json',
  
  
  eventClick: function(event, jsEvent, view) {
    $.getScript(event.checkout_url, function() {
      location.href = event.checkout_url;
      // $('#event_date_range').val(moment(event.start).format("MM/DD/YYYY HH:mm") + ' - ' + moment(event.end).format("MM/DD/YYYY HH:mm"))
      // date_range_picker();
      // $('.start_hidden').val(moment(event.start).format('YYYY-MM-DD HH:mm'));
      // $('.end_hidden').val(moment(event.end).format('YYYY-MM-DD HH:mm'));
    });
  }
});

/*$("#myEvent").fullCalendar({
  height: 'auto',
  header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay,listWeek'
  },
  editable: true,
  events: [
    {
      title: 'Conference',
      start: '2018-01-9',
      end: '2018-01-11',
      backgroundColor: "#fff",
      borderColor: "#fff",
      textColor: '#000'
    },
    {
      title: "John's Birthday",
      start: '2018-01-14',
      backgroundColor: "#007bff",
      borderColor: "#007bff",
      textColor: '#fff'
    },
    {
      title: 'Reporting',
      start: '2018-01-10T11:30:00',
      backgroundColor: "#f56954",
      borderColor: "#f56954",
      textColor: '#fff'
    },
    {
      title: 'Starting New Project',
      start: '2018-01-11',
      backgroundColor: "#ffc107",
      borderColor: "#ffc107",
      textColor: '#fff'
    },
    {
      title: 'Social Distortion Concert',
      start: '2018-01-24',
      end: '2018-01-27',
      backgroundColor: "#000",
      borderColor: "#000",
      textColor: '#fff'
    },
    {
      title: 'Lunch',
      start: '2018-01-24T13:15:00',
      backgroundColor: "#fff",
      borderColor: "#fff",
      textColor: '#000',
    },
    {
      title: 'Company Trip',
      start: '2018-01-28',
      end: '2018-01-31',
      backgroundColor: "#fff",
      borderColor: "#fff",
      textColor: '#000',
    },
  ]

});
*/