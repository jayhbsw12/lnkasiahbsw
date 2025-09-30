document.addEventListener('DOMContentLoaded', function() {
  // Clone testimonial cards for seamless infinite scroll
  function cloneTestimonialCards() {
    const testimonialRows = document.querySelectorAll('.testimonials-row');
    
    testimonialRows.forEach(row => {
      const cards = row.querySelectorAll('.testimonial-card');
      
      // Clone each card and append to the row for seamless loop
      cards.forEach(card => {
        const clone = card.cloneNode(true);
        row.appendChild(clone);
      });
    });
  }

  // Initialize testimonial slider
  function initTestimonialSlider() {
    cloneTestimonialCards();
    
    // Add smooth animation restart when animation ends
    const testimonialRows = document.querySelectorAll('.testimonials-row');
    
    testimonialRows.forEach(row => {
      row.addEventListener('animationiteration', function() {
        // Animation will restart automatically due to infinite iteration
      });
    });
  }

  // Pause animation on hover for better UX
  function addHoverEffects() {
    const testimonialRows = document.querySelectorAll('.testimonials-row');
    
    testimonialRows.forEach(row => {
      row.addEventListener('mouseenter', function() {
        this.style.animationPlayState = 'paused';
      });
      
      row.addEventListener('mouseleave', function() {
        this.style.animationPlayState = 'running';
      });
    });
  }

  // Add smooth scroll behavior for better performance
  function optimizeScrolling() {
    // Enable hardware acceleration for smooth animations
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    
    testimonialCards.forEach(card => {
      card.style.willChange = 'transform';
      card.style.backfaceVisibility = 'hidden';
    });
  }

  // Initialize all testimonial functionality
  initTestimonialSlider();
  addHoverEffects();
  optimizeScrolling();

  // Handle form submission
  const newsletterForm = document.querySelector('.newsletter-form');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const email = this.querySelector('.newsletter-input').value;
      
      if (email && isValidEmail(email)) {
        // Handle successful subscription
        alert('Thank you for subscribing!');
        this.querySelector('.newsletter-input').value = '';
      } else {
        alert('Please enter a valid email address.');
      }
    });
  }

  // Email validation helper
  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  // Add smooth scroll for anchor links
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  anchorLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // Add loading animation for images
  const images = document.querySelectorAll('img');
  images.forEach(img => {
    img.addEventListener('load', function() {
      this.style.opacity = '1';
      this.style.transition = 'opacity 0.3s ease';
    });
    
    // Set initial opacity for smooth loading
    img.style.opacity = '0';
    
    // If image is already loaded (cached)
    if (img.complete) {
      img.style.opacity = '1';
    }
  });

  // Intersection Observer for animations on scroll
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-in');
      }
    });
  }, observerOptions);

  // Observe elements for scroll animations
  const animateElements = document.querySelectorAll('.hero-section, .newsletter-section, .footer-section');
  animateElements.forEach(el => {
    observer.observe(el);
  });
});

// Add CSS for scroll animations
const style = document.createElement('style');
style.textContent = `
  .animate-in {
    animation: fadeInUp 0.6s ease forwards;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Smooth image loading */
  img {
    transition: opacity 0.3s ease;
  }

  /* Enhanced button hover effects */
  .cta-button, .hero-cta-button, .footer-cta-button, .newsletter-submit {
    transition: all 0.3s ease;
  }

  .cta-button:hover, .hero-cta-button:hover, .footer-cta-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
  }

  .newsletter-submit:hover {
    background: var(--primary-purple) !important;
    transform: translateY(-1px);
  }

  /* Testimonial card hover effects */
  .testimonial-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  /* Social icon hover effects */
  .social-icon {
    transition: transform 0.2s ease;
  }

  .social-icon:hover {
    transform: scale(1.1);
  }

  /* Footer link hover effects */
  .footer-link {
    transition: color 0.2s ease;
  }

  .footer-link:hover {
    color: var(--primary-purple);
  }
`;

document.head.appendChild(style);
