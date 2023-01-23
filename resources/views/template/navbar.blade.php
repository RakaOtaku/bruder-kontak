<link rel="stylesheet" href="node_modules/wow.js/css/libs/animate.css" />

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand wow bounceInDown" href="#">
          <img src="assets/image/logosmp.png" width="50px" height="auto" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto wow bounceInDown">
            <li class="nav-item mt-2 mr-4">
              <a class="nav-link {{ (request()->is('/home')) ? 'active' : '' }}" aria-current="page" href="/home">BERANDA</a>
            </li>
            <li class="nav-item mt-2 mr-4">
              <a class="nav-link" href="/about">TENTANG KAMI</a>
            </li>
            <li class="nav-item mt-2 mr-4 dropdown">
              <a class="nav-link" href="/program">PROGRAM</a>
            </li>
            <li class="nav-item mt-3">
              <a class="btn btn-primary" href="/kontak-kami" role="button">KONTAK KAMI</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <script src="assets/node_modules/wow.js/dist/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>