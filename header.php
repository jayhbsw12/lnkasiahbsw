<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
  rel="stylesheet">
<!-- Include the CSS for intl-tel-input -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<!-- css files -->
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/about.css">
<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/testimonials.css">
<link rel="stylesheet" href="css/features-colored.css">
<!-- <link rel="stylesheet" href="css/navbar.scss"> -->
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/service-page.css">
<link rel="stylesheet" href="css/partners.css">
<link rel="stylesheet" href="css/pricing.css">
<link rel="stylesheet" href="css/thankyou.css">
<link rel="stylesheet" href="css/success-stories.css">
<link rel="stylesheet" href="css/single-story.css">
</head>

<body>

  <header class="sticky-nav">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img class="brand-mark" src="assets/images/logo.svg" alt="LNK ASIA logo">
        </a>

        <!-- Mobile toggle -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
          aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="mainNav">
          <?php $currentPage = $currentPage ?? ''; ?>
          <ul class="navbar-nav ms-lg-4 mb-2 mb-lg-0">
            <li class="nav-item"><a href="index.php" class="">Home</a></li>
            <li class="nav-item"><a class="" href="about-us.php">About Us</a>
            </li>

            <!-- <li class="nav-item dropdown">
              <a class="nav-link" href="service.php"
                id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
              <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                <li><a class="dropdown-item" href="#">Consulting</a></li>
                <li><a class="dropdown-item" href="#">Implementation</a></li>
                <li><a class="dropdown-item" href="#">Support</a></li>
              </ul>
            </li> -->

            <li class="nav-item"><a class="" href="service.php">Services</a></li>
            <li class="nav-item"><a class="" href="partners.php">Partners</a></li>
            <li class="nav-item"><a class="" href="success-stories.php">Success Stories</a></li>
            <li class="nav-item"><a class="" href="pricing.php">Pricing</a>
            </li>
          </ul>

          <!-- Right side: segmented + CTA -->
          <div class="ms-auto action-group">
            <div class="segmented">
              <a href="#" class="seg-link is-current">Sign-in</a>
              <a href="#" class="seg-link">Free Trial</a>
            </div>
            <a href="contact.php" class="btn btn-gradient btn-pill">Contact Us</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- <header class="sticky-nav">
    <nav class="navbar navbar-expand-lg">
      <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img class="brand-mark" src="assets/images/logo.svg" alt="LNK ASIA logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav align-middle">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>

          </ul>

        </div>
      </div>
    </nav>
  </header> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>