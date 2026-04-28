<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Abdullah Arfan</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                primary: '#2563EB',   // Blue
                secondary: '#9333EA', // Purple
                accent: '#EC4899',    // Pink
                dark: '#0f172a',
              },
              fontFamily: {
                sans: ['Inter', 'sans-serif'],
              },
              animation: {
                'gradient': 'gradient 3s ease infinite',
                'blob': 'blob 7s infinite',
              },
              keyframes: {
                gradient: {
                  '0%, 100%': { 'background-position': '0% 50%' },
                  '50%': { 'background-position': '100% 50%' },
                },
                blob: {
                  '0%, 100%': { transform: 'translate(0, 0) scale(1)' },
                  '25%': { transform: 'translate(20px, -50px) scale(1.1)' },
                  '50%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                  '75%': { transform: 'translate(50px, 50px) scale(1.05)' },
                }
              }
            }
          }
        }
    </script>

    <style>
        body { 
            font-family: 'Inter', sans-serif;
        }
        
        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom Scrollbar for Dark Theme */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #1e293b;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #2563EB, #9333EA);
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #1d4ed8, #7e22ce);
        }
        
        /* Hide Scrollbar for Image Gallery */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        /* Gradient Animation */
        @keyframes gradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
        }
        
        /* Blob Animation */
        @keyframes blob {
            0%, 100% { transform: translate(0, 0) scale(1); }
            25% { transform: translate(20px, -50px) scale(1.1); }
            50% { transform: translate(-20px, 20px) scale(0.9); }
            75% { transform: translate(50px, 50px) scale(1.05); }
        }
        
        .animate-blob {
            animation: blob 7s infinite;
        }
        
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        
        .animation-delay-4000 {
            animation-delay: 4s;
        }

        /* Mobile Menu Animation */
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        
        .mobile-menu.active {
            max-height: 500px;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 antialiased">

    <!-- Navigation Bar - Dark Theme -->
    <nav class="fixed w-full z-50 bg-gray-900/80 backdrop-blur-md border-b border-gray-800 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="text-2xl font-black">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">
                        Portfolio.
                    </span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-300 hover:text-blue-400 transition font-semibold text-sm tracking-wide uppercase">
                        Home
                    </a>
                    <a href="#about" class="text-gray-300 hover:text-blue-400 transition font-semibold text-sm tracking-wide uppercase">
                        About
                    </a>
                    <a href="#projects" class="text-gray-300 hover:text-blue-400 transition font-semibold text-sm tracking-wide uppercase">
                        Projects
                    </a>
                    <a href="#certificates" class="text-gray-300 hover:text-blue-400 transition font-semibold text-sm tracking-wide uppercase">
                        Certificates
                    </a>
                    <a href="#contact" class="text-gray-300 hover:text-blue-400 transition font-semibold text-sm tracking-wide uppercase">
                        Contact
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-300 hover:text-blue-400 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="mobile-menu md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#home" class="block px-3 py-2 text-gray-300 hover:text-blue-400 hover:bg-gray-800 rounded-lg transition font-semibold">
                        Home
                    </a>
                    <a href="#about" class="block px-3 py-2 text-gray-300 hover:text-blue-400 hover:bg-gray-800 rounded-lg transition font-semibold">
                        About
                    </a>
                    <a href="#projects" class="block px-3 py-2 text-gray-300 hover:text-blue-400 hover:bg-gray-800 rounded-lg transition font-semibold">
                        Projects
                    </a>
                    <a href="#certificates" class="block px-3 py-2 text-gray-300 hover:text-blue-400 hover:bg-gray-800 rounded-lg transition font-semibold">
                        Certificates
                    </a>
                    <a href="#contact" class="block px-3 py-2 text-gray-300 hover:text-blue-400 hover:bg-gray-800 rounded-lg transition font-semibold">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer - Dark Theme with Gradient -->
    <footer class="relative bg-gradient-to-b from-gray-900 to-black border-t border-gray-800 py-12 mt-20 overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.02)_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-30"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <!-- Brand -->
                <div>
                    <h3 class="text-2xl font-black mb-4">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">
                            Abdullah Arfan
                        </span>
                    </h3>
                    <p class="text-gray-400 text-sm">
                        
                        Information Technology Student
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-sm">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-blue-400 transition text-sm">Home</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-blue-400 transition text-sm">About</a></li>
                        <li><a href="#projects" class="text-gray-400 hover:text-blue-400 transition text-sm">Projects</a></li>
                        <li><a href="#certificates" class="text-gray-400 hover:text-blue-400 transition text-sm">Certificates</a></li>
                    </ul>
                </div>
                
                <!-- Social Media -->
                <div>
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-sm">Connect</h4>
                    <div class="flex space-x-4">
                        <a href="https://github.com/arfan-lh" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-gray-400 hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 hover:text-white transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/abdullah-arfan-4b9bb52b0/" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-gray-400 hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 hover:text-white transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/arfaanlh/" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-gray-400 hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 hover:text-white transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400 text-sm">
                    &copy; {{ date('Y') }} <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 font-semibold">Abdullah Arfan</span>. 
                    Code • Build • Innovate

            </div>
        </div>
    </footer>

    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom Scripts -->
    <script>
        // Initialize AOS with custom settings for repeated animations
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                once: false,        // Animasi akan terjadi setiap kali scroll
                mirror: true,       // Animasi akan ter-trigger saat scroll up dan down
                offset: 100,        // Jarak dari viewport untuk trigger animasi
                easing: 'ease-out-cubic',
                anchorPlacement: 'top-bottom'
            });
            
            // Refresh AOS on scroll untuk memastikan animasi smooth
            window.addEventListener('scroll', function() {
                AOS.refresh();
            });
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('active');
                
                // Change icon
                const icon = this.querySelector('svg');
                if (mobileMenu.classList.contains('active')) {
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>';
                } else {
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
                }
            });
            
            // Close mobile menu when clicking on a link
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.remove('active');
                    const icon = mobileMenuBtn.querySelector('svg');
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
                });
            });
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
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

        // Add active class to nav links based on scroll position
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('nav a[href^="#"]');
            
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('text-blue-400');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('text-blue-400');
                }
            });
        });
    </script>
</body>
</html>