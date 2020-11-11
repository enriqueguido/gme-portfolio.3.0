<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.header')
</head>

<body class="blog-post">

  <!-- ============== Navbar =============== -->
  @extends('inc.navbar')
  <!-- ============= End Navbar =============== -->

  <!-- =============== Intro background photo =============== -->
  <div class="wrapper">
    <div class="page-header page-header-mobile header-filter">
      <div class="page-header-image" data-parallax="true" data-dark-overlay="6" style="background-image: url('../img/about-me.jpg');"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h1 class="title">Let's Talk About Me!</h1>
            <div class="author">
              <img src="../img/profile-image-1.jpeg" alt="..." class="avatar img-raised about-me-profile">
            </div>
            <br/>
            <h4 class="description">Guido Maximiliano Enrique</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ================== Intro background photo =================== -->

  <!-- ================== About me info section =================== -->
  <div class="page-header page-header-mobile about-me-header">
    <!-- <img src="../img/dots.png" class="dots"> -->
    <img src="../img/path4.png" class="path about-me-path">
    <div class="container align-items-center">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <h1 class="profile-title text-left profile-name-align">Who I am</h1>
          <h5 class="text-on-back">01</h5>
          <p class="profile-description">I was born in Buenos Aires, Argentina and currently residing in South Florida, Fort Lauderdale area. A tech lover at heart with an analytical mind and an eye for detail. I love creative work & building things, which is why I spend most of my free time drawing, painting, playing video games, & building things on my laptop. I am dedicated and committed to perfecting my craft, ambitious, driven, and results-oriented. I love problem-solving and finding fixes with technology.</p>
          <div class="btn-wrapper profile pt-3 pad-wrapper">
            <a target="_blank" href="https://twitter.com/maxstang21" class="btn btn-icon btn-twitter btn-round" data-toggle="tooltip" data-original-title="Follow me on Twitter">
              <i class="fab fa-twitter"></i>
            </a>
            <a target="_blank" href="https://www.instagram.com/code_monkey01/" class="btn btn-icon btn-instagram btn-round" data-toggle="tooltip" data-original-title="Follow me on Instagram">
              <i class="fab fa-instagram"></i>
            </a>
            <a target="_blank" href="https://www.linkedin.com/in/guido-maximiliano-enrique/" class="btn btn-icon btn-linkedin  btn-round" data-toggle="tooltip" data-original-title="Follow me on LinkedIn">
              <i class="fab fa-linkedin"></i>
            </a>
            <a target="_blank" href="https://github.com/enriqueguido" class="btn btn-icon btn-github btn-round" data-toggle="tooltip" data-original-title="Follow me on GitHub">
              <i class="fab fa-github"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-coin card-plain">
            <div class="card-header">
              <img src="../img/profile-pic.jpeg" class="img-center img-fluid rounded-circle">
              <h4 class="title title-center">What I Do</h4>
            </div>
            <div class="card-body">
              <ul class="nav nav-tabs nav-tabs-primary justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active about-me-nav-color" data-toggle="tab" href="#linka">
                    Technologies
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link about-me-nav-color" data-toggle="tab" href="#linkb">
                    PM Work
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#linkc">
                    PM Work
                  </a>
                </li> -->
              </ul>
              <div class="tab-content tab-subcategories">
                <div class="tab-pane active" id="linka">
                  <div class="table-responsive">
                    <table class="table tablesorter " id="plain-table">
                      <thead class=" text-primary">
                        <tr>
                          <th class="header">
                            BACK-END
                          </th>
                          <th class="header">
                            FRONT-END
                          </th>
                          <th class="header">
                            DESIGN TOOLS
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Ruby/Ruby on Rails
                          </td>
                          <td>
                            HTML
                          </td>
                          <td>
                            Figma
                          </td>
                        </tr>
                        <tr>
                          <td>
                            PHP/Laravel
                          </td>
                          <td>
                            CSS
                          </td>
                          <td>
                            Balsamic
                          </td>
                        </tr>
                        <tr>
                          <td>
                            PostgreSQL
                          </td>
                          <td>
                            JavaSript/JS Libraries
                          </td>
                          <td>
                            Adobe Tools
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane" id="linkb">
                  <div class="row">
                    <div class="about-me-pm-text">
                      I have taken on paid projects, which give me not only the opportunity to build the site but gain experience in contract negotiation and managed the project in its entirety. I am well versed in Agile Methodology, Lean Startup Methodology, weekly sprint schedules, standup meetings, user stories, acceptance criteria, and many modern project management tools like Jira, Slack, Google suite, & much more. Contact me to find out more!
                    </div>
                    <!-- <label class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter your name here">
                        <span class="form-text">Please enter your name here.</span>
                      </div>
                    </div> -->
                  </div>
                  <!-- <div class="row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter an email address">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-simple btn-primary btn-icon btn-round float-right"><i class="tim-icons icon-send"></i></button> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==================== About me info section end ================ -->

  <!-- ================= About me second info section =============== -->
  <div class="section">
    <img src="../img/path5.png" class="about-me-path2">
     <div class="container">
       <div class="row justify-content-between">
         <div class="col-md-6">
           <object type="image/svg+xml" data="../img/about-me-sec-two.svg" id="" alt="Business person walking on arrow">
               <!-- Fall back img -->
             <img src="../img/about-me-sec-two.svg" alt="Business person walking on arrow">
           </object>
         </div>
         <div class="col-md-5">
           <h1 class="profile-name-align text-left">Why choose me</h1>
           <h5 class="text-on-back">02</h5>
           <p class="profile-description text-left">I have gained a diverse set of skills in both business and the IT world along with sound knowledge of several programming languages/frameworks, which help me attain hands-on experience developing web applications. I pride myself on having excellent communication skills, helping me to work well among diverse teams, and allowing me to explain complex technical concepts in layman terms, bridging the gap between business and IT. I have learned database design and development, along with the ability to develop graphical user interfaces. I can do custom design work for any of your projects utilizing Adobe suite tools like Photoshop and Illustrator, and many other frameworks.</p>
           <!-- <div class="btn-wrapper pt-3">
             <button href="javascript:void(0)" class="btn btn-simple btn-primary">
               <i class="tim-icons icon-book-bookmark"></i> Bookmark
             </button>
             <button href="javascript:void(0)" class="btn btn-simple btn-info">
               <i class="tim-icons icon-bulb-63"></i> Check it!
             </button>
           </div> -->
         </div>
       </div>
     </div>
   </div>
  <!-- ================= About me second info section end ================ -->

  <!-- ==================== Experience section ================= -->
  <div class="projects-2 project-raised experience-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ml-auto mr-auto text-center mb-5">
          <h2 class="title">Experience</h2>
          <div class="section-space"></div>
        </div>
      </div>
      <!-- <ul class="nav nav-pills nav-pills-primary nav-pills-icons nav-pills-lg" role="tablist">
        <li class="nav-item m-auto">
          <a class="nav-link active" data-toggle="tab" href="#project1" role="tablist">
            <i class="tim-icons icon-spaceship"></i> Project 1
          </a>
        </li>
        <li class="nav-item m-auto">
          <a class="nav-link" data-toggle="tab" href="#project2" role="tablist">
            <i class="tim-icons icon-bag-16"></i> Project 2
          </a>
        </li>
        <li class="nav-item m-auto">
          <a class="nav-link" data-toggle="tab" href="#project3" role="tablist">
            <i class="tim-icons icon-light-3"></i> Project 3
          </a>
        </li>
        <li class="nav-item m-auto">
          <a class="nav-link" data-toggle="tab" href="#project4" role="tablist">
            <i class="tim-icons icon-molecule-40"></i> Project 4
          </a>
        </li>
        <li class="nav-item mx-auto">
          <a class="nav-link" data-toggle="tab" href="#project5" role="tablist">
            <i class="tim-icons icon-planet"></i> Project 5
          </a>
        </li>
      </ul> -->
      <div class="tab-content tab-space">
        <!-- <div class="tab-pane active" id="project1"> -->
          <div class="row mt-5">
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-image h-auto">
                  <img class="img rounded" src="../img/mdvip.jpg" style="height:262.5px;">
                </div>
                <div class="card-body text-left">
                  <div class="card-footer mt-0">
                    <div class="author">
                      <span>MDVIP Project Coordinator</span>
                      <div class="about-me-work">
                        Manage projects from beginning to end, in charge of complaint resolutions, Streamlined processes & wrote 3 S.O.P's. In Charge of providing user & physician metrics & analytics to the executive team & HR department, among other duties. I am, as well, in charge of researching, developing, & contacting all partnership inquiries from outside companies.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-image h-auto">
                  <img class="img rounded" src="../img/macneill-group.jpg" style="height:262.5px;">
                </div>
                <div class="card-body text-left">
                  <div class="card-footer mt-0">
                    <div class="author">
                      <!-- <img src="assets/img/Tim.png" alt="..." class="avatar img-raised"> -->
                      <span>CISR Agent</span>
                      <div class="about-me-work">
                        Acquired a CISR designation in the insurance industry, and worked closely with team leaders to process endorsements and/or changes within the approved authority level and perform transactions, according to the latest corporate standards, manual rates, guidelines, and procedures.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-image h-auto">
                  <img class="img rounded" src="../img/pnc-bank.jpeg" style="height:262.5px;">
                </div>
                <div class="card-body text-left">
                  <div class="card-footer mt-0">
                    <div class="author">
                      <!-- <img src="assets/img/Tim.png" alt="..." class="avatar img-raised"> -->
                      <span>PNC Bank Backup Teller Supervisor</span>
                      <div class="about-me-work">
                        At PNC BANK I was a Back-Up Teller Supervisor in a DeNovo Branch. I was in charge of various tasks that ranged from full control of the bank vault, the bank’s ATM’s and all of its corresponding duties, deposits and withdrawal, opening and closing functions, and calling prospective clients as well as businesses for future partnerships.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-image h-auto">
                  <img class="img rounded" src="../img/bank-of-america.jpg" style="height:262.5px;">
                </div>
                <div class="card-body text-left">
                  <div class="card-footer mt-0">
                    <div class="author">
                      <!-- <img src="assets/img/Tim.png" alt="..." class="avatar img-raised"> -->
                      <span>Bank of America Teller</span>
                      <div class="about-me-work">
                        At Bank of America, I was a Teller and always met and surpass performance, and sales goals, maintained cash accuracy, made deposits and withdrawals, CTR’s, and currency exchanges while making each customer feel valued, important, and deserving of the best service possible.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-image h-auto">
                  <img class="img rounded" src="../img/startup.jpg" style="height:262.5px;">
                </div>
                <div class="card-body text-left">
                  <div class="card-footer mt-0">
                    <div class="author">
                      <!-- <img src="assets/img/Tim.png" alt="..." class="avatar img-raised"> -->
                      <span>Startup</span>
                      <div class="about-me-work">
                        Won Palm Beach Startup Weekend 2015, attended FAU Startup Bootcamp, learned lean startup methodologies, and took part in several projects that give me unique experiences and knowledge that can not be thought in the classroom. I have worked with CEOs/Founders to turn their ideas into creative work and worked closely with them to design pitch decks, business plans, and assisted in several other stages of their business.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-image h-auto">
                  <img class="img rounded" src="../img/coming-son.png" style="height:262.5px;">
                </div>
                <div class="card-body text-left">
                  <div class="card-footer mt-0">
                    <div class="author">
                      <!-- <img src="assets/img/Tim.png" alt="..." class="avatar img-raised"> -->
                      <span>Stay tuned</span>
                      <div class="about-me-work">
                        I am always taking on new projects and finding new ways to better myself and perfect my craft. Stay tuned to see more experience.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- </div> -->
      </div>
    </div>
  </div>
  <!-- ==================== Experience section end ================= -->

  <!-- ===================== Education section ================== -->
  <div class="ed-sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mr-auto ml-auto text-center mb-5">
          <h2 class="title">Education</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header mt-2">
              <div class="float-left">
                <i class="tim-icons icon-tag d-inline text-info"></i>
                <p class="d-inline">2020</p>
              </div>
            </div>
              <div class="card-body text-center p-4">
                <a href="http://www.broward.edu/Pages/home.aspx" target="_blank">
                  <img src="../img/broward_college.jpg" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
                </a>
                <h4 class="card-title mb-0">Broward College</h4>
                <p class="card-description">Pursuing a bachelors degree in Information Technology with a minors in Business Administration.</p>
                <h5 class="card-title mt-4">Bachelors Information Technology</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header mt-2">
                <div class="float-left">
                  <i class="tim-icons icon-tag d-inline text-success"></i>
                  <p class="d-inline">2020</p>
                </div>
              </div>
              <div class="card-body text-center p-4">
                <a href="https://www.udacity.com/course/ux-designer-nanodegree--nd578" target="_blank">
                  <img src="../img/Udacity-logo_small.png" alt="Circle image" class="img-fluid rounded-circle shadow experience-circle-pic" style="width: 100px;">
                </a>
                <h4 class="card-title mb-0">Udacity</h4>
                <p class="card-description">Learned UX Fund, Design Research, Concept to Low-Fidelity Prototyping, High-Fidelity Prototyping to Post-Launch Analysis.</p>
                <h5 class="card-title mt-4">UX Designer.</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header mt-2">
                <div class="float-left">
                  <i class="tim-icons icon-tag d-inline text-success"></i>
                  <p class="d-inline">2017</p>
                </div>
              </div>
              <div class="card-body text-center p-4">
                <a href="https://wyncode.co/" target="_blank">
                  <img src="../img/Wyncode.png" alt="Circle image" class="img-fluid rounded-circle shadow experience-circle-pic" style="width: 100px;">
                </a>
                <h4 class="card-title mb-0">Wyncode Academy</h4>
                <p class="card-description">Completed 350 hours of instruction in Ruby, Ruby on Rails, SQL, JavaScript, HTML, CSS, and Agile Project Management.</p>
                <h5 class="card-title mt-4">Full Stack Web Development.</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header mt-2">
                <div class="float-left">
                  <i class="tim-icons icon-tag d-inline text-danger"></i>
                  <p class="d-inline">2015</p>
                </div>
              </div>
              <div class="card-body text-center p-4">
                <a href="http://www.broward.edu/Pages/home.aspx" target="_blank">
                  <img src="../img/broward_college.jpg" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
                </a>
                <h4 class="card-title mb-0">Broward College</h4>
                <p class="card-description">Received a certificate from Broward College as part of completing my undergraduate work.</p>
                <h5 class="card-title mt-4">Certified Accounting Technology Specialist</h5>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-4">
            <div class="card">
              <div class="card-header mt-2">
                <div class="float-left">
                  <i class="tim-icons icon-tag d-inline text-warning"></i>
                  <p class="d-inline">2015</p>
                </div>
              </div>
              <div class="card-body text-center p-4">
                <a href="http://www.broward.edu/Pages/home.aspx">
                  <img src="../img/broward_college.jpg" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
                </a>
                <h4 class="card-title mb-0">Broward College</h4>
                <p class="card-description">Received a certificate from Broward College as part of completing my undergraduate work.</p>
                <h5 class="card-title mt-4">Business Specialist Certification</h5>
              </div>
            </div>
          </div> -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-header mt-2">
                <div class="float-left">
                  <i class="tim-icons icon-tag d-inline text-primary"></i>
                  <p class="d-inline">2015</p>
                </div>
              </div>
              <div class="card-body text-center p-4">
                <a href="http://www.broward.edu/Pages/home.aspx">
                  <img src="../img/broward_college.jpg" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
                </a>
                <h4 class="card-title mb-0">Broward College</h4>
                <p class="card-description">Received a certificate from Broward College as part of completing my undergraduate work.</p>
                <h5 class="card-title mt-4">Business Operations Certification</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header mt-2">
                <div class="float-left">
                  <i class="tim-icons icon-tag d-inline"></i>
                  <p class="d-inline">2015</p>
                </div>
              </div>
              <div class="card-body text-center p-4">
                <a href="http://www.broward.edu/Pages/home.aspx">
                  <img src="../img/broward_college.jpg" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
                </a>
                <h4 class="card-title mb-0">Broward College</h4>
                <p class="card-description">Received a certificate from Broward College as part of completing my undergraduate work.</p>
                <h5 class="card-title mt-4">Business Management Certification</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- ===================== Education section ================== end -->

  <!-- ================== Hire me section ===================== -->
  <div class="row">
    <div class="col-md-8 ml-auto mr-auto text-center mt-4">
      <h3 class="title">Interested in hiring me?</h3>
      <h4 class="description mb-5">If you got questions about my projects or need assitance with any work feel free to contact me at any time. <br> I'm here to help!</h4>
      <a href='{!! url('pages/contact'); !!}'><button type="submit" href='{!! url('/pages/contact'); !!}' class="btn btn-primary btn-primary-contact btn-round-contact btn-lg mrgn-bot-about">Contact Me</button></a>
    </div>
  </div>

  <!-- ================== Hire me section ===================== -->

    <!-- ============ Footer with Social Media ============= -->
    <footer class="footer" data-background-color="black">
      @include('inc.footer')
    </footer>
    <!-- ============= End of Footer =========== -->

    <!--   Core JS Files   -->
    @extends('inc.js-footer')
</body>

</html>
