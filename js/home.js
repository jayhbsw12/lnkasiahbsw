// Main JavaScript functionality
document.addEventListener('DOMContentLoaded', function() {
  // Initialize all components
  initScrollAnimations();
  initNavigation();
  initEmailSignup();
  initParallax();
  initSmoothScroll();
  
  console.log('AI Dashboard Website initialized successfully');
});

// Scroll animations
function initScrollAnimations() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, observerOptions);

  // Observe elements with animation classes
  const animatedElements = document.querySelectorAll('.animate-on-scroll, .animate-slide-left, .animate-slide-right, .animate-scale');
  animatedElements.forEach(el => observer.observe(el));
}

// Navigation functionality
function initNavigation() {
  const navLinks = document.querySelectorAll('.nav-link');
  const dropdownToggle = document.querySelector('.dropdown-toggle');
  const dropdownArrow = document.querySelector('.dropdown-arrow');

  // Handle navigation link clicks
  navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      
      // Remove active class from all links
      navLinks.forEach(l => l.classList.remove('active'));
      
      // Add active class to clicked link
      this.classList.add('active');
      
      // Smooth scroll to section
      const targetId = this.getAttribute('href');
      if (targetId.startsWith('#')) {
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    });
  });

  // Handle dropdown hover
  if (dropdownToggle && dropdownArrow) {
    const dropdown = dropdownToggle.closest('.dropdown');
    
    dropdown.addEventListener('mouseenter', function() {
      dropdownArrow.style.transform = 'rotate(180deg)';
    });
    
    dropdown.addEventListener('mouseleave', function() {
      dropdownArrow.style.transform = 'rotate(0deg)';
    });
  }
}

// Email signup functionality
function initEmailSignup() {
  const emailContainer = document.querySelector('.email-input-container');
  const placeholderText = document.querySelector('.placeholder-text');
  const getStartedBtn = document.querySelector('.get-started-btn');
  
  if (emailContainer && placeholderText && getStartedBtn) {
    // Create hidden input field
    const emailInput = document.createElement('input');
    emailInput.type = 'email';
    emailInput.placeholder = 'Enter your email address';
    emailInput.style.cssText = `
      position: absolute;
      top: 50%;
      left: 40px;
      transform: translateY(-50%);
      width: calc(100% - 320px);
      height: 40px;
      border: none;
      outline: none;
      background: transparent;
      font-family: Roboto, var(--default-font-family);
      font-size: 22px;
      font-weight: 500;
      color: #000;
      z-index: 10;
    `;
    
    emailContainer.appendChild(emailInput);
    
    // Handle input focus/blur
    emailInput.addEventListener('focus', function() {
      placeholderText.style.opacity = '0';
    });
    
    emailInput.addEventListener('blur', function() {
      if (!this.value) {
        placeholderText.style.opacity = '1';
      }
    });
    
    emailInput.addEventListener('input', function() {
      if (this.value) {
        placeholderText.style.opacity = '0';
      } else {
        placeholderText.style.opacity = '1';
      }
    });
    
    // Handle get started button click
    getStartedBtn.addEventListener('click', function() {
      const email = emailInput.value.trim();
      if (email) {
        if (validateEmail(email)) {
          // Simulate form submission
          showNotification('Thank you! We\'ll be in touch soon.', 'success');
          emailInput.value = '';
          placeholderText.style.opacity = '1';
        } else {
          showNotification('Please enter a valid email address.', 'error');
        }
      } else {
        showNotification('Please enter your email address.', 'error');
      }
    });
    
    // Handle enter key
    emailInput.addEventListener('keypress', function(e) {
      if (e.key === 'Enter') {
        getStartedBtn.click();
      }
    });
  }
}

// Email validation
function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Show notification
function showNotification(message, type) {
  const notification = document.createElement('div');
  notification.className = `notification notification-${type}`;
  notification.textContent = message;
  notification.style.cssText = `
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 15px 20px;
    border-radius: 8px;
    color: white;
    font-family: Roboto, var(--default-font-family);
    font-weight: 500;
    z-index: 10000;
    transform: translateX(100%);
    transition: transform 0.3s ease;
    ${type === 'success' ? 'background: #10b981;' : 'background: #ef4444;'}
  `;
  
  document.body.appendChild(notification);
  
  // Animate in
  setTimeout(() => {
    notification.style.transform = 'translateX(0)';
  }, 100);
  
  // Remove after 3 seconds
  setTimeout(() => {
    notification.style.transform = 'translateX(100%)';
    setTimeout(() => {
      document.body.removeChild(notification);
    }, 300);
  }, 3000);
}

// Parallax effect
function initParallax() {
  const parallaxElements = document.querySelectorAll('.parallax');
  
  window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    
    parallaxElements.forEach(element => {
      const rate = scrolled * -0.5;
      element.style.transform = `translateY(${rate}px)`;
    });
  });
}

// Smooth scroll for anchor links
function initSmoothScroll() {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  
  anchorLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      
      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);
      
      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
}

// Button interactions
document.addEventListener('DOMContentLoaded', function() {
  // Contact button functionality
  const contactBtn = document.querySelector('.contact-btn');
  if (contactBtn) {
    contactBtn.addEventListener('click', function() {
      showNotification('Contact form will be available soon!', 'success');
    });
  }
  
  // Auth wrapper functionality
  const authWrapper = document.querySelector('.auth-wrapper');
  if (authWrapper) {
    authWrapper.addEventListener('click', function() {
      showNotification('Authentication system coming soon!', 'success');
    });
  }
  
  // CTA button functionality
  const ctaBtn = document.querySelector('.cta-btn');
  if (ctaBtn) {
    ctaBtn.addEventListener('click', function() {
      showNotification('Learn more section coming soon!', 'success');
    });
  }
});

/**
 * Counts up numbers inside .ft-stats .ft-stat-number when the section is visible.
 * Keeps prefixes/suffixes (e.g., "+", "TB+"), supports decimals, adds commas.
 */

(function () {
  const easeOut = t => 1 - Math.pow(1 - t, 3);

  function animateCount(el) {
    const target   = parseFloat(el.dataset.count || "0");
    const duration = parseInt(el.dataset.duration || "1200", 10);
    const prefix   = el.dataset.prefix || "";
    const suffix   = el.dataset.suffix || "";
    const start    = 0;
    const t0 = performance.now();

    const step = now => {
      const p = Math.min(1, (now - t0) / duration);
      const value = Math.floor(start + (target - start) * easeOut(p));
      el.textContent = prefix + value.toLocaleString() + suffix;
      if (p < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  }

  const counters = document.querySelectorAll('.count[data-count]');
  if (!counters.length) return;

  // Prefer IntersectionObserver on the counters themselves
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        const el = entry.target;
        if (el.dataset.done === "1") { io.unobserve(el); return; }
        animateCount(el);
        el.dataset.done = "1";
        io.unobserve(el);
      });
    }, {
      // wait until ~60% of the counter is visible
      threshold: 0.6,
      // and a tiny bottom margin so it doesn't fire too early
      rootMargin: '0px 0px -10% 0px'
    });

    counters.forEach(el => io.observe(el));
  } else {
    // Fallback: manual in-view check
    const inView = el => {
      const r = el.getBoundingClientRect();
      const h = window.innerHeight || document.documentElement.clientHeight;
      // visible when middle 60% of viewport overlaps the element
      return r.top < h * 0.4 && r.bottom > h * 0.6;
    };
    const onScroll = () => {
      let allDone = true;
      counters.forEach(el => {
        if (el.dataset.done === "1") return;
        if (inView(el)) {
          animateCount(el);
          el.dataset.done = "1";
        } else {
          allDone = false;
        }
      });
      if (allDone) {
        window.removeEventListener('scroll', onScroll);
        window.removeEventListener('resize', onScroll);
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll, { passive: true });
    onScroll();
  }
})();

