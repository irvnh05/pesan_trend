var today = new Date();
var year = today.getFullYear();
var month = today.getMonth();
var day = today.getDate();

function encode_id(id) {
  var hashids = new Hashids("zXfMPtcERG7XVFF4yUsSaRgOg", 3, "abcdefghijklmnopqrstuvwxyz1234567890");
  return hashids.encode(id);
}


var calendar = $('#myEvent').fullCalendar({
  height: 'auto',
  defaultView: 'month',
  editable: true,
  selectable: true,
  header: {
    left: 'prev,next',
    center: 'title',
    right: 'month,agendaWeek,agendaDay,listMonth'
  },
  events: function(start, end, timezone, callback) {
    $.ajax({
      url: '/api/mainevents',
      type: 'GET',
      dataType: 'json',
      success: function(response) {
        var events = [];

        $.each(response, function(key, data) {
          var start_date = moment(data.start_date + ' ' + data.start_time);
          var end_date = moment(data.end_date + ' ' + data.end_time);
          var event = {
            id: data.id,
            title: data.name,
            start: start_date,
            end: end_date,
            url: '/mainevents/' + encode_id(data.id)+ '/' + data.slug,
            checkout_url: '/mainevents/' + encode_id(data.id)
            // backgroundColor: "#fff",
            // borderColor: "#fff",
            // textColor: '#000'
          };

          events.push(event);
        });

        callback(events);
      }
    });
  },

  eventRender: function(event, element) {
    element.html(event.title);
  },
  eventClick: function(event, jsEvent, view) {
    $.getScript(event.checkout_url, function() {
      location.href = event.checkout_url;
    });
  }
});
