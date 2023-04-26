jQuery(document).ready(function () {
  if ($("#calendar").length) {
    var calendarLity;
    var calendar = $("#calendar").fullCalendar({
      height: $(window).height() - 80,
      nowIndicator: true,
      editable: true,
      dayMaxEvents: true,
      header: {
        right: "today prev,next",
      },
      initialView: "dayGridMonth",
      events: function (start, end, timezone, callback) {
        $.ajax({
          url: "calendar",
          type: "POST",
          data: { load: true },
          complete: function (data) {
            var responseText = JSON.stringify(data.responseText);
            var responseText = JSON.parse(responseText);
            var responseText = responseText.split(/<(.*)/s);
            var events = [];
            if (responseText[0] != "") {
              var responseText = JSON.parse(responseText[0]);
              console.log(responseText);
              for (var i = 0; i < responseText.length; i++) {
                if (responseText[i].type_id == 1) {
                  events.push({
                    item_id: responseText[i].item_id,
                    type_id: responseText[i].type_id,
                    title: responseText[i].title,
                    start: responseText[i].start,
                    end: responseText[i].end,
                    due_date: responseText[i].due_date,
                    description: responseText[i].description,
                    additional_notes: responseText[i].additional_notes,
                    priority: responseText[i].priority,
                    completed: responseText[i].completed,
                    associated_item: responseText[i].associated_item,
                  });
                }
              }
              console.log(events);
              callback(events);
            } else {
              callback(null);
            }
          },
          failure: function (data) {
            alert("Error");
          },
        });
      },
      selectable: true,
      selectHelper: true,
      editable: true,
      select: function (start, end, allDay) {
        calendarLity = lity("#calendarPopout");
        var foo = $("#calendarPopout").data("lity");
        if (foo) {
          console.log($.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss"));
          $("#start").val($.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss"));
          $("#end").val($.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss"));
        }
        calendarLity.opener();
        calendarLity.toggled = true;
      },
      eventResize: function (event) {
        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
        var title = event.title;
        var event_id = event.id;
        $.ajax({
          url: "calendar",
          type: "POST",
          data: {
            update: true,
            title: event.title,
            type_id: event.type_id,
            start: start,
            end: end,
            item_id: event.item_id,
            due_date: event.due_date,
            description: event.description,
            additional_notes: event.additional_notes,
            priority: event.priority,
            completed: event.completed,
            associated_item: event.associated_item,
          },
          success: function (data) {
            calendar.fullCalendar("refetchEvents");
          },
          failure: function () {
            alert("Error");
          },
        });
      },
      eventDrop: function (event) {
        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
        var title = event.title;
        var item_id = event.item_id;
        console.log(event);
        $.ajax({
          url: "calendar",
          type: "POST",
          data: {
            update: true,
            title: event.title,
            type_id: event.type_id,
            start: start,
            end: end,
            item_id: event.item_id,
            due_date: event.due_date,
            description: event.description,
            additional_notes: event.additional_notes,
            priority: event.priority,
            completed: event.completed,
            associated_item: event.associated_item,
          },
          success: function (data) {
            calendar.fullCalendar("refetchEvents");
          },
          failure: function () {
            alert("Error");
          },
        });
      },
      eventClick: function (event) {
        calendarLity = lity("#calendarPopout");
        var foo = $("#calendarPopout").data("lity");
        calendarLity.opener();
        calendarLity.toggled = true;
        insertEventData(event);
        $.ajax({
          url: "calendar",
          type: "POST",
          data: { delete: true, item_id: item_id },
          success: function (data) {
            calendar.fullCalendar("refetchEvents");
          },
          failure: function () {
            alert("Error");
          },
        });
      },
    });

    var monthViewSize = $(window).width() < 768 ? "listWeek" : "month";

    $(window).resize(function () {
      var calHeight = $(window).height() - 80;
      $("#calendar").fullCalendar("option", "height", calHeight);
    });
    var changeToDayView = function () {
      $("#calendar").fullCalendar("changeView", "agendaDay");
    };
    var changeToWeekView = function () {
      $("#calendar").fullCalendar("changeView", "agendaWeek");
    };
    var changeToMonthView = function () {
      $("#calendar").fullCalendar("changeView", monthViewSize);
    };

    $("#dayViewBtn").click(function () {
      changeToDayView();
    });
    $("#weekViewBtn").click(function () {
      changeToWeekView();
    });
    $("#monthViewBtn").click(function () {
      changeToMonthView();
    });

    function changetoListView() {
      $("#calendar").fullCalendar("changeView", "listWeek");
    }

    $(window).resize(function () {
      if ($(window).width() < 768) {
      }
    });
  }
});

function insertEventData(event) {
  console.log(event);
  if (event.title) {
    console.log(event.title);
    $("#calendarTitle").val(event.title);
  }
  if (event.start != null) {
    console.log(event.start._i);
    $("#start").val(event.start._i);
  }
  if (event.end != null) {
    console.log(event.end._i);
    $("#end").val(event.end._i);
  }
  if (event.description) {
    console.log(event.description);
    $("#description").val(event.description);
  }
  $("calendarSubmit").val("Update");

  //calendarTitle = $("#calendarTitle").val();
  // calendarStart = event.title
  // calendarEnd = $("#end").val();
  // calendarDescription = $("#description").val();
  // calendarAdditionalNotes = $("#additionalNotes").val();
  // calendarPriority = $("#priority").val();
  // calendarCompleted = $("#completed").val();
  // calendarAssociatedItem = $("#associatedItem").val();
  // calendarDueDate = $("#dueDate").val();
  // calendarType = $("#type").val();
  // $.ajax({
  //   url: "calendar",
  //   type: "POST",
  //   data: {
  //     insert: true,
  //     title: calendarTitle,
  //     start: calendarStart,
  //     end: calendarEnd,
  //     description: calendarDescription,
  //     additional_notes: calendarAdditionalNotes,
  //     priority: calendarPriority,
  //     completed: calendarCompleted,
  //     associated_item: calendarAssociatedItem,
  //     due_date: calendarDueDate,
  //     type_id: calendarType,
  //   },
  // });
}
