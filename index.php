<?php
$pageTitle = "Green Ceylon Travels and Tours | Sri Lanka Travel Agency";
include 'includes/header.php';

// Import PHP mock data
$tours = include 'data/tours.php';
$vehicles = include 'data/vehicles.php';
$testimonials = include 'data/testimonials.php';
$destinations = include 'data/destinations.php';

$featuredTours = array_slice($tours, 0, 3);
?>

<!-- 1. Hero Section -->
<div class="relative h-screen w-full flex items-center justify-start overflow-hidden bg-black">
    <style>
        .hero-slide {
            transition: opacity 2s ease-in-out, transform 8s ease-in-out;
        }
        .hero-slide.active {
            opacity: 1;
            transform: scale(1.05);
        }
        .hero-slide:not(.active) {
            opacity: 0;
            transform: scale(1.15);
        }
    </style>
    
    <!-- Background Image Slideshow Overlay -->
    <div class="absolute inset-0 z-0">
        <!-- Slide 1 -->
        <div class="hero-slide active absolute inset-0" style="background-image: url('images/3.jpg'); background-size: cover; background-position: center;"></div>
        <!-- Slide 2 -->
        <div class="hero-slide absolute inset-0" style="background-image: url('images/1.jpg'); background-size: cover; background-position: center;"></div>
        <!-- Slide 3 -->
        <div class="hero-slide absolute inset-0" style="background-image: url('images/2.jpg'); background-size: cover; background-position: center;"></div>
        
        <div class="absolute inset-0 bg-gradient-to-b from-black/45 to-black/80"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll('.hero-slide');
            let currentSlide = 0;
            
            setInterval(() => {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }, 6000);
        });
    </script>

    <!-- Floating Elements (Subtle Animation) -->
    <div class="absolute inset-0 pointer-events-none opacity-20">
        <div class="absolute top-[20%] left-[10%] w-64 h-64 bg-brand-green rounded-full blur-3xl"></div>
        <div class="absolute bottom-[20%] right-[10%] w-80 h-80 bg-brand-gold rounded-full blur-3xl"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
        <div class="max-w-3xl flex flex-col items-start">
            <span class="text-brand-gold font-script text-4xl md:text-5xl mb-4 animate-fade-in">
                Ayubowan! Welcome to Sri Lanka
            </span>
            
            <h1 class="text-4xl sm:text-6xl md:text-7xl font-heading font-black text-white leading-tight tracking-tight drop-shadow-md">
                Explore the Wonders of <span class="text-brand-green-light block sm:inline">Green Ceylon</span>
            </h1>
            
            <p class="mt-6 text-white/85 text-base sm:text-xl font-light leading-relaxed drop-shadow-xs">
                Discover pristine beaches, lush tea highlands, ancient ruins, and exotic wildlife. We offer bespoke tours, premium car rentals, and trusted cab services.
            </p>

            <!-- Dual Call To Actions -->
            <div class="mt-10 flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                <a href="tours.php" class="w-full sm:w-auto">
                    <button class="w-full sm:w-auto bg-brand-gold hover:bg-brand-gold/90 text-brand-navy border border-transparent shadow-xs transition-all hover:shadow-md hover:scale-105 active:scale-95 disabled:pointer-events-none px-6 py-4 rounded-xl cursor-pointer flex items-center justify-center gap-2 group font-bold">
                        <i data-lucide="compass" class="w-5 h-5 group-hover:rotate-45 transition-transform"></i>
                        Explore Tour Packages
                    </button>
                </a>
                <a href="rent-a-car/" class="w-full sm:w-auto">
                    <button class="w-full sm:w-auto bg-transparent border border-white text-white hover:bg-white hover:text-brand-navy shadow-xs transition-all hover:shadow-md active:scale-95 disabled:pointer-events-none px-6 py-4 rounded-xl cursor-pointer flex items-center justify-center gap-2 font-bold">
                        <i data-lucide="car" class="w-5 h-5"></i>
                        Rent a Car / Cab
                    </button>
                </a>
            </div>
        </div>
    </div>

    <!-- Decorative Wave/Bottom Curve -->
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-brand-cream hero-wave-curve"></div>
</div>

<main class="flex-grow">
    <!-- 2. Services Overview -->
    <section class="py-20 bg-brand-cream relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs font-bold uppercase tracking-widest text-brand-green-deep">What We Offer</span>
                <h2 class="text-3xl sm:text-4xl font-heading font-black text-brand-navy mt-2">Our Premium Travel Services</h2>
                <p class="mt-4 text-brand-navy/70 text-sm md:text-base max-w-2xl mx-auto">Whether you want to explore the island, rent a self-drive vehicle, or book a private airport transfer, we have you covered.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Tour packages -->
                <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 shadow-xs transition-all duration-300 hover:shadow-md group flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-brand-green/10 text-brand-green flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <i data-lucide="compass" class="w-8 h-8"></i>
                        </div>
                        <h3 class="text-xl font-heading font-extrabold text-brand-navy mb-3">Bespoke Tour Packages</h3>
                        <p class="text-brand-navy/70 text-sm leading-relaxed mb-6">Experience Sri Lanka's cultural triangle, tea mountains, beaches, and wildlife with our custom guided itineraries.</p>
                    </div>
                    <a href="tours.php" class="inline-flex items-center gap-1.5 text-sm font-bold text-brand-green-deep hover:text-brand-green transition-colors">
                        Browse Tours <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- Rent a Car -->
                <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 shadow-xs transition-all duration-300 hover:shadow-md group flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-brand-green/10 text-brand-green flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <i data-lucide="car" class="w-8 h-8"></i>
                        </div>
                        <h3 class="text-xl font-heading font-extrabold text-brand-navy mb-3">Rent a Car & Custom Hire</h3>
                        <p class="text-brand-navy/70 text-sm leading-relaxed mb-6">Choose from our modern fleet for self-drive touring, or book a luxury chauffeured car for weddings and special events.</p>
                    </div>
                    <a href="rent-a-car/" class="inline-flex items-center gap-1.5 text-sm font-bold text-brand-green-deep hover:text-brand-green transition-colors">
                        Rent a Car <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Featured Tours -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs font-bold uppercase tracking-widest text-brand-green-deep">Handcrafted Expeditions</span>
                <h2 class="text-3xl sm:text-4xl font-heading font-black text-brand-navy mt-2">Popular Tour Packages</h2>
                <p class="mt-4 text-brand-navy/70 text-sm md:text-base max-w-2xl mx-auto">Browse our most requested tours designed to show you the absolute best of Sri Lanka's nature and heritage.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($featuredTours as $tour): ?>
                    <?php include 'partials/tour-card.php'; ?>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-12">
                <a href="tours.php">
                    <button class="bg-transparent hover:bg-brand-navy hover:text-white text-brand-navy border border-brand-navy shadow-xs transition-all active:scale-95 disabled:pointer-events-none px-6 py-4 rounded-xl cursor-pointer font-bold">
                        View All Tour Packages
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. Why Choose Us -->
    <section class="py-20 bg-brand-cream border-y border-brand-green-deep/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs font-bold uppercase tracking-widest text-brand-green-deep">Why Choose Green Ceylon</span>
                <h2 class="text-3xl sm:text-4xl font-heading font-black text-brand-navy mt-2">Your Trusted Island Companions</h2>
                <p class="mt-4 text-brand-navy/70 text-sm md:text-base max-w-2xl mx-auto">We go the extra mile to ensure your journey in Sri Lanka is safe, memorable, and environmentally conscious.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 text-center shadow-xs">
                    <div class="w-12 h-12 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="shield" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-heading font-extrabold text-brand-navy mb-2">Verified Drivers</h4>
                    <p class="text-brand-navy/70 text-sm leading-relaxed">
                        All our chauffeurs and drivers undergo strict background checks and speak English fluently.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 text-center shadow-xs">
                    <div class="w-12 h-12 rounded-full bg-brand-gold/10 text-brand-gold flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="check-circle" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-heading font-extrabold text-brand-navy mb-2">24/7 Road Support</h4>
                    <p class="text-brand-navy/70 text-sm leading-relaxed">
                        No matter where you travel on the island, our customer care and roadside backup are available 24/7.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 text-center shadow-xs">
                    <div class="w-12 h-12 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="compass" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-heading font-extrabold text-brand-navy mb-2">Local Expertise</h4>
                    <p class="text-brand-navy/70 text-sm leading-relaxed">
                        Our tour planners are locals who know the hidden gems, scenic detours, and best seasons.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-brand-navy/5 text-center shadow-xs">
                    <div class="w-12 h-12 rounded-full bg-brand-pink/10 text-brand-pink flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="heart" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-heading font-extrabold text-brand-navy mb-2">Eco-Friendly Travels</h4>
                    <p class="text-brand-navy/70 text-sm leading-relaxed">
                        We offset carbon emissions and support sustainable local community tourism in Sri Lanka.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Destination Highlights -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs font-bold uppercase tracking-widest text-brand-green-deep">Breathtaking Vistas</span>
                <h2 class="text-3xl sm:text-4xl font-heading font-black text-brand-navy mt-2">Sri Lanka Highlights</h2>
                <p class="mt-4 text-brand-navy/70 text-sm md:text-base max-w-2xl mx-auto">From the ancient rock of Sigiriya to the golden beaches of Mirissa, experience these beautiful destinations.</p>
            </div>
            
            <style>
                @keyframes marquee-rtl {
                    0% { transform: translateX(0); }
                    100% { transform: translateX(-50%); }
                }
                .animate-marquee-rtl {
                    display: flex;
                    width: max-content;
                    animation: marquee-rtl 25s linear infinite;
                }
                .animate-marquee-rtl:hover {
                    animation-play-state: paused;
                }
            </style>

            <div class="relative w-full overflow-hidden py-4">
                
                <div class="animate-marquee-rtl gap-6 flex">
                    <?php
                    // Duplicate for seamless infinite loop (needs to be perfectly symmetric)
                    $marquee_items = array_merge($destinations, $destinations, $destinations, $destinations);
                    foreach ($marquee_items as $dest):
                    ?>
                        <div class="relative w-72 sm:w-80 h-80 rounded-2xl overflow-hidden group shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer flex-shrink-0">
                            <!-- Background Image -->
                            <img src="<?php echo $dest['image']; ?>" alt="<?php echo $dest['title']; ?>" class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-500">
                            <!-- Gradients -->
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/90 via-brand-navy/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                            <!-- Content -->
                            <div class="absolute bottom-0 left-0 right-0 p-6 flex flex-col justify-end h-full whitespace-normal">
                                <span class="text-brand-gold text-xs font-semibold uppercase tracking-wider mb-2">
                                    <?php echo $dest['category']; ?>
                                </span>
                                <h4 class="text-xl font-heading font-black text-white leading-tight">
                                    <?php echo $dest['title']; ?>
                                </h4>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>


    <!-- 7. CTA Section -->
    <section class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-brand-green-deep to-brand-green py-12 md:py-16 px-8 md:px-16 shadow-xl border border-brand-green-light/20 my-16 max-w-7xl mx-auto">
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <svg class="absolute -top-10 -right-10 w-96 h-96 text-white" fill="currentColor" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="40" />
            </svg>
            <svg class="absolute -bottom-10 -left-10 w-72 h-72 text-white" fill="currentColor" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="40" />
            </svg>
        </div>
        <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-heading font-black text-white leading-tight">
                    Plan Your Dream Sri Lanka Vacation Today
                </h2>
                <p class="mt-4 text-white/90 text-sm md:text-base font-light leading-relaxed">
                    Contact our destination experts to design a customized itinerary, book your cab transfers, or secure a reliable rental car.
                </p>
            </div>
            <div class="shrink-0 w-full lg:w-auto">
                <a href="contact.php">
                    <button class="w-full lg:w-auto bg-brand-gold hover:bg-brand-gold/90 text-brand-navy shadow-lg px-10 py-4 font-bold text-base rounded-xl cursor-pointer hover:scale-105 transition-transform">
                        Get a Free Quote
                    </button>
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
