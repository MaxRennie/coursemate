$(document).ready(function () {
  chrome.storage.local.get(["signedin"], function (result) {
    var chrsignin = result.signedin;
    if (
      chrsignin == "" ||
      chrsignin == undefined ||
      chrsignin == null ||
      chrsignin == "false"
    ) {
      $("#signedout").show();
      $("#signedin").hide();

      $("#signin-btn").click(() => {
        var email = $("#email").val();
        var password = $("#password").val();
        $.ajax({
          url: "https://coursemate.maxrennie.uosweb.co.uk/login",
          crossDomain: true,
          type: "POST",
          data: {
            type: "ext",
            email: email,
            password: password,
          },
          success: function (data) {
            var responseText = JSON.stringify(data);
            responseText = JSON.parse(responseText);
            responseText = responseText.split(/<(.*)/s);
            if (responseText[0] != "") {
              responseText = JSON.parse(responseText[0]);
              if (responseText.error) {
                alert(responseText.error);
                return;
              } else {
                chrome.storage.local.set(
                  {
                    signedin: "true",
                    uid: responseText.user_id,
                    fname: responseText.fname,
                  },
                  function () {}
                );
                chrome.storage.local.get(
                  ["signedin", "uid", "fname"],
                  function (result) {}
                );
                $("#signedout").hide();
                $("#signedin").show();
                var tasks = getTasks();
                tasks.forEach((task) => {
                  $("#tasks").append(new Option(task.title, task.item_id));
                });
              }
            }
          },
        });
      });
    }
    if (chrsignin == "true") {
      //Get tasks from coursemate
      $("#signedout").hide();
      $("#signedin").show();
      chrome.storage.local.get(["uid"], function (result) {
        var tasks = getTasks(result.uid);
        tasks.forEach((task) => {
          $("#tasks").append(new Option(task.title, task.item_id));
        });
      });
    }
  });
});

$("#add-task-btn").click(() => {
  $("#task-form").toggle();
});

$("#add-task-form").click(() => {
  chrome.storage.local.get(["uid"], function (result) {
    var title = $("#title").val();
    var duedate = $("#dueDate").val();
    var description = $("#description").val();
    var priority = $('input[name="priority"]:checked').val();
    var user_id = result.uid;
    addTask(title, duedate, description, priority, user_id);
  });
});

function addTask(title, duedate, description, priority, user_id) {
  $.ajax({
    url: "https://coursemate.maxrennie.uosweb.co.uk/add-task",
    crossDomain: true,
    type: "POST",
    data: {
      person_id: user_id,
      type_id: 2,
      title: title,
      due_date: duedate,
      description: description,
      priority: priority,
    },
    success: function (data) {
      chrome.storage.local.get(["uid"], function (result) {
        var tasks = getTasks(result.uid);
        $("#tasks").empty();
        tasks.forEach((task) => {
          $("#tasks").append(new Option(task.title, task.item_id));
        });
      });
      $("#task-form").toggle();
    },
  });
}
function getTasks(user_id) {
  var events = [];
  $.ajax({
    url: "https://coursemate.maxrennie.uosweb.co.uk/calendar",
    crossDomain: true,
    type: "POST",
    async: false,
    data: {
      loadTasks: true,
      person_id: user_id,
    },
    success: function (data) {
      var responseText = JSON.stringify(data);
      responseText = JSON.parse(responseText);
      responseText = responseText.split(/<(.*)/s);
      if (responseText[0] != "") {
        responseText = JSON.parse(responseText[0]);
        for (var i = 0; i < responseText.length; i++) {
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
      } else {
        return null;
      }
    },
  });
  return events;
}

function saveTime(duration) {
  chrome.storage.local.get(["uid"], function (result) {
    var user_id = result.uid;
    var item_id = $("#tasks").val();
    $.ajax({
      url: "https://coursemate.maxrennie.uosweb.co.uk/calendar",
      crossDomain: true,
      type: "POST",
      data: {
        time: true,
        person_id: user_id,
        item_id: item_id,
        duration: duration,
      },
      success: function (data) {},
    });
  });
}

function logout() {
  chrome.storage.local.set({ signedin: "false" }, function () {});
  $("#signedout").show();
  $("#signedin").hide();
}

$("#logout-btn").click(() => {
  logout();
});