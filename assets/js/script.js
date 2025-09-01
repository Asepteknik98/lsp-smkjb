// JavaScript untuk LSP GLOBAL OTOMOTIF

document.addEventListener('DOMContentLoaded', function() {
    // Slider functionality
    const slider = {
        currentSlide: 0,
        slides: document.querySelectorAll('.hero-slide'),
        dots: document.querySelectorAll('.pagination-dot'),
        prevBtn: document.querySelector('.slider-prev'),
        nextBtn: document.querySelector('.slider-next'),
        
        init: function() {
            this.bindEvents();
            this.autoPlay();
        },
        
        bindEvents: function() {
            // Previous button
            if (this.prevBtn) {
                this.prevBtn.addEventListener('click', () => {
                    this.prevSlide();
                });
            }
            
            // Next button
            if (this.nextBtn) {
                this.nextBtn.addEventListener('click', () => {
                    this.nextSlide();
                });
            }
            
            // Pagination dots
            this.dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    this.goToSlide(index);
                });
            });
            
            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') {
                    this.prevSlide();
                } else if (e.key === 'ArrowRight') {
                    this.nextSlide();
                }
            });
        },
        
        goToSlide: function(index) {
            // Remove active class from current slide and dot
            this.slides[this.currentSlide].classList.remove('active');
            this.dots[this.currentSlide].classList.remove('active');
            
            // Update current slide
            this.currentSlide = index;
            
            // Add active class to new slide and dot
            this.slides[this.currentSlide].classList.add('active');
            this.dots[this.currentSlide].classList.add('active');
        },
        
        nextSlide: function() {
            const nextIndex = (this.currentSlide + 1) % this.slides.length;
            this.goToSlide(nextIndex);
        },
        
        prevSlide: function() {
            const prevIndex = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
            this.goToSlide(prevIndex);
        },
        
        autoPlay: function() {
            setInterval(() => {
                this.nextSlide();
            }, 5000); // Change slide every 5 seconds
        }
    };
    
    // Initialize slider
    slider.init();
    
    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('mobile-active');
        });
    }
    
    // Smooth scrolling for navigation links
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href.startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(href);
                
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
    
    // Add scroll effect to navigation
    window.addEventListener('scroll', function() {
        const nav = document.querySelector('.main-nav');
        
        if (window.scrollY > 100) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });
    
    // Search functionality
    const searchIcon = document.querySelector('.utility-icon i.fa-search');
    if (searchIcon) {
        searchIcon.addEventListener('click', function() {
            const searchInput = prompt('Masukkan kata kunci pencarian:');
            if (searchInput) {
                // Implement search functionality here
                console.log('Searching for:', searchInput);
                alert('Fitur pencarian akan segera tersedia!');
            }
        });
    }
    
    // User profile functionality
    const userIcon = document.querySelector('.utility-icon i.fa-user');
    if (userIcon) {
        userIcon.addEventListener('click', function() {
            // Implement user profile functionality here
            alert('Fitur profil pengguna akan segera tersedia!');
        });
    }
    
    // Social media links
    const socialIcons = document.querySelectorAll('.social-icon');
    socialIcons.forEach(icon => {
        icon.addEventListener('click', function(e) {
            e.preventDefault();
            const platform = this.querySelector('i').className;
            
            // Define social media URLs
            const socialUrls = {
                'fab fa-facebook-f': 'https://facebook.com/lspglobalotomotif',
                'fab fa-instagram': 'https://instagram.com/lspglobalotomotif',
                'fab fa-tiktok': 'https://tiktok.com/@lspglobalotomotif',
                'fab fa-x-twitter': 'https://twitter.com/lspglobalotomotif',
                'fab fa-youtube': 'https://youtube.com/lspglobalotomotif'
            };
            
            const url = socialUrls[platform];
            if (url) {
                window.open(url, '_blank');
            }
        });
    });
    
    // Add loading animation
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });
    
    // Add hover effects for navigation items
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.classList.add('hovered');
        });
        
        item.addEventListener('mouseleave', function() {
            this.classList.remove('hovered');
        });
    });

    // Statistics animation
    const statNumbers = document.querySelectorAll('.stat-number');
    
    function animateNumber(element, target) {
        let current = 0;
        const increment = target / 100;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current).toLocaleString();
        }, 20);
    }

    // Intersection Observer for statistics animation
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statCard = entry.target;
                const numberElement = statCard.querySelector('.stat-number');
                const targetNumber = parseInt(numberElement.textContent.replace(/,/g, ''));
                
                animateNumber(numberElement, targetNumber);
                statsObserver.unobserve(statCard);
            }
        });
    }, { threshold: 0.5 });

    statNumbers.forEach(stat => {
        statsObserver.observe(stat.closest('.stat-card'));
    });

    // Process cards interaction
    const processCards = document.querySelectorAll('.process-card');
    
    processCards.forEach(card => {
        card.addEventListener('click', function() {
            // Remove active class from all cards
            processCards.forEach(c => c.classList.remove('active'));
            // Add active class to clicked card
            this.classList.add('active');
        });
    });

    // Smooth scroll for process container
    const processContainer = document.querySelector('.process-container');
    if (processContainer) {
        let isDown = false;
        let startX;
        let scrollLeft;

        processContainer.addEventListener('mousedown', (e) => {
            isDown = true;
            processContainer.style.cursor = 'grabbing';
            startX = e.pageX - processContainer.offsetLeft;
            scrollLeft = processContainer.scrollLeft;
        });

        processContainer.addEventListener('mouseleave', () => {
            isDown = false;
            processContainer.style.cursor = 'grab';
        });

        processContainer.addEventListener('mouseup', () => {
            isDown = false;
            processContainer.style.cursor = 'grab';
        });

        processContainer.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - processContainer.offsetLeft;
            const walk = (x - startX) * 2;
            processContainer.scrollLeft = scrollLeft - walk;
        });
    }

    // Scheme cards interaction
    const schemeCards = document.querySelectorAll('.scheme-card');
    
    schemeCards.forEach(card => {
        card.addEventListener('click', function() {
            // Add click effect
            this.style.transform = 'translateY(-5px) scale(0.98)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            // Get scheme title for potential modal or navigation
            const title = this.querySelector('.scheme-title').textContent;
            console.log('Scheme clicked:', title);
            
            // You can add modal functionality here
            // showSchemeModal(title);
        });
        
        // Add hover animation
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Lazy loading for scheme images
    const schemeImages = document.querySelectorAll('.scheme-image img');
    
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.style.opacity = '0';
                img.style.transform = 'scale(1.1)';
                
                setTimeout(() => {
                    img.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    img.style.opacity = '1';
                    img.style.transform = 'scale(1)';
                }, 100);
                
                imageObserver.unobserve(img);
            }
        });
    }, { threshold: 0.1 });

    schemeImages.forEach(img => {
        imageObserver.observe(img);
    });

    // News cards interaction
    const newsCards = document.querySelectorAll('.news-card');
    
    newsCards.forEach(card => {
        card.addEventListener('click', function() {
            // Add click effect
            this.style.transform = 'translateY(-3px) scale(0.98)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            // Get news title for potential navigation
            const title = this.querySelector('.news-title').textContent;
            console.log('News clicked:', title);
            
            // You can add navigation functionality here
            // window.location.href = `/news/${encodeURIComponent(title)}`;
        });
        
        // Add hover animation with enhanced effects
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-12px) scale(1.02)';
            
            // Add glow effect
            this.style.boxShadow = '0 25px 60px rgba(0,0,0,0.15), 0 0 30px rgba(0, 123, 255, 0.1)';
            
            // Animate the top border
            const topBorder = this.querySelector('::before');
            if (topBorder) {
                topBorder.style.transform = 'scaleX(1)';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '0 10px 30px rgba(0,0,0,0.08)';
        });
        
        // Add read more link interaction
        const readMoreLink = card.querySelector('.news-read-more');
        if (readMoreLink) {
            readMoreLink.addEventListener('click', function(e) {
                e.stopPropagation();
                
                // Add ripple effect
                const ripple = document.createElement('span');
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(0, 123, 255, 0.3)';
                ripple.style.transform = 'scale(0)';
                ripple.style.animation = 'ripple 0.6s linear';
                ripple.style.left = (e.clientX - this.offsetLeft) + 'px';
                ripple.style.top = (e.clientY - this.offsetTop) + 'px';
                ripple.style.width = ripple.style.height = '20px';
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
                
                // Get article title for navigation
                const articleTitle = card.querySelector('.news-title').textContent;
                console.log('Read more clicked for:', articleTitle);
                
                // You can add navigation functionality here
                // window.location.href = `/article/${encodeURIComponent(articleTitle)}`;
            });
        }
    });
    
    // Add ripple animation CSS
    const rippleStyles = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    
    const rippleStyleSheet = document.createElement('style');
    rippleStyleSheet.textContent = rippleStyles;
    document.head.appendChild(rippleStyleSheet);

    // Next article button functionality
    const nextArticleBtn = document.querySelector('.next-article-btn');
    if (nextArticleBtn) {
        nextArticleBtn.addEventListener('click', function() {
            // Add click effect
            this.style.transform = 'translateY(-1px) scale(0.98)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            // You can add pagination or navigation functionality here
            console.log('Next article button clicked');
            alert('Fitur navigasi artikel akan segera tersedia!');
            
            // Example: Load more articles
            // loadMoreArticles();
        });
    }

    // Lazy loading for news images with enhanced animations
    const newsImages = document.querySelectorAll('.news-image img');
    
    const newsImageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                const card = img.closest('.news-card');
                
                // Add loading animation to card
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                
                // Animate image
                img.style.opacity = '0';
                img.style.transform = 'scale(1.1)';
                
                setTimeout(() => {
                    // Animate card entrance
                    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                    
                    // Animate image
                    img.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                    img.style.opacity = '1';
                    img.style.transform = 'scale(1)';
                }, 200);
                
                newsImageObserver.unobserve(img);
            }
        });
    }, { threshold: 0.2 });

    newsImages.forEach(img => {
        newsImageObserver.observe(img);
    });
    
    // Add staggered animation for news cards
    const newsCardsArray = Array.from(newsCards);
    newsCardsArray.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
        card.classList.add('news-card-animate');
        
        // Add loaded class after animation
        setTimeout(() => {
            card.classList.add('loaded');
        }, (index * 100) + 800);
    });

    // Footer social links interaction
    const footerSocialLinks = document.querySelectorAll('.footer-social .social-link');
    
    footerSocialLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Add click effect
            this.style.transform = 'translateY(-1px) scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            // Get platform for navigation
            const icon = this.querySelector('i');
            const platform = icon.className;
            
            // Define social media URLs
            const socialUrls = {
                'fab fa-facebook-f': 'https://facebook.com/lspglobalotomotif',
                'fab fa-instagram': 'https://instagram.com/lspglobalotomotif',
                'fab fa-youtube': 'https://youtube.com/lspglobalotomotif',
                'fab fa-x-twitter': 'https://twitter.com/lspglobalotomotif'
            };
            
            const url = socialUrls[platform];
            if (url) {
                window.open(url, '_blank');
            }
        });
        
        // Add hover animation
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Footer contact links interaction
    const contactLinks = document.querySelectorAll('.contact-value');
    
    contactLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Add click effect
            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
        });
    });

    // Logo interaction
    const logos = document.querySelectorAll('.logo, .footer-logo');
    
    logos.forEach(logo => {
        logo.addEventListener('click', function(e) {
            // Add click effect
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            // Navigate to home page
            console.log('Logo clicked - navigating to home');
            // window.location.href = '/';
        });
        
        // Add pulse animation on hover
        logo.addEventListener('mouseenter', function() {
            const icon = this.querySelector('.logo-circle, .footer-logo-icon');
            if (icon) {
                icon.style.animation = 'logoPulse 0.6s ease-in-out';
            }
        });
        
        logo.addEventListener('mouseleave', function() {
            const icon = this.querySelector('.logo-circle, .footer-logo-icon');
            if (icon) {
                icon.style.animation = '';
            }
        });
    });
});

// Additional CSS classes for JavaScript interactions
const additionalStyles = `
    .main-nav.scrolled {
        background-color: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(15px);
        box-shadow: 0 6px 25px rgba(0,0,0,0.15);
        border-bottom: 2px solid rgba(220, 53, 69, 0.2);
    }
    
    .nav-menu.mobile-active {
        display: flex !important;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 20px;
    }
    
    .nav-item.hovered .nav-link {
        transform: translateY(-2px);
    }
    
    body.loaded .hero-content {
        animation: fadeInUp 1s ease-out;
    }
    
    .process-card.active {
        border-color: #dc3545;
        background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 15px 40px rgba(220, 53, 69, 0.2);
    }
    
    .process-card.active .process-number {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        transform: translateX(-50%) scale(1.1);
    }
    
    .process-container {
        cursor: grab;
    }
    
    .process-container:active {
        cursor: grabbing;
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
    
    @keyframes logoPulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }
`;

// Inject additional styles
const styleSheet = document.createElement('style');
styleSheet.textContent = additionalStyles;
document.head.appendChild(styleSheet);
