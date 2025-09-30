<?php include("header-top.php"); ?>
<?php $currentPage = 'contact';   // set to 'index', 'about', 'services', 'contact' per page ?>
<title>LNK Asia</title>
<meta name="description" content="">
<?php include("header.php"); ?>

<!-- Hero / Gradient Notch Section -->
<section class="hero-banner">
  <div class="hero-contact">
        <div class="square-box"><img src="assets/images/square.svg"><h4>Contact Us</h4></div>
        <h1>Let's Do <span class="heading-gradient"> Awesome Things </span></h1>
  </div>
  <img src="assets/images/hero-bottom.svg" class="hero-bottom-shape">
</section>

<!-- Contact Content -->
 <section class="contact-content">
  <div class="container">
     <p>Contact us about anything related to our company, services or demo and see <br> how  <span class="heading-gradient">LNK ASIA TECHNOCRAFT </span> can give security and digital age to your <br> organization.</p>
  </div>
 </section>

 <!-- Contact + Map (1 row / 2 columns) -->
<section class="contact-map-row">
  <div class="contact-map-row__grid container">
    <!-- Left: FORM -->
    <div class="contact-form">
  <h3 class="contact-form__title">
    We'll do our best to get back to you as soon as possible.
  </h3>

  <form class="form-grid" action="#" method="post">
    <!-- Full width -->
    <div class="fg fg--full">
      <input type="text" class="inp" placeholder="Name*" required>
    </div>

    <!-- Phone number with flag dropdown -->
    <div class="fg">
  <label class="inp-prefix">
    <span class="prefix">
      <input type="tel" id="phone" class="inp inp--with-prefix" placeholder="Phone Number*" required>
    </span>
  </label>
</div>

    <!-- Email -->
    <div class="fg">
      <input type="email" class="inp" placeholder="Business Email*" required>
    </div>

    <!-- Company -->
    <div class="fg">
      <input type="text" class="inp" placeholder="Company*">
    </div>

    <!-- Subject -->
    <div class="fg">
      <input type="text" class="inp" placeholder="Subject*">
    </div>

    <!-- Message -->
    <div class="fg fg--full">
      <textarea class="inp inp--area" placeholder="Message"></textarea>
    </div>

    <!-- Submit Button -->
    <div class="fg">
      <button class="btn-gradient" type="submit">Submit</button>
    </div>
  </form>
</div>


    <!-- Right: MAP -->
    <div class="contact-map">
      <div class="map-wrap">
        <iframe
          src="https://www.google.com/maps?q=LNKASIA%20TECHSOL&output=embed"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          allowfullscreen
        ></iframe>
      </div>
    </div>
  </div>
</section>

<!-- Contact Details: 1 row / 3 columns -->
<section class="contact-cards">
  <div class="container">
    <div class="contact-cards__grid">

      <!-- Card 1 -->
      <article class="card card-1">
        <div class="card__icon" aria-hidden="true">
          <!-- location pin -->
          <svg viewBox="0 0 24 24" width="28" height="28">
            <path d="M12 22s7-7.18 7-12a7 7 0 1 0-14 0c0 4.82 7 12 7 12z" fill="none" stroke="currentColor" stroke-width="1.8"/>
            <circle cx="12" cy="10" r="2.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
          </svg>
        </div>
        <h4 class="card__title">Address</h4>
        <p class="card__text">
          Skywalk the element, 402, Jagatpur Rd, beside Ganesh Glory 11 Road,
          near BSNL Office, Jagatpur, Ahmedabad, Gujarat 382481
        </p>
      </article>

      <!-- Card 2 -->
      <article class="card card-2">
        <div class="card__icon" aria-hidden="true">
          <!-- phone -->
          <svg viewBox="0 0 24 24" width="28" height="28">
            <path d="M22 16.92v2a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.2 2 2 0 0 1 4.11 2h2a2 2 0 0 1 2 1.72c.12.86.31 1.7.58 2.5a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.58-1.17a2 2 0 0 1 2.11-.45c.8.27 1.64.46 2.5.58A2 2 0 0 1 22 16.92z" fill="currentColor"/>
          </svg>
        </div>
        <h4 class="card__title">Contact number</h4>
        <p class="card__text">Need immediate assistance? Feel free to call us at</p>
        <a href="tel:+919913063991"><p class="card__highlight">+91 9913063991</p></a>
      </article>

      <!-- Card 3 -->
      <article class="card card-3">
        <div class="card__icon" aria-hidden="true">
          <!-- mail -->
          <svg viewBox="0 0 24 24" width="28" height="28">
            <path d="M4 6h16a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm0 0 8 6 8-6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h4 class="card__title">Send us an email</h4>
        <p class="card__text">We're committed to assisting you every step of the way.</p>
        <a href="mailto:example@gmail.com"><p class="card__highlight">example@gmail.com</p></a>
      </article>

    </div>
  </div>
</section>

<!-- Initialize intl-tel-input -->
<script>

document.querySelector("#phone").addEventListener('click', function () {
    var itiDropdown = document.querySelector('.iti-arrow');
    if (itiDropdown && itiDropdown.getAttribute('aria-expanded') === 'false') {
      itiDropdown.click(); // Open the dropdown if it is closed
    }
  });

  var phoneInput = document.querySelector("#phone");
  intlTelInput(phoneInput, {
    preferredCountries: ["in", "us", "gb"],
    separateDialCode: true,
    initialCountry: "in",
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<?php include("footer.php"); ?>