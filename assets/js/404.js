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

// TOGGLE LANGUAGE IT OR EN
document
  .querySelectorAll('[data-lang="en"]')
  .forEach((element) => (element.style.display = "none"));
var currentLanguage = "it";

function setCurrentLanguage(lang) {
  currentLanguage = lang;
}

function toggleLanguage() {
  var elementsIt = document.querySelectorAll('[data-lang="it"]');
  var elementsEn = document.querySelectorAll('[data-lang="en"]');

  elementsIt.forEach(function (element) {
    element.style.display = currentLanguage === "it" ? "" : "none";
    element.style.opacity = currentLanguage === "it" ? "1" : "0";
  });
  elementsEn.forEach(function (element) {
    element.style.display = currentLanguage === "en" ? "" : "none";
    element.style.opacity = currentLanguage === "en" ? "1" : "0";
  });
  setCurrentLanguage(currentLanguage === "en" ? "it" : "en");
}
document.getElementById("language").addEventListener("click", function (event) {
  event.preventDefault();

  if (event.target.tagName === "A") {
    toggleLanguage();
  }
});

document.addEventListener("DOMContentLoaded", async function () {
  toggleLanguage();
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
