    <footer class="bg-brand-navy text-white pt-16 pb-8 border-t border-brand-green/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                
                <!-- Brand Col -->
                <div class="flex flex-col space-y-4">
                    <a href="<?php echo $basePath; ?>index.php" class="flex items-center gap-3 group">
                        <img src="<?php echo $basePath; ?>images/logo.png" alt="Green Ceylon" class="h-10 w-auto object-contain transition-transform group-hover:scale-105">
                        <div class="flex flex-col">
                            <span class="font-heading font-black text-lg leading-tight tracking-tight text-white group-hover:text-brand-gold transition-colors">
                                Green Ceylon
                            </span>
                            <span class="text-xxs tracking-widest uppercase font-bold text-brand-gold">
                                Travels & Tours
                            </span>
                        </div>
                    </a>
                    <p class="text-white/70 text-sm leading-relaxed">
                        Your premier partner for discovering the wonders of Sri Lanka. We customize tours, rent quality vehicles, and provide trusted cab transfers.
                    </p>
                    <div class="flex gap-4 pt-2">
                        <a href="#" class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center hover:bg-brand-green hover:text-white transition-colors">
                            <i data-lucide="facebook" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center hover:bg-brand-pink hover:text-white transition-colors">
                            <i data-lucide="instagram" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center hover:bg-brand-blue hover:text-white transition-colors">
                            <i data-lucide="twitter" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-heading font-bold text-lg text-brand-gold mb-6 relative pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-8 after:h-0.5 after:bg-brand-green">
                        Quick Links
                    </h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="<?php echo $basePath; ?>index.php" class="text-white/70 hover:text-brand-green transition-colors">Home</a></li>
                        <li><a href="<?php echo $basePath; ?>destinations.php" class="text-white/70 hover:text-brand-green transition-colors">Destinations</a></li>
                        <li><a href="<?php echo $basePath; ?>tours.php" class="text-white/70 hover:text-brand-green transition-colors">Tour Packages</a></li>
                        <li><a href="<?php echo $basePath; ?>rent-a-car/" class="text-white/70 hover:text-brand-green transition-colors">Rent a Car</a></li>
                        <li><a href="<?php echo $basePath; ?>about.php" class="text-white/70 hover:text-brand-green transition-colors">About Us</a></li>
                        <li><a href="<?php echo $basePath; ?>contact.php" class="text-white/70 hover:text-brand-green transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="font-heading font-bold text-lg text-brand-gold mb-6 relative pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-8 after:h-0.5 after:bg-brand-green">
                        Our Services
                    </h3>
                    <ul class="space-y-3 text-sm text-white/70">
                        <li class="flex items-center gap-2">
                            <i data-lucide="shield-check" class="w-4 h-4 text-brand-green shrink-0"></i> Custom Tour Packages
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="shield-check" class="w-4 h-4 text-brand-green shrink-0"></i> Self-Drive Vehicle Rentals
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="shield-check" class="w-4 h-4 text-brand-green shrink-0"></i> Chauffeur-Driven Rides
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="shield-check" class="w-4 h-4 text-brand-green shrink-0"></i> Airport Transfers & Cabs
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="shield-check" class="w-4 h-4 text-brand-green shrink-0"></i> Eco-Friendly Expeditions
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="font-heading font-bold text-lg text-brand-gold mb-6 relative pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-8 after:h-0.5 after:bg-brand-green">
                        Contact Us
                    </h3>
                    <ul class="space-y-4 text-sm text-white/70">
                        <li class="flex gap-3">
                            <i data-lucide="map-pin" class="w-5 h-5 text-brand-green shrink-0 mt-0.5"></i>
                            <span>Yataththawala, imbulgasdeniya</span>
                        </li>
                        <li class="flex gap-3">
                            <i data-lucide="phone" class="w-5 h-5 text-brand-green shrink-0 mt-0.5"></i>
                            <div>
                                <a href="tel:+94719084259" class="hover:text-white block">+94 71 908 4259</a>
                                <a href="tel:+94761152156" class="hover:text-white block">+94 76 115 2156</a>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <i data-lucide="mail" class="w-5 h-5 text-brand-green shrink-0 mt-0.5"></i>
                            <div>
                                <a href="mailto:Info@gcttravels.com" class="hover:text-white block">Info@gcttravels.com</a>
                                <a href="mailto:ajith@gcttravels.com" class="hover:text-white block">ajith@gcttravels.com</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Tagline Strip from Logo -->
            <div class="mt-16 py-4 border-y border-white/10 flex flex-col sm:flex-row justify-between items-center text-center gap-4 text-xs font-semibold uppercase tracking-widest text-brand-gold bg-black/10 rounded-lg px-6">
                <span>Explore Sri Lanka</span>
                <span class="hidden sm:inline text-white/30">•</span>
                <span>Rent a Car</span>
                <span class="hidden sm:inline text-white/30">•</span>
                <span>Professional Cab Service</span>
            </div>

            <!-- Copyright -->
            <div class="mt-8 flex flex-col sm:flex-row justify-between items-center text-center text-xs text-white/40 gap-4">
                <p>© <?php echo date('Y'); ?> Green Ceylon Travels and Tours. All Rights Reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-white">Privacy Policy</a>
                    <a href="#" class="hover:text-white">Terms & Conditions</a>
                </div>
            </div>

        </div>
    </footer>

    <!-- Floating WhatsApp Button (Right Side) -->
    <a href="https://wa.me/94719084259" target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 z-50 flex flex-row-reverse items-center gap-2 group no-print animate-fade-in" aria-label="Chat on WhatsApp">
        <!-- Button Icon -->
        <div class="w-14 h-14 bg-[#25D366] text-white rounded-full flex items-center justify-center shadow-lg hover:bg-[#20ba5a] hover:scale-110 active:scale-95 transition-all duration-300 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-7 h-7 fill-current">
                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
            </svg>
        </div>
        <!-- Tooltip -->
        <span class="bg-white text-brand-navy font-bold text-xs px-3.5 py-2 rounded-xl shadow-md border border-brand-navy/5 opacity-0 -translate-x-4 pointer-events-none group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 whitespace-nowrap">
            Chat on WhatsApp
        </span>
    </a>

    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Mobile Menu Interactivity
        const menuBtn = document.getElementById('mobile-menu-toggle');
        const closeBtn = document.getElementById('mobile-menu-close');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuPanel = document.getElementById('mobile-menu-panel');
        const header = document.getElementById('main-header');

        function openMenu() {
            if (!mobileMenu || !mobileMenuPanel) return;
            mobileMenu.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
            // Allow DOM to update then trigger slide-in transition
            setTimeout(() => {
                mobileMenu.classList.remove('opacity-0');
                mobileMenuPanel.classList.remove('translate-x-full');
            }, 10);
        }

        function closeMenu() {
            if (!mobileMenu || !mobileMenuPanel) return;
            mobileMenuPanel.classList.add('translate-x-full');
            mobileMenu.classList.add('opacity-0');
            document.body.classList.remove('overflow-hidden');
            // Wait for transition to finish then add hidden
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
        }

        if (menuBtn) {
            menuBtn.addEventListener('click', openMenu);
        }
        if (closeBtn) {
            closeBtn.addEventListener('click', closeMenu);
        }
        if (mobileMenu) {
            mobileMenu.addEventListener('click', (e) => {
                if (e.target === mobileMenu) {
                    closeMenu();
                }
            });
        }

        // Header scroll effect
        const handleScroll = () => {
            if (window.innerWidth < 1024) {
                // On mobile, keep solid header background for visibility
                header.classList.remove('bg-transparent', 'py-5', 'bg-black/60');
                header.classList.add('bg-brand-navy', 'backdrop-blur-md', 'shadow-md', 'py-3');
            } else {
                if (window.scrollY > 50) {
                    header.classList.remove('bg-transparent', 'py-5', 'bg-brand-navy');
                    header.classList.add('bg-black/60', 'backdrop-blur-md', 'shadow-md', 'py-3');
                } else {
                    header.classList.remove('bg-black/60', 'backdrop-blur-md', 'shadow-md', 'py-3', 'bg-brand-navy');
                    header.classList.add('bg-transparent', 'py-5');
                }
            }
        };

        window.addEventListener('scroll', handleScroll);
        window.addEventListener('resize', handleScroll);
        // Run once on load to initialize header style
        handleScroll();
    </script>
</body>
</html>
