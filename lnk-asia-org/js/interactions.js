
// Interactive elements and user interactions
document.addEventListener('DOMContentLoaded', function() {
  initInteractiveElements();
  initKeyboardNavigation();
  initTouchInteractions();
  initAccessibility();
});

// Interactive elements
function initInteractiveElements() {
  // Navigation menu interactions
  const navItems = document.querySelectorAll('.nav-item');
  navItems.forEach(item => {
    const link = item.querySelector('.nav-link');
    
    item.addEventListener('mouseenter', function() {
      link.style.color = '#7b61ff';
      link.style.transform = 'translateY(-2px)';
    });
    
    item.addEventListener('mouseleave', function() {
      if (!link.classList.contains('active')) {
        link.style.color = '#726e80';
      }
      link.style.transform = 'translateY(0)';
    });
  });
  
  // Email input interactions
  const emailContainer = document.querySelector('.email-input-container');
  if (emailContainer) {
    emailContainer.addEventListener('mouseenter', function() {
      this.style.borderColor = '#7b61ff';
      this.style.boxShadow = '0 0 0 3px rgba(123, 97, 255, 0.1)';
    });
    
    emailContainer.addEventListener('mouseleave', function() {
      this.style.borderColor = '#51459e';
      this.style.boxShadow = 'none';
    });
  }
  
  // Get Started button interactions
  const getStartedBtn = document.querySelector('.get-started-btn');
  if (getStartedBtn) {
    getStartedBtn.addEventListener('mouseenter', function() {
      this.style.background = '#6dd9e6';
      this.style.transform = 'translateY(-50%) scale(1.05)';
    });
    
    getStartedBtn.addEventListener('mouseleave', function() {
      this.style.background = '#84e8f4';
      this.style.transform = 'translateY(-50%) scale(1)';
    });
    
    getStartedBtn.addEventListener('mousedown', function() {
      this.style.transform = 'translateY(-50%) scale(0.98)';
    });
    
    getStartedBtn.addEventListener('mouseup', function() {
      this.style.transform = 'translateY(-50%) scale(1.05)';
    });
  }
  
  // Status dot pulsing animation
  const statusDot = document.querySelector('.status-dot');
  if (statusDot) {
    setInterval(() => {
      statusDot.style.transform = 'scale(1.2)';
      statusDot.style.opacity = '0.8';
      
      setTimeout(() => {
        statusDot.style.transform = 'scale(1)';
        statusDot.style.opacity = '1';
      }, 500);
    }, 2000);
  }
}

// Keyboard navigation
function initKeyboardNavigation() {
  const focusableElements = document.querySelectorAll(
    'a, button, input, [tabindex]:not([tabindex="-1"])'
  );
  
  focusableElements.forEach(element => {
    element.addEventListener('focus', function() {
      this.style.outline = '2px solid #7b61ff';
      this.style.outlineOffset = '2px';
    });
    
    element.addEventListener('blur', function() {
      this.style.outline = 'none';
    });
  });
  
  // Escape key functionality
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      // Close any open modals or dropdowns
      const activeElement = document.activeElement;
      if (activeElement) {
        activeElement.blur();
      }
    }
  });
}

// Touch interactions for mobile
function initTouchInteractions() {
  let touchStartY = 0;
  let touchEndY = 0;
  
  document.addEventListener('touchstart', function(e) {
    touchStartY = e.changedTouches[0].screenY;
  });
  
  document.addEventListener('touchend', function(e) {
    touchEndY = e.changedTouches[0].screenY;
    handleSwipe();
  });
  
  function handleSwipe() {
    const swipeThreshold = 50;
    const diff = touchStartY - touchEndY;
    
    if (Math.abs(diff) > swipeThreshold) {
      if (diff > 0) {
        // Swipe up - scroll to next section
        scrollToNextSection();
      } else {
        // Swipe down - scroll to previous section
        scrollToPreviousSection();
      }
    }
  }
  
  function scrollToNextSection() {
    const sections = document.querySelectorAll('section');
    const currentSection = getCurrentSection();
    const currentIndex = Array.from(sections).indexOf(currentSection);
    
    if (currentIndex < sections.length - 1) {
      sections[currentIndex + 1].scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  }
  
  function scrollToPreviousSection() {
    const sections = document.querySelectorAll('section');
    const currentSection = getCurrentSection();
    const currentIndex = Array.from(sections).indexOf(currentSection);
    
    if (currentIndex > 0) {
      sections[currentIndex - 1].scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  }
  
  function getCurrentSection() {
    const sections = document.querySelectorAll('section');
    const scrollPosition = window.pageYOffset + window.innerHeight / 2;
    
    for (let section of sections) {
      const sectionTop = section.offsetTop;
      const sectionBottom = sectionTop + section.offsetHeight;
      
      if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
        return section;
      }
    }
    
    return sections[0];
  }
}

// Accessibility improvements
function initAccessibility() {
  // Add ARIA labels
  const buttons = document.querySelectorAll('button');
  buttons.forEach(button => {
    if (!button.getAttribute('aria-label')) {
      const text = button.textContent.trim();
      if (text) {
        button.setAttribute('aria-label', text);
      }
    }
  });
  
  // Add role attributes
  const navigation = document.querySelector('.main-navigation');
  if (navigation) {
    navigation.setAttribute('role', 'navigation');
    navigation.setAttribute('aria-label', 'Main navigation');
  }
  
  // Add skip link
  const skipLink = document.createElement('a');
  skipLink.href = '#main-content';
  skipLink.textContent = 'Skip to main content';
  skipLink.className = 'skip-link';
  skipLink.style.cssText = `
    position: absolute;
    top: -40px;
    left: 6px;
    background: #7b61ff;
    color: white;
    padding: 8px;
    text-decoration: none;
    border-radius: 4px;
    z-index: 10000;
    transition: top 0.3s;
  `;
  
  skipLink.addEventListener('focus', function() {
    this.style.top = '6px';
  });
  
  skipLink.addEventListener('blur', function() {
    this.style.top = '-40px';
  });
  
  document.body.insertBefore(skipLink, document.body.firstChild);
  
  // Add main content ID
  const mainContent = document.querySelector('.main-content');
  if (mainContent) {
    mainContent.id = 'main-content';
  }
}

// Form validation and submission
function initFormHandling() {
  const forms = document.querySelectorAll('form');
  
  forms.forEach(form => {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const formData = new FormData(form);
      const data = Object.fromEntries(formData);
      
      // Validate form data
      if (validateFormData(data)) {
        submitForm(data);
      }
    });
  });
}

function validateFormData(data) {
  // Add form validation logic here
  return true;
}

function submitForm(data) {
  // Add form submission logic here
  console.log('Form submitted:', data);
  showNotification('Form submitted successfully!', 'success');
}

// Lazy loading for images
function initLazyLoading() {
  const images = document.querySelectorAll('img[data-src]');
  
  const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.classList.remove('lazy');
        imageObserver.unobserve(img);
      }
    });
  });
  
  images.forEach(img => imageObserver.observe(img));
}

// Performance monitoring
function initPerformanceMonitoring() {
  // Monitor page load time
  window.addEventListener('load', function() {
    const loadTime = performance.now();
    console.log(`Page loaded in ${loadTime.toFixed(2)}ms`);
  });
  
  // Monitor scroll performance
  let scrollTimeout;
  window.addEventListener('scroll', function() {
    if (!scrollTimeout) {
      scrollTimeout = setTimeout(function() {
        // Scroll performance logic here
        scrollTimeout = null;
      }, 16); // 60fps
    }
  });
}

// Initialize additional features
document.addEventListener('DOMContentLoaded', function() {
  initFormHandling();
  initLazyLoading();
  initPerformanceMonitoring();
});

// Error handling
window.addEventListener('error', function(e) {
  console.error('JavaScript error:', e.error);
  // Add error reporting logic here
});

// Unhandled promise rejection handling
window.addEventListener('unhandledrejection', function(e) {
  console.error('Unhandled promise rejection:', e.reason);
  // Add error reporting logic here
});
