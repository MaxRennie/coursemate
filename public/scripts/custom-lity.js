var myLity = null;
var toggled = false;

$("#popoutButton").on("click", function () {
  console.log(myLity);
  console.log(toggled);
  if (toggled == false) {
    myLity = lity("#itemPopout");
    myLity.opener();
    toggled = true;
    // alert("executed: " + toggled);
  } else {
    //do something
    myLity.close();
    toggled = false;
    //this is not working
    // alert("executed: " + toggled);
  }
});
