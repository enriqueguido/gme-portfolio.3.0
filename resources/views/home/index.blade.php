<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.header')
</head>

<body class="index-page">
  <!-- ============== Navbar =============== -->
  @extends('inc.navbar')
  <!-- ============= End Navbar =============== -->

  <!-- ============= Background for Homepage ============= -->
  <div class="wrapper">
    <div class="page-header background-main mobile-header x-header" style="background-image:url('')">
      <div class="squares square1"></div>
      <div class="squares square2"></div>
      <div class="squares square3"><img class="square3-img" src="../img/pexels-maryia-plashchynskaya-3565894.jpg" alt=""></div>
      <div class="squares square4"></div>
      <div class="squares square5"></div>
      <div class="squares square6"></div>
      <div class="squares square7 seven-mobile"></div>
      <div class="container">
        <div class="content-center brand">
          <div class="mouse-icon align-mouse"></div>
          <object type="image/svg+xml" data="../img/Group 28.svg" id="logo-name" alt="">
            <!-- Fall back img -->
            <img src="../img/Group 28.svg" alt="" id="logo-name">
          </object>
          <h1 class="text-white text-white-margin text-main">Designer | Developer</h1>
          <!-- <div class="content-center brand">
            <h1 class="h1-seo center-left mobile-size" id="changeText"></h1>
          </div> -->
          <p class="text-white text-white-margin text-sub-heading sub-index">I design and code beautifully simple things, and I love what I do.</p>
        </div>
      </div>
      <div class="home-grid grid-index-animate grid"><img class="grid-index-animate grid" src="../img/grid.png" alt=""></div>
      <!-- <img src="../img/triunghiuri.png" class="shapes triangle"> -->
      <!-- <img src="../img/waves.png" class="shapes wave"> -->
      <!-- ==================== Social Media Section =================== -->
      <div class="social-media-index index-linkedin">
        <a id="linkedin" class="btn btn-icon btn-linkedin btn-round linkedin-invert-background btn-index-social" data-toggle="tooltip" data-original-title="Follow me on LinkedIn!">
          <i class="fab fa-linkedin fa-linkedin-invert"></i>
        </a>
      </div>
      <div class="social-media-index index-github">
        <a id="github" class="btn btn-icon btn-github btn-round github-invert-background btn-index-social" data-toggle="tooltip" data-original-title="Check out my projects on GitHub!">
          <i class="fab fa-github fa-github-invert "></i>
        </a>
      </div>
      <!-- <div class="social-media-index">
        <a id="twitter" class="btn btn-icon btn-twitter btn-round twitter-invert-background btn-index-social" data-toggle="tooltip" data-original-title="Follow me on Twitter!">
          <i class="fab fa-twitter fa-twitter-invert"></i>
        </a>
      </div>
      <div class="social-media-index index-insta">
        <a id="instagran" class="btn btn-icon btn-instagram btn-round  instagram-invert-background btn-index-social" data-toggle="tooltip" data-original-title="Follow me on Instagram!">
          <i class="fab fa-instagram fa-instagram-invert"></i>
        </a>
      </div> -->
      <!-- ==================== Social Media Section End =================== -->
    </div>
  </div>
    <!-- ================ End of Background ================= -->

    <!-- ================ Tech Section ================== -->
  <div class="landing-page landing-skills">
    <div class="page-header landing-skills landing-mobile">
    <!-- ==============GitHub Section ==================== -->
      <div class="github-background-container">
        <i class="fab fa-github github-background-index"></i>
      </div>
    <!-- ==============GitHub Section End ==================== -->
      <div class="sec-margin-top margin-index-top">
        <!-- <div class="row justify-content-center"> -->
          <!-- <div class="col-lg-8 col-md-12 sec-margin-top"> -->
            <h1 class="text-center">My Skills</h1>
            <h4 class="description description-tech description-text">
              I am passionate aboute UX/UI design and love coding. I thrive when using technology to solve problems, and I am always up for a new challenge.
              Keep scrolling to find out more about me!
            </h4>
            <!-- <div class="btn-wrapper">
            </div> -->
          <!-- </div> -->
        <!-- </div> -->
    <!-- ========================== Progress Bars ============================= -->
        <!-- <div class="progress-index"> -->
        <div class="center-progress-left">
          <div class="progress-container progress-success progress-index">
            <span class="progress-badge">HTML &amp; CSS</span>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                <span class="progress-value">85%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="center-progress">
          <div class="progress-container progress-success progress-index right-progress">
            <span class="progress-badge">JavaScript, AJAX, JQuery, Bootstrap</span>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                <span class="progress-value">80%</span>
              </div>
            </div>
          </div>

          <div class="progress-container progress-success progress-index right-progress">
            <span class="progress-badge">Figma, Photoshop, Illustrator, Miro</span>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                <span class="progress-value">85%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="center-progress-left">
          <div class="progress-container progress-success progress-index">
            <span class="progress-badge">PostgreSQL, Heroku, Github</span>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                <span class="progress-value">70%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="center-progress-left">
          <div class="progress-container progress-success progress-index">
            <span class="progress-badge">Project Mgmt, Analytics Reporting, User Testing &amp; Research</span>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                <span class="progress-value">90%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="center-progress">
          <div class="progress-container progress-success progress-index right-progress">
            <span class="progress-badge">Zeplin, Jira, Slack &amp; Collaboration Tools</span>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                <span class="progress-value">95%</span>
              </div>
            </div>
          </div>

          <div class="progress-container progress-success progress-index right-progress">
            <span class="progress-badge">Ruby on Rails,Ruby, Laravel, PHP</span>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                <span class="progress-value">70%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="center-progress-left">
          <div class="progress-container progress-success progress-index">
            <span class="progress-badge">English, Spanish</span>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                <span class="progress-value">100%</span>
              </div>
            </div>
          </div>
        </div>
        <!-- ========================== Progress Bars End ============================= -->
      </div>
    <!-- </div> -->
    <!-- <img src="../img/blob.png" class="path"> -->
    <!-- <img src="../img/path2.png" class="path2"> -->
    <!-- <img src="../img/triunghiuri.png" class="shapes triangle triangle-mobile"> -->
    <!-- <img src="../img/waves.png" class="shapes wave"> -->
    <!-- <img src="../img/patrat.png" class="shapes squares"> -->
    <!-- <img src="../img/cercuri.png" class="shapes circle"> -->
    </div>
  </div>
      <!-- ============ End of Tech Section ============ -->

    <!-- ================ Features Section ===================== -->
  <div class="landing-page">
    <section class="section section-lg feature-padding section-pad">
      <img src="../img/path4.png" class="path">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <h1 class="text-center">Features Of My Digital Products</h1>
            <div class="row row-grid justify-content-center">
              <div class="col-lg-4">
                <div class="info">
                  <div class="icon icon-primary">
                    <i class="tim-icons icon-laptop"></i>
                  </div>
                  <h4 class="info-title">Fully Responsive</h4>
                  <hr class="line-primary">
                  <p>My web-apps work on any device.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="info">
                  <div class="icon icon-warning">
                    <i class="tim-icons icon-mobile"></i>
                  </div>
                  <h4 class="info-title">Functional</h4>
                  <hr class="line-warning">
                  <p>All my sites are fully functional and easy to use. </p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="info">
                  <div class="icon icon-success">
                    <i class="tim-icons icon-single-02"></i>
                  </div>
                  <h4 class="info-title">Custome</h4>
                  <hr class="line-success">
                  <p>My website are build custome to your needs.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="info">
                  <div class="icon icon-danger">
                    <i class="tim-icons icon-palette"></i>
                  </div>
                  <h4 class="info-title">Well Designed</h4>
                  <hr class="line-danger">
                  <p>My sites are aesthetically pleasing and design for the future.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="info">
                  <div class="icon icon-yellow">
                    <i class="tim-icons icon-html5"></i>
                  </div>
                  <h4 class="info-title">Clean Code</h4>
                  <hr class="line-yellow">
                  <p>I always write clean reliable code.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="info">
                  <div class="icon icon-blue">
                    <i class="tim-icons icon-key-25"></i>
                  </div>
                  <h4 class="info-title">Reliable & Secure</h4>
                  <hr class="line-blue">
                  <p>I build all my sites with realibility & security as my priority.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================ Features Section End ===================== -->

  <!-- =========== Work History =========== -->
    <section class="section section-lg padding-work-sec sec-padding-bottom">
      <!-- <section class="section"> -->
        <img src="../img/path4.png" class="path">
        <div class="container">
          <div class="row row-grid justify-content-between">
            <div class="col-md-5 mt-lg-5">
              <object type="image/svg+xml" data="../img/start_up.svg" id="left-slide" alt="Person juggling projects and icons">
                  <!-- Fall back img -->
                <img src="../img/start_up.svg" alt="Person juggling projects and icons">
              </object>
            </div>
            <div class="col-md-6">
              <div class="pl-md-5">
                <h1>Current
                  <br/>Experience</h1>
                <p>I acquired hands-on experience as a project coordinator and work with stakeholders and executives to understand and analyze project requirements, and manage projects from beginning to end while ensuring that the projects get accomplished within its due time, budget, and scope.</p>
                <br/>
                <p>I am in charge of creating reports in Salesforce for the executive team for several user metrics for their physcian portal, as well as the main contact for escalated complaints in the QM dept, among other duties.</p>
                <br/>
                <a href='{!! url('pages/about-me'); !!}' class="font-weight-bold text-info mt-5">See More <i class="tim-icons icon-minimal-right text-info"></i></a>
              </div>
            </div>
          </div>
        </div>
      <!-- </section> -->
    </section>
  <!-- ============== End of Work History ============== -->

  <!-- ======================= Experience Section ===================== -->

    <section class="section section-lg padding-experience">
      <section class="section">
        <img src="../img/path4.png" class="path">
        <div class="container">
          <div class="row row-grid justify-content-between">
            <div class="col-md-6">
              <div class="pl-md-5">
                <h1>Design &amp; Development
                  <br/>Experience</h1>
                <p>I Have worked hand-in-hand with founders to design fully responsive web-applications, prototypes, logos, pitch decks, business plans, financial projections, and much more.
                   I have valuable freelance experience that alloweds me to design user centric technology products that are data driven.</p>
                <br/>
                <p>My technical abilities in different programming languages such as JavaScript &amp; Ruby allows me to bring a product from ideation to conception.
                  Because of my programming expertise I work extremely well in all types of teams &amp; can bridge the gap between the technical and no-tecnical world.</p>
                <br/>
                <a href='{!! url('pages/about-me'); !!}' class="font-weight-bold text-info mt-5">See More <i class="tim-icons icon-minimal-right text-info"></i></a>
              </div>
            </div>
            <div class="col-md-5 mt-lg-5">
              <object type="image/svg+xml" data="../img/preoject_management.svg" class="" alt="Person juggling projects and icons">
                  <!-- Fall back img -->
                <img src="../img/preoject_management.svg" class="">
              </object>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>

  <!-- ======================= Experience Section End ===================== -->

  <!-- ================ Project Slide ===================== -->

  <div class="team-1 slide-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Projects Portfolio</h2>
          <h4 class="description">These are some of my previous projects.
            <br>Click on the projects' links to see more!</h4>
        </div>
      </div>
      <div class="row">
        <div id="carouselExampleControls" class="carousel slide carousel-team">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="title">Sparkly LLC</h1>
                  </div>
                  <div class="col-md-4">
                    <img class="d-block" src="../img/sparkly_logo_background.png" alt="First slide" height="500">
                  </div>
                  <div class="col-md-4">
                    <div class="wrapper">
                      <div class="category">
                        <strong>Type:</strong> Full stack development
                        <br> &amp; design work.
                        <br/>
                        <strong>Framework:</strong> Laravel
                      </div>
                      <div class="description">
                        Sparkly LLC is a cleaning company servicing the South Florida area. The owners of Sparkly requested design work consisting of the company logo, custom business cards, promotional marketing material, &amp; a website. Contact me or click on the project to find out more.
                      </div>
                      <div class="footer">
                        <a href="https://github.com/enriqueguido/sparkly_laravel_website" target="_blank" class="btn btn-icon btn-github btn-round"><i class="fab fa-github"></i></a>
                        <a href="https://cryptic-headland-45876.herokuapp.com/" target="_blank" class="btn btn-icon btn-round"><i class="fa tim-icons icon-link-72"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i class="fab fa-facebook-square"></i></a> -->
                        <!-- <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i class="fab fa-dribbble"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="title">WellCare Pediatrics</h1>
                  </div>
                  <div class="col-md-4">
                    <img class="d-block margin-img-left" src="../img/wellcare-logo-bandaid-background.png" alt="First slide" height="500">
                  </div>
                  <div class="col-md-4">
                    <div class="wrapper">
                      <div class="category">
                        <strong>Type:</strong> Front End
                        <br> &amp; design work.
                        <br/>
                        <strong>Framework:</strong> Laravel
                      </div>
                      <div class="description">
                        Wellcare is a landing page build on Laravels framework and design around the idea of a physician to create a unique pediatrics concierge medical practice. Please contact me or click on the project to find out more.
                      </div>
                      <div class="footer">
                        <a href="https://github.com/enriqueguido/WellCare" target="_blank" class="btn btn-icon btn-github btn-round"><i class="fab fa-github"></i></a>
                        <a href="https://salty-atoll-75507.herokuapp.com/" target="_blank" class="btn btn-icon btn-round"><i class="fa tim-icons icon-link-72"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i class="fab fa-facebook-square"></i></a> -->
                        <!-- <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i class="fab fa-dribbble"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="title">Genome Tech</h1>
                  </div>
                  <div class="col-md-4">
                    <img class="d-block margin-img-left" src="../img/Group 31.png" alt="First slide" height="500">
                  </div>
                  <div class="col-md-4">
                    <div class="wrapper">
                      <div class="category">
                        <strong>Type:</strong> Full Stack Development
                        <br> &amp; Design Work.
                        <br/>
                        <strong>Framework:</strong> Laravel
                      </div>
                      <div class="description">
                        Genome Technologies is a consulting group that assist physcians via genomics to provide their patients with personilized healthcare with the use of a platform and several proprietary exams. Build on Laravel with PHP &amp; following an MVC architecture, please click the GitHub button to review the code.
                      </div>
                      <div class="footer">
                        <a href="https://github.com/enriqueguido/genometechapp" target="_blank" class="btn btn-icon btn-github btn-round"><i class="fab fa-github"></i></a>
                        <a href="https://floating-temple-77823.herokuapp.com/" target="_blank" class="btn btn-icon btn-round"><i class="fa tim-icons icon-link-72"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i class="fab fa-facebook-square"></i></a> -->
                        <!-- <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i class="fab fa-dribbble"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="title">iStudy</h1>
                  </div>
                  <div class="col-md-4">
                    <img class="d-block margin-img-left" src="../img/Group 195.png" alt="First slide" height="500">
                  </div>
                  <div class="col-md-4">
                    <div class="wrapper">
                      <div class="category">
                        <strong>Type:</strong> Design Prototype
                        <br> &amp; UX Design Work.
                        <br/>
                        <strong>Framework:</strong> Figma
                      </div>
                      <div class="description">
                        Part of Udacity UX Design Program I created iLearn. UX research was performed and and Figma was used to create wireframes, high fidelity design mokups, and prototype. iLearn is a mobile application where students can find tutors in their area.
                      </div>
                      <div class="footer">
                        <a href="https://www.figma.com/proto/KRU2B2KtnxwzQ5zF4JnONq/iStudy-Prototype?node-id=1%3A5&scaling=scale-down" target="_blank" class="btn btn-icon btn-round"><i class="fa tim-icons icon-link-72"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i class="fab fa-facebook-square"></i></a> -->
                        <!-- <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i class="fab fa-dribbble"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="title">Wobblee</h1>
                  </div>
                  <div class="col-md-4">
                    <img class="d-block" src="../img/wobblee_logo_background.png" alt="First slide" height="500">
                  </div>
                  <div class="col-md-4">
                    <div class="wrapper">
                      <div class="category">
                        <strong>Type:</strong> Full stack development
                        <br/>
                        <strong>Framework:</strong> Ruby on rails
                      </div>
                      <div class="description">
                        Wobble is a sobriety test game where information is gathered about the user and timed random green bubbles are popped to calculate the reaction time to suggest if they had one too many alcoholic beverages. Contact me or click on the project to find out more.
                      </div>
                      <div class="footer">
                        <a href="https://github.com/galinap684/Wobblee-App" target="_blank" class="btn btn-icon btn-github btn-round"><i class="fab fa-github"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i class="fab fa-facebook-square"></i></a> -->
                        <!-- <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i class="fab fa-dribbble"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="title">GoWithMe</h1>
                  </div>
                  <div class="col-md-4">
                    <img class="d-block margin-img-left" src="../img/go_with_me_presentation_1.png" alt="First slide" height="500">
                  </div>
                  <div class="col-md-4">
                    <div class="wrapper">
                      <div class="category">
                        <strong>Type:</strong> Full stack development
                        <br/>
                        <strong>Framework:</strong> Ruby on rails
                      </div>
                      <div class="description">
                        Utilizing Eventbride API GoWithMe is a social platform that allows its users to find events &amp; connects them to those attending it to meet people &amp; make event arrangements. Click the GitHub button to review the code.
                      </div>
                      <div class="footer">
                        <a href="https://github.com/enriqueguido/with_me" target="_blank" class="btn btn-icon btn-github btn-round"><i class="fab fa-github"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i class="fab fa-facebook-square"></i></a> -->
                        <!-- <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i class="fab fa-dribbble"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="title">KeddyMe</h1>
                  </div>
                  <div class="col-md-4">
                    <img class="d-block margin-img-left" src="../img/KEDDYME Logo 2.png" alt="First slide" height="500">
                  </div>
                  <div class="col-md-4">
                    <div class="wrapper">
                      <div class="category">
                        <strong>Type:</strong> Design work &amp; other
                        <br/>
                        <strong>Framework:</strong> N/A
                      </div>
                      <div class="description">
                        KeddyMe is a startup company in the state of NY that is working on the creation of a mood based search engine. Through our partnership I assisted the founders with creative work such as company logo &amp; others. Please contact me to find out more.
                      </div>
                      <div class="footer">
                        <a href="javascript:;" target="_blank" class="btn btn-icon btn-github btn-round"><i class="fab fa-github"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i class="fab fa-facebook-square"></i></a> -->
                        <!-- <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i class="fab fa-dribbble"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <i class="tim-icons icon-minimal-left"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <i class="tim-icons icon-minimal-right"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- ================ Project Slide End ===================== -->

    <!-- =================== Email Section ==================== -->
    <div class="header header-5">
      <div class="page-header page-header-sec email-contact-sec index-contact page-header-contact">
        <div class="container">
          <div class="row align-items-center mt-md-5">
            <div class="col-lg-6 col-md-8 ml-auto mr-auto">
              <!-- <div class="logo"> -->
                <!-- <div class="logo-image"> -->
                  <img class="logo-cb-margin"src="../img/Group 27.svg" height="100" width="100">
                  <!-- <h2 class="cb-mail-contact">CodeBlock</h2> -->
                <!-- </div> -->
              <!-- </div> -->
              <h2 class="title text-left">Lets build something awesome together! Contact me to find out more.</h2>
<!-- =================== Display error message if contact form is not filled out completely ================== -->
             <?php if (count($errors) > 0): ?>
              <div class="alert alert-danger alert-with-icon index-alert">
                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
                <!-- <span data-notify="icon" class="tim-icons icon-support-17"></span> -->
                <img src="../img/Group 27.svg" alt="CodeBlock White Logo" style="width:30px;height:30px;" class="cb-alert-icon">
<!--================ Show error for each section that is not filled out and end loop ======================== -->
                <?php foreach ($errors->all() as $error): ?>
                  <span> {{ $error }} </span>
                <?php endforeach; ?>
              </div>
             <?php endif; ?>
 <!-- ======== Show success message if all areas of form are filled out and message was send out ========= -->
              <?php if ($message = Session::get('index')): ?>
               <div class="alert alert-success alert-with-icon index-alert">
                 <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                   <i class="tim-icons icon-simple-remove"></i>
                 </button>
                 <!-- <span data-notify="icon" class="tim-icons icon-bell-55"></span> -->
                 <img src="../img/Group 27.svg" alt="CodeBlock White Logo" style="width:30px;height:30px;" class="cb-alert-icon-success">
                 <span> {{ $message }} </span>
               </div>
              <?php endif; ?>

              <form role="form" method="post" action="{{ url('index/send') }}">
                {{ csrf_field() }}
                <div class="input-group">
                  <input type="text" name="email" class="form-control input-border-blue" placeholder="Enter your email here and I will contact you">
                  <div class="input-group-append">
                    <span class="input-group-text input-border-blue"><i class="tim-icons icon-lock-circle"></i></span>
                  </div>
                </div>
                <button type="submit" name="send" value"Send" class="btn btn-info btn-simple btn-icon btn-index-hover">
                  <i class="tim-icons icon-send"></i>
                </button>
              </form>
            </div>
            <div class="col-lg-4 ml-auto text-center">
              <div class="phone-container">
                <object type="image/svg+xml" data="../img/codeblock-mobile-home-page.svg" class="phone">
                    <!-- Your fall back here -->
                  <!-- <img src="image.svg" /> -->
                </object>
                <!-- <img src="../img/codeblock-mobile-home-page.svg" class="phone"> -->
              </div>
              <img src="../img/patrat.png" class="shape">
              <img src="../img/cercuri.png" class="shape2">
              <img src="../img/waves.png" class="shape3">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="mobile-empty">
    </div> -->
    <!-- =================== Email Section End ==================== -->

    <!-- ============ Footer with Social Media ============= -->
    <footer class="footer" data-background-color="black">
      @include('inc.footer')
    </footer>
    <!-- ============= End of Footer =========== -->

    <!--   Core JS Files   -->
    @extends('inc.js-footer')

</body>

</html>
