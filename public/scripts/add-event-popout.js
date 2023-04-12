$("#calendarSubmit").on("click", function () {
  calendar = $("#calendar").fullCalendar("getCalendar");
  title = $("#calendarTitle").val();
  start = $("#calendarStart").val();
  end = $("#calendarEnd").val();
  description = $("#calendarDescription").val();
  uid = $("#hdnSession").val();
  console.log(uid);
  console.log(title);
  console.log(start);
  console.log(end);
  console.log(description);
  $.ajax({
    url: "calendar",
    type: "POST",
    data: {
      insert: true,
      title: title,
      type_id: 1,
      start: start,
      end: end,
      description: description,
      person_id: uid,
    },
    complete: function (data) {
      calendar.fullCalendar("refetchEvents");
    },
    failure: function () {
      alert("Error");
    },
  });
});

