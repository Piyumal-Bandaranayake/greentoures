<?php
$basePath = '../';
$pageTitle = "Rent a Car Services in Sri Lanka | Green Ceylon Travels";
$pageDesc = "Explore our specialized transport solutions in Sri Lanka: luxury Wedding Car Rentals, reliable Airport Transfers & Transfers, and premium Tourist self-drive or chauffeured vehicle hires.";
include $basePath . 'includes/header.php';
?>

<!-- Page Header -->
<div class="relative pt-32 pb-20 bg-brand-navy bg-cover bg-center text-center text-white rent-car-header-bg">
    <div class="max-w-4xl mx-auto px-4 animate-fade-in">
        <span class="text-brand-gold font-script text-3xl mb-2 block">
            Your Premium Island Ride
        </span>
        <h1 class="text-4xl md:text-5xl font-heading font-black">
            Rent a Car in Sri Lanka
        </h1>
        <p class="mt-4 text-white/80 text-sm md:text-base max-w-xl mx-auto">
            Choose from our tailored transport sub-services designed to fit every occasion, transfer, or tour perfectly.
        </p>
    </div>
</div>

<main class="bg-brand-cream py-20 flex-grow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Two Service Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20 max-w-5xl mx-auto">
            
            <!-- Tourist Hire Rental -->
            <div class="bg-white rounded-3xl overflow-hidden border border-brand-navy/5 shadow-md hover:shadow-lg transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="relative h-60 w-full bg-brand-navy/5 overflow-hidden">
                        <img src="<?php echo $basePath; ?>images/41.jpeg" alt="Tourist Hire Rental" class="object-cover object-center w-full h-full group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 w-10 h-10 rounded-xl bg-brand-green/90 text-white flex items-center justify-center shadow-md backdrop-blur-xs">
                            <i data-lucide="compass" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-heading font-black text-brand-navy mb-3">Tourist Hire Rental</h3>
                        <p class="text-brand-navy/70 text-sm leading-relaxed">
                            Rent cars, SUVs, and luxury vans for multi-day touring. Available in self-drive or chauffeured options with dynamic mileage plans.
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="<?php echo $basePath; ?>rent-a-car/tourist-hire" class="block w-full">
                        <button class="w-full bg-brand-green-deep hover:bg-brand-green text-white font-bold py-3.5 rounded-xl text-sm transition-all active:scale-98 cursor-pointer flex items-center justify-center gap-2">
                            View Options <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </a>
                </div>
            </div>

            <!-- Wedding Car Rental -->
            <div class="bg-white rounded-3xl overflow-hidden border border-brand-navy/5 shadow-md hover:shadow-lg transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="relative h-60 w-full bg-brand-navy/5 overflow-hidden">
                        <img src="<?php echo $basePath; ?>images/32.jpeg" alt="Wedding Car Rental" class="object-cover object-center w-full h-full group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 w-10 h-10 rounded-xl bg-brand-gold/90 text-brand-navy flex items-center justify-center shadow-md backdrop-blur-xs">
                            <i data-lucide="heart" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-heading font-black text-brand-navy mb-3">Wedding Car Rental</h3>
                        <p class="text-brand-navy/70 text-sm leading-relaxed">
                            Arrive in grand style on your special day. Premium decorated executive vehicles and limousines driven by professional chauffeurs.
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="<?php echo $basePath; ?>rent-a-car/wedding-car" class="block w-full">
                        <button class="w-full bg-brand-gold hover:bg-brand-gold/90 text-brand-navy font-bold py-3.5 rounded-xl text-sm transition-all active:scale-98 cursor-pointer flex items-center justify-center gap-2">
                            View Options <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </a>
                </div>
            </div>

        </div>

        <!-- Trust Section -->
        <div class="border-t border-brand-navy/10 pt-16">
            <div class="text-center mb-12">
                <span class="text-xs font-bold uppercase tracking-widest text-brand-green-deep">Our Guarantee</span>
                <h2 class="text-3xl font-heading font-black text-brand-navy mt-2">Why Ride with Green Ceylon?</h2>
                <p class="mt-4 text-brand-navy/70 text-sm max-w-2xl mx-auto">We focus on comfort, transparency, and safety to deliver the best travel experience in Sri Lanka.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-2xl border border-brand-navy/5 text-center shadow-xs">
                    <div class="w-12 h-12 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="shield" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-heading font-extrabold text-brand-navy mb-2">Verified Drivers</h4>
                    <p class="text-brand-navy/70 text-xs leading-relaxed">
                        Every driver undergoes strict background verification and formal customer hospitality training.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-brand-navy/5 text-center shadow-xs">
                    <div class="w-12 h-12 rounded-full bg-brand-gold/10 text-brand-gold flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="clock" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-heading font-extrabold text-brand-navy mb-2">24/7 Roadside Support</h4>
                    <p class="text-brand-navy/70 text-xs leading-relaxed">
                        Round-the-clock roadside backups and dispatch tracking protect you throughout your journey.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-brand-navy/5 text-center shadow-xs">
                    <div class="w-12 h-12 rounded-full bg-brand-pink/10 text-brand-pink flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="credit-card" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-heading font-extrabold text-brand-navy mb-2">Fixed Transparent Pricing</h4>
                    <p class="text-brand-navy/70 text-xs leading-relaxed">
                        No hidden fees. Flat rates cover highway tolls, driver expenses, and fuel so you travel stress-free.
                    </p>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include $basePath . 'includes/footer.php'; ?>
