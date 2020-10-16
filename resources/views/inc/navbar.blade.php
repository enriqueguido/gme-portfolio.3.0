<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" rel="tooltip" title="Modern Web Applications Created by G.M.E" data-placement="bottom" target="_blank">
        <img href='{!! url('/'); !!}' src="../img/Group 27.svg" alt="CodeBlock White Logo" style="width:35px;"> <div class="header-name white">Web Portfolio</div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navigation">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a>
              <img src="../img/Group 27.svg" alt="CodeBlock Logo" class="" height="25" width="25">
              Web Portfolio
              <!-- <span>CodeBlock </span> -->
            </a>
          </div>
          <div class="col-6 collapse-close text-right">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
        </div>
      </div>
      <ul class="navbar-nav ml-auto">
        <li class="dropdown nav-item">
          <a href='{!! url('/'); !!}' class="nav-link">
            <!-- <i class="fa tim-icons icon-components d-lg-none d-xl-none"></i> Home -->
            <i class="fa tim-icons icon-components"></i> Home
          </a>
          <!-- <div class="dropdown-menu dropdown-with-icons">
            <a href="./index.html" class="dropdown-item">
              <i class="tim-icons icon-paper"></i> Components
            </a>
            <a href="./presentation.html" class="dropdown-item">
              <i class="tim-icons icon-bullet-list-67"></i>Presentation Page
            </a>
            <a href="https://demos.creative-tim.com/cb-design/docs/1.0/getting-started/overview.html" class="dropdown-item">
              <i class="tim-icons icon-book-bookmark"></i>Documentation
            </a>
          </div> -->
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
            <i class="tim-icons icon-tablet-2" aria-hidden="true"></i>
            <p>Portfolio</p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="https://salty-atoll-75507.herokuapp.com/" target="_blank">
              <i class="tim-icons icon-atom"></i> Genome Technologies
            </a>
            <a class="dropdown-item" href="" target="_blank">
              <i class="tim-icons icon-book-bookmark"></i> iStudy
            </a>
            <a class="dropdown-item" href="https://salty-atoll-75507.herokuapp.com/" target="_blank">
              <i class="tim-icons icon-app"></i> WellCare
            </a>
            <a class="dropdown-item" href="https://www.sparklyhouse.co" target="_blank">
              <i class="tim-icons icon-key-25"></i> Sparkly
            </a>
            <a class="dropdown-item" href="https://github.com/enriqueguido/with_me" target="_blank">
              <i class="tim-icons icon-align-left-2"></i> GoWithMe
            </a>
            <a class="dropdown-item" href="https://github.com/galinap684/Wobblee-App" target="_blank">
              <i class="tim-icons icon-user-run"></i> Wobblee
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
            <i class="tim-icons icon-book-bookmark" aria-hidden="true"></i>
            <p>Info</p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href='{!! url('pages/about-me'); !!}'>
              <i class="tim-icons icon-bulb-63"></i> About Me
            </a>
            <a class="dropdown-item" href='{!! url('pages/contact'); !!}'>
              <i class="tim-icons icon-square-pin"></i> Contact
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a href='{!! url('pages/blog-posts'); !!}' class=" nav-link">
            <i class="tim-icons icon-notes"></i> Blog Posts
          </a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/" target="_blank">
          <i class="fab fa-twitter"></i>
          <p class="hidden-lg-up">Twitter</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/" target="_blank">
          <i class="fab fa-facebook-square"></i>
          <p class="hidden-lg-up">Facebook</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/" target="_blank">
          <i class="fab fa-instagram"></i>
          <p class="hidden-lg-up">Instagram</p>
        </a>
      </li> -->
      </ul>
    </div>
  </div>
</nav>
