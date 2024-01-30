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

    // scroll spy
    $("section").each(function () {
      let height = $(this).height();
      let offset = $(this).offset().top - 200;
      let top = $(window).scrollTop();
      let id = $(this).attr("id");

      if (top > offset && top < offset + height) {
        $(".navbar ul li a").removeClass("active");
        $(".navbar").find(`[href="#${id}"]`).addClass("active");
      }
    });
  });

  // // smooth scrolling
  // $('a[href*="#"]').on("click", function (e) {
  //   e.preventDefault();
  //   $("html, body").animate(
  //     {
  //       scrollTop: $($(this).attr("href")).offset().top,
  //     },
  //     500,
  //     "linear"
  //   );
  // });
});

document.addEventListener("visibilitychange", function () {
  if (document.visibilityState === "visible") {
    // if (language === "en") {
    //   document.title = "Portfolio's | Pasquale Cicinelli";
    //   $("#favicon").attr("href", "assets/images/favicon.png");
    // } else {
    document.title = "Portfolio | Pasquale Cicinelli";
    $("#favicon").attr("href", "assets/images/favicon.png");
    //   }
  } else {
    //   if (language === "en") {
    //     document.title = "Come back to Portfolio";
    //     $("#favicon").attr("href", "assets/images/favhand.png");
    //   } else {
    document.title = "Torna indietro al Portfolio";
    $("#favicon").attr("href", "assets/images/favhand.png");
  }
  // }
});

// <!-- typed js effect starts for It and En-->
function initTyped(selector, strings) {
  var typed = new Typed(selector, {
    strings: strings,
    loop: true,
    typeSpeed: 100,
    backSpeed: 25,
    backDelay: 500,
  });
}
// <!-- typed js effect ends -->

// TOGGLE LANGUAGE IT OR EN
document
  .querySelectorAll('[data-lang="en"]')
  .forEach((element) => (element.style.display = "none"));
var currentLanguage = "it";

function toggleLanguage() {
  var elementsIt = document.querySelectorAll('[data-lang="it"]');
  var elementsEn = document.querySelectorAll('[data-lang="en"]');

  if (currentLanguage === "en") {
    elementsIt.forEach(function (element) {
      element.style.display = "none";
      element.style.opacity = "0";
    });

    elementsEn.forEach(function (element) {
      element.style.display = "";
      element.style.opacity = "1";
      element.style.transform =
        "matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1)";
      element.style.transition =
        "all 0.2s linear 0s, opacity 1s cubic-bezier(0.5, 0, 0, 1) 0.2s, transform 1s cubic-bezier(0.5, 0, 0, 1) 0.2s;";
    });
    currentLanguage = "it";
  } else if (currentLanguage === "it") {
    elementsEn.forEach(function (element) {
      element.style.display = "none";
      element.style.opacity = "0";
    });

    elementsIt.forEach(function (element) {
      element.style.display = "";
      element.style.opacity = "1";
    });

    currentLanguage = "en";
  }
}

document.getElementById("language").addEventListener("click", function (event) {
  event.preventDefault();

  if (event.target.tagName === "A") {
    toggleLanguage();
  }
});

async function fetchData(type = "skills") {
  let response;
  if (type === "skills") {
    response = await fetch("skills.json");
  } else if (type === "projects") {
    response = await fetch("./projects/projects.json");
  } else if (type === "experience") {
    response = await fetch("./experience/experience.json");
  }
  const data = await response.json();
  return data;
}

function showSkills(skills) {
  let skillsContainer = document.getElementById("skillsContainer");
  let skillHTML = "";
  skills.forEach((skill) => {
    skillHTML += `
        <div class="bar">
              <div class="info">
                <img src=${skill.icon} alt="skill" />
                <span>${skill.name}</span>
              </div>
            </div>`;
  });
  skillsContainer.innerHTML = skillHTML;

  /* ===== SCROLL REVEAL ANIMATION ===== */
  const srtop = ScrollReveal({
    origin: "end",
    distance: "40px",
    duration: 1000,
    reset: true,
  });
  /* SCROLL SKILLS */
  // srtop.reveal(".skills .container", { interval: 200 });
  srtop.reveal(".skills .container .bar", {
    interval: 150,
    beforeReveal: (domEl) => {
      domEl.style.opacity = 1;
      domEl.style.transform = "translateY(0)";
    },
  });
}

function showProjects(projects) {
  let projectsContainer = document.querySelector("#work .box-container");
  let projectHTML = "";
  projects
    .slice(0, 6)
    .filter((project) => project.category != "android")
    .forEach((project) => {
      projectHTML += `
        <div class="box tilt">
      <img draggable="false"
       src="./assets/images/projects/${project.image}.png" 
       alt="project" />
      <div class="content">
        <div class="tag">
        <h3>${project.name}</h3>
        </div>
        <div class="desc">
          <p>${project.desc}</p>
          <div class="btns">
            <a href="${project.links.view}" class="btn ${
        project.links.view ? "" : "disabled"
      }"
       target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="${
              project.links.code
            }" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>`;
    });
  projectsContainer.innerHTML = projectHTML;

  // <!-- tilt js effect starts -->
  VanillaTilt.init(document.querySelectorAll(".tilt"), {
    max: 15,
  });
  // <!-- tilt js effect ends -->

  /* ===== SCROLL REVEAL ANIMATION ===== */
  const srtop = ScrollReveal({
    origin: "top",
    distance: "80px",
    duration: 1000,
    reset: true,
  });

  /* SCROLL PROJECTS */
  srtop.reveal(".work .box", { interval: 200 });
}

function showExperience(experience) {
  let experienceContainer = document.querySelector("#experience .timeline");
  let experienceHTML = "";
  let isRight = true;

  experience.forEach((experience) => {
    // .slice(0, 4)
    if (experience.show) {
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
    }
  });
  experienceContainer.innerHTML = experienceHTML;

  /* SCROLL EXPERIENCE */
  srtop.reveal(".experience .timeline", { delay: 400 });
  srtop.reveal(".experience .timeline .container", { interval: 400 });
}

// We have a pre-loader before mounting the page
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("loader-container").style.display = "flex";
  fetchData().then((data) => {
    // Make the call to change the language
    toggleLanguage();

    showSkills(data);
    // Disattiva il pre-loader quando il caricamento è completo
    document.getElementById("loader-container").style.display = "none";
  });

  fetchData("projects").then((data) => {
    showProjects(data);
  });

  fetchData("experience").then((data) => {
    showExperience(data);
  });
});

// <!-- tilt js effect starts -->
VanillaTilt.init(document.querySelectorAll(".tilt"), {
  max: 15,
});
// <!-- tilt js effect ends -->

// Inizializza Typed.js per la lingua italiana
initTyped(".typing-text-it", [
  "frontend development",
  "backend development",
  "web development",
]);

// Inizializza Typed.js per la lingua inglese
initTyped(".typing-text-en", [
  "frontend development",
  "backend development",
  "web development",
]);

// pre loader start
// function loader() {
//     document.querySelector('.loader-container').classList.add('fade-out');
// }
// function fadeOut() {
//     setInterval(loader, 500);
// }
// window.onload = fadeOut;
// pre loader end

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

/* ===== SCROLL REVEAL ANIMATION ===== */
const srtop = ScrollReveal({
  origin: "top",
  distance: "80px",
  duration: 1000,
  reset: true,
});

/* SCROLL HOME */
srtop.reveal(".home .content h3", { delay: 200 });
srtop.reveal(".home .content p", { delay: 200 });
srtop.reveal(".home .content .btn", { delay: 200 });

srtop.reveal(".home .image", { delay: 400 });
srtop.reveal(".home .linkedin", { interval: 600 });
srtop.reveal(".home .github", { interval: 800 });
// srtop.reveal(".home .twitter", { interval: 1000 });
// srtop.reveal(".home .telegram", { interval: 600 });
// srtop.reveal(".home .instagram", { interval: 600 });
srtop.reveal(".home .dev", { interval: 600 });

/* SCROLL ABOUT */
srtop.reveal(".about .content h3", { delay: 200 });
srtop.reveal(".about .content .tag", { delay: 200 });
srtop.reveal(".about .content p", { delay: 200 });
// srtop.reveal(".about .content p [data-lang='en']", { delay: 200 });
srtop.reveal(".about .content .box-container", { delay: 200 });
srtop.reveal(".about .content .resumebtn", { delay: 200 });

/* SCROLL SKILLS */
srtop.reveal(".skills .container", { interval: 200 });
// srtop.reveal(".skills .container .bar", { delay: 400 });

/* SCROLL EDUCATION */
srtop.reveal(".education .box", { interval: 200 });

/* SCROLL PROJECTS */
// srtop.reveal(".work .box", { interval: 200 });

/* SCROLL EXPERIENCE */
// srtop.reveal(".experience .timeline", { delay: 400 });
// srtop.reveal(".experience .timeline .container", { interval: 400 });
