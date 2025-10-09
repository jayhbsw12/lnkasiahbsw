<?php include("header-top.php"); ?>
<?php $currentPage = 'contact';   // set to 'index', 'about', 'services', 'contact' per page ?>
<title>LNK Asia</title>
<meta name="description" content="">
<?php include("header.php"); ?>

<!-- Load intl-tel-input CSS (needed for flag dropdown UI) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css" />

<!-- Hero / Gradient Notch Section -->
<section class="hero-banner">
  <div class="hero-contact">
    <div class="square-box"><img src="assets/images/square.svg" alt="">
      <h4>Contact Us</h4>
    </div>
    <h1>Let's Do <span class="heading-gradient"> Awesome Things </span></h1>
  </div>
  <img src="assets/images/hero-bottom.svg" class="hero-bottom-shape" alt="">
</section>

<!-- Contact Content -->
<section class="contact-content">
  <div class="container">
    <p>Contact us about anything related to our company, services or demo and see <br> how <span
        class="heading-gradient">LNK ASIA TECHNOCRAFT </span> can give security and digital age to your <br>
      organization.</p>
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

      <!-- SIMPLE FORM: posts directly to mail.php -->
      <form id="contactForm" class="form-grid" action="mail.php" method="post" novalidate>
        <!-- Full width -->
        <div class="fg fg--full">
          <input type="text" class="inp" name="name" id="name" placeholder="Name*" required>
        </div>

        <!-- Phone (intl-tel-input) — keep it plain so the flag is clickable -->
        <div class="fg">
          <input type="tel" id="phone" class="inp" name="contact" placeholder="Phone Number*" required>
        </div>

        <!-- Email -->
        <div class="fg">
          <input type="email" class="inp" name="email" id="email" placeholder="Business Email*" required>
        </div>

        <!-- Company -->
        <div class="fg">
          <input type="text" class="inp" name="company" id="company" placeholder="Company*" required>
        </div>

        <!-- Subject -->
        <div class="fg">
          <input type="text" class="inp" name="subject" id="subject" placeholder="Subject*" required>
        </div>

        <!-- Message -->
        <div class="fg fg--full">
          <textarea class="inp inp--area" name="message" id="message" placeholder="Message*" required></textarea>
        </div>

        <!-- Hidden fields populated from intl-tel-input before submit -->
        <input type="hidden" name="phone_full" id="phone_full">
        <input type="hidden" name="phone_country" id="phone_country">
        <input type="hidden" name="phone_dial" id="phone_dial">

        <!-- Submit Button -->
        <div class="fg">
          <button class="btn-gradient" type="submit" id="submitBtn">Submit</button>
        </div>
      </form>
    </div>

    <!-- Right: MAP -->
    <div class="contact-map">
      <div class="map-wrap">
        <iframe src="https://www.google.com/maps?q=LNKASIA%20TECHSOL&output=embed" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
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
          <svg viewBox="0 0 24 24" width="28" height="28">
            <path d="M12 22s7-7.18 7-12a7 7 0 1 0-14 0c0 4.82 7 12 7 12z" fill="none" stroke="currentColor"
              stroke-width="1.8" />
            <circle cx="12" cy="10" r="2.5" fill="none" stroke="currentColor" stroke-width="1.8" />
          </svg>
        </div>
        <h4 class="card__title">Address</h4>
        <img class="contact-shape-1" src="assets/images/contact-shape.svg" alt="contact-shape">
        <p class="card__text">
          Skywalk the element, 402, Jagatpur Rd, beside Ganesh Glory 11 Road,
          near BSNL Office, Jagatpur, Ahmedabad, Gujarat 382481
        </p>
      </article>

      <!-- Card 2 -->
      <article class="card card-2">
        <div class="card__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="28" height="28">
            <path
              d="M22 16.92v2a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.2 2 2 0 0 1 4.11 2h2a2 2 0 0 1 2 1.72c.12.86.31 1.7.58 2.5a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.58-1.17a2 2 0 0 1 2.11-.45c.8.27 1.64.46 2.5.58A2 2 0 0 1 22 16.92z"
              fill="currentColor" />
          </svg>
        </div>
        <h4 class="card__title">Contact number</h4>
        <img class="contact-shape-2" src="assets/images/contact-shape.svg" alt="contact-shape">
        <p class="card__text">Need immediate assistance? Feel free to call us at</p>
        <a href="tel:+919913063991">
          <p class="card__highlight">+91 9913063991</p>
        </a>
      </article>

      <!-- Card 3 -->
      <article class="card card-3">
        <div class="card__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="28" height="28">
            <path d="M4 6h16a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm0 0 8 6 8-6" fill="none"
              stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <h4 class="card__title">Send us an email</h4>
        <img class="contact-shape-3" src="assets/images/contact-shape.svg" alt="contact-shape">
        <p class="card__text">We're committed to assisting you every step of the way.</p>
        <a href="mailto:example@gmail.com">
          <p class="card__highlight">example@gmail.com</p>
        </a>
      </article>

    </div>
  </div>
</section>

<!-- Minimal toast (red) -->
<div id="toast"
  style="position:fixed;right:16px;top:-80px;z-index:9999;min-width:260px;max-width:92vw;background:#ff4d4f;color:#fff;padding:12px 16px;border-radius:8px;box-shadow:0 6px 18px rgba(0,0,0,.15);font-size:14px;line-height:1.4;opacity:.95;transition:transform .35s ease;transform:translateY(-20px);">
  <span id="toastMsg"></span>
</div>

<!-- Scoped fixes so the widget is fully interactive -->
<style>
  .iti {
    width: 100%;
  }

  /* control fills the form grid cell */
  .iti__country-list {
    z-index: 99999;
  }

  /* dropdown above everything */
  /* Make sure nothing overlays the input/flag */
  input#phone {
    position: relative;
  }
</style>

<script>
  function showToast(msg) {
    var box = document.getElementById('toast'), txt = document.getElementById('toastMsg');
    if (!box || !txt) return;
    txt.textContent = msg;
    box.style.top = '16px';
    box.style.transform = 'translateY(0)';
    setTimeout(function () { box.style.transform = 'translateY(-20px)'; box.style.top = '-80px'; }, 3000);
  }
</script>

<!-- intl-tel-input JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
  // Initialise intl-tel-input on the plain phone input
  var phoneInput = document.getElementById("phone");
  var iti = window.intlTelInput(phoneInput, {
    preferredCountries: ["in", "us", "gb"],
    separateDialCode: true,
    nationalMode: false,           // collect full international format (E.164)
    initialCountry: "in",
    dropdownContainer: document.body,
    autoPlaceholder: "polite",
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
  });

  // Client-side validation + populate hidden fields
  document.getElementById('contactForm').addEventListener('submit', function (e) {
    var f = e.target;

    var name = f.name.value.trim(),
      email = f.email.value.trim(),
      company = f.company.value.trim(),
      subject = f.subject.value.trim(),
      message = f.message.value.trim();

    var emailOK = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(email);

    var phoneFull = iti.getNumber();              // e.g. +9198xxxxxxx
    var countryData = iti.getSelectedCountryData(); // {dialCode,name,...}

    if (!name || !email || !company || !subject || !message || !phoneFull) {
      e.preventDefault(); showToast('Please fill all required fields.'); return;
    }
    if (!emailOK) {
      e.preventDefault(); showToast('Please enter a valid email address.'); return;
    }
    if (!iti.isValidNumber()) {
      e.preventDefault(); showToast('Please enter a valid phone number.'); return;
    }

    document.getElementById('phone_full').value = phoneFull;
    document.getElementById('phone_country').value = (countryData && countryData.name) ? countryData.name : '';
    document.getElementById('phone_dial').value = (countryData && countryData.dialCode) ? ('+' + countryData.dialCode) : '';
  });

  // Show server error returned via ?error=...
  (function () {
    var p = new URLSearchParams(window.location.search);
    var err = p.get('error');
    if (err) { showToast(decodeURIComponent(err)); }
  })();
</script>

<?php include("footer.php"); ?>