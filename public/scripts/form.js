document.addEventListener("DOMContentLoaded", function () {
  if (document.getElementById("schoolSelect")) {
    document.getElementById("schools").addEventListener("change", function () {
      document.getElementById("schools").value = this.value;
      console.log(document.getElementById("schools").value);
    });
    document.getElementById("courses").addEventListener("change", function () {
      document.getElementById("courses").value = this.value;
      console.log(document.getElementById("courses").value);
    });

    function next() {
      var current = document.getElementsByClassName("step-1");
      var next = document.getrElementsByClassName("step-2");
      current.style.display = "none";
      next.style.display = "block";
    }

    function addSchool() {
      document.getElementById("add-school").style.display = "block";
      document.getElementById("schoolTooltip").style.display = "none";
      document.getElementById("schoolSelect").style.display = "none";
    }
    function addCourse() {
      document.getElementById("add-course").style.display = "block";
      document.getElementById("courseTooltip").style.display = "none";
      document.getElementById("courseSelect").style.display = "none";
    }

    function filterFunction(type) {
      var input, filter, ul, li, a, i;
      if (type == "school") {
        input = document.getElementById("schoolInput");
      } else {
        input = document.getElementById("courseInput");
      }
      filter = input.value.toUpperCase();
      if (type == "school") {
        div = document.getElementById("schools");
      } else {
        div = document.getElementById("courses");
      }
      a = div.getElementsByTagName("option");

      for (i = 0; i < a.length; i++) {
        txtValue = a[i].value;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          console.log(txtValue);
          a[i].style.display = "";
        } else {
          a[i].style.display = "none";
        }
      }
    }
  }
});
