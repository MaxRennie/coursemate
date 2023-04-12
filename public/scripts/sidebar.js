function toggleSideNav() {
  // var sidebarToggle = false;
  // if (sidebarToggle == false) {
  //   $("#NavbarAnchor").animate(
  //     {
  //       left: "+=50",
  //     },
  //     "slow"
  //   );
  //   sidebarToggle = true;
  // } else {
  //   $("#NavbarAnchor").animate(
  //     {
  //       right: "+=50",
  //     },
  //     "slow"
  //   );

  //   sidebarToggle = false;
  // }
  document.getElementById("NavAnchor").classList.toggle("minimised");

  // document.getElementById("calendar").classList.toggle("maximised");
  document.getElementsByClassName("sidebar-included")[0].classList.toggle("maximised");
}
