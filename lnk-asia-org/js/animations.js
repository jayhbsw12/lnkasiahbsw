// Advanced animations and interactions
document.addEventListener('DOMContentLoaded', function() {
  initAdvancedAnimations();
  initHoverEffects();
  initScrollTriggers();
});

// Advanced animations
function initAdvancedAnimations() {
  // Stagger animation for partner logos
  const partnerLogos = document.querySelectorAll('.partner-logo');
  partnerLogos.forEach((logo, index) => {
    logo.style.animationDelay = `${index * 0.1}s`;
    logo.classList.add('animate-on-scroll');
  });
  
  // Feature items stagger animation
  const featureItems = document.querySelectorAll('.feature-item');
  featureItems.forEach((item, index) => {
    item.style.animationDelay = `${0.6 + (index * 0.2)}s`;
    item.classList.add('animate-on-scroll');
  });
  
  // Hero elements animation sequence
  const heroElements = [
    '.whats-new-badge',
    '.main-heading',
    '.hero-subtext',
    '.email-signup-section'
  ];
  
  heroElements.forEach((selector, index) => {
    const element = document.querySelector(selector);
    if (element) {
      element.style.animationDelay = `${index * 0.3}s`;
      element.classList.add('animate-on-scroll');
    }
  });
}

// Hover effects
function initHoverEffects() {
  // Logo hover effect
  const logo = document.querySelector('.logo-img');
  if (logo) {
    logo.addEventListener('mouseenter', function() {
      this.style.transform = 'scale(1.1) rotate(5deg)';
    });
    
    logo.addEventListener('mouseleave', function() {
      this.style.transform = 'scale(1) rotate(0deg)';
    });
  }
  
  // Partner logos hover effect
  const partnerLogos = document.querySelectorAll('.partner-logo');
  partnerLogos.forEach(logo => {
    logo.addEventListener('mouseenter', function() {
      this.style.transform = 'translateY(-10px) scale(1.1)';
      const img = this.querySelector('img');
      if (img) {
        img.style.filter = 'grayscale(0%) brightness(1.1)';
      }
    });
    
    logo.addEventListener('mouseleave', function() {
      this.style.transform = 'translateY(0) scale(1)';
      const img = this.querySelector('img');
      if (img) {
        img.style.filter = 'grayscale(100%) brightness(1)';
      }
    });
  });
  
  // Feature items hover effect
  const featureItems = document.querySelectorAll('.feature-item');
  featureItems.forEach(item => {
    item.addEventListener('mouseenter', function() {
      this.style.transform = 'translateX(15px)';
      const number = this.querySelector('.feature-number');
      if (number) {
        number.style.opacity = '1';
        number.style.color = '#7b61ff';
        number.style.transform = 'scale(1.2)';
      }
    });
    
    item.addEventListener('mouseleave', function() {
      this.style.transform = 'translateX(0)';
      const number = this.querySelector('.feature-number');
      if (number) {
        number.style.opacity = '0.3';
        number.style.color = '#0b277c';
        number.style.transform = 'scale(1)';
      }
    });
  });
  
  // Button hover effects
  const buttons = document.querySelectorAll('button, .auth-wrapper');
  buttons.forEach(button => {
    button.addEventListener('mouseenter', function() {
      this.style.transform = 'translateY(-3px)';
      this.style.boxShadow = '0 8px 25px rgba(0, 0, 0, 0.15)';
    });
    
    button.addEventListener('mouseleave', function() {
      this.style.transform = 'translateY(0)';
      this.style.boxShadow = 'none';
    });
  });
}

// Scroll-triggered animations
function initScrollTriggers() {
  const scrollTriggers = [
    {
      element: '.partners-section',
      animation: 'slideInUp',
      delay: 0
    },
    {
      element: '.testimonials-section',
      animation: 'fadeInUp',
      delay: 0.2
    },
    {
      element: '.features-section',
      animation: 'slideInLeft',
      delay: 0.4
    }
  ];
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const trigger = scrollTriggers.find(t => 
          entry.target.matches(t.element)
        );
        
        if (trigger) {
          setTimeout(() => {
            entry.target.classList.add('animate-visible');
          }, trigger.delay * 1000);
        }
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
  });
  
  scrollTriggers.forEach(trigger => {
    const elements = document.querySelectorAll(trigger.element);
    elements.forEach(el => {
      el.classList.add(`animate-${trigger.animation}`);
      observer.observe(el);
    });
  });
}

// Floating animations for specific elements
function initFloatingAnimations() {
  const floatingElements = [
    '.phone-mockup',
    '.experience-badge',
    '.testimonials-background'
  ];
  
  floatingElements.forEach(selector => {
    const element = document.querySelector(selector);
    if (element) {
      element.style.animation = 'float 6s ease-in-out infinite';
    }
  });
}

// Initialize floating animations
document.addEventListener('DOMContentLoaded', initFloatingAnimations);

// Parallax scrolling effect
window.addEventListener('scroll', function() {
  const scrolled = window.pageYOffset;
  const parallaxElements = document.querySelectorAll('.background-blur, .background-svg');
  
  parallaxElements.forEach(element => {
    const speed = element.classList.contains('background-blur') ? 0.5 : 0.3;
    const yPos = -(scrolled * speed);
    element.style.transform = `translateY(${yPos}px)`;
  });
});

// Text typing animation
function initTypingAnimation() {
  const typingElements = document.querySelectorAll('.typing-text');
  
  typingElements.forEach(element => {
    const text = element.textContent;
    element.textContent = '';
    element.style.borderRight = '2px solid #7b61ff';
    
    let i = 0;
    const typeWriter = () => {
      if (i < text.length) {
        element.textContent += text.charAt(i);
        i++;
        setTimeout(typeWriter, 100);
      } else {
        element.style.borderRight = 'none';
      }
    };
    
    // Start typing when element is visible
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          typeWriter();
          observer.unobserve(entry.target);
        }
      });
    });
    
    observer.observe(element);
  });
}

// Counter animation
function initCounterAnimation() {
  const counters = document.querySelectorAll('.counter');
  
  counters.forEach(counter => {
    const target = parseInt(counter.getAttribute('data-target'));
    const duration = 2000; // 2 seconds
    const increment = target / (duration / 16); // 60fps
    
    let current = 0;
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      counter.textContent = Math.floor(current);
    }, 16);
  });
}

// Initialize additional animations
document.addEventListener('DOMContentLoaded', function() {
  initTypingAnimation();
  
  // Initialize counter animation when visible
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        initCounterAnimation();
        observer.unobserve(entry.target);
      }
    });
  });
  
  const counterSection = document.querySelector('.experience-badge');
  if (counterSection) {
    observer.observe(counterSection);
  }
});
