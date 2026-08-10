<?php
$basePath = '../';
$pageTitle = "Wedding Car Rental Sri Lanka | Luxury & Vintage Wedding Cars";
$pageDesc = "Make your special day unforgettable with premium wedding car rentals in Sri Lanka. Choose decorated executive cars, limousines, or vintage vehicles with professional chauffeurs.";
include $basePath . 'includes/header.php';

// Load wedding cars data (uses luxury cars fleet)
$weddingCars = include __DIR__ . '/data/luxury-cars.php';
?>

<!-- Hero / Intro Section -->
<?php 
$title = "Wedding Car Rental";
$subtitle = "Arrive in Elegance on Your Big Day";
$introText = "Premium decorated executive vehicles and limousines for weddings, VIP arrivals, and special celebrations.";
$bgImage = "images/18.jpg";
$accentColorClass = "text-brand-gold";
include __DIR__ . '/partials/service-intro.php'; 
?>

<!-- Wedding Service Details -->
<section class="bg-brand-cream py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Vehicle Grid -->
        <h3 class="text-2xl font-heading font-black text-brand-navy mb-8 text-left">Our Wedding Fleet</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <?php 
            foreach ($weddingCars as $card) {
                $cardType = 'luxury';
                include __DIR__ . '/partials/vehicle-card.php';
            }
            ?>
        </div>

        <!-- Final CTA -->
        <div class="bg-gradient-to-r from-brand-navy to-brand-navy/95 p-8 md:p-12 rounded-3xl text-center text-white space-y-6">
            <h3 class="text-2xl md:text-3xl font-heading font-black">Reserve Your Dream Wedding Car</h3>
            <p class="text-white/80 text-sm max-w-xl mx-auto">
                Contact our wedding team to discuss your schedule, vehicle decoration preferences, and get a tailored quote.
            </p>
            <a href="<?php echo $basePath; ?>contact.php?service=wedding-car" class="inline-block">
                <button class="bg-brand-gold hover:bg-brand-gold/90 text-brand-navy font-bold px-8 py-4 rounded-xl text-sm transition-all hover:scale-105 active:scale-95 cursor-pointer flex items-center gap-2">
                    <i data-lucide="heart" class="w-4 h-4"></i>
                    Enquire for Your Wedding Date
                </button>
            </a>
        </div>

    </div>
</section>

<?php include $basePath . 'includes/footer.php'; ?>
