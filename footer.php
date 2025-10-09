<!-- Newsletter Section -->
<section class="newsletter-section py-5">
  <div class="container newsletter-container">
    <div class="row align-items-center g-4">
      <div class="col-md-6 news-left newsletter-left">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/left-section-background.png"
          alt="Left Background" class="newsletter-left-bg">
        <h3 class="newsletter-title">
          Empower your inbox with<br>
          <span class="gradient-text">AI insights</span>
        </h3>
        <p class="newsletter-description">
          Stay informed and inspired with exclusive content designed to help you leverage AI for success.
        </p>
        <!-- Newsletter form posts to mail.php as 'newsletter' -->
        <form class="newsletter-form" action="mail.php" method="post" novalidate>
          <input type="hidden" name="form_type" value="newsletter">
          <div class="input-group">
            <input type="email" name="email" placeholder="Your email" class="newsletter-input" required>
            <button type="submit" class="newsletter-submit">Subscribe</button>
          </div>
        </form>
      </div>
      <div class="col-md-6 text-center">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/right-section-image.png" alt="Right Image"
          class="img-fluid newsletter-right-image">
        <img src="assets/images/footer-vector.svg" class="footer-vector">
      </div>
    </div>
  </div>
</section>

<!-- Footer Section -->
<footer class="footer-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-12 col-md-3">
        <img src="assets/images/footer-vector-last.svg" class="footer-vector-last">
        <h6 class="footer-text">LNK ASIA</h6>
        <h4 class="footer-title">Useful Links</h4>
        <nav class="footer-nav d-flex flex-column">
          <a href="index.php" class="footer-link">Home</a>
          <a href="about-us.php" class="footer-link">About Us</a>
          <a href="service.php" class="footer-link">Services</a>
          <a href="partners.php" class="footer-link">Partners</a>
          <a href="scuccess-story.php" class="footer-link">Success stories</a>
          <a href="pricing.php" class="footer-link">Prices</a>
          <a href="contact-us.php" class="footer-link">Contact Us</a>
        </nav>
      </div>

      <div class="col-12 col-md-4">
        <h4>About Us</h4>
        <p>
          We are passionate about the client's success by adding value
          through consulting and technology implementation. End-to-end
          implementation experts who convert your vision into reality
          within a given timeline.
        </p>
        <p>We are DIPP recognized Startup.</p>
      </div>

      <div class="col-12 col-md-5 footer-last-call">
        <div class="footer-right-content mb-3">
          <h6>Let’s Bring <span class="gradient-text">Your Vision </span><br> to Life</h6>
        </div>
        <div class="footer-right-button mb-3">
          <button class="contact-btn-footer">Contact Us</button>
        </div>
        <p class="social_title-footer">Connect with us:</p>
        <div class="social-icons">
          <a href="#" class="social-icon"><img
              src="https://static.codia.ai/custom_image/2025-07-04/063005/social-icon-1.svg" alt="Social Icon 1"></a>
          <a href="#" class="social-icon"><img
              src="https://static.codia.ai/custom_image/2025-07-04/063005/social-icon-2.png" alt="Social Icon 2"></a>
          <a href="#" class="social-icon"><img
              src="https://static.codia.ai/custom_image/2025-07-04/063005/social-icon-3.svg" alt="Social Icon 3"></a>
          <a href="#" class="social-icon"><img
              src="https://static.codia.ai/custom_image/2025-07-04/063005/social-icon-4.png" alt="Social Icon 4"></a>
          <a href="#" class="social-icon"><img
              src="https://static.codia.ai/custom_image/2025-07-04/063005/social-icon-5.svg" alt="Social Icon 5"></a>
        </div>
        <h6 class="footer-text-bottom">Made with ❤️ by <a href="https://hbsoftweb.com/">HB Softweb Pvt. Ltd.</a></h6>
        <img src="assets/images/footer-vector-bottom.svg" class="footer-vector-bottom">
      </div>
    </div>
  </div>
</footer>
</main>

<!-- Lightweight Toast (appears on ?subscribed=1 or 0) -->
<div id="nl-toast" style="
  position: fixed; right: 16px; bottom: -80px; z-index: 99999;
  min-width: 260px; max-width: 92vw; padding: 12px 16px;
  color: #fff; border-radius: 8px;
  box-shadow: 0 6px 18px rgba(0,0,0,.15);
  font-size: 14px; line-height: 1.4; opacity: .97;
  transform: translateY(20px); transition: transform .35s ease, bottom .35s ease, opacity .35s ease;">
  <span id="nl-toast-msg"></span>
</div>
<style>
  /* Success & error colours */
  .nl-toast--ok  { background: #16a34a; }  /* green-600 */
  .nl-toast--err { background: #ef4444; }  /* red-500 */
  .nl-toast--show { bottom: 16px !important; transform: translateY(0) !important; }
</style>

<!-- Include the JS for intl-tel-input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="js/home.js"></script>
<script src="js/testimonial.js"></script>

<!-- Newsletter toast logic -->
<script>
(function () {
  try {
    var params = new URLSearchParams(window.location.search);
    if (!params.has('subscribed')) return;

    var ok = params.get('subscribed') === '1';
    var msg = params.get('msg') ? decodeURIComponent(params.get('msg')) : (ok
      ? 'Subscribed successfully! We will contact you soon!'
      : 'Subscription failed. Please try again.');

    var box = document.getElementById('nl-toast');
    var txt = document.getElementById('nl-toast-msg');
    if (!box || !txt) return;

    box.classList.remove('nl-toast--ok', 'nl-toast--err');
    box.classList.add(ok ? 'nl-toast--ok' : 'nl-toast--err');
    txt.textContent = msg;

    requestAnimationFrame(function () {
      box.classList.add('nl-toast--show');
      setTimeout(function () {
        box.style.opacity = '0';
        setTimeout(function () {
          box.classList.remove('nl-toast--show');
          box.style.opacity = '';
        }, 350);
      }, 3000);
    });

    // Remove query params so toast doesn't reappear on refresh
    var url = new URL(window.location.href);
    url.searchParams.delete('subscribed');
    url.searchParams.delete('msg');
    window.history.replaceState({}, '', url.toString());
  } catch (e) {
    // no-op
  }
})();
</script>

</body>
</html>
