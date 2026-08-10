<?php
$pageTitle = "Top 10 Sri Lanka Destinations | Green Ceylon Travels & Tours";
$pageDesc = "Discover Sri Lanka's top 10 best travel destinations including Sigiriya, Kandy, Ella, Mirissa, Yala, Galle Fort, Nuwara Eliya, and more with Green Ceylon Travels.";
include_once 'includes/header.php';

$destinations = include 'data/destinations-10.php';
?>

<!-- Hero Section -->
<section class="relative bg-brand-navy text-white pt-32 pb-20 md:pt-40 md:pb-28 overflow-hidden tours-header-bg bg-cover bg-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <span class="inline-block px-4 py-1.5 rounded-full bg-brand-gold/20 text-brand-gold font-semibold text-xs tracking-widest uppercase mb-4 border border-brand-gold/30">
            Wonder of Asia
        </span>
        <h1 class="font-heading text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight mb-4">
            Top 10 Best Destinations in <span class="text-brand-gold">Sri Lanka</span>
        </h1>
        <p class="max-w-2xl mx-auto text-base sm:text-lg text-white/80 font-medium">
            Explore breathtaking rock fortresses, misty hill tea plantations, golden palm-fringed beaches, and thrilling wild leopard safaris across Paradise Island.
        </p>
    </div>
</section>

<!-- Destinations List Grid Section -->
<section class="py-16 md:py-24 bg-brand-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-xs uppercase font-bold tracking-widest text-brand-green-deep mb-2">Must-Visit Places</h2>
            <p class="font-heading text-3xl sm:text-4xl font-bold text-brand-navy">
                Handpicked Sri Lankan Tourist Highlights
            </p>
            <div class="w-16 h-1 bg-brand-gold mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($destinations as $index => $item): ?>
                <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex flex-col group">
                    <!-- Image Wrapper -->
                    <div class="relative h-64 overflow-hidden">
                        <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        
                        <!-- Number Badge -->
                        <span class="absolute top-4 left-4 bg-brand-navy/90 text-brand-gold font-heading font-black text-sm w-9 h-9 rounded-xl flex items-center justify-center border border-white/10 shadow-lg">
                            #<?php echo $index + 1; ?>
                        </span>

                        <!-- Category Badge -->
                        <span class="absolute top-4 right-4 bg-brand-green/90 backdrop-blur-xs text-white text-xs font-semibold px-3 py-1 rounded-full shadow-sm">
                            <?php echo $item['category']; ?>
                        </span>

                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="text-brand-gold text-xs font-bold uppercase tracking-wider block mb-1">
                                <?php echo $item['tag']; ?>
                            </span>
                            <h3 class="font-heading text-xl font-bold text-white drop-shadow-sm leading-snug">
                                <?php echo $item['title']; ?>
                            </h3>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                        <div>
                            <div class="flex items-center text-gray-500 text-xs font-medium mb-3">
                                <i data-lucide="map-pin" class="w-4 h-4 text-brand-green mr-1.5 shrink-0"></i>
                                <?php echo $item['location']; ?>
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed mb-4">
                                <?php echo $item['description']; ?>
                            </p>
                            
                            <!-- Key Highlights -->
                            <div class="pt-3 border-t border-gray-100">
                                <span class="text-xs font-bold uppercase text-brand-navy block mb-2 tracking-wider">Top Highlights:</span>
                                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-1.5">
                                    <?php foreach ($item['highlights'] as $highlight): ?>
                                        <li class="text-xs text-gray-600 flex items-center">
                                            <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-brand-green mr-1.5 shrink-0"></i>
                                            <span class="truncate"><?php echo $highlight; ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- CTA Action -->
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs font-semibold text-gray-500">Custom Tours Available</span>
                            <a href="contact.php?destination=<?php echo urlencode($item['title']); ?>" class="inline-flex items-center gap-1 text-xs font-bold text-brand-green-deep hover:text-brand-navy transition-colors">
                                Book Trip <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Call To Action Section -->
<section class="py-16 bg-brand-navy text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="font-heading text-3xl sm:text-4xl font-extrabold mb-4">
            Ready to Explore Sri Lanka's Top Attractions?
        </h2>
        <p class="max-w-2xl mx-auto text-base text-white/80 mb-8">
            Let Green Ceylon Travels create a tailored itinerary for your dream holiday with private air-conditioned vehicles and experienced drivers.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tours.php" class="bg-brand-gold hover:bg-brand-gold/90 text-brand-navy font-bold px-6 py-3.5 rounded-xl shadow-lg transition-all text-sm">
                View Tour Packages
            </a>
            <a href="contact.php" class="bg-white/10 hover:bg-white/20 text-white font-bold px-6 py-3.5 rounded-xl border border-white/20 transition-all text-sm">
                Plan Custom Itinerary
            </a>
        </div>
    </div>
</section>

<?php include_once 'includes/footer.php'; ?>
