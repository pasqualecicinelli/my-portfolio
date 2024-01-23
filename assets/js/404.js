$(document).ready(function () {
  $("#menu").click(function () {
    $(this).toggleClass("fa-times");
    $(".navbar").toggleClass("nav-toggle");
  });
});

// disable developer mode
document.onkeydown = function (e) {
  if (e.Code == 123) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.Code == "I".charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.Code == "C".charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.Code == "J".charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.Code == "U".charCodeAt(0)) {
    return false;
  }
};
