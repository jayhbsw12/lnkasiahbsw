<?php include("header-top.php"); ?>
<?php $currentPage = 'index';   // set to 'index', 'about', 'services', 'contact' per page ?>
<title>LNK Asia</title>
<meta name="description" content="">
<style>
  /* -------- Grid skeleton (3 columns) -------- */

</style>
<?php include("header.php"); ?>
<section class="hero-section">
  <div class="hero-background">
    <div class="background-blur"></div>
    <div class="background-mask">
      <div class="background-svg"></div>
    </div>
  </div>

  <div class="container">
    <div class="hero-content">
      <div class="hero-text-section">
        <!-- What's New Badge -->
        <div class="whats-new-badge">
          <!-- <div class="badge-inner">
            <div class="status-indicator">
              <div class="status-dot"></div>
            </div>
            <span class="badge-text">What's new?</span>
          </div> -->
          <div class="badge-info">
             <div class="info-icon">
              <img src="https://static.codia.ai/custom_image/2025-07-02/084810/info-icon.svg" alt="Info">
            </div>
            <span class="info-text">Technology - Innovation - Excellence</span>
           
          </div>
        </div>

        <!-- Main Heading -->
        <div class="main-heading">
          <span class="heading-primary">Creating Technology </span><br>
          <span class="heading-gradient">For a Better Tomorrow</span>
        </div>

        <!-- Subheading -->
        <p class="hero-subtext">
          Your trusted partner for comprehensive IT solutions
        </p>
      </div>

      <!-- Email Signup -->
      <div class="email-signup-section">
        <div class="email-input-wrapper">
          <div class="email-input-container">
            <span class="placeholder-text">Enter your email address</span>
            <div class="get-started-btn">
              <span class="btn-text">Get Started</span>
            </div>
            <div class="arrow-icon">
              <img src="https://static.codia.ai/custom_image/2025-07-02/084810/arrow-icon.svg" alt="Arrow">
            </div>
          </div>
        </div>
        <div class="features-text">
          <span>Simple • Powerful • Secure</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Feature Graphic -->
  <div class="feature-graphic">
    <img src="https://static.codia.ai/custom_image/2025-07-02/084810/feature-graphic.png" alt="Feature Graphic">
  </div>

  <!-- Product Showcase -->
  <div class="product-showcase">
    <img src="https://static.codia.ai/custom_image/2025-07-02/084810/product-showcase.png" alt="Product Showcase" width="80%">
  </div>
</section>

<!-- Partners Section -->
<section class="partners-section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="partners-title">Recognized and supported by leading technology companies <br> and government initiatives for excellence in 
          innovation and business growth</h2>
        <div class="partners-logos">
          <div class="partner-logo">
            <img src="assets/images/partners/alendei from india logo.webp" alt="Partner 1">
          </div>
          <div class="partner-logo">
            <img src="assets/images/partners/AWS logo.webp" alt="Partner 2 Icon" class="partner-icon">
          </div>
          <div class="partner-logo">
            <img src="assets/images/partners/Microsoft partner logo.webp" alt="Partner 3">
          </div>
          <div class="partner-logo">
            <img src="assets/images/partners/odoo.png" alt="Partner 4">
          </div>
          <div class="partner-logo">
            <img src="assets/images/partners/Vagyanlabs logo.webp" alt="Partner 5">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="cta-container">
          <div class="cta-background">
            <img src="assets/images/cta-background.webp" alt="CTA Background">
          </div>
          <div class="cta-content">
            <div class="features-main-heading2">
              <span class="heading-primary">Ready to</span>
              <span class="heading-gradient-cta">Transform Your Technology Infrastructure?</span>
            </div>
            <a href="contact.php" class="btn btn-gradient btn-pill" bis_skin_checked="1">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ai-services-section">
  <div class="ai-services-holder">
    <img src="assets/images/home-vertical-shape.svg" alt="" class="vertical-shape-services">
    <div class="ai-services-top-holder">
      <div>
        <h2>Our Comprehensive<br>
          <span class="heading-gradient">Service Universe</span>
        </h2>
      </div>
      <div>
        <button class="cta-btn">
          <a href="service.php"><span class="cta-text">More about us</span></a>
        </button>
      </div>
    </div>
    <div class="sticky-services-1" style="z-index: 30">
      <div class="sticky-service-content-holder">
        <h4>Infrastructure Management Service</h4>
        <span><i class="fa-solid fa-check"></i> &nbsp; RIMS Remote Infrastructure Management</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp; PIE Backup Data Protection</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp; Server and Network Management</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp; 24/7 Help Desk Support</span>
      </div>
      <img src="assets/images/home-sticky-services-shape.svg" alt="">
    </div>
    <div class="sticky-services-1" style="z-index: 31">
      <div class="sticky-service-content-holder">
        <h4>Development Solutions</h4>
        <span><i class="fa-solid fa-check"></i> &nbsp; DevOps and Cloud Engineering</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp; Custom Application Development</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp; Technology Consulting Services</span>
      </div>
      <img src="assets/images/home-sticky-services-shape.svg" alt="">
    </div>
        <div class="sticky-services-1" style="z-index: 32" >
      <div class="sticky-service-content-holder">
        <h4>Digital Experience</h4>
        <span><i class="fa-solid fa-check"></i> &nbsp; CXaaS Customer Experience Solutions</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp; PicCloud Secure Storage Platform</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp; Digital Workspace Collaboration</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp; Regulatory Compliance Solutions</span>
      </div>
      <img src="assets/images/home-sticky-services-shape.svg" alt="">
    </div>
      <div class="sticky-services-1" style="z-index: 33">
      <div class="sticky-service-content-holder">
        <h4>Security Operations</h4>
        <span><i class="fa-solid fa-check"></i> &nbsp; Advanced threat detection and response systems</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp; Continuous security monitoring and compliance</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp; Incident response and recovery procedures</span>
      </div>
      <img src="assets/images/home-sticky-services-shape.svg" alt="">
    </div>  

     <div class="sticky-services-1" style="z-index: 34">
      <div class="sticky-service-content-holder">
        <h4>Infrastructure Management</h4>
        <span><i class="fa-solid fa-check"></i> &nbsp; Network optimization and performance tuning</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp; Server maintenance and capacity planning</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp; Storage management and backup solutions</span>
      </div>
      <img src="assets/images/home-sticky-services-shape.svg" alt="">
    </div> 

    <div class="sticky-services-1" style="z-index: 34">
      <div class="sticky-service-content-holder">
        <h4>Support Services</h4>
        <span><i class="fa-solid fa-check"></i> &nbsp; 24/7 technical support and troubleshooting</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp; User training and documentation services</span><br>
        <span><i class="fa-solid fa-check"></i> &nbsp;Remote assistance and problem resolution</span>
      </div>
      <img src="assets/images/home-sticky-services-shape.svg" alt="">
    </div>

  </div>
</section>
<!-- Features Section -->
<section class="features-section">
  <div class="container" style="padding: 0px 20px 0px 20px">
    <div class="features-content">
      <div class="features-left">
        <div class="bring-ai-life-row">
          <div class="section-indicator"></div>
          <h2 class="section-title how-it-works">How It works</h2>
        </div>
        <div class="features-main-heading">
          <span class="heading-primary">About </span>
          <span class="heading-gradient">LNK Asia Techsol</span>
        </div>

        <!-- Feature Items -->
        <div class="feature-item">
          <div class="feature-content">
            <p class="feature-description">
              <b>LNK Asia Techsol LLP </b> is a technology consulting company 
              incorporated in July 2022 in India. We focus on <b> creating 
              technology solutions for a better tomorrow,</b> specializing in <b>ERP 
              implementation, digital transformation,</b> and <b> IT consulting </b> services
              across Asia Pacific region.
            </p>
          </div>
        </div>

        <div class="feature-item">
          <div class="feature-content">
            <p class="feature-description">
              We are MSME startup established in 2022, specializing in 
              <b> IT/ITES services.</b> Our emerging digital technologies build
               stronger capabilities and seize growth opportunities in
                today's digital economy.
            </p>
          </div>
        </div>

        <!-- CTA Button -->
        <div class="features-cta">
          <button class="cta-btn">
            <a href="about-us.php"><span class="cta-text">More about us</span></a>
          </button>
        </div>
      </div>

      <div class="features-right">
        <div class="app-interface-container">
          <img src="https://static.codia.ai/custom_image/2025-07-02/084810/app-interface.png" alt="App Interface"
            class="app-interface">

          <!-- Phone Mockup -->
          <div class="phone-mockup">
            <div class="phone-container">
              <div class="phone-screen">
                <img src="https://static.codia.ai/custom_image/2025-07-02/084810/phone-screen.svg" alt="Phone Screen">
              </div>
              <!-- <div class="phone-side">
                    <img src="https://static.codia.ai/custom_image/2025-07-02/084810/phone-side.svg" alt="Phone Side">
                  </div> -->
            </div>
          </div>

          <!-- Experience Badge -->
          <div class="experience-badge">
            <div class="experience-number">
              <span class="number-white">20</span>
              <span class="number-red">+</span>
            </div>
            <div class="experience-text">
              Years combined <br> industry experience.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ft-hero position-relative overflow-hidden">
  <div class="ft-hero-bg"></div>

  <div class="container position-relative py-5">
    <div class="row align-items-center counter-title">
      <!-- Left Title -->
      <div class="col-12 col-lg-6 mb-4 mb-lg-0">
        <h1 class="ft-hero-heading mb-3">
          <span class="ft-hero-heading-normal">Every business </span><br>
          <span class="ft-hero-heading-normal">is more productive with</span><br>
          <span class="ft-hero-heading-gradient">LNK Asia Solutions</span>
        </h1>
      </div>

      <!-- Right Description -->
      <div class="col-12 col-lg-6 right-description-counters">
        <p class="ft-hero-description mb-0">
          Our dedicated team of ERP experts provides end-to-end support, ensuring seamless implementation
           and ongoing maintenance. With qualified IT experts, we digitize businesses, delivering innovative
            solutions that drive digital transformation.
        </p>
      </div>
    </div>

      <!-- Stats Section -->
    <div class="row text-md-start g-4 g-md-5 pt-5 counter-bg" style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 20px; margin: 0;">
      <!-- Counter 1 -->
  <div class="ft-stat">
    <div class="ft-stat-number"><span class="count" data-count="20" data-suffix="+" data-done="1">20+</span></div>
    <div class="ft-stat-label">Years Combined Industry Experience</div>
  </div>

  <!-- Counter 2 -->
  <div class="ft-stat">
    <div class="ft-stat-number"><span class="count" data-count="04" data-suffix="0" data-done="1">40</span></div>
    <div class="ft-stat-label">Continents Served</div>
  </div>

  <!-- Counter 3 -->
  <div class="ft-stat">
    <div class="ft-stat-number"><span class="count" data-count="100" data-suffix="+" data-done="1">100+</span></div>
    <div class="ft-stat-label">Successful Projects Delivered Globally</div>
  </div>

  <!-- Counter 4 -->
  <div class="ft-stat">
    <div class="ft-stat-number"><span class="count" data-count="50" data-suffix="TB+" data-done="1">50TB+</span></div>
    <div class="ft-stat-label">Data Secured</div>
  </div>

  <!-- Counter 5 -->
  <div class="ft-stat">
    <div class="ft-stat-number"><span class="count" data-count="100" data-suffix="+" data-done="1">100+</span></div>
    <div class="ft-stat-label">Users Protected Worldwide</div>
  </div>
</div>

</section>

<!-- Process section -->

<div class="container">
        <header class="process-section-feature">
            <h1  class="heading-shade">DevOps Excellence</h1>
        </header>

        <div class="features-section-process">
            <div class="decorative-circle circle-1"></div>
            <div class="decorative-circle circle-2"></div>
            <div class="decorative-circle circle-3"></div>

            <div class="feature-box-process feature-1">
                <div class="connector-dot"></div>
                <h3 class="heading-shade">Plans</h3>
                <p>Strategic planning and requirement analysis for optimal workflows</p>
            </div>

            <div class="feature-box-process feature-2">
                <div class="connector-dot"></div>
                <h3 class="heading-shade">Code</h3>
                <p>Development with best practices and version control systems</p>
            </div>

            <div class="feature-box-process feature-3">
                <div class="connector-dot"></div>
                <h3 class="heading-shade">Build</h3>
                <p>Automated building and continuous integration processes</p>
            </div>

            <div class="feature-box-process feature-4">
                <div class="connector-dot"></div>
                <h3 class="heading-shade">Test</h3>
                <p>Comprehensive testing and quality assurance protocols</p>
            </div>

            <div class="feature-box-process feature-5">
                <div class="connector-dot"></div>
                <h3 class="heading-shade">Deploy Monitor</h3>
                <p>Deployment automation and continuous monitoring systems</p>
            </div>

            <div class="center-image">
                <img src="assets/images/key-features.webp" alt="ERP Software Demo">
                <img class="arrow" src="assets/images/key-features-circle.webp" alt="">
            </div>
        </div>
    </div>



<!-- ===== Feature Cards Carousel Section ===== -->
<section class="features-carousel" aria-label="Development lifecycle carousel">
  <div class="features-carousel__header">
    <h2 class="heading-shade">Our Process</h2>
    <div class="features-carousel__controls" aria-label="Carousel controls">
      <button class="fc-btn fc-btn--prev" type="button" aria-label="Scroll previous">
        &#10094;
      </button>
      <button class="fc-btn fc-btn--next" type="button" aria-label="Scroll next">
        &#10095;
      </button>
    </div>
  </div>

  <div class="features-carousel__viewport" id="featuresTrack" tabindex="0" role="list" aria-roledescription="carousel">
    
    <!-- Card 1 -->
    <article class="feature-box-process feature-1 feature-card" role="listitem" aria-label="Plans">
      <div class="connector-dot" aria-hidden="true"></div>
      <header class="feature-card__head">
        <h3 class="heading-shade">Plans</h3>
      </header>
      <p class="feature-card__text">Strategic planning and requirement analysis for optimal workflows</p>
    </article>

    <!-- Card 2 -->
    <article class="feature-box-process feature-2 feature-card" role="listitem" aria-label="Code">
      <div class="connector-dot" aria-hidden="true"></div>
      <header class="feature-card__head">
        <h3 class="heading-shade">Code</h3>
      </header>
      <p class="feature-card__text">Development with best practices and version control systems</p>
    </article>

    <!-- Card 3 -->
    <article class="feature-box-process feature-3 feature-card" role="listitem" aria-label="Build">
      <div class="connector-dot" aria-hidden="true"></div>
      <header class="feature-card__head">
        <h3 class="heading-shade">Build</h3>
      </header>
      <p class="feature-card__text">Automated building and continuous integration processes</p>
    </article>

    <!-- Card 4 -->
    <article class="feature-box-process feature-4 feature-card" role="listitem" aria-label="Test">
      <div class="connector-dot" aria-hidden="true"></div>
      <header class="feature-card__head">
        <h3 class="heading-shade">Test</h3>
      </header>
      <p class="feature-card__text">Comprehensive testing and quality assurance protocols</p>
    </article>

    <!-- Card 5 -->
    <article class="feature-box-process feature-5 feature-card" role="listitem" aria-label="Deploy Monitor">
      <div class="connector-dot" aria-hidden="true"></div>
      <header class="feature-card__head">
        <h3 class="heading-shade">Deploy Monitor</h3>
      </header>
      <p class="feature-card__text">Deployment automation and continuous monitoring systems</p>
    </article>

  </div>
</section>

<!-- <style>
/* ===== Base / Reset bits (safe in Elementor) ===== */
.features-carousel {
  width: min(1200px, 95vw);
  margin: clamp(16px, 3vw, 40px) auto;
}
.features-carousel__header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  margin-bottom: 12px;
}

/* Controls */
.fc-btn {
  appearance: none;
  border: 0;
  background: #111;
  color: #fff;
  width: 40px;
  height: 40px;
  border-radius: 999px;
  font-size: 18px;
  line-height: 1;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: transform .15s ease, opacity .15s ease;
}
.fc-btn:hover { transform: scale(1.05); }
.fc-btn:disabled { opacity: .4; cursor: not-allowed; }
.features-carousel__controls { display: flex; gap: 8px; }

/* ===== Scroll-snap viewport ===== */
.features-carousel__viewport {
  display: grid;
  grid-auto-flow: column;
  grid-auto-columns: clamp(75%, 46vw, 360px); /* card width */
  gap: 16px;
  overflow-x: auto;
  overscroll-behavior-x: contain;
  scroll-snap-type: x mandatory;
  scroll-padding-inline: 8px;
  padding: 8px 2px 2px;
  -ms-overflow-style: none;          /* IE/Edge */
  scrollbar-width: none;             /* Firefox */
}
.features-carousel__viewport::-webkit-scrollbar { display: none; }

/* ===== Cards (reuse your classes) ===== */
.feature-card {
  scroll-snap-align: start;
  background: #fff;
  border-radius: 16px;
  padding: 18px 16px 20px;
  box-shadow: 0 8px 28px rgba(0,0,0,.08);
  position: relative;
  min-height: 160px;
  display: grid;
  align-content: start;
  gap: 8px;
}
.feature-card .heading-shade { margin: 0; font-size: 1.15rem; }
.feature-card__text { margin: 0; color: #444; line-height: 1.5; }

/* Optional: tiny accent for your connector dot if you already style it */
.connector-dot {
  position: absolute;
  inset: 12px auto auto 12px;
  width: 10px; height: 10px; border-radius: 50%;
  background: radial-gradient(circle at 30% 30%, #00d0ff, #0072ff);
}

/* ===== Responsive tweaks ===== */
@media (min-width: 768px) {
  .features-carousel__viewport {
    grid-auto-columns: minmax(320px, 36%);
    gap: 18px;
  }
}
@media (min-width: 1024px) {
  .features-carousel__viewport {
    grid-auto-columns: minmax(320px, 30%); /* ~3 cards visible */
    gap: 20px;
  }
}
</style>

<script>
(function () {
  const track = document.getElementById('featuresTrack');
  const prev = document.querySelector('.fc-btn--prev');
  const next = document.querySelector('.fc-btn--next');

  if (!track || !prev || !next) return;

  // Scroll by one card width each click
  function cardWidth() {
    const firstCard = track.querySelector('.feature-card');
    return firstCard ? firstCard.getBoundingClientRect().width + parseFloat(getComputedStyle(track).columnGap || getComputedStyle(track).gap || 16) : 320;
  }

  function snapUpdate() {
    // Disable prev/next at extremes
    const maxScroll = track.scrollWidth - track.clientWidth - 2;
    prev.disabled = track.scrollLeft <= 1;
    next.disabled = track.scrollLeft >= maxScroll;
  }

  prev.addEventListener('click', () => {
    track.scrollBy({ left: -cardWidth(), behavior: 'smooth' });
  });
  next.addEventListener('click', () => {
    track.scrollBy({ left: cardWidth(), behavior: 'smooth' });
  });

  // Keyboard: allow arrow keys when viewport is focused
  track.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowRight') { e.preventDefault(); track.scrollBy({ left: cardWidth(), behavior: 'smooth' }); }
    if (e.key === 'ArrowLeft')  { e.preventDefault(); track.scrollBy({ left: -cardWidth(), behavior: 'smooth' }); }
  });

  // Drag to scroll (desktop)
  let isDown = false, startX = 0, scrollStart = 0;
  track.addEventListener('pointerdown', (e) => {
    isDown = true;
    track.setPointerCapture(e.pointerId);
    startX = e.clientX;
    scrollStart = track.scrollLeft;
  });
  track.addEventListener('pointermove', (e) => {
    if (!isDown) return;
    const dx = e.clientX - startX;
    track.scrollLeft = scrollStart - dx;
  });
  ['pointerup','pointercancel','pointerleave'].forEach(evt => {
    track.addEventListener(evt, () => { isDown = false; }, { passive: true });
  });

  // Wheel (shift+wheel horizontally for mice that don’t)
  track.addEventListener('wheel', (e) => {
    if (Math.abs(e.deltaX) < Math.abs(e.deltaY)) return; // natural horizontal only
    e.preventDefault();
    track.scrollBy({ left: e.deltaX, behavior: 'auto' });
  }, { passive: false });

  // Update button states
  snapUpdate();
  track.addEventListener('scroll', () => requestAnimationFrame(snapUpdate));
  window.addEventListener('resize', () => requestAnimationFrame(snapUpdate));
})();
</script> -->




<!-- ====== Showcase Grid Section ====== -->
<!-- <div class="v1146_4572">
  <div class="v1146_3967">
    <div class="v1146_3968">
      <div class="v1146_3969">
        <span class="v1146_3970">Alendei</span>
        <span class="v1146_3971">Reach your customer through verity of communication channel such
          as SMS, Chat bot, What's App global CPaaS platform
        </span>
        <img src="assets/images/alendei.png" class="grid-shape">
      </div>

    </div>
  </div>
  <div class="vertical-polygon-holder">
    <div class="v1146_3981">
      <div class="v1146_3982">
        <div class="v1146_3983">
          <span class="v1146_3984">Vigyanlabs </span><span class="v1146_3985">Sustainability products that pay for
            themselves. IPM+ AI Powered
            solution for real time energy savings.
          </span>
          <img src="assets/images/vigya.png" class="grid-shape-2">
        </div>
      </div>
    </div>
    <div class="v1146_3995">
      <div class="v1146_3996">
        <div class="v1146_3997">
          <span class="v1146_3998">Protean Cloud </span><span class="v1146_3999">Nurtured with green-field technology
            solutions. AI-enabled
            private cloud offering for Govt. and enterprises of all sizes,
            facilitates high-performance infrastructure.
          </span>
          <img src="assets/images/alendei.png" class="grid-shape">
        </div>
      </div>
    </div>
  </div>
  <div class="v1146_4009">
    <div class="v1146_4010">
      <div class="v1146_4011">
        <span class="v1146_4012">DDI & SOC Solutions </span><span class="v1146_4013">Unified management framework for
          DNS-DHCP-IPAM (DDI) and network
          configurations ensures end-to-end visibility, consistency control
          and advanced automation
        </span>
        <img src="assets/images/vigya.png" class="grid-shape-2">
      </div>
    </div>
  </div>
</div> -->

<section class="container text-center about-flip-box home-flip-box">
  <div class="flip-card-container home-section">
    <div class="team-people">
      <div class="flip-card flip-left flip-home">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/images/vigya.png" alt="LinkedIn" class="arrow-link-icon">

            <img src="assets/images/Link.png" alt="Avatar" style="width:100%;height:100%;">
          </div>
          <div class="flip-card-back">
            <a href="#"><img src="assets/images/vigya.png" alt="LinkedIn" class="arrow-link-icon"
                href="#"></a>
            <p>Our team of experts is dedicated to providing top-notch services to our clients. We strive to exceed
              expectations and deliver exceptional results.</p>

            <p>His background in IT and system management makes him a pro at company operations. He also handles the
              advisory team.</p>
          </div>
        </div>

      </div>
    </div>
    <div>
      <div class="flip-card flip-home center-card-home">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/images/vigya.png" alt="LinkedIn" class="arrow-link-icon">

            <img src="assets/images/Link-2.png" alt="Avatar" style="width:100%;height:100%;">
          </div>
          <div class="flip-card-back">
            <a href="#"><img src="assets/images/vigya.png" alt="LinkedIn" class="arrow-link-icon"
                href="#"></a>
            <p>Our team of experts is dedicated to providing top-notch services to our clients. We strive to exceed
              expectations and deliver exceptional results.</p>

            <p>His background in IT and system management makes him a pro at company operations. He also handles the
              advisory team.</p>
          </div>
        </div>
      </div>

      <div class="flip-card card-3 flip-home center-card-home">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/images/vigya.png" alt="LinkedIn" class="arrow-link-icon">

            <img src="assets/images/Link-3.png" alt="Avatar" style="width:100%;height:100%;">
          </div>
          <div class="flip-card-back">
            <a href="#"><img src="assets/images/vigya.png" alt="LinkedIn" class="arrow-link-icon"
                href="#"></a>
            <p>Our team of experts is dedicated to providing top-notch services to our clients. We strive to exceed
              expectations and deliver exceptional results.</p>

            <p>His background in IT and system management makes him a pro at company operations. He also handles the
              advisory team.</p>
          </div>
        </div>
      </div>


    </div>
    <div>
      <div class="flip-card flip-left flip-home">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/images/vigya.png" alt="LinkedIn" class="arrow-link-icon">

            <img src="assets/images/Link-4.png" alt="Avatar" style="width:100%;height:100%;">
          </div>
          <div class="flip-card-back">
            <a href="#"><img src="assets/images/vigya.png" alt="LinkedIn" class="arrow-link-icon"
                href="#"></a>
            <p>Our team of experts is dedicated to providing top-notch services to our clients. We strive to exceed
              expectations and deliver exceptional results.</p>

            <p>His background in IT and system management makes him a pro at company operations. He also handles the
              advisory team.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="services-section">
  <div class="container" style="padding: 0px 20px 0px 20px">
    <div class="features-main-heading" bis_skin_checked="1">
      <span class="heading-primary">Features </span>
    </div>
    <div class="feature-box">
      <div class="service-cards">
        <article class="service-card service-card-green">
          <div class="service-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-03/120446/service-icon-3.svg" alt="Service 3">
          </div>
          <h3 class="service-title">Reduce Downtime</h3>
          <p class="service-description">RIM employs proactive monitoring and automated alerts to identify potential
            problems,</p>
          <div class="service-content">
            <div class="percentage-display">
              <span class="percentage-number">34%</span>
              <img src="https://static.codia.ai/custom_image/2025-07-03/120446/percentage-icon.svg" alt="Percentage"
                class="percentage-icon">
            </div>
            <p class="content-text">enabling timely interventions before they escalate into disruptions that could
              affect business operations.</p>
          </div>
        </article>

        <article class="service-card service-card-blue">
          <div class="service-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-03/120446/service-icon-1.svg" alt="Service 1">
          </div>
          <h3 class="service-title">Cost Savings</h3>
          <p class="service-description">organizations can save on expenses related to office space, equipment and
            utilities</p>
          <div class="service-testimonial">
            <div class="testimonial-author">
              <img src="https://static.codia.ai/custom_image/2025-07-03/120446/profile-avatar.png" alt="Profile"
                class="author-avatar">
              <p class="feature-icon-text">Savings</p>
            </div>
            <p class="content-text">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </article>


        <article class="service-card service-card-purple">
          <div class="service-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-03/120446/service-icon-2.svg" alt="Service 2">
          </div>
          <h3 class="service-title">Enhance Productivity</h3>
          <p class="service-description">Letting your IT infrastructure in hand of expert team will enhance your core
            productivity.</p>
          <div class="service-content purple-box">
            <span class="content-label">Productivity</span>
            <img src="https://static.codia.ai/custom_image/2025-07-03/120446/chart-graphic.png" alt="Chart"
              class="content-chart">
          </div>
        </article>



      </div>
    </div>
  </div>
</section> -->
<!-- 
<section class="benefits-section">
  <div class="container" style="padding: 0px 20px 0px 20px">
  <article class="benefit-card benefit-card-purple">
    <div class="benefit-icon benefit-icon-1" bis_skin_checked="1">
      <img src="https://static.codia.ai/custom_image/2025-07-03/120446/benefit-icon-1.svg" alt="Benefit 1">
    </div>
    <h3 class="benefit-title">Scalability</h3>
    <p class="benefit-description">RIM can accommodate increased demands without the need for substantial infrastructure
      investments.</p>
    <div class="benefit-feature" bis_skin_checked="1">
      <img src="https://static.codia.ai/custom_image/2025-07-03/120446/feature-icon-1.svg" alt="Feature Icon"
        class="feature-icon">
      <p class="feature-text">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </article>

  <article class="benefit-card benefit-card-green">
    <div class="benefit-icon benefit-icon-2" bis_skin_checked="1">
      <img src="https://static.codia.ai/custom_image/2025-07-03/120446/benefit-icon-2.svg" alt="Benefit 2">
    </div>
    <h3 class="benefit-title" style="width: fit-content;">Focus on Core<br>Business Competencies</h3>
    <p class="benefit-description">Delegating IT infrastructure management to remote <br>service providers</p>
    <div class="benefit-feature" bis_skin_checked="1">
      <img src="https://static.codia.ai/custom_image/2025-07-03/120446/feature-icon-2.png" alt="Feature Icon"
        class="feature-icon">
      <p class="feature-text">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </article>
  </div>
</section> -->

<header class="header-section-testimonial">
  <div class="container" style="padding: 0px 20px 0px 20px">
    <div class="header-content-testimonial">
      <h1 class="main-title-testimonial">
        <span class="gradient-text">Our Clients</span>
        <span class="blue-text"> </span>
        <span class="black-text">Speak for Us</span>
      </h1>
      <button class="cta-button-testimonial">
        <span>Start for free</span>
      </button>
    </div>
  </div>
</header>


<!-- Testimonials Section -->
<section class="testimonials-section">
  <!-- First Row - Moving Left -->
  <div class="testimonials-row testimonials-row-left">
    <div class="testimonial-card">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-1.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">I had a fantastic experience working with the team at<br>DataPlus. Their attention
          to detail and expertise really set<br>them apart. Highly recommend!</p>
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-1.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-2.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">Working with DataPlus was a breath of fresh air. Their<br>passion for what they do
          shines through in every<br>interaction. We look forward to collaborating with them<br>again.</p>
        <!-- <span class="date">Oct 20, 2024</span> -->
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-2.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-3.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">Working with DataPlus was a game-changer for our<br>business. Their innovative
          solutions helped us achieve<br>our goals faster than we thought possible.</p>
        <!-- <span class="date">Oct 20, 2024</span> -->
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-3.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-4.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">Choosing DataPlus was the best decision we made for<br>our project. Their team's
          creativity and problem-solving<br>skills were invaluable.</p>
        <!-- <span class="date">Oct 20, 2024</span> -->
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-4.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-5.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">I had a fantastic experience working with the team at<br>DataPlus. Their attention
          to detail and expertise really set<br>them apart. Highly recommend!</p>
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-5.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-6.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">Working with DataPlus was a breath of fresh air. Their<br>passion for what they do
          shines through in every<br>interaction. We look forward to collaborating with them<br>again.</p>
        <!-- <span class="date">Oct 20, 2024</span> -->
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-6.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-7.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">Working with DataPlus was a game-changer for our<br>business. Their innovative
          solutions helped us achieve<br>our goals faster than we thought possible.</p>
        <!-- <span class="date">Oct 20, 2024</span> -->
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-7.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-8.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">Choosing DataPlus was the best decision we made for<br>our project. Their team's
          creativity and problem-solving<br>skills were invaluable.</p>
        <!-- <span class="date">Oct 20, 2024</span> -->
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-8.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Second Row - Moving Right -->
  <div class="testimonials-row testimonials-row-right">
    <div class="testimonial-card blue-theme">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-9.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">I had a fantastic experience working with the team at<br>DataPlus. Their attention
          to detail and expertise really set<br>them apart. Highly recommend!</p>
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-9.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card blue-theme">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-10.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">Working with DataPlus was a breath of fresh air. Their<br>passion for what they do
          shines through in every<br>interaction. We look forward to collaborating with them<br>again.</p>
        <!-- <span class="date">Oct 20, 2024</span> -->
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-10.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card blue-theme">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-11.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">Working with DataPlus was a game-changer for our<br>business. Their innovative
          solutions helped us achieve<br>our goals faster than we thought possible.</p>
        <!-- <span class="date">Oct 20, 2024</span> -->
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-11.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card blue-theme">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-12.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">Choosing DataPlus was the best decision we made for<br>our project. Their team's
          creativity and problem-solving<br>skills were invaluable.</p>
        <!-- <span class="date">Oct 20, 2024</span> -->
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-12.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-13.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">I had a fantastic experience working with the team at<br>DataPlus. Their attention
          to detail and expertise really set<br>them apart. Highly recommend!</p>
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-13.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-14.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">Working with DataPlus was a breath of fresh air. Their<br>passion for what they do
          shines through in every<br>interaction. We look forward to collaborating with them<br>again.</p>
        <!-- <span class="date">Oct 20, 2024</span> -->
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-14.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-15.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">Working with DataPlus was a game-changer for our<br>business. Their innovative
          solutions helped us achieve<br>our goals faster than we thought possible.</p>
        <!-- <span class="date">Oct 20, 2024</span> -->
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-15.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-card">
      <div class="testimonial-content">
        <img src="https://static.codia.ai/custom_image/2025-07-04/063005/profile-avatar-16.png" alt="Profile Avatar"
          class="avatar">
        <p class="testimonial-text">Choosing DataPlus was the best decision we made for<br>our project. Their team's
          creativity and problem-solving<br>skills were invaluable.</p>
        <!-- <span class="date">Oct 20, 2024</span> -->
        <div class="testimonial-footer">
          <span class="author-name-testimonial">Amit Jain</span>
          <div class="verified-icon">
            <img src="https://static.codia.ai/custom_image/2025-07-04/063005/verified-icon-16.svg" alt="Verified">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="hero-section-footer">
  <!-- Background Video -->
  <div class="hero-background-footer">
    <div class="video-bg">
      <iframe
        src="https://www.youtube.com/embed/pY668OsMP5M?rel=0&autoplay=1&mute=1&loop=1&playlist=pY668OsMP5M&controls=0&fs=0&modestbranding=1&playsinline=1&iv_load_policy=3"
        title="Background video"
        frameborder="0"
        allow="autoplay; encrypted-media; picture-in-picture"
        allowfullscreen>
      </iframe>
    </div>
    <div class="hero-overlay-footer"></div>
  </div>

  <!-- Hero Content -->
  <div class="hero-content-footer">
    <h2 class="hero-title-footer">Creating Technology For a Better Tomorrow</h2>
    <p class="hero-description-footer">
      We offer full-cycle technology solutions that streamline your digital transformation journey.
    </p>
    <button class="hero-cta-button-footer">
      <span>Contact Us</span>
    </button>
  </div>
</section>


<?php include("footer.php"); ?>