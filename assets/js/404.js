$(document).ready(function () {
  $("#menu").click(function () {
    $(this).toggleClass("fa-times");
    $(".navbar").toggleClass("nav-toggle");
  });
  //Opens the language drop-down menu by clicking
  $(".dropdown").click(function () {
    $(this).toggleClass("open");
    $("#language").toggle(); // Toggle the display property
  });
});

// Start language IT
document
  .querySelectorAll('[data-lang="en"]')
  .forEach((element) => (element.style.display = "none"));
document.querySelector("#language").addEventListener("click", function (event) {
  if (event.target.tagName === "A") {
    const filterValue = event.target.getAttribute("data-filter");
    filterLang(filterValue);
  }
});

// Filter language
function filterLang(filterValue) {
  var elementsIt = document.querySelectorAll('[data-lang="it"]');
  var elementsEn = document.querySelectorAll('[data-lang="en"]');
  if (filterValue === "it") {
    elementsIt.forEach(function (element) {
      element.style.display = "";
      element.style.opacity = 1;
    });
    elementsEn.forEach(function (element) {
      element.style.display = "none";
      element.style.opacity = 0;
    });
  } else if (filterValue === "en") {
    elementsIt.forEach(function (element) {
      element.style.display = "none";
      element.style.opacity = 0;
    });
    elementsEn.forEach(function (element) {
      element.style.display = "";
      element.style.opacity = 1;
    });
  }
}
document.addEventListener("DOMContentLoaded", async function () {
  filterLang();
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
