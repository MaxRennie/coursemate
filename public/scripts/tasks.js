$("#grat-btn").click(function () {
  console.log("clicked");
  if (
    $("#item-1").val() == "" ||
    $("#item-2").val() == "" ||
    $("#item-3").val() == ""
  ) {
    alert("Please fill in all three items!");
    return;
  } else {
    var grats =
      $("#item-1").val() +
      ", " +
      $("#item-2").val() +
      " and " +
      $("#item-3").val();
    var entry_date = new Date();
    $.ajax({
      url: "calendar",
      type: "POST",
      data: {
        gratitude: true,
        entry_date: entry_date,
        gratitude: grats,
      },
      success: function (data) {
        console.log(data);
        $("#grat-btn").hide();
        $("#grat-form").hide();
        $("#grat-form").html("<h3>Thank you for your gratitude!</h3>");
      },
    });
  }
});

// function deleteTask(id) {
//   alert(id);
//   $.ajax({
//     url: "calendar",
//     type: "POST",
//     data: { delete: true, item_id: id },
//     success: function (data) {
//       calendar.fullCalendar("refetchEvents");
//     },
//     failure: function () {
//       alert("Error");
//     },
//   });
// }

$(".delete").click(function (e) {
  id = e.currentTarget.offsetParent.attributes[1].nodeValue;
  parent = e.currentTarget.offsetParent;
  console.log(id);
  $.ajax({
    url: "calendar",
    type: "POST",
    data: { delete: true, item_id: id },
    success: function (data) {
      location.href = "./tasks";
    },
  });
});

$(".complete").click(function (e) {
  id = e.currentTarget.offsetParent.attributes[1].nodeValue;
  console.log(id);
  $.ajax({
    url: "calendar",
    type: "POST",
    data: { complete: true, item_id: id },
    success: function (data) {
      // e.currentTarget.offsetParent.hide();
    },
  });
});

$(".edit").click(function (e) {
  id = e.currentTarget.offsetParent.attributes[1].nodeValue;
  console.log(e.currentTarget.offsetParent);
  myLity = lity("#itemPopout");
  myLity.opener();
  toggled = true;
  $("#title").val(e.currentTarget.offsetParent.children[0].innerText);
  $("#description").val(e.currentTarget.offsetParent.children[1].innerText);
  $("#date").val(e.currentTarget.offsetParent.children[2].innerText);
  $("#item_id").val(id);
});
