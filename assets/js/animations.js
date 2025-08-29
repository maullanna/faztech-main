// Professional Animation Controller
document.addEventListener('DOMContentLoaded', function() {
    
    // Testimoni slide control
    const testimoniContainer = document.querySelector('.testimoni-container');
    if (testimoniContainer) {
        const testimoniSlides = testimoniContainer.querySelectorAll('.testimoni-slide');
        const prevBtn = testimoniContainer.querySelector('.testimoni-nav.prev');
        const nextBtn = testimoniContainer.querySelector('.testimoni-nav.next');
        const indicators = testimoniContainer.querySelectorAll('.testimoni-indicator');
        
        let currentSlide = 0;
        const totalSlides = testimoniSlides.length;
        
        // Initialize first slide
        if (testimoniSlides.length > 0) {
            testimoniSlides[0].classList.add('active');
            if (indicators.length > 0) {
                indicators[0].classList.add('active');
            }
        }
        
        // Update navigation buttons state
        function updateNavButtons() {
            if (prevBtn) prevBtn.disabled = currentSlide === 0;
            if (nextBtn) nextBtn.disabled = currentSlide === totalSlides - 1;
        }
        
        // Show specific slide
        function showSlide(index) {
            testimoniSlides.forEach((slide, i) => {
                slide.classList.remove('active', 'prev');
                if (i === index) {
                    slide.classList.add('active');
                } else if (i < index) {
                    slide.classList.add('prev');
                }
            });
            
            // Update indicators
            indicators.forEach((indicator, i) => {
                indicator.classList.toggle('active', i === index);
            });
            
            currentSlide = index;
            updateNavButtons();
        }
        
        // Next slide
        function nextSlide() {
            if (currentSlide < totalSlides - 1) {
                showSlide(currentSlide + 1);
            }
        }
        
        // Previous slide
        function prevSlide() {
            if (currentSlide > 0) {
                showSlide(currentSlide - 1);
            }
        }
        
        // Event listeners
        if (nextBtn) {
            nextBtn.addEventListener('click', nextSlide);
        }
        
        if (prevBtn) {
            prevBtn.addEventListener('click', prevSlide);
        }
        
        // Indicator clicks
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => showSlide(index));
        });
        
        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                prevSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
            }
        });
        
        // Auto-play with pause on hover (optional)
        let autoPlayInterval;
        
        function startAutoPlay() {
            autoPlayInterval = setInterval(() => {
                if (currentSlide < totalSlides - 1) {
                    nextSlide();
                } else {
                    showSlide(0); // Reset to first slide
                }
            }, 5000); // Change slide every 5 seconds
        }
        
        function stopAutoPlay() {
            if (autoPlayInterval) {
                clearInterval(autoPlayInterval);
            }
        }
        
        // Start auto-play
        startAutoPlay();
        
        // Pause on hover
        testimoniContainer.addEventListener('mouseenter', stopAutoPlay);
        testimoniContainer.addEventListener('mouseleave', startAutoPlay);
        
        // Initialize navigation buttons
        updateNavButtons();
    }
    
    // Partners logos scroll control
    const logosScroll = document.querySelector('.logos-scroll');
    if (logosScroll) {
        logosScroll.addEventListener('mouseenter', function() {
            this.style.animationPlayState = 'paused';
        });
        
        logosScroll.addEventListener('mouseleave', function() {
            this.style.animationPlayState = 'running';
        });
    }
    
    // Enhanced hover effects for testimoni cards
    const testimoniCards = document.querySelectorAll('.testimoni-scroll > div');
    testimoniCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
            this.style.boxShadow = '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '';
        });
    });
    
    // Enhanced hover effects for partner logos
    const partnerLogos = document.querySelectorAll('.logos-scroll > div');
    partnerLogos.forEach(logo => {
        logo.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-4px) scale(1.05)';
            this.style.boxShadow = '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)';
        });
        
        logo.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '';
        });
    });
    
    // Smooth scroll for navigation links
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
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
    
    // Performance optimization: Reduce animation complexity on mobile
    function checkMobile() {
        if (window.innerWidth <= 768) {
            document.body.classList.add('mobile-device');
        } else {
            document.body.classList.remove('mobile-device');
        }
    }
    
    // Check on load and resize
    checkMobile();
    window.addEventListener('resize', checkMobile);
    
    // Add loading animation
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });
});

// Intersection Observer for better performance
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-in');
        }
    });
}, observerOptions);

// Observe elements for animation
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('[data-aos]');
    animatedElements.forEach(el => observer.observe(el));
});
