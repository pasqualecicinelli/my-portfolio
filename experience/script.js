$(document).ready(function () {
  $("#menu").click(function () {
    $(this).toggleClass("fa-times");
    $(".navbar").toggleClass("nav-toggle");
  });

  $(window).on("scroll load", function () {
    $("#menu").removeClass("fa-times");
    $(".navbar").removeClass("nav-toggle");

    if (window.scrollY > 60) {
      document.querySelector("#scroll-top").classList.add("active");
    } else {
      document.querySelector("#scroll-top").classList.remove("active");
    }
  });
  //Opens the language drop-down menu by clicking
  $(".dropdown").click(function () {
    $(this).toggleClass("open");
    $("#language").toggle(); // Toggle the display property
  });
});

document.addEventListener("visibilitychange", function () {
  if (document.visibilityState === "visible") {
    document.title = "Esperienze | Portfolio Pasquale Cicinelli";
    $("#favicon").attr("href", "../assets/images/favicon.png");
  } else {
    document.title = "Torna indietro al Portfolio";
    $("#favicon").attr("href", "../assets/images/favhand.png");
  }
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
    showExperience(currentLanguage === "en" ? "it" : "en");
  }
});

//fetch experience start
async function getExperience() {
  const response = await fetch("experience.json");
  const data = await response.json();
  return data;
}

function showExperience(currentLanguage) {
  let experienceContainer = document.querySelector("#experience .timeline");
  let experienceHTML = "";
  let isRight = true;

  allExperience.forEach((experience) => {
    experienceHTML += `
    <div class="container ${isRight ? "right" : "left"}">
  <div class="content">
    <div class="tag">
    <h2>${experience.company}</h2>
    </div>
    <div class="desc">
      <h3>${
        experience.type
          ? experience.type[currentLanguage] || experience.type
          : ""
      }</h3>
      <p>${
        experience.desc
          ? experience.desc[currentLanguage] || experience.desc
          : ""
      }</p>
       <span> ${experience.place} ${
      experience.data ? experience.data[currentLanguage] || experience.data : ""
    }</span>
      </div>
  </div>
</div>
`;
    isRight = !isRight; // Change the side for the next iteration
  });
  experienceContainer.innerHTML = experienceHTML;

  /* ===== SCROLL REVEAL ANIMATION ===== */
  const srtop = ScrollReveal({
    origin: "top",
    distance: "80px",
    duration: 1000,
    reset: true,
  });

  /* SCROLL EXPERIENCE */
  srtop.reveal(".experience .timeline", { delay: 400 });
  srtop.reveal(".experience .timeline .container", { interval: 400 });
}

// We have a pre-loader before mounting the page
document.addEventListener("DOMContentLoaded", async function () {
  document.getElementById("loader-container").style.display = "flex";

  allExperience = await getExperience("experience");
  toggleLanguage();
  showExperience("it");
  // getExperience().then((data) => {
  //   showExperience(data);

  // Disattiva il pre-loader quando il caricamento è completo
  document.getElementById("loader-container").style.display = "none";
});
// });

// disable developer mode
document.onkeydown = function (e) {
  if (e.key == 123) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.key == "I".charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.key == "C".charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.key == "J".charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.key == "U".charCodeAt(0)) {
    return false;
  }
};
