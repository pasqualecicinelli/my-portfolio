<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords"
        content="pasquale cicinelli, portfolio, pasquale, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio" />
    <meta name="description" content="Welcome to pasquale's Portfolio. Full-Stack Web Developer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id="favicon" rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-png" />
    <title>Portfolio | Pasquale Cicinelli</title>
</head>

<body oncontextmenu="return false">
    <?php include './counter.php'; ?>

    <!-- pre loader -->
    <div class="loader-container" id="loader-container">
        <img draggable="false" src="./assets/images/preloader.gif" alt="" />
    </div>

    <!-- navbar starts -->
    <header>
        <a href="./" class="logo fav">
            <img class="logo-img" src="./assets/images/favicon-pc.png" alt="logo-name" />
            Pasquale
        </a>

        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
                <li><a class="active" href="#home">Home</a></li>
                <li data-lang="it"><a href="#about">Chi sono</a></li>
                <li data-lang="en"><a href="#about">About</a></li>
                <li data-lang="it"><a href="#skills">Abilità</a></li>
                <li data-lang="en"><a href="#skills">Skills</a></li>
                <li data-lang="it"><a href="#education">Formazione</a></li>
                <li data-lang="en"><a href="#education">Education</a></li>
                <li data-lang="it"><a href="#work">Progetti</a></li>
                <li data-lang="en"><a href="#work">Projects</a></li>
                <li data-lang="it"><a href="#experience">Esperienze</a></li>
                <li data-lang="en"><a href="#experience">Experience</a></li>
                <li data-lang="it"><a href="#contact">Contatti</a></li>
                <li data-lang="en"><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a class="nav-link"><span data-filter="en" data-lang="en">Language</span>
                        <span data-filter="it" data-lang="it">Lingua</span>
                        <i class="fas fa-chevron-down"></i></a>
                    <ul name="language" id="language">
                        <li>
                            <a data-filter="it" data-lang="en">Italiano</a>
                            <a data-filter="en" data-lang="it">English</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!-- navbar ends -->

    <!-- hero section starts -->
    <section class="home" id="home">
        <div id="particles-js"></div>

        <div class="content">
            <h2 data-lang="it">
                Ciao,<br />
                sono Pasquale <span>Cicinelli</span>
            </h2>
            <h2 data-lang="en">
                Hello,<br />
                I'm Pasquale <span>Cicinelli</span>
            </h2>
            <p>
                <span class="go-down" data-lang="it">mi occupo di </span>
                <span class="go-down" data-lang="en">I am into </span>
                <span class="typing-text"></span>
            </p>
            <!-- <p data-lang="en">I am into <span class="typing-text-en"></span></p> -->
            <a href="#about" class="btn"><span data-lang="it">Chi sono?</span>
                <span data-lang="en">Who am I?</span>
                <i class="fas fa-arrow-circle-down"></i>
            </a>
            <div class="socials">
                <ul class="social-icons">
                    <li>
                        <a class="linkedin" aria-label="LinkedIn"
                            href="https://www.linkedin.com/in/pasquale-cicinelli-64885b174/" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a class="github" aria-label="GitHub" href="https://github.com/pasqualecicinelli"
                            target="_blank"><i class="fab fa-github"></i></a>
                    </li>
                </ul>
            </div>
            <p class="visit-counter" data-lang="it">
                Visite al portfolio: <span class="counter-value">0</span>
            </p>

            <p class="visit-counter" data-lang="en">
                Portfolio visits: <span class="counter-value">0</span>
            </p>
        </div>
        <div class="image">
            <img draggable="false" class="tilt" src="./assets/images/hero.png" alt="" />
        </div>
    </section>
    <!-- hero section ends -->

    <!-- about section starts -->
    <section class="about" id="about">
        <h2 class="heading">
            <i class="fas fa-user-alt"></i>
            <span data-animation="rotate-storm" data-lang="it">
                Chi
                <span data-animation="rotate-storm">sono?</span></span>
            <span data-animation="rotate-storm" data-lang="en">
                Who
                <span data-animation="rotate-storm">am I?</span></span>
        </h2>
        <p class="quote">
            <span data-lang="it">Per conoscere veramente una persona, non limitatevi ad ascoltare le
                sue parole, ma osservate con attenzione le sue azioni.
                <span>
                    È nell'operare che si manifesta la vera essenza di un
                    individuo</span></span>
            <span data-lang="en">
                To truly know a person, don't just listen to their words, but observe
                their actions carefully.
                <span>
                    It is in their actions that the true essence of an individual is
                    revealed</span></span>
        </p>

        <div class="row">
            <div class="image">
                <img draggable="false" class="tilt" src="./assets/images/profile1.jpg" alt="image profile" />
            </div>
            <div class="content">
                <h3>
                    <span data-lang="it">Sono Pasquale</span>
                    <span data-lang="en">I am Pasquale</span>
                </h3>
                <span class="tag">Junior Full Stack Web Developer</span>

                <p>
                    <span data-lang="it">Inseguo gli obiettivi con l'entusiasmo di sempre, impegnandomi
                        costantemente nella crescita personale e professionale.
                        Sviluppatore web appassionato, cerco continuamente nuove sfide per
                        affinare le mie competenze e creare soluzioni innovative.</span>
                    <span data-lang="en">I pursue goals with the same enthusiasm, constantly engaging in
                        personal and professional growth. A passionate web developer, I
                        continually seek new challenges to refine my skills and create
                        innovative solutions.</span>
                </p>

                <div class="box-container">
                    <!-- <div class="box">
              <p><span> age: </span> 34</p>
              <p><span> phone : </span> +91 XXX-XXX-XXXX</p>
            </div> -->
                    <div class="box">
                        <p><span> email : </span> pasquale.cicinelli89@gmail.com</p>
                        <p>
                            <span data-lang="it">
                                città : <span>Bari, Italia - 70019</span></span>

                            <span data-lang="en">
                                city : <span>Bari, Italy - 70019</span></span>
                        </p>
                    </div>
                </div>

                <div class="resumebtn">
                    <a href="https://drive.google.com/file/d/1mPsou3XfK_iZ-bCXmfwRdvbACmIkTD3T/view?usp=sharing"
                        target="_blank" class="btn"><span data-lang="it">Curriculum vitae</span>
                        <span data-lang="en">Resume</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends -->

    <!-- skills section starts -->
    <section class="skills" id="skills">
        <h2 class="heading" data-lang="it">
            <i class="fas fa-cog" data-animation="rotate"></i> Abilità &
            <span>Capacità</span>
        </h2>
        <h2 class="heading" data-lang="en">
            <i class="fas fa-cog" data-animation="rotate"></i> Skills &
            <span>Capabilities</span>
        </h2>
        <p class="quote" data-lang="it">
            Le abilità e capacità sono le chiavi per aprire le porte
            dell'innovazione,
            <span>trasformando codice in soluzioni straordinarie e dando vita a idee
                rivoluzionarie</span>
        </p>
        <p class="quote" data-lang="en">
            Skills and capabilities are the keys to unlock the doors of innovation,
            <span>transforming code into extraordinary solutions and bringing
                revolutionary ideas to life</span>
        </p>

        <div class="container">
            <div class="row" id="skillsContainer">
                <!-- <div class="bar">
              <div class="info">
                <img src="https://img.icons8.com/color/48/000000/adobe-xd.png"/>
                <span>AdobeXD</span>
              </div>
            </div> -->
            </div>
        </div>
    </section>
    <!-- skills section ends -->

    <!-- education section starts -->
    <section class="education" id="education">
        <h1 class="heading" data-lang="it">
            <i class="fas fa-graduation-cap" data-animation="rotate-up-down"></i> La
            mia <span>Formazione</span>
        </h1>

        <h1 class="heading" data-lang="en">
            <i class="fas fa-graduation-cap" data-animation="rotate-up-down"></i> My
            <span>Education</span>
        </h1>

        <p class="quote" data-lang="it">
            L’educazione non è l’apprendimento dei fatti,
            <span> ma l’allenamento della mente a pensare</span>
        </p>

        <p class="quote" data-lang="en">
            Education is not the learning of facts,
            <span> but the training of the mind to think</span>
        </p>

        <div class="box-container">
            <div class="box">
                <div class="content">
                    <h3>Boolean</h3>
                    <p class="certificate">Full Stack Web Developer</p>
                    <p data-lang="it">
                        Corso della durata di 6 mesi dove ho appreso varie tecnologie sia
                        lato front-end che back-end, costruendo siti web responsive,
                        aggiungendo iterazioni alle pagine, interrogando database, creando
                        applicazioni web. Lavorando sia in autonomia che anche in gruppo
                        concludendo con un progetto finale
                    </p>
                    <p data-lang="en">
                        A 6-month course where I learned various technologies both
                        front-end and back-end, building responsive websites, adding
                        interactions to pages, querying databases, and creating web
                        applications. Worked both independently and in groups, concluding
                        with a final project
                    </p>
                    <h4>2023</h4>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3 data-lang="it">Comune di Mazzarrà Sant’Andrea</h3>
                    <p class="certificate" data-lang="it">Dattilografia</p>
                    <h3 data-lang="en">Municipality of Mazzarrà Sant’Andrea</h3>
                    <p class="certificate" data-lang="en">Typing</p>
                    <p data-lang="it">
                        Durata di 200 ore, argomenti: il sistema scolastico italiano post
                        riforma, la tastiera, il software per dattilografia esercitazioni
                        di battitura
                    </p>
                    <p data-lang="en">
                        Duration of 200 hours, topics: the Italian school system
                        post-reform, the keyboard, typing software, typing exercises
                    </p>
                    <h4>2020</h4>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>Salvemini</h3>
                    <p class="certificate">Coding</p>
                    <p data-lang="it">
                        Durata di 150 ore, argomenti: pensiero computazionale, funzione
                        educativa normativa scolastica, coding, strategie e sviluppo delle
                        competenze didattiche
                    </p>
                    <p data-lang="en">
                        Duration of 150 hours, topics: computational thinking, normative
                        educational function, coding, strategies, and development of
                        didactic skills
                    </p>
                    <h4>2020</h4>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img draggable="false" src="./assets/images/educat/uni.jpg" alt="University" />
                </div>
                <div class="content">
                    <h3 data-lang="it">Università degli Studi di Bari Aldo Moro</h3>
                    <p class="certificate" data-lang="it">
                        Informatica e Comunicazione Digitale
                    </p>
                    <p data-lang="it">
                        Frequenza universitaria che ha plasmato la mia mentalità per
                        affrontare con entusiasmo le sfide in continua evoluzione di
                        questo campo dinamico
                    </p>
                    <h3 data-lang="en">University of Bari Aldo Moro</h3>
                    <p class="certificate" data-lang="en">
                        Computer Science and Digital Communication
                    </p>
                    <p data-lang="en">
                        University attendance that shaped my mindset to face with
                        enthusiasm the challenges in this dynamically evolving field
                    </p>
                    <h4>2010 - 2014</h4>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3 data-lang="it">Ecdl 7 moduli</h3>
                    <p class="certificate" data-lang="it">Patente europea</p>
                    <h3 data-lang="en">ECDL 7 Modules</h3>
                    <p class="certificate" data-lang="en">
                        European PC driving license
                    </p>
                    <h4>2009</h4>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img draggable="false" src="./assets/images/educat/itc-2.avif" alt="High school" />
                </div>
                <div class="content">
                    <h3>A. De Viti De Marco</h3>
                    <p class="certificate" data-lang="it">
                        Istituto tecnico e commerciale
                    </p>
                    <p data-lang="it">
                        Diploma Ragioniere perito commerciale e programmatore
                    </p>
                    <p class="certificate" data-lang="en">
                        Technical and Commercial Institute
                    </p>
                    <p data-lang="en">
                        Graduation in Accounting and Commercial Programming
                    </p>

                    <h4>2003 - 2008</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- education section ends -->

    <!-- work project section starts -->
    <section class="work" id="work">
        <h2 class="heading" data-lang="it">
            <i class="fas fa-laptop-code" data-animation="climb-and-slide"></i>
            Progetti <span>realizzati</span>
        </h2>
        <h2 class="heading" data-lang="en">
            <i class="fas fa-laptop-code" data-animation="climb-and-slide"></i>
            Projects <span>completed</span>
        </h2>
        <p class="quote" data-lang="it">
            I progetti narrano la storia <span>di questo lungo percorso</span>
        </p>
        <p class="quote" data-lang="en">
            Projects tell the story <span>of this long journey</span>
        </p>

        <div class="box-container">
            <!-- <div class="box tilt">
      <img draggable="false" src="./assets/images/projects/Portfolio.PNG" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Portfolio Website</h3>
        </div>
        <div class="desc">
          <p>Personal portfolio website. Don't need much info about it, just scroll down. You're here only!</p>
          <div class="btns">
            <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/pasqualecicinelli/my-portfolio" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div> -->
        </div>

        <div class="viewall">
            <a href="./projects/" class="btn"><span data-lang="it"> Tutti i progetti</span>
                <span data-lang="en"> All Projects</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>
    <!-- work project section ends -->

    <!-- experience section starts STATICO
<section class="experience" >

  <h2 class="heading"><i class="fas fa-briefcase"></i> Esperienze </h2>

  <div class="timeline">

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>Boolean prova</h2>
        </div>
        <div class="desc">
            <h3>Jr Full Stack Web Developer Trainee</h3>
            <p>Giugno 2023 - Dicembre 2023</p>
        </div>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>Mapstreak Flyseas</h2>
        </div>
        <div class="desc">
            <h3>Web Developer | Internship</h3>
            <p>June 2021 - Dec 2021</p>
        </div>
      </div>
    </div>
  </div>

  <div class="morebtn">
    <a href="/experience/index.html" class="btn"><span>Tutte le Esperienze</span>
      <i class="fas fa-arrow-right"></i>
  </a>
  </div>

</div>

</section>-->
    <!-- experience section ends -->

    <!-- experience section starts -->
    <section class="experience" id="experience">
        <h2 class="heading" data-lang="it">
            <i class="fas fa-briefcase" data-animation="walk"></i> Esperienze
        </h2>
        <h2 class="heading" data-lang="en">
            <i class="fas fa-briefcase" data-animation="walk"></i> Experience
        </h2>
        <p class="quote" data-lang="it">
            Ogni sfida è un'opportunità di acquisire nuove competenze e arricchire
            il bagaglio di conoscenze
        </p>
        <p class="quote" data-lang="en">
            Every challenge is an opportunity to acquire new skills and enrich the
            baggage of knowledge.
        </p>
        <div class="timeline"></div>
        <div class="morebtn">
            <a href="./experience/" class="btn"><span data-lang="it">Tutte le Esperienze</span>
                <span data-lang="en">All Experience</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>
    <!-- experience section ends -->

    <!-- footer section starts -->
    <section class="footer" id="contact">
        <div class="box-container">
            <div class="box">
                <h3 data-lang="it">Portfolio Pasquale</h3>
                <h3 data-lang="en">Pasquale's portfolio</h3>
                <p data-lang="it">
                    Grazie per avere visitato il sito web del mio portfolio personale.
                    Connettiti con me sui social. <br />
                    <br />
                    Puoi anche connetterti 👨‍💻 con me inviando una e-mail 📬
                </p>
                <p data-lang="en">
                    Thank you for visiting my personal portfolio website. Connect with
                    me on social media. <br />
                    <br />
                    You can also get in touch 👨‍💻 by sending an email 📬
                </p>
            </div>

            <div class="box">
                <h3 data-lang="it">Link veloci</h3>
                <h3 data-lang="en">Fast Link</h3>
                <ul>
                    <li>
                        <a href="#home"><i class="fas fa-chevron-circle-right"></i> Home</a>
                    </li>
                    <li data-lang="it">
                        <a href="#about"><i class="fas fa-chevron-circle-right"></i> Chi sono</a>
                    </li>
                    <li data-lang="en">
                        <a href="#about"><i class="fas fa-chevron-circle-right"></i> About</a>
                    </li>
                    <li data-lang="it">
                        <a href="#skills"><i class="fas fa-chevron-circle-right"></i> Abilità</a>
                    </li>
                    <li data-lang="en">
                        <a href="#skills"><i class="fas fa-chevron-circle-right"></i> Skills</a>
                    </li>
                    <li data-lang="it">
                        <a href="#education"><i class="fas fa-chevron-circle-right"></i> Formazione</a>
                    </li>
                    <li data-lang="en">
                        <a href="#education"><i class="fas fa-chevron-circle-right"></i> education</a>
                    </li>
                    <li data-lang="it">
                        <a href="#work"><i class="fas fa-chevron-circle-right"></i> Progetti</a>
                    </li>
                    <li data-lang="en">
                        <a href="#work"><i class="fas fa-chevron-circle-right"></i> Projects</a>
                    </li>
                    <li data-lang="it">
                        <a href="#experience"><i class="fas fa-chevron-circle-right"></i> Esperienze</a>
                    </li>
                    <li data-lang="en">
                        <a href="#experience"><i class="fas fa-chevron-circle-right"></i> Experience</a>
                    </li>
                </ul>
            </div>

            <div class="box">
                <h3 data-lang="it">Informazioni di contatto</h3>
                <h3 data-lang="en">Contact information</h3>

                <p><i class="fas fa-phone"></i>+39 XXX-XXX-XXXX</p>
                <p class="email">
                    <i class="fas fa-envelope"></i>pasquale.cicinelli89@gmail.com
                </p>
                <p data-lang="it">
                    <i class="fas fa-map-marked-alt"></i>Bari, Italia-70019
                </p>
                <p data-lang="en">
                    <i class="fas fa-map-marked-alt"></i>Bari, Italy-70019
                </p>
                <div class="share">
                    <a href="https://www.linkedin.com/in/pasquale-cicinelli-64885b174/" class="fab fa-linkedin"
                        aria-label="LinkedIn" target="_blank"></a>
                    <a href="https://github.com/pasqualecicinelli" class="fab fa-github" aria-label="GitHub"
                        target="_blank"></a>
                    <a href="mailto:pasquale.cicinelli89@gmail.com" class="fas fa-envelope" aria-label="Mail"
                        target="_blank"></a>
                    <!--
                <a href="https://twitter.com/pasquale_cicinelli" class="fab fa-twitter" aria-label="Twitter" target="_blank"></a>
              <a href="" class="fab fa-telegram-plane" aria-label="Telegram" target="_blank"></a>
              -->
                </div>
            </div>
        </div>

        <h1 class="credit">
            Copyright © 2024 <i class="fa fa-heart pulse"></i> by
            <a href="https://www.linkedin.com/in/pasquale-cicinelli-64885b174/">
                Pasquale Cicinelli</a>
        </h1>
    </section>
    <!-- footer section ends -->

    <!-- scroll top btn -->
    <a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
    <!-- scroll back to top -->

    <!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->

    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- typed.js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"
        integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- particle.js links -->
    <script src="./assets/js/particles.min.js"></script>
    <script src="./assets/js/app.js"></script>

    <!-- vanilla tilt.js links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"
        integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- scroll reveal anim -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

    <script src="./assets/js/script.js">
    </script>
    <script>
    const totalVisits = <?php echo $total_visits; ?>;
    </script>
    <!-- <script>
    // Call the function to test it
    document.addEventListener("DOMContentLoaded", async function() {

        updateVisitCounter();
    });
    

    //Set Visit
    function updateVisitCounter() {
        const visitCounters = document.querySelectorAll(".visit-counter");

        visitCounters.forEach((counter) => {
            const counterValue = counter.querySelector(".counter-value");

            // Dopo che il contatore ha raggiunto 100, aggiorna con il valore finale
            counterValue.textContent = totalVisits;
            animateCounter(counterValue, totalVisits, 2000);

        });
    }

    // Animate visit counter
    function animateCounter(element, finalValue, duration) {
        const stepTime = Math.floor(duration / 100); // Durata per ogni passo da 0 a 100
        let current = 0;

        const timer = setInterval(() => {
            if (current <= 100) {
                element.textContent = current;
                element.style.transform = "scale(1.2)";
                setTimeout(() => {
                    element.style.transform = "scale(1)";
                }, 50);
                current++;
            } else {
                clearInterval(timer);
                element.textContent = finalValue;
                element.style.transform = "scale(1.2)";
                setTimeout(() => {
                    element.style.transform = "scale(1)";
                }, 50);
            }
        }, stepTime);
    }
    </script> -->
</body>

</html>