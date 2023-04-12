$(document).ready(function () {
  $("input[type=radio][name=type_id]").change(function () {
    if (this.value == "2") {
      $("#dueDate").show();
      $("#dueDateLabel").show();
      $("#priority").show();
      $("#startLabel").hide();
      $("#start").hide();
      $("#endLabel").hide();
      $("#end").hide();
    } else if (this.value == "1") {
      $("#dueDate").hide();
      $("#dueDateLabel").hide();
      $("#priority").hide();
      $("#startLabel").show();
      $("#start").show();
      $("#endLabel").show();
      $("#end").show();
    }
  });
  // $("#popoutButton").click(function () {
  //   const button = $(this);
  //   var toggled = false;
  //   $(this).click(function() {
  //     toggled = !toggled;
  //     $(".list-sort").attr("colspan", toggled ? 6 : null);
  //   });
  //   // button.attr("data-lity").toggle();
  //   // button.attr("data-lity-close").toggle();
  // });
  // $("a").on("click", function () {
  //   lity("#lity").opener();
  // });
  // $("button").on("click", function () {
  //   //do something
  //   alert("executed");
  // });


});