<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?? 'FazTech - Solusi Keamanan Profesional' ?></title>

    <!-- Tailwind CSS - Stable Version -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#0ea5e9",
                        secondary: "#0c4a6e",
                        'secom-blue-dark': '#004993',
                        'secom-blue-light': '#009ba4',
                        'secom-gray': '#e0e0e0'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        'DEFAULT': '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px'
                    },
                    animation: {
                        'bounce-slow': 'bounce 3s infinite',
                        'pulse-slow': 'pulse 3s infinite',
                        'spin-slow': 'spin 8s linear infinite',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                        'display': ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- AOS Animate on Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom Animations -->
    <link href="<?= base_url('assets/css/animations.css') ?>" rel="stylesheet">
    
    <!-- Custom Animation Scripts -->
    <script src="<?= base_url('assets/js/animations.js') ?>" defer></script>

    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        input:focus,
        button:focus,
        select:focus,
        textarea:focus {
            outline: none;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(14, 165, 233, 0.6);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(14, 165, 233, 0.8);
        }

        /* Modern glassmorphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        /* Gradient animated border */
        .gradient-border {
            position: relative;
        }

        .gradient-border::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: inherit;
            padding: 2px;
            background: linear-gradient(45deg, #0ea5e9, #0c4a6e, #0ea5e9);
            background-size: 200% 200%;
            animation: border-animation 3s ease infinite;
            -webkit-mask:
                linear-gradient(#fff 0 0) content-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }

        @keyframes border-animation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Styling for scroll to top button */
        .scroll-top-btn {
            transition: opacity 0.3s, visibility 0.3s;
        }
    </style>
</head>

<body class="text-gray-800 overflow-x-hidden">
    <!-- Navbar - Professional Glass Effect with Enhanced Design -->
    <header class="fixed top-0 w-full z-50 transition-all duration-500" id="navbar">
        <!-- Top Bar with Contact Info -->
        <div class="bg-gradient-to-r from-secondary to-primary text-white py-2 text-sm">
            <div class="container mx-auto px-6 flex justify-between items-center">
                <div class="flex items-center space-x-6">
                    <div class="flex items-center space-x-2">
                        <i class="ri-phone-fill text-primary/80"></i>
                        <span>+62 812-3456-7890</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="ri-mail-fill text-primary/80"></i>
                        <span>info@faztech.co.id</span>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-white/80">✓ Bergaransi Resmi</span>
                </div>
            </div>
        </div>

        <!-- Main Navbar -->
        <div class="bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-100">
            <div class="container mx-auto px-6 py-4">
                <div class="flex justify-between items-center">
                    <!-- Enhanced Logo -->
                    <a href="<?= base_url() ?>" class="flex items-center group">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary rounded-full opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                            <img src="<?= base_url('assets/img/faztech.png') ?>" alt="FazTech Logo" class="w-12 h-12 relative z-10 group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="ml-4">
                            <span class="text-primary font-display font-bold text-2xl text-gray-900 group-hover:text-secondary transition-colors duration-300">FazTech</span>
                            <div class="text-base text-gray-500 font-medium" style="letter-spacing:0.05em;">Solutions</div>
                        </div>
                    </a>

                    <!-- Enhanced Desktop Navigation -->
                    <nav class="hidden lg:flex items-center space-x-1">
                        <a href="<?= base_url() ?>" class="relative px-4 py-2 text-gray-700 hover:text-primary font-medium transition-all duration-300 nav-link group">
                            <span class="relative z-10">Beranda</span>
                            <div class="absolute inset-0 bg-primary/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                        <a href="<?= base_url("produk") ?>" class="relative px-4 py-2 text-gray-700 hover:text-primary font-medium transition-all duration-300 nav-link group">
                            <span class="relative z-10">Paket</span>
                            <div class="absolute inset-0 bg-primary/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                        <a href="<?= base_url("profile") ?>" class="relative px-4 py-2 text-gray-700 hover:text-primary font-medium transition-all duration-300 nav-link group">
                            <span class="relative z-10">Profile Perusahaan</span>
                            <div class="absolute inset-0 bg-primary/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                        <a href="<?= base_url("testimoni") ?>" class="relative px-4 py-2 text-gray-700 hover:text-primary font-medium transition-all duration-300 nav-link group">
                            <span class="relative z-10">Testimoni</span>
                            <div class="absolute inset-0 bg-primary/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                        <a href="<?= base_url("pekerjaan") ?>" class="relative px-4 py-2 text-gray-700 hover:text-primary font-medium transition-all duration-300 nav-link group">
                            <span class="relative z-10">Pekerjaan</span>
                            <div class="absolute inset-0 bg-primary/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                    </nav>

                    <!-- Enhanced Contact Button -->
                    <div class="hidden lg:flex items-center space-x-4">
                        <div class="flex items-center space-x-2 text-sm text-gray-600">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                            <span>Online</span>
                        </div>
                        <a href="#kontak" class="relative bg-gradient-to-r from-primary via-primary to-secondary text-white px-6 py-3 rounded-xl hover:shadow-xl hover:shadow-primary/30 transition-all transform hover:-translate-y-1 duration-300 group overflow-hidden">
                            <span class="relative z-10 flex items-center space-x-2">
                                <i class="ri-customer-service-2-fill"></i>
                                <span class="font-semibold">Hubungi Kami</span>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                    </div>

                    <!-- Enhanced Mobile menu button -->
                    <button class="lg:hidden flex items-center justify-center w-12 h-12 rounded-xl bg-gradient-to-r from-primary/10 to-secondary/10 hover:from-primary/20 hover:to-secondary/20 transition-all duration-300" id="mobileMenuBtn">
                        <i class="ri-menu-line ri-lg text-primary"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Enhanced Mobile menu (hidden by default) -->
        <div class="lg:hidden hidden bg-white/95 backdrop-blur-md shadow-xl rounded-b-2xl mx-4 overflow-hidden transition-all duration-500" id="mobileMenu">
            <nav class="flex flex-col">
                <!-- Mobile Header -->
                <div class="bg-gradient-to-r from-primary/10 to-secondary/10 px-6 py-4 border-b border-gray-100">
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                        <span class="text-sm font-medium text-gray-700">Online 24/7</span>
                    </div>
                </div>

                <!-- Mobile Navigation Links -->
                <div class="px-4 py-2">
                    <a href="<?= base_url() ?>" class="flex items-center space-x-3 text-gray-700 hover:text-primary py-4 border-b border-gray-100 nav-link group transition-all duration-300">
                        <i class="ri-home-4-line text-lg group-hover:text-primary"></i>
                        <span class="font-medium">Beranda</span>
                    </a>
                    <a href="<?= base_url("produk") ?>" class="flex items-center space-x-3 text-gray-700 hover:text-primary py-4 border-b border-gray-100 nav-link group transition-all duration-300">
                        <i class="ri-gift-line text-lg group-hover:text-primary"></i>
                        <span class="font-medium">Paket</span>
                    </a>
                    <a href="<?= base_url("profile") ?>" class="flex items-center space-x-3 text-gray-700 hover:text-primary py-4 border-b border-gray-100 nav-link group transition-all duration-300">
                        <i class="ri-building-line text-lg group-hover:text-primary"></i>
                        <span class="font-medium">Profile Perusahaan</span>
                    </a>
                    <a href="<?= base_url("testimoni") ?>" class="flex items-center space-x-3 text-gray-700 hover:text-primary py-4 border-b border-gray-100 nav-link group transition-all duration-300">
                        <i class="ri-star-line text-lg group-hover:text-primary"></i>
                        <span class="text-primary">Testimoni</span>
                    </a>
                    <a href="<?= base_url("pekerjaan") ?>" class="flex items-center space-x-3 text-gray-700 hover:text-primary py-4 border-b border-gray-100 nav-link group transition-all duration-300">
                        <i class="ri-briefcase-line text-lg group-hover:text-primary"></i>
                        <span class="font-medium">Pekerjaan</span>
                    </a>
                </div>

                <!-- Mobile Contact Section -->
                <div class="px-4 py-6 bg-gradient-to-r from-primary/5 to-secondary/5">
                    <div class="space-y-4">
                        <div class="text-center">
                            <div class="text-sm text-gray-600 mb-2">Butuh bantuan cepat?</div>
                            <a href="#kontak" class="block bg-gradient-to-r from-primary via-primary to-secondary text-white px-6 py-3 rounded-xl text-center hover:shadow-lg hover:shadow-primary/30 transition-all transform hover:-translate-y-1 duration-300 font-semibold">
                                <i class="ri-customer-service-2-fill mr-2"></i>
                                Hubungi Kami
                            </a>
                        </div>

                        <!-- Quick Contact Info -->
                        <div class="grid grid-cols-2 gap-4 text-center">
                            <div class="bg-white rounded-lg p-3 shadow-sm">
                                <i class="ri-phone-fill text-primary text-xl mb-1"></i>
                                <div class="text-xs text-gray-600">Telepon</div>
                                <div class="text-sm font-medium text-gray-800">+62 812-3456-7890</div>
                            </div>
                            <div class="bg-white rounded-lg p-3 shadow-sm">
                                <i class="ri-mail-fill text-primary text-xl mb-1"></i>
                                <div class="text-xs text-gray-600">Email</div>
                                <div class="text-sm font-medium text-gray-800">info@faztech.co.id</div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Header Spacing -->
    <div class="h-20"></div>

    <!-- Professional Navbar JavaScript -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Enhanced Navbar Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('navbar');
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const navLinks = document.querySelectorAll('.nav-link');

            // Navbar scroll effect
            let lastScrollTop = 0;
            window.addEventListener('scroll', function() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > 100) {
                    navbar.classList.add('bg-white/98', 'shadow-xl', 'backdrop-blur-lg');
                    navbar.classList.remove('bg-white/95');
                } else {
                    navbar.classList.remove('bg-white/98', 'shadow-xl', 'backdrop-blur-lg');
                    navbar.classList.add('bg-white/95');
                }

                lastScrollTop = scrollTop;
            });

            // Mobile menu toggle with enhanced animation
            mobileMenuBtn.addEventListener('click', function() {
                const isOpen = mobileMenu.classList.contains('hidden');

                if (isOpen) {
                    mobileMenu.classList.remove('hidden');
                    mobileMenu.classList.add('animate-slideDown');
                    mobileMenuBtn.innerHTML = '<i class="ri-close-line ri-lg text-primary"></i>';
                } else {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('animate-slideDown');
                    mobileMenuBtn.innerHTML = '<i class="ri-menu-line ri-lg text-primary"></i>';
                }
            });

            // Smooth scroll for navigation links
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href.startsWith('#')) {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            const offsetTop = target.offsetTop - 100;
                            window.scrollTo({
                                top: offsetTop,
                                behavior: 'smooth'
                            });
                        }
                    }

                    // Close mobile menu after clicking
                    if (window.innerWidth < 1024) {
                        mobileMenu.classList.add('hidden');
                        mobileMenuBtn.innerHTML = '<i class="ri-menu-line ri-lg text-primary"></i>';
                    }
                });
            });

            // Add active state to current page
            const currentPath = window.location.pathname;
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href && currentPath.includes(href.replace('<?= base_url() ?>', ''))) {
                    link.classList.add('text-primary', 'font-semibold');
                }
            });

            // Professional hover effects for desktop nav
            if (window.innerWidth >= 1024) {
                navLinks.forEach(link => {
                    link.addEventListener('mouseenter', function() {
                        this.style.transform = 'translateY(-2px)';
                    });

                    link.addEventListener('mouseleave', function() {
                        this.style.transform = 'translateY(0)';
                    });
                });
            }

            // Add floating notification badge - Right side, reappears every 5 minutes
            function showNotification() {
                const notification = document.createElement('div');
                notification.className = 'fixed top-32 right-6 bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-3 rounded-full shadow-lg z-50 transform translate-x-full transition-all duration-700 ease-in-out';
                notification.innerHTML = `
                    <div class="flex items-center space-x-3">
                        <i class="ri-shield-check-fill text-lg"></i>
                        <span class="text-sm font-medium">Sistem Keamanan Terpercaya</span>
                    </div>
                `;
                document.body.appendChild(notification);

                // Animate in from right
                setTimeout(() => {
                    notification.style.transform = 'translateX(0)';
                }, 1000);

                // Animate out after 5 seconds with smooth transition
                setTimeout(() => {
                    notification.style.transform = 'translateX(full)';
                    notification.style.opacity = '0';
                    setTimeout(() => notification.remove(), 700);
                }, 5000);
            }

            // Show notification immediately after 2 seconds
            setTimeout(showNotification, 2000);

            // Show notification every 5 minutes (300,000 milliseconds)
            setInterval(showNotification, 300000);
        });

        // Professional loading animation
        window.addEventListener('load', function() {
            const loader = document.querySelector('.loader');
            if (loader) {
                loader.style.opacity = '0';
                setTimeout(() => loader.style.display = 'none', 500);
            }
        });
    </script>

    <!-- Additional Professional Styles -->
    <style>
        /* Enhanced animations */
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slideDown {
            animation: slideDown 0.3s ease-out;
        }

        /* Professional hover effects */
        .nav-link {
            position: relative;
            overflow: hidden;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #0ea5e9, #0c4a6e);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Enhanced button effects */
        .btn-primary {
            background: linear-gradient(135deg, #0ea5e9, #0c4a6e);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(14, 165, 233, 0.3);
        }

        /* Professional scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #0ea5e9, #0c4a6e);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #0c4a6e, #0ea5e9);
        }
    </style>