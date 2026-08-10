<?php
if (!isset($basePath)) {
    $basePath = './';
}
?>
<!DOCTYPE html>
<html lang="en" class="h-full antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Green Ceylon Travels and Tours | Sri Lanka Travel Agency"; ?></title>
    <meta name="description" content="<?php echo isset($pageDesc) ? $pageDesc : "Experience Sri Lanka with Green Ceylon Travels and Tours. We offer premium tour packages, vehicle rental (rent-a-car), and professional cab & airport transfer services."; ?>">
    <meta name="keywords" content="Sri Lanka travel, Green Ceylon, Sri Lanka tours, Rent a car Sri Lanka, Sri Lanka cab service, Sigiriya tours, Sri Lanka vacation">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Pacifico&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            'green-deep': '#1E7E34',
                            'green': '#4CAF50',
                            'green-light': '#8BC34A',
                            'gold': '#F5A623',
                            'pink': '#D6006D',
                            'blue': '#1E88E5',
                            'navy': '#0B2545',
                            'cream': '#FFFDF7'
                        }
                    },
                    fontFamily: {
                        heading: ['Outfit', 'sans-serif'],
                        script: ['Pacifico', 'cursive'],
                        sans: ['Outfit', 'sans-serif']
                    },
                    fontSize: {
                        'xxs': '0.65rem'
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS Styles matching globals.css -->
    <style>
        :root {
            --background: #FFFDF7;
            --foreground: #0B2545;
            --color-brand-green-deep: #1E7E34;
            --color-brand-green: #4CAF50;
        }
        body {
            background-color: var(--background);
            color: var(--foreground);
            font-family: 'Outfit', sans-serif;
        }
        .text-gradient {
            background: linear-gradient(135deg, var(--color-brand-green-deep), var(--color-brand-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-wave-curve {
            clip-path: polygon(0 60%, 100% 0, 100% 100%, 0% 100%);
        }
        .tours-header-bg {
            background-image: linear-gradient(rgba(11, 37, 69, 0.75), rgba(11, 37, 69, 0.9)), url('<?php echo $basePath; ?>images/12.jpg');
        }
        .rent-car-header-bg {
            background-image: linear-gradient(rgba(11, 37, 69, 0.75), rgba(11, 37, 69, 0.9)), url('<?php echo $basePath; ?>images/16.jpg');
        }
        .about-header-bg {
            background-image: linear-gradient(rgba(11, 37, 69, 0.75), rgba(11, 37, 69, 0.9)), url('<?php echo $basePath; ?>images/17.jpg');
        }
        .contact-header-bg {
            background-image: linear-gradient(rgba(11, 37, 69, 0.75), rgba(11, 37, 69, 0.9)), url('<?php echo $basePath; ?>images/20.jpg');
        }
        
        /* Custom Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
        @keyframes spin-slow {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        @keyframes pulse-custom {
            0%, 100% { transform: scale(1); filter: drop-shadow(0 0 10px rgba(76, 175, 80, 0.1)); }
            50% { transform: scale(1.06); filter: drop-shadow(0 0 25px rgba(76, 175, 80, 0.35)); }
        }
        .animate-spin-slow {
            animation: spin-slow 2.5s linear infinite;
        }
        .animate-pulse-custom {
            animation: pulse-custom 2.2s ease-in-out infinite;
        }
        .preloader-border-t {
            border-top-color: #4CAF50 !important;
        }
        .preloader-border-r {
            border-right-color: #F5A623 !important;
        }
    </style>
</head>
<body class="min-h-full flex flex-col bg-brand-cream text-brand-navy">

    <?php
    $current_uri = $_SERVER['REQUEST_URI'];
    $navLinks = [
        ["name" => "Home", "href" => "index.php", "icon" => "home"],
        ["name" => "Destinations", "href" => "destinations.php", "icon" => "map-pin"],
        ["name" => "Tour Packages", "href" => "tours.php", "icon" => "compass"],
        ["name" => "Rent a Car", "href" => "rent-a-car.php", "icon" => "car", "isDropdown" => true],
        ["name" => "About Us", "href" => "about.php", "icon" => "info"],
        ["name" => "Contact", "href" => "contact.php", "icon" => "mail"],
    ];
    
    // Simple helper to check active page
    function isActive($href, $current_uri) {
        $base = basename($href);
        $current = basename(parse_url($current_uri, PHP_URL_PATH));
        if ($current == "" || $current == "index") {
            $current = "index.php";
        }
        return ($base === $current) || ($base === "index.php" && $current === "/");
    }
    
    $is_home = isActive("index.php", $current_uri);
    ?>

    <?php if ($is_home): ?>
    <!-- Premium Preloader Overlay -->
    <div id="preloader" class="fixed inset-0 z-[9999] bg-[#0b2545] flex flex-col items-center justify-center transition-all duration-700 ease-in-out">
        <div class="relative flex items-center justify-center mb-6">
            <!-- Spinning outer border with gradient colors -->
            <div class="absolute w-32 h-32 rounded-full border-4 border-white/5 preloader-border-t preloader-border-r animate-spin-slow"></div>
            <!-- Inner soft pulsing glow -->
            <div class="absolute w-28 h-28 rounded-full bg-white/5 backdrop-blur-md border border-white/10 shadow-[0_0_50px_rgba(76,175,80,0.15)] animate-pulse-custom"></div>
            <!-- Logo -->
            <img src="<?php echo $basePath; ?>images/logo.png" alt="Green Ceylon Travels & Tours" class="relative z-10 w-20 h-20 object-contain animate-pulse-custom">
        </div>
        <div class="text-center flex flex-col items-center">
            <h2 class="font-heading font-black text-2xl tracking-wide text-white drop-shadow-md">
                Green Ceylon
            </h2>
            <p class="text-xs font-bold uppercase tracking-widest text-brand-gold mt-1">
                Travels & Tours
            </p>
            <!-- Progress Indicator -->
            <div class="w-48 h-1 bg-white/10 rounded-full overflow-hidden mt-6 relative">
                <div id="preloader-progress" class="absolute left-0 top-0 h-full w-0 bg-gradient-to-r from-brand-green via-brand-green-light to-brand-gold transition-all duration-300 ease-out"></div>
            </div>
            <span class="text-[10px] text-white/55 tracking-wider uppercase mt-2">Loading Experience...</span>
        </div>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const progress = document.getElementById('preloader-progress');
            if (progress) {
                let width = 0;
                const interval = setInterval(() => {
                    if (width >= 85) {
                        clearInterval(interval);
                    } else {
                        width += Math.random() * 15;
                        if (width > 85) width = 85;
                        progress.style.width = width + '%';
                    }
                }, 100);
                
                window.addEventListener('load', () => {
                    clearInterval(interval);
                    progress.style.width = '100%';
                    setTimeout(() => {
                        const preloader = document.getElementById('preloader');
                        if (preloader) {
                            preloader.classList.add('opacity-0', 'scale-105', 'pointer-events-none');
                            setTimeout(() => {
                                preloader.style.display = 'none';
                            }, 700);
                        }
                    }, 400);
                });
            }
        });
    </script>
    <?php endif; ?>

    <header id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent py-5 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo Section -->
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

                <!-- Desktop Nav Links -->
                <nav class="hidden lg:flex items-center gap-8">
                    <?php foreach ($navLinks as $link): 
                        if (isset($link['isDropdown']) && $link['isDropdown']):
                            $active = strpos($current_uri, 'rent-a-car') !== false;
                        ?>
                            <div class="relative group py-1">
                                <a href="<?php echo $basePath; ?>rent-a-car/" class="text-sm font-semibold tracking-wide transition-colors duration-200 relative py-1 flex items-center gap-1 <?php echo $active ? 'text-brand-gold font-bold' : 'text-white/80 hover:text-brand-gold'; ?>">
                                    <?php echo $link['name']; ?>
                                    <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform group-hover:rotate-180"></i>
                                    <?php if ($active): ?>
                                        <span class="absolute bottom-0 left-0 right-0 h-0.5 bg-brand-gold rounded-full"></span>
                                    <?php endif; ?>
                                </a>
                                <div class="absolute left-0 top-full mt-2 w-56 bg-brand-navy rounded-xl shadow-xl py-2 hidden group-hover:block border border-white/5 animate-fade-in">
                                    <a href="<?php echo $basePath; ?>rent-a-car/" class="block px-4 py-2.5 text-xs font-semibold text-white/80 hover:text-brand-gold hover:bg-white/5 transition-all">Rent a Car Overview</a>
                                    <a href="<?php echo $basePath; ?>rent-a-car/tourist-hire" class="block px-4 py-2.5 text-xs font-semibold text-white/80 hover:text-brand-gold hover:bg-white/5 transition-all">Tourist Hire Rental</a>
                                    <a href="<?php echo $basePath; ?>rent-a-car/wedding-car" class="block px-4 py-2.5 text-xs font-semibold text-white/80 hover:text-brand-gold hover:bg-white/5 transition-all">Wedding Car Rental</a>
                                </div>
                            </div>
                        <?php else:
                            $active = isActive($link['href'], $current_uri);
                        ?>
                            <a href="<?php echo $basePath . $link['href']; ?>" class="text-sm font-semibold tracking-wide transition-colors duration-200 relative py-1 <?php echo $active ? 'text-brand-gold font-bold' : 'text-white/80 hover:text-brand-gold'; ?>">
                                <?php echo $link['name']; ?>
                                <?php if ($active): ?>
                                    <span class="absolute bottom-0 left-0 right-0 h-0.5 bg-brand-gold rounded-full"></span>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </nav>

                <!-- Contact Button / CTA -->
                <div class="hidden lg:block">
                    <a href="tel:+94719084259">
                        <button class="bg-brand-gold hover:bg-brand-gold/90 text-brand-navy border border-transparent shadow-xs transition-all hover:shadow-md active:scale-95 disabled:pointer-events-none px-4 py-2 text-sm rounded-xl cursor-pointer flex items-center gap-2 font-bold">
                            <i data-lucide="phone-call" class="w-4 h-4"></i>
                            Call Now
                        </button>
                    </a>
                </div>

                <!-- Mobile Menu Toggle -->
                <button id="mobile-menu-toggle" class="lg:hidden p-2 rounded-lg hover:bg-white/10 text-white focus:outline-hidden cursor-pointer" aria-label="Toggle menu">
                    <i data-lucide="menu" id="menu-icon" class="w-6 h-6"></i>
                </button>
            </div>
        </div>

    </header>

    <!-- Mobile Drawer Overlay -->
    <div id="mobile-menu" class="hidden lg:hidden fixed inset-0 z-[100] transition-opacity duration-300 bg-black/60 backdrop-blur-xs opacity-0">
        <div class="fixed inset-y-0 right-0 w-full max-w-xs bg-brand-navy shadow-2xl p-6 flex flex-col justify-between overflow-y-auto transform translate-x-full transition-transform duration-300" id="mobile-menu-panel">
            <div class="flex flex-col space-y-8">
                <!-- Drawer Header -->
                <div class="flex items-center justify-between pb-6 border-b border-white/10">
                    <a href="<?php echo $basePath; ?>index.php" class="flex items-center gap-2 group">
                        <img src="<?php echo $basePath; ?>images/logo.png" alt="Green Ceylon" class="h-8 w-auto object-contain">
                        <div class="flex flex-col">
                            <span class="font-heading font-black text-sm leading-tight tracking-tight text-white group-hover:text-brand-gold transition-colors">
                                Green Ceylon
                            </span>
                            <span class="text-[9px] tracking-widest uppercase font-bold text-brand-gold">
                                Travels & Tours
                            </span>
                        </div>
                    </a>
                    <button id="mobile-menu-close" class="p-2 rounded-lg hover:bg-white/10 text-white cursor-pointer" aria-label="Close menu">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>

                <!-- Navigation Links -->
                <nav class="flex flex-col space-y-2">
                    <?php foreach ($navLinks as $link): 
                        if (isset($link['isDropdown']) && $link['isDropdown']):
                            $active = strpos($current_uri, 'rent-a-car') !== false;
                        ?>
                            <div class="flex flex-col space-y-1">
                                <button onclick="toggleMobileDropdown()" class="flex items-center justify-between w-full text-base font-heading font-semibold tracking-wide py-3 px-4 rounded-xl transition-all <?php echo $active ? 'bg-brand-navy border border-white/10 text-white shadow-xs' : 'text-white/80 hover:bg-white/5 hover:text-white'; ?>">
                                    <span class="flex items-center gap-4">
                                        <i data-lucide="<?php echo $link['icon']; ?>" class="w-5 h-5 <?php echo $active ? 'text-white' : 'text-brand-gold'; ?>"></i>
                                        <?php echo $link['name']; ?>
                                    </span>
                                    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-200 <?php echo $active ? 'rotate-180 text-white' : 'text-brand-gold'; ?>" id="mobile-dropdown-arrow"></i>
                                </button>
                                <div class="<?php echo $active ? 'flex' : 'hidden'; ?> flex-col pl-9 space-y-1 border-l border-white/10" id="mobile-rent-dropdown">
                                    <a href="<?php echo $basePath; ?>rent-a-car/" class="block py-2 text-sm font-semibold text-white/70 hover:text-brand-gold">Overview</a>
                                    <a href="<?php echo $basePath; ?>rent-a-car/tourist-hire" class="block py-2 text-sm font-semibold text-white/70 hover:text-brand-gold">Tourist Hire Rental</a>
                                    <a href="<?php echo $basePath; ?>rent-a-car/wedding-car" class="block py-2 text-sm font-semibold text-white/70 hover:text-brand-gold">Wedding Car Rental</a>
                                </div>
                            </div>
                        <?php else:
                            $active = isActive($link['href'], $current_uri);
                        ?>
                            <a href="<?php echo $basePath . $link['href']; ?>" class="flex items-center gap-4 text-base font-heading font-semibold tracking-wide py-3 px-4 rounded-xl transition-all <?php echo $active ? 'bg-brand-gold text-brand-navy shadow-md' : 'text-white/80 hover:bg-white/5 hover:text-white'; ?>">
                                <i data-lucide="<?php echo $link['icon']; ?>" class="w-5 h-5 <?php echo $active ? 'text-brand-navy' : 'text-brand-gold'; ?>"></i>
                                <?php echo $link['name']; ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </nav>
                <script>
                    function toggleMobileDropdown() {
                        const dropdown = document.getElementById('mobile-rent-dropdown');
                        const arrow = document.getElementById('mobile-dropdown-arrow');
                        if (dropdown.classList.contains('hidden')) {
                            dropdown.classList.remove('hidden');
                            dropdown.classList.add('flex');
                            arrow.classList.add('rotate-180');
                        } else {
                            dropdown.classList.remove('flex');
                            dropdown.classList.add('hidden');
                            arrow.classList.remove('rotate-180');
                        }
                    }
                </script>
            </div>

            <!-- Footer Call / CTA -->
            <div class="pt-6 border-t border-white/10 flex flex-col space-y-4">
                <span class="text-xxs font-bold uppercase tracking-widest text-white/40 text-center">Need Assistance?</span>
                <a href="tel:+94719084259" class="block">
                    <button class="w-full bg-brand-gold hover:bg-brand-gold/90 text-brand-navy border border-transparent shadow-md transition-all hover:shadow-lg active:scale-95 disabled:pointer-events-none px-6 py-3.5 rounded-xl cursor-pointer flex items-center justify-center gap-2 font-bold text-base">
                        <i data-lucide="phone-call" class="w-5 h-5"></i>
                        071 908 4259
                    </button>
                </a>
            </div>
        </div>
    </div>
