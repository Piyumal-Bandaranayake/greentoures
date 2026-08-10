<?php
// Reusable Vehicle Card Component
// Expected inputs:
// - $card: Associative array of vehicle/route details
// - $cardType: 'tourist' | 'luxury' | 'airport'
// - $basePath: path prefix (e.g. '../')

$type = isset($cardType) ? $cardType : 'tourist';
$prefix = isset($basePath) ? $basePath : './';
?>

<div class="bg-white rounded-3xl overflow-hidden border border-brand-navy/5 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between h-full">
    <div>
        <!-- Image Block (or Route Icon Block for Airport) -->
        <?php if ($type !== 'airport'): ?>
            <div class="relative h-64 w-full bg-brand-navy/5 overflow-hidden">
                <img src="<?php echo $prefix . $card['image']; ?>" alt="<?php echo htmlspecialchars($card['name']); ?>" class="object-cover object-center w-full h-full hover:scale-105 transition-transform duration-500">
                <?php if ($type === 'luxury' && isset($card['chauffeur_included']) && $card['chauffeur_included']): ?>
                    <span class="absolute top-4 right-4 bg-brand-gold text-brand-navy text-xxs font-bold uppercase tracking-wider px-3 py-1.5 rounded-lg shadow-sm">
                        Chauffeur Included
                    </span>
                <?php endif; ?>
            </div>

            <!-- Vehicle Details & Specs (Tourist Hire only) -->
            <?php if ($type === 'tourist'): ?>
                <div class="p-6">
                    <div class="flex items-center justify-between gap-2 mb-2">
                        <h3 class="font-heading font-black text-xl text-brand-navy"><?php echo htmlspecialchars($card['name']); ?></h3>
                        <?php if (isset($card['category'])): ?>
                            <span class="text-xxs font-bold uppercase tracking-wider bg-brand-cream text-brand-navy/70 px-2.5 py-1 rounded-md shrink-0">
                                <?php echo htmlspecialchars($card['category']); ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <!-- Specs: Seats, Transmission, Fuel -->
                    <div class="flex flex-wrap items-center gap-2 text-xs text-brand-navy/75 my-3">
                        <?php if (isset($card['seats'])): ?>
                            <span class="flex items-center gap-1 bg-brand-navy/5 px-2.5 py-1 rounded-lg font-medium">
                                <i data-lucide="users" class="w-3.5 h-3.5 text-brand-green-deep"></i>
                                <?php echo $card['seats']; ?> Seats
                            </span>
                        <?php endif; ?>
                        <?php if (isset($card['transmission'])): ?>
                            <span class="flex items-center gap-1 bg-brand-navy/5 px-2.5 py-1 rounded-lg font-medium">
                                <i data-lucide="cog" class="w-3.5 h-3.5 text-brand-green-deep"></i>
                                <?php echo htmlspecialchars($card['transmission']); ?>
                            </span>
                        <?php endif; ?>
                        <?php if (isset($card['fuel'])): ?>
                            <span class="flex items-center gap-1 bg-brand-green-deep/10 text-brand-green-deep font-semibold px-2.5 py-1 rounded-lg">
                                <i data-lucide="fuel" class="w-3.5 h-3.5"></i>
                                <?php echo htmlspecialchars($card['fuel']); ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <!-- Features -->
                    <?php if (isset($card['features']) && is_array($card['features'])): ?>
                        <ul class="space-y-1.5 mt-4 pt-3 border-t border-brand-navy/5">
                            <?php foreach ($card['features'] as $feature): ?>
                                <li class="text-xs text-brand-navy/80 flex items-center gap-2">
                                    <i data-lucide="check" class="w-3.5 h-3.5 text-brand-green-deep shrink-0"></i>
                                    <span><?php echo htmlspecialchars($feature); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <!-- Airport Route representation -->
            <div class="relative h-44 w-full bg-gradient-to-br from-brand-navy to-brand-navy/95 p-6 flex flex-col justify-between text-white">
                <div class="flex justify-between items-start">
                    <div class="w-10 h-10 rounded-lg bg-white/10 text-brand-gold flex items-center justify-center">
                        <i data-lucide="plane-takeoff" class="w-5 h-5"></i>
                    </div>
                    <?php if (isset($card['tour_addon_available']) && $card['tour_addon_available']): ?>
                        <span class="bg-brand-green-deep/90 text-white text-xxs font-bold uppercase tracking-wider px-2.5 py-1 rounded-md">
                            Tour Add-on
                        </span>
                    <?php endif; ?>
                </div>
                <div>
                    <span class="text-xxs text-brand-gold font-bold uppercase tracking-widest block mb-1">Route Drop/Pickup</span>
                    <h3 class="font-heading font-black text-lg md:text-xl leading-snug drop-shadow-sm">
                        <?php echo htmlspecialchars($card['route']); ?>
                    </h3>
                </div>
            </div>
        <?php endif; ?>

        <!-- Content for Airport optional add-on -->
        <?php if ($type === 'airport' && isset($card['tour_addon_available']) && $card['tour_addon_available']): ?>
            <div class="p-6">
                <div class="bg-brand-cream/60 border border-brand-green-deep/10 p-3.5 rounded-xl">
                    <span class="text-xxs text-brand-green-deep font-bold uppercase block mb-1">Optional Stopover Add-on:</span>
                    <p class="text-xxs font-medium text-brand-navy/80 leading-relaxed">
                        <?php echo htmlspecialchars($card['tour_addon_note']); ?>
                    </p>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Pricing and Action Block -->
    <div class="p-6 border-t border-brand-navy/5 flex justify-end items-center mt-auto bg-white">
        <?php 
        $whatsappNumber = "94719084259";
        ?>
        <?php if ($type === 'tourist'): ?>
            <?php 
            $msg = urlencode("Hello! I would like to book the " . (isset($card['name']) ? $card['name'] : 'vehicle') . " for Tourist Hire.");
            $waUrl = "https://wa.me/{$whatsappNumber}?text={$msg}";
            ?>
            <div class="mr-auto">
                <span class="text-xxs text-brand-navy/55 font-bold uppercase block">Daily Rate</span>
                <span class="text-lg font-heading font-extrabold text-brand-green-deep">$<?php echo $card['pricePerDay']; ?></span>
            </div>
            <a href="<?php echo $waUrl; ?>" target="_blank" rel="noopener noreferrer">
                <button class="bg-brand-green-deep hover:bg-brand-green text-white font-bold px-5 py-2.5 text-xs rounded-xl transition cursor-pointer flex items-center gap-1.5">
                    <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
                    Book Now
                </button>
            </a>
        <?php elseif ($type === 'luxury'): ?>
            <?php 
            $msg = urlencode("Hello! I would like to book the " . (isset($card['name']) ? $card['name'] : 'vehicle') . " for a Wedding.");
            $waUrl = "https://wa.me/{$whatsappNumber}?text={$msg}";
            ?>
            <a href="<?php echo $waUrl; ?>" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto">
                <button class="w-full sm:w-auto bg-brand-gold hover:bg-brand-gold/90 text-brand-navy font-bold px-6 py-3 text-sm rounded-xl transition cursor-pointer flex items-center justify-center gap-2">
                    <i data-lucide="message-circle" class="w-4 h-4"></i>
                    Book Now
                </button>
            </a>
        <?php elseif ($type === 'airport'): ?>
            <?php 
            $msg = urlencode("Hello! I would like to book Airport Transfer: " . (isset($card['route']) ? $card['route'] : 'Route'));
            $waUrl = "https://wa.me/{$whatsappNumber}?text={$msg}";
            ?>
            <div class="mr-auto">
                <span class="text-xxs text-brand-navy/55 font-bold uppercase block">Pricing</span>
                <span class="text-sm font-heading font-extrabold text-brand-blue"><?php echo htmlspecialchars($card['price_note']); ?></span>
            </div>
            <a href="<?php echo $waUrl; ?>" target="_blank" rel="noopener noreferrer">
                <button class="bg-brand-blue hover:bg-brand-blue/90 text-white font-bold px-4 py-2.5 text-xs rounded-xl transition cursor-pointer flex items-center gap-1.5">
                    <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
                    Book Transfer
                </button>
            </a>
        <?php endif; ?>
    </div>
</div>
