<?php
/**
 * Itinerary Header Partial
 * Variables:
 * - $itinerary: Array containing all itinerary details
 */
?>
<div class="bg-brand-navy text-white pt-32 pb-16 relative">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div>
                <span class="bg-brand-gold text-brand-navy text-xxs font-bold uppercase tracking-widest px-3 py-1 rounded-full shadow-sm mb-3 inline-block">
                    Itinerary Ref: <?php echo htmlspecialchars($itinerary['code']); ?>
                </span>
                <h1 class="text-3xl sm:text-4xl font-heading font-black leading-tight">
                    <?php echo htmlspecialchars($itinerary['title']); ?>
                </h1>
            </div>
            <div class="no-print shrink-0">
                <button onclick="window.print()" class="bg-brand-green-deep hover:bg-brand-green text-white font-bold px-5 py-3 rounded-xl shadow-md transition-all active:scale-95 flex items-center gap-2 cursor-pointer">
                    <i data-lucide="printer" class="w-4 h-4"></i>
                    Print / Save PDF
                </button>
            </div>
        </div>

        <?php if (empty($itinerary['is_public_sample'])): ?>
            <!-- Private Customer Info Bar -->
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 border-t border-white/10 pt-6">
                <?php if (!empty($itinerary['customer_name'])): ?>
                    <div class="flex items-center gap-3 bg-white/5 p-4 rounded-xl border border-white/5">
                        <div class="w-10 h-10 rounded-lg bg-brand-green-deep/20 flex items-center justify-center text-brand-gold">
                            <i data-lucide="user" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <span class="text-xxs text-white/55 uppercase font-bold block">Customer Name</span>
                            <span class="text-sm font-semibold"><?php echo htmlspecialchars($itinerary['customer_name']); ?></span>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (!empty($itinerary['pax'])): ?>
                    <div class="flex items-center gap-3 bg-white/5 p-4 rounded-xl border border-white/5">
                        <div class="w-10 h-10 rounded-lg bg-brand-blue/20 flex items-center justify-center text-brand-blue">
                            <i data-lucide="users" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <span class="text-xxs text-white/55 uppercase font-bold block">Travelers (PAX)</span>
                            <span class="text-sm font-semibold"><?php echo htmlspecialchars($itinerary['pax']); ?> Passengers</span>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (!empty($itinerary['vehicle_type'])): ?>
                    <div class="flex items-center gap-3 bg-white/5 p-4 rounded-xl border border-white/5">
                        <div class="w-10 h-10 rounded-lg bg-brand-gold/20 flex items-center justify-center text-brand-gold">
                            <i data-lucide="car" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <span class="text-xxs text-white/55 uppercase font-bold block">Vehicle Assigned</span>
                            <span class="text-sm font-semibold">Private <?php echo htmlspecialchars($itinerary['vehicle_type']); ?></span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
