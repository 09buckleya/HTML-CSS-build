(function () {
  var menuIcon = document.getElementById("menuIcon");
  var navBar = document.querySelector("nav");
  var navHeight = navBar.offsetHeight;
  var navBarStatus = false;

  if (window.getComputedStyle(menuIcon).display !== "none") {
    navBar.style.height = "0px";
    menuIcon.addEventListener("click", function () {
      if (navBarStatus) {
        navBarStatus = false;
        navBar.style.height = "0px";
        menuIcon.id = "menuIcon";
      } else {
        navBarStatus = true;
        navBar.style.height = navHeight + "px";
        menuIcon.id = "menuIcon270";
      }
    });
  }
})();
