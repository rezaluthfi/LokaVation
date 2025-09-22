import './bootstrap';

// DOM Content Loaded Event
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initMobileMenu();
    initScrollAnimations();
    initSmoothScrolling();
    initFormValidation();
    initScrollToTop();
});

// Mobile Menu Toggle
function initMobileMenu() {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            const isOpen = mobileMenu.classList.contains('block');
            
            if (isOpen) {
                mobileMenu.classList.remove('block');
                mobileMenu.classList.add('hidden');
            } else {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('block');
            }
            
            // Toggle icon
            const svgs = mobileMenuBtn.querySelectorAll('svg');
            svgs.forEach(svg => svg.classList.toggle('hidden'));
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenuBtn.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.remove('block');
                mobileMenu.classList.add('hidden');
                
                // Reset icon
                const svgs = mobileMenuBtn.querySelectorAll('svg');
                svgs[0].classList.remove('hidden');
                svgs[1].classList.add('hidden');
            }
        });
        
        // Close mobile menu when window is resized to desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) {
                mobileMenu.classList.remove('block');
                mobileMenu.classList.add('hidden');
                
                // Reset icon
                const svgs = mobileMenuBtn.querySelectorAll('svg');
                svgs[0].classList.remove('hidden');
                svgs[1].classList.add('hidden');
            }
        });
    }
}

// Scroll Animations
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                
                // Add staggered animation for grid items
                if (entry.target.classList.contains('grid') || entry.target.parentElement.classList.contains('grid')) {
                    const children = entry.target.querySelectorAll('.animate-on-scroll');
                    children.forEach((child, index) => {
                        setTimeout(() => {
                            child.classList.add('animate');
                        }, index * 100);
                    });
                }
            }
        });
    }, observerOptions);
    
    // Observe all elements with animation classes
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    animatedElements.forEach(el => observer.observe(el));
    
    // Add parallax effect to hero section
    const heroSection = document.querySelector('section[class*="min-h-screen"]');
    if (heroSection) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxSpeed = 0.5;
            const bgImage = heroSection.querySelector('img');
            
            if (bgImage) {
                bgImage.style.transform = `translateY(${scrolled * parallaxSpeed}px)`;
            }
        });
    }
}

// Smooth Scrolling for Anchor Links
function initSmoothScrolling() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                
                const offsetTop = targetElement.offsetTop - 80; // Account for fixed header
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                const mobileMenu = document.querySelector('.mobile-menu');
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('block');
                }
            }
        });
    });
}

// Form Validation and Enhancement
function initFormValidation() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        const inputs = form.querySelectorAll('input, textarea');
        const submitBtn = form.querySelector('button[type="submit"]');
        
        // Real-time validation
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
            
            input.addEventListener('input', function() {
                if (this.classList.contains('border-red-500')) {
                    validateField(this);
                }
            });
        });
        
        // Form submission with loading state
        form.addEventListener('submit', function(e) {
            let isValid = true;
            
            inputs.forEach(input => {
                if (!validateField(input)) {
                    isValid = false;
                }
            });
            
            if (isValid && submitBtn) {
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Mengirim...';
                submitBtn.disabled = true;
                
                // Re-enable button if form submission fails (client-side)
                setTimeout(() => {
                    if (submitBtn.disabled) {
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                    }
                }, 10000);
            } else if (!isValid) {
                e.preventDefault();
                
                // Focus on first invalid field
                const firstInvalid = form.querySelector('.border-red-500');
                if (firstInvalid) {
                    firstInvalid.focus();
                    firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });
    });
}

// Field Validation Function
function validateField(field) {
    const value = field.value.trim();
    const fieldName = field.name;
    let isValid = true;
    let errorMessage = '';
    
    // Remove existing error
    field.classList.remove('border-red-500');
    const existingError = field.parentElement.querySelector('.text-red-600');
    if (existingError && !existingError.textContent.includes('wajib')) {
        existingError.remove();
    }
    
    // Required field validation
    if (field.hasAttribute('required') || field.name) {
        if (!value) {
            isValid = false;
            errorMessage = `${getFieldLabel(fieldName)} wajib diisi.`;
        }
    }
    
    // Email validation
    if (fieldName === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            isValid = false;
            errorMessage = 'Format email tidak valid.';
        }
    }
    
    // Phone validation
    if (fieldName === 'nomor_telepon' && value) {
        const phoneRegex = /^[\+]?[0-9\s\-\(\)]{8,}$/;
        if (!phoneRegex.test(value)) {
            isValid = false;
            errorMessage = 'Format nomor telepon tidak valid.';
        }
    }
    
    // Name validation
    if (fieldName === 'nama_lengkap' && value) {
        if (value.length < 2) {
            isValid = false;
            errorMessage = 'Nama harus minimal 2 karakter.';
        }
    }
    
    // Display error
    if (!isValid) {
        field.classList.add('border-red-500');
        
        if (!field.parentElement.querySelector('.text-red-600')) {
            const errorDiv = document.createElement('p');
            errorDiv.className = 'mt-1 text-sm text-red-600';
            errorDiv.textContent = errorMessage;
            field.parentElement.appendChild(errorDiv);
        }
    }
    
    return isValid;
}

// Get Field Label
function getFieldLabel(fieldName) {
    const labels = {
        'nama_lengkap': 'Nama lengkap',
        'nama_destinasi': 'Nama destinasi wisata',
        'email': 'Email',
        'nomor_telepon': 'Nomor telepon',
        'pesan': 'Pesan'
    };
    
    return labels[fieldName] || fieldName;
}

// Scroll to Top Button
function initScrollToTop() {
    // Create scroll to top button
    const scrollToTopBtn = document.createElement('button');
    scrollToTopBtn.innerHTML = `
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    `;
    scrollToTopBtn.className = 'fixed bottom-8 right-8 bg-primary text-white p-3 rounded-full shadow-lg hover:bg-primary-600 transition-all duration-300 transform scale-0 z-50';
    scrollToTopBtn.setAttribute('aria-label', 'Scroll to top');
    
    document.body.appendChild(scrollToTopBtn);
    
    // Show/hide scroll to top button
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.remove('scale-0');
            scrollToTopBtn.classList.add('scale-100');
        } else {
            scrollToTopBtn.classList.remove('scale-100');
            scrollToTopBtn.classList.add('scale-0');
        }
    });
    
    // Scroll to top functionality
    scrollToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Utility function for adding loading states
function addLoadingState(element, loadingText = 'Loading...') {
    const originalText = element.textContent;
    const originalHTML = element.innerHTML;
    
    element.disabled = true;
    element.innerHTML = `
        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        ${loadingText}
    `;
    
    return function removeLoadingState() {
        element.disabled = false;
        element.innerHTML = originalHTML;
    };
}

// Counter Animation for Statistics
function animateCounters() {
    const counters = document.querySelectorAll('[data-count]');
    
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-count'));
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // 60fps
                let current = 0;
                
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.ceil(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };
                
                updateCounter();
                counterObserver.unobserve(counter);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => counterObserver.observe(counter));
}

// Initialize counter animation when DOM is loaded
document.addEventListener('DOMContentLoaded', animateCounters);

// Add CSS for better loading spinner
const style = document.createElement('style');
style.textContent = `
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    .animate-spin {
        animation: spin 1s linear infinite;
    }
    
    /* Improve scroll behavior */
    html {
        scroll-behavior: smooth;
    }
    
    /* Loading state styles */
    .loading {
        pointer-events: none;
        opacity: 0.7;
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    
    ::-webkit-scrollbar-thumb {
        background: #2A9D8F;
        border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: #24887a;
    }
`;

document.head.appendChild(style);
