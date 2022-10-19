$(document).ready(function () {
  employeeInformation(userId);

  function toggleLayoutTheme() {
    if (document.body.classList.contains("c-dark-theme")) {
      document.body.classList.remove("c-dark-theme");
      localStorage.setItem("LayoutTheme", "light");
    } else {
      document.body.classList.add("c-dark-theme");
      localStorage.setItem("LayoutTheme", "dark");
    }
  }

  function loadLayoutTheme() {
    if (localStorage.getItem("LayoutTheme") == "dark") {
      document.body.classList.add("c-dark-theme");
    } else {
      localStorage.setItem("LayoutTheme", "light");
    }
  }

  loadLayoutTheme();
});
