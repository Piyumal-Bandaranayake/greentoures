<?php
$basePath = '../';
$pageTitle = "Tourist Car Hire Sri Lanka | Self-Drive & Chauffeur Rental";
$pageDesc = "Hire a car in Sri Lanka for your holiday tours. Modern fleet of sedans, SUVs, and passenger vans available for self-drive or with professional English-speaking drivers.";
include $basePath . 'includes/header.php';

// Load vehicles data
$vehicles = include __DIR__ . '/data/tourist-hire-vehicles.php';
?>

<!-- Hero / Intro Section -->
<?php 
$title = "Tourist Hire Rental";
$subtitle = "Explore Sri Lanka at Your Own Pace";
$introText = "Premium self-drive vehicle hires or professional chauffeur-driven cars, SUVs, and passenger vans for multi-day tours.";
$bgImage = "images/16.jpg"; // Original rent-a-car header image
$accentColorClass = "text-brand-green-light";
include __DIR__ . '/partials/service-intro.php'; 
?>

<!-- Tourist Hire Details -->
<section class="bg-brand-cream py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Vehicle Grid -->
        <h3 class="text-2xl font-heading font-black text-brand-navy mb-8 text-left">Our Vehicles</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <?php 
            foreach ($vehicles as $card) {
                $cardType = 'tourist';
                include __DIR__ . '/partials/vehicle-card.php';
            }
            ?>
        </div>

        <!-- Final CTA -->
        <div class="bg-gradient-to-r from-brand-navy to-brand-navy/95 p-8 md:p-12 rounded-3xl text-center text-white space-y-6">
            <h3 class="text-2xl md:text-3xl font-heading font-black">Ready to Start Your Journey?</h3>
            <p class="text-white/80 text-sm max-w-xl mx-auto">
                Book your ideal vehicle online today. Chauffeur services or self-drive bookings can be custom tailored with any specific mileage requirements.
            </p>
            <a href="<?php echo $basePath; ?>contact.php?service=tourist-hire" class="inline-block">
                <button class="bg-brand-green-deep hover:bg-brand-green text-white font-bold px-8 py-4 rounded-xl text-sm transition-all hover:scale-105 active:scale-95 cursor-pointer flex items-center gap-2">
                    <i data-lucide="car" class="w-4 h-4"></i>
                    Book Now
                </button>
            </a>
        </div>

    </div>
</section>

<?php include $basePath . 'includes/footer.php'; ?>
