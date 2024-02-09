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

// Change favicon
document.addEventListener("visibilitychange", function () {
  if (document.visibilityState === "visible") {
    document.title = "Progetti | Portfolio Pasquale Cicinelli";
    $("#favicon").attr("href", "../assets/images/favicon.png");
  } else {
    document.title = "Torna indietro al Portfolio";
    $("#favicon").attr("href", "../assets/images/favhand.png");
  }
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
  showProjects(filterValue);
}

// fetch projects start
async function getProjects() {
  const response = await fetch("projects.json");
  const data = await response.json();
  return data;
}

// Create the document in html
function showProjects(currentLanguage) {
  let projectsContainer = document.querySelector("#work .box-container");
  let projectsHTML = "";
  projects.forEach((project) => {
    projectsHTML += `
        <div class="grid-item ${project.category}">
        <div class="box tilt" style="width: 320px; margin: 1rem">
      <img draggable="false"
      src="../assets/images/projects/${project.image}.png" alt="project" />
      <div class="content">
        <div class="tag">
        <h3>${project.name}</h3>
        </div>
        <div class="desc">
          <p>${project.desc[currentLanguage]}</p>
          <div class="btns">
            <a href="${project.links.view}" class="btn ${
      project.links.view ? "" : "disabled"
    }" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="${
              project.links.code
            }" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>
    </div>`;
  });
  projectsContainer.innerHTML = projectsHTML;

  // <!-- tilt js effect starts -->
  VanillaTilt.init(document.querySelectorAll(".tilt"), {
    max: 15,
  });
  // vanilla tilt.js

  // <!-- tilt js effect ends -->

  /* ===== SCROLL REVEAL ANIMATION ===== */
  const srtop = ScrollReveal({
    origin: "bottom",
    distance: "80px",
    duration: 1000,
    reset: true,
  });

  /* SCROLL PROJECTS */
  srtop.reveal(".work .box", { delay: 400 });
  srtop.reveal(".work .box", { interval: 200 });
}

// We have a pre-loader before mounting the page
document.addEventListener("DOMContentLoaded", async function () {
  document.getElementById("loader-container").style.display = "flex";

  projects = await getProjects("projects");
  showProjects("it");

  // Disable the pre-loader when loading is complete
  document.getElementById("loader-container").style.display = "none";
});

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
// Filter projects
document.querySelector("#filters").addEventListener("click", function (event) {
  if (event.target.tagName === "BUTTON") {
    const filterValue = event.target.getAttribute("data-filter");
    filterProjects(filterValue);
  }
});

function filterProjects(filterValue) {
  const gridItems = document.querySelectorAll(".grid-item");
  gridItems.forEach((item) => {
    if (
      filterValue === "*" ||
      item.classList.contains(filterValue.replace(".", ""))
    ) {
      item.style.display = "block";
    } else {
      item.style.display = "none";
    }
  });
}
