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

//fetch experience start
function getExperience() {
  return fetch("experience.json")
    .then((response) => response.json())
    .then((data) => {
      return data;
    });
}

function showExperience(experience) {
  let experienceContainer = document.querySelector("#experience .timeline");
  let experienceHTML = "";
  let isRight = true;

  experience.forEach((experience) => {
    experienceHTML += `
    <div class="container ${isRight ? "right" : "left"}">
  <div class="content">
    <div class="tag">
    <h2>${experience.company}</h2>
    </div>
    <div class="desc">
      <h3>${experience.type}</h3>
      <p>${experience.desc}</p>
       <span> ${experience.place} ${experience.data}</span>
      </div>
  </div>
</div>
`;
    isRight = !isRight; // Change the side for the next iteration
  });
  experienceContainer.innerHTML = experienceHTML;
}

// We have a pre-loader before mounting the page
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("loader-container").style.display = "flex";
  getExperience().then((data) => {
    showExperience(data);
    // Disattiva il pre-loader quando il caricamento è completo
    document.getElementById("loader-container").style.display = "none";
  });
});

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
